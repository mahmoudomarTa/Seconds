<?php

namespace App\Http\Controllers\ecommerce;

use App\Http\Controllers\Controller;
use App\Models\ecommerce\Category;
use App\Models\general\Language;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    function index()
    {
        $categories = Category::all();
        return view('ecommerce.category.index')->with(compact('categories'));
    }

    function create()
    {
        return view('ecommerce.category.create');

    }

    function store(Request $request)
    {

        $roles = [
            'image' => 'required|image|mimes:jpeg,jpg,png',
            // 'name'     => 'required',

        ];
        $locales = Language::all()->pluck('lang');
        foreach ($locales as $locale) {
            $roles['name_' . $locale] = 'required';
        }
        $this->validate($request, $roles);


        $cat = new Category();


        foreach ($locales as $locale) {
            $cat->translateOrNew($locale)->name = $request->get('name_' . $locale);
        }

        if ($request['image'] != null) {
            $image = $request->file('image');
            $image_name = time() + rand(1, 1000000) . '.' . $image->getClientOriginalName();
            $image->move(public_path('/uploads/images/category/'), $image_name);
            $cat->image = $image_name;
        }


//        $cat->sub_id = 0;

        $cat->save();
        return redirect()->back();

    }

    function edit($id)
    {
        $category = Category::where('id',$id)->first();
        return view('ecommerce.category.edit')->with('category',$category);


    }

    public function update(Request $request, $id)
    {

        $roles = [
            'image' => 'image|mimes:jpeg,jpg,png',
        ];
        $locales = Language::all()->pluck('lang');
        foreach ($locales as $locale) {
            $roles['name_' . $locale] = 'required';
        }
        $this->validate($request, $roles);


        $cat = Category::query()->findOrFail($id);

        foreach ($locales as $locale)
        {
            $cat->translateOrNew($locale)->name = $request->get('name_' . $locale);
        }

        if ($request['image'] != null) {
            $image = $request->file('image');
            $image_name = time() + rand(1, 1000000) . '.' . $image->getClientOriginalName();
            $image->move(public_path('/uploads/images/category/'), $image_name);
            $cat->image = $image_name;
        }


        $cat->save();

        return redirect()->back()->with('status', __('cp.update'));

    }

    function destroy($id)
    {
        $item = Category::query()->findOrFail($id);
        if ($item) {
            Category::query()->where('id', $id)->delete();
            return redirect()->back()->with('success',"success");
        }
        return "fail";
    }



}
