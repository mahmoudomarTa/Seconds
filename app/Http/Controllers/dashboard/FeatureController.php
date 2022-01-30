<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Helpers;
use App\Models\general\Language;
use App\Models\landing_page\Feature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FeatureController extends Controller
{
    public function index($local)
    {
        if (Helpers::can('features')) {
            app()->setLocale($local);
            $features = Feature::all();
            return view('admin.dashboard.feature.index')->with(compact('features'));
        } else {
            app()->setLocale($local);
            return view('admin.dashboard.no_permission');
        }
    }

    function create($local)
    {
        app()->setLocale($local);
        return view('admin.dashboard.feature.create');
    }

    function store(Request $request)
    {

        $roles = [
            'image' => 'required|image|mimes:jpeg,jpg,png',
        ];
        $locales = Language::all()->pluck('lang');
        foreach ($locales as $locale) {
            $roles['title_' . $locale] = 'required';
            $roles['description_' . $locale] = 'required';
        }
        $this->validate($request, $roles);
        $feature = new Feature();
        foreach ($locales as $locale) {
            $feature->translateOrNew($locale)->title = $request->get('title_' . $locale);
            $feature->translateOrNew($locale)->description = $request->get('description_' . $locale);
        }
        $image = $request->file('image');
        $image_name = time() + rand(1, 1000000) . '.' . $image->getClientOriginalName();
        $image->move(public_path('/dashboard/images/'), $image_name);
        $feature->image = $image_name;
        $feature->save();

        return redirect()->back();//->with('state',$state);
//        return view('admin.dashboard.home');
    }


    function edit($local, $id)
    {
        app()->setLocale($local);
        $feature = Feature::where('id', $id)->first();
        return view('admin.dashboard.feature.edit')->with('feature', $feature);
    }

    function update(Request $request, $id)
    {
        $roles = [
            'image' => 'required|image|mimes:jpeg,jpg,png',
        ];
        $locales = Language::all()->pluck('lang');
        foreach ($locales as $locale) {
            $roles['title_' . $locale] = 'required';
            $roles['description_' . $locale] = 'required';
        }
        $this->validate($request, $roles);
        $feature = Feature::query()->findOrFail($id);

        foreach ($locales as $locale) {
            $feature->translateOrNew($locale)->title = $request->get('title_' . $locale);
            $feature->translateOrNew($locale)->description = $request->get('description_' . $locale);
        }
        $image = $request->file('image');
        $image_name = time() + rand(1, 1000000) . '.' . $image->getClientOriginalName();
        $image->move(public_path('/dashboard/images/'), $image_name);
        $feature->image = $image_name;
        $feature->save();

        return redirect()->back();
    }

    function destroy($id)
    {
        $state = Feature::where('id', $id)->delete();
        return redirect()->back()->with('state', $state);
    }


}
