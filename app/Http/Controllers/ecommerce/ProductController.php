<?php

namespace App\Http\Controllers\ecommerce;

use App\Http\Controllers\Controller;
use App\Models\ecommerce\Category;
use App\Models\ecommerce\Product;
use App\Models\ecommerce\ProductImage;
use App\Models\ecommerce\SubCategory;
use App\Models\general\Language;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

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
            'logo' => 'required|image|mimes:jpeg,jpg,png',
            'image' => 'image|mimes:jpeg,jpg,png',
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'status' => 'required',
            'price' => 'required|numeric|min:0',
            'discount' => 'numeric|min:0|max:99',
            'offer_from' => 'required_unless:discount,0',
            'offer_to' => 'required_unless:discount,0|min:'.(int)$request->offer_from ,

//            'offer_from' => 'required_unless:discount,0|date|after:yesterday',
//            'offer_to' => 'required_unless:discount,0|date|after:offer_from|after:offer_from',

        ];

        $locales = Language::all()->pluck('lang');
        foreach ($locales as $locale) {
            $roles['name_' . $locale] = 'required|min:5';
            $roles['description_' . $locale] = 'required|min:10';
        }
        $this->validate($request, $roles);


        $product = new Product();
        $product->price = $request->get('price');
        $product->discount = $request->get('discount');
        $product->offer_from = $request->get('offer_from');
        $product->offer_to = $request->get('offer_to');
        $product->category_id=$request->get('category_id');
        $product->sub_category_id=$request->get('sub_category_id');
        $product->status=$request->get('status');

        foreach ($locales as $locale) {
            $product->translateOrNew($locale)->name = $request->get('name_' . $locale);
            $product->translateOrNew($locale)->description = $request->get('description_' . $locale);

        }

        if ($request['logo'] != null) {
            $image = $request->file('logo');
            $image_name = time() + rand(1, 1000000) . '.' . $image->getClientOriginalName();
            $image->move(public_path('/uploads/images/products/'), $image_name);
            $product->logo = $image_name;
        }

        $status = $product->save();


        if($request->has('filename')  && !empty($request->filename))
        {
            foreach($request->filename as $one)
            {
                if (isset(explode('/', explode(';', explode(',', $one)[0])[0])[1])) {
                    $fileType = strtolower(explode('/', explode(';', explode(',', $one)[0])[0])[1]);
                    $name = "" .str_random(8) . "" .  "" . time() . "" . rand(1000000, 9999999);
                    $attachType = 0;
                    if (in_array($fileType, ['jpg','jpeg','png','pmb'])){
                        $newName = $name. ".jpg";
                        $attachType = 1;
                        Image::make($one)->resize(800, null, function ($constraint) {$constraint->aspectRatio();})->save("uploads/images/products/$newName");
                    }
                    $product_image=new ProductImage();
                    $product_image->product_id = $product->id;
                    $product_image->product_img = $newName;
                    $product_image->save();
                }
            }
        }
        if ($status) {
            return redirect()->back()->with('success', __('cp.updated_successfully'));
        }
        return redirect()->back()->with('error', __('cp.something_wrong'));


    }


    function edit($id){
        $product = Product::where('id', $id)->first();
        return view('ecommerce.product.edit')->with(compact('product'));

    }
    function update(Request $request, $id){
        $roles = [
            'logo' => 'image|mimes:jpeg,jpg,png',
            'image' => 'image|mimes:jpeg,jpg,png',
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'status' => 'required',
            'price' => 'required|numeric|min:0',
            'discount' => 'numeric|min:0|max:99',
            'offer_from' => 'required_unless:discount,0',
            'offer_to' => 'required_unless:discount,0|after:'.(int)$request->offer_from ,
//
//            'offer_from' => 'required_unless:discount,0|date|after:yesterday',
//            'offer_to' => 'required_unless:discount,0|date|after:offer_from|after:yesterday',
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
        if ($request->has('discount')&&$request->has('offer_from')&&$request->has('offer_to')) {
            $product->discount = $request->get('discount');
            $product->offer_from = $request->get('offer_from');
            $product->offer_to = $request->get('offer_to');
        }
        foreach ($locales as $locale) {
            $product->translateOrNew($locale)->name = $request->get('name_' . $locale);
            $product->translateOrNew($locale)->description = $request->get('description_' . $locale);
        }

        if ($request['logo'] != null) {
            $image = $request->file('logo');
            $image_name = time() + rand(1, 1000000) . '.' . $image->getClientOriginalName();
            $image->move(public_path('/uploads/images/products/'), $image_name);
            $product->logo = $image_name;
        }

        $status=$product->save();


        $imgsIds = $product->attachments->pluck('id')->toArray();
        $newImgsIds = ($request->has('oldImages'))? $request->oldImages:[];
        $diff = array_diff($imgsIds,$newImgsIds);
        ProductImage::whereIn('id',$diff)->delete();

        if($request->has('filename')  && !empty($request->filename)){
            foreach($request->filename as $one)
            {
                if (isset(explode('/', explode(';', explode(',', $one)[0])[0])[1])) {
                    $fileType = strtolower(explode('/', explode(';', explode(',', $one)[0])[0])[1]);
                    $name = "" .str_random(8) . "" .  "" . time() . "" . rand(1000000, 9999999);
                    $attachType = 0;
                    if (in_array($fileType, ['jpg','jpeg','png','pmb'])){
                        $newName = $name. ".jpg";
                        $attachType = 1;
                        Image::make($one)->resize(800, null, function ($constraint) {$constraint->aspectRatio();})->save("uploads/images/products/$newName");
                    }
                    $product_image=new ProductImage();
                    $product_image->product_id = $product->id;
                    $product_image->product_img = $newName;
                    $product_image->save();
                }
            }
        }


        if ($status) {
            return redirect()->back()->with('success', __('cp.updated_successfully'));
        }
        return redirect()->back()->with('error', __('cp.something_wrong'));

    }


    function delete($id){
        $item = Product::query()->findOrFail($id);
        if ($item) {
            $status = Product::query()->where('id', $id)->delete();
            if ($status)
                return 'success';
        }
        return'error';
    }


}
