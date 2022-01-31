<?php

namespace App\Http\Controllers\ecommerce;

use App\Http\Controllers\Controller;
use App\Models\ecommerce\Category;
use App\Models\ecommerce\Product;
use App\Models\ecommerce\ProductImage;
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
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'status' => 'required',
            'price' => 'required|numeric|min:0',
            // 'name'     => 'required',

        ];
        $locales = Language::all()->pluck('lang');
        foreach ($locales as $locale) {
            $roles['name_' . $locale] = 'required|min:5';
            $roles['description_' . $locale] = 'required|min:10';
        }
        $this->validate($request, $roles);


        $product = new Product();
        $product->price = $request->get('price');
        $product->category_id=$request->get('category_id');
        $product->sub_category_id=$request->get('sub_category_id');
        $product->status=$request->get('status');

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
        return redirect()->back();

    }


    function edit($id){
        $product = Product::where('id', $id)->first();
        return view('ecommerce.product.edit')->with(compact('product'));

    }
    function update(Request $request, $id){
        $roles = [
            'logo' => 'required|image|mimes:jpeg,jpg,png',
       //     'image' => 'required|image|mimes:jpeg,jpg,png',
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'status' => 'required',
            // 'name'     => 'required',

        ];
        $locales = Language::all()->pluck('lang');
        foreach ($locales as $locale) {
            $roles['name_' . $locale] = 'required|min:5';
            $roles['description_' . $locale] = 'required|min:10';
        }
        $this->validate($request, $roles);


        $product = Product::query()->findOrFail($id);
        $product->category_id = $request->get('category_id');
        $product->sub_category_id = $request->get('sub_category_id');
        $product->status = $request->get('status');

        foreach ($locales as $locale) {
            $product->translateOrNew($locale)->name = $request->get('name_' . $locale);
            $product->translateOrNew($locale)->description = $request->get('description_' . $locale);
        }

        if ($request['logo'] != null) {
            $image = $request->file('logo');
            $image_name = time() + rand(1, 1000000) . '.' . $image->getClientOriginalName();
            $image->move(public_path('/uploads/images/products/'), $image_name);
            $product->image = $image_name;
        }

        $product->save();


        $imgsIds = $product->attachments->pluck('id')->toArray();
        $newImgsIds = ($request->has('oldImages'))? $request->oldImages:[];
        $diff = array_diff($imgsIds,$newImgsIds);
        ProductImage::whereIn('id',$diff)->delete();

        if($request->has('filename')  && !empty($request->filename)){
            foreach($request->filename as $one)
            {
                if (isset(explode('/', explode(';', explode(',', $one)[0])[0])[1])) {
                    $fileType = strtolower(explode('/', explode(';', explode(',', $one)[0])[0])[1]);
                    $name = auth()->guard('admin')->user()->id. "_" .str_random(8) . "_" .  "_" . time() . "_" . rand(1000000, 9999999);
                    $attachType = 0;
                    if (in_array($fileType, ['jpg','jpeg','png','pmb'])){
                        $newName = $name. ".jpg";
                        $attachType = 1;
//                      Image::make($one)->resize(800, null, function ($constraint) {$constraint->aspectRatio();})->save("uploads/images/products/$newName");
                        $image->move(public_path('/uploads/images/products/'), $image);

                    }
                    $product_image=new ProductImage();
                    $product_image->product_id = $product->id;
                    $product_image->product_img = $newName;
                    $product_image->save();
                }
            }
        }


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
