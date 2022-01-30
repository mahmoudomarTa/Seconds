<?php

namespace App\Http\Controllers\ecommerce;

use App\Http\Controllers\Controller;
use App\Models\ecommerce\Category;
use App\Models\ecommerce\Product;
use App\Models\ecommerce\SubCategory;
use App\Models\general\Language;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(Request $request)
    {

        $products = Product::query();

        if ($request->has('category_id')) {

            if ($request->get('category_id') != null) {
                $products = $products->where('category_id', $request->get('category_id'));
            }

        }

        if ($request->has('sub_category_id')) {

            if ($request->get('sub_category_id') != null) {
                $products = $products->where('sub_category_id', $request->get('sub_category_id'));
            }

        }


        if ($request->has('status') ) {
            if ($request->get('status') != null)
            {
                $products->where('status', $request->get('status'));
            }

        }

        $products = $products->orderBy('id', 'desc')->get();//paginate(20);
        return view('ecommerce.product.index', [
            'products' => $products,
        ]);
  }

    function create()
    {
        return view('ecommerce.product.create');//->with(compact('categories','subCategories'));
    }


    function store(Request $request){
        $roles = [
            'image' => 'required|image|mimes:jpeg,jpg,png',
            // 'name'     => 'required',

        ];
        $locales = Language::all()->pluck('lang');
        foreach ($locales as $locale) {
            $roles['name_' . $locale] = 'required';
        }
        $this->validate($request, $roles);


        $product = new Product();
        $product->category_id=$request->get('category_id');
        $product->sub_category_id=$request->get('sub_category_id');
        $product->status=$request->get('status');

        foreach ($locales as $locale) {
            $product->translateOrNew($locale)->name = $request->get('name_' . $locale);
        }

        if ($request['image'] != null) {
            $image = $request->file('image');
            $image_name = time() + rand(1, 1000000) . '.' . $image->getClientOriginalName();
            $image->move(public_path('/uploads/images/products/'), $image_name);
            $product->image = $image_name;
        }
        $product->save();
        return redirect()->back();

    }


    function edit($id){
        $product = Product::where('id', $id)->first();
        return view('ecommerce.product.edit')->with(compact('product'));

    }
    function update(Request $request, $id){
        $roles = [
            'image' => 'required|image|mimes:jpeg,jpg,png',
            // 'name'     => 'required',

        ];
        $locales = Language::all()->pluck('lang');
        foreach ($locales as $locale) {
            $roles['name_' . $locale] = 'required';
        }
        $this->validate($request, $roles);


        $product = Product::query()->findOrFail($id);
        $product->category_id = $request->category_id;
        $product->sub_category_id = $request->sub_category_id;
        $product->status = $request->get('status');

        foreach ($locales as $locale) {
            $product->translateOrNew($locale)->name = $request->get('name_' . $locale);
            $product->translateOrNew($locale)->description = $request->get('description_' . $locale);
        }

        if ($request['image'] != null) {
            $image = $request->file('image');
            $image_name = time() + rand(1, 1000000) . '.' . $image->getClientOriginalName();
            $image->move(public_path('/uploads/images/products/'), $image_name);
            $product->image = $image_name;
        }

        $product->save();

        return redirect()->back()->with('status', __('cp.update'));

    }


    function delete($id){
        $item = Product::query()->findOrFail($id);
        if ($item) {
            Product::query()->where('id', $id)->delete();
            return redirect()->back()->with('success',"success");
        }
        return "fail";
    }
}
