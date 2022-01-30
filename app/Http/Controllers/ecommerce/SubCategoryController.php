<?php

namespace App\Http\Controllers\ecommerce;

use App\Http\Controllers\Controller;
use App\Models\ecommerce\Category;
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

//        if ($request->has('available') ) {
//            if ($request->get('available') != null)
//            {
//                $products->where('available', $request->get('available'));
//            }
//
//        }

        $subCategories = $subCategories->orderBy('id', 'desc')->get();//paginate(20);
        return view('ecommerce.sub_category.index', [
            'subCategories' => $subCategories,
        ]);

//        $subCategories = SubCategory::where('category_id', $category_id)->get();
//        return view('ecommerce.sub_category.index')->with(compact('category_id', 'subCategories'));
    }

    function create()
    {
        $categories = Category::all();
        return view('ecommerce.sub_category.create')->with(compact('categories'));
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


        $sub = new SubCategory();
        $sub->category_id = $request->category_id;

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

    function edit()
    {

    }

    function update()
    {

    }

    function delete()
    {

    }
}
