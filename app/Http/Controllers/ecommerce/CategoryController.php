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
             'status'     => 'required',
            // 'name'     => 'required',
        ];
        $locales = Language::all()->pluck('lang');
        foreach ($locales as $locale) {
            $roles['name_' . $locale] = 'required|min:5';
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
        $status = $cat->save();
        if ($status) {
            return redirect()->back()->with('success', __('cp.created_successfully'));
        } else {
            return redirect()->back()->with('error', __('cp.something_wrong'));
        }
    }

    function edit($id)
    {
        $category = Category::where('id', $id)->first();
        return view('ecommerce.category.edit')->with('category', $category);
    }

    public function update(Request $request, $id)
    {
        $roles = [
            'image' => 'image|mimes:jpeg,jpg,png',
            'status'     => 'required',

        ];
        $locales = Language::all()->pluck('lang');
        foreach ($locales as $locale) {
            $roles['name_' . $locale] = 'required|min:5';
        }
        $this->validate($request, $roles);
        $cat = Category::query()->findOrFail($id);
        foreach ($locales as $locale) {
            $cat->translateOrNew($locale)->name = $request->get('name_' . $locale);
        }
        if ($request['image'] != null) {
            $image = $request->file('image');
            $image_name = time() + rand(1, 1000000) . '.' . $image->getClientOriginalName();
            $image->move(public_path('/uploads/images/category/'), $image_name);
            $cat->image = $image_name;
        }
        $cat->save();
        $status = $cat->save();
        if ($status) {
            return redirect()->back()->with('success', __('cp.updated_successfully'));
        }
        return redirect()->back()->with('error', __('cp.something_wrong'));

    }

    function destroy($id)
    {
        $item = Category::query()->findOrFail($id);
        if ($item) {
            $status = Category::query()->where('id', $id)->delete();
            if ($status)
            return redirect()->back()->with('success', __('cp.deleted_successfully'));
        }
        return redirect()->back()->with('error', __('cp.something_wrong'));
    }


}
