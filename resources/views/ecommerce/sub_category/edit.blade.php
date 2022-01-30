@extends('layouts.admin_layout')
@section('title') {{__('cp.categories')}}
@endsection
@section('css')
@endsection

@section('page_container')


    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject font-dark sbold uppercase"
                              style="color: #e02222 !important;">{{__('cp.editSubCategory')}}</span>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form method="post" action="{{url('admin/sub-categories/'.$subCategory->id.'/update')}}"
                          enctype="multipart/form-data" class="form-horizontal" role="form" id="form_city">
                        {{ csrf_field() }}

                        <div class="form-body">
                            <fieldset>
                                @foreach($locales as $locale)
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="title_{{$locale->lang}}">
                                            {{__('cp.name_'.$locale->lang)}}
                                            <span class="symbol">*</span>
                                        </label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="name_{{$locale->lang}}"

                                                   id="name_{{$locale->lang}}"
                                                   value="{{$subCategory->translate($locale->lang)->name}}" required>
                                        </div>
                                    </div>

                                @endforeach
                            </fieldset>

                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label class="col-md-3 control-label">{{__('cp.category')}}</label>
                                    <div class="col-md-9">
                                        <select id="multiple2" class="form-control" name="category_id">
                                            <option value="">{{__('cp.all')}}</option>

                                            @foreach(\App\Models\ecommerce\Category::get() as $category)
                                                <option value="{{$category->id}}" {{($subCategory->category_id == $category->id) ? 'selected' : ''}}>
                                                    {{$category->name}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label class="col-md-3 control-label">{{__('cp.status')}}</label>
                                    <div class="col-md-9">
                                        <select id="multiple2" class="form-control" name="status">
                                            <option value="active" {{$subCategory->status == 'active' ? 'selected' : ''}}>{{__('cp.active')}}</option>
                                            <option value="not_active" {{$subCategory->status == 'not_active' ? 'selected' : ''}}>{{__('cp.not_active')}}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <br>

                            <fieldset>
                                <legend>{{__('cp.logo')}}</legend>
                                <div class="col-md-9">
                                    <div class="fileinput fileinput-new" data-provides="fileinput" >
                                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                            <img src="{{$subCategory->image}}">
                                        </div>
                                        <div>
                                                            <span class="btn red btn-outline btn-file">
                                                                <span class="fileinput-new">
                                                                {{Lang::get('cp.select_image')}}
                                                                </span>
                                                                <span class="fileinput-exists">
                                                                {{Lang::get('cp.change')}}
                                                                </span>
                                                                <input type="file" name="image"> </span>
                                            <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">
                                                {{Lang::get('cp.remove')}}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>




                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn green">{{__('cp.edit')}}</button>
                                        <a href="{{url('admin/sub-categories')}}" class="btn default">{{__('cp.cancel')}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

