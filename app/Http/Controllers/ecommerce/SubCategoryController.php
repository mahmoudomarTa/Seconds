<?php

namespace App\Http\Controllers\ecommerce;

use App\Http\Controllers\Controller;
use App\Models\ecommerce\SubCategory;
use App\Models\general\Language;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    function index(Request $request)
    {

        $subCategories = SubCategory::query();

        if ($request->has('category_id')) {

            if ($request->get('category_id') != null) {
                $subCategories = $subCategories->where('category_id', $request->get('category_id'));
            }

        }

        if ($request->has('status')) {
            if ($request->get('status') != null) {
                $subCategories->where('status', $request->get('status'));
            }

        }

        $subCategories = $subCategories->orderBy('id', 'desc')->get();//paginate(20);
        return view('ecommerce.sub_category.index', [
            'subCategories' => $subCategories,
        ]);
    }

    function create()
    {
        return view('ecommerce.sub_category.create');//->with(compact('categories'));
    }

    function store(Request $request)
    {

        $roles = [
            'image' => 'required|image|mimes:jpeg,jpg,png',
            'category_id' => 'required',
            'status' => 'required',
            // 'name'     => 'required',

        ];
        $locales = Language::all()->pluck('lang');
        foreach ($locales as $locale) {
            $roles['name_' . $locale] = 'required|min:5';
        }
        $this->validate($request, $roles);


        $sub = new SubCategory();
        $sub->category_id = $request->category_id;
        $sub->status = $request->get('status');

        foreach ($locales as $locale) {
            $sub->translateOrNew($locale)->name = $request->get('name_' . $locale);
        }

        if ($request['image'] != null) {
            $image = $request->file('image');
            $image_name = time() + rand(1, 1000000) . '.' . $image->getClientOriginalName();
            $image->move(public_path('/uploads/images/sub_category/'), $image_name);
            $sub->image = $image_name;
        }


//        $cat->sub_id = 0;

        $sub->save();
        return redirect()->back();


    }

    function edit($id)
    {
        $subCategory = SubCategory::where('id', $id)->first();
        return view('ecommerce.sub_category.edit')->with(compact('subCategory'));
    }

    function update(Request $request, $id)
    {
        $roles = [
            'image' => 'required|image|mimes:jpeg,jpg,png',
            'category_id' => 'required',
            'status' => 'required',
            // 'name'     => 'required',

        ];
        $locales = Language::all()->pluck('lang');
        foreach ($locales as $locale) {
            $roles['name_' . $locale] = 'required|min:5';
        }
        $this->validate($request, $roles);


        $sub = SubCategory::query()->findOrFail($id);
        $sub->category_id = $request->category_id;
        $sub->status = $request->get('status');

        foreach ($locales as $locale) {
            $sub->translateOrNew($locale)->name = $request->get('name_' . $locale);
        }

        if ($request['image'] != null) {
            $image = $request->file('image');
            $image_name = time() + rand(1, 1000000) . '.' . $image->getClientOriginalName();
            $image->move(public_path('/uploads/images/sub_category/'), $image_name);
            $sub->image = $image_name;
        }

        $sub->save();

        return redirect()->back()->with('status', __('cp.update'));
    }


    function destroy($id)
    {
        $item = SubCategory::query()->findOrFail($id);
        if ($item) {
            SubCategory::query()->where('id', $id)->delete();
            return redirect()->back()->with('success',"success");
        }
        return "fail";
    }
}
