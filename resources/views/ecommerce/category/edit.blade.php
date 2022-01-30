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
                              style="color: #e02222 !important;">{{__('cp.editCategory')}}</span>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form method="post" action="{{url('admin/categories/'.$category->id.'/update')}}"
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
                                                   value="{{ $category->translate($locale->lang)->name }}" required>
                                        </div>
                                    </div>

                                @endforeach
                            </fieldset>


                            <fieldset>
                                <legend>{{__('cp.logo')}}</legend>
                                <div class="col-md-9">
                                    <div class="fileinput fileinput-new" data-provides="fileinput" >
                                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                        <img src="{{$category->image}}">
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
                                        <button type="submit" class="btn green">{{__('cp.add')}}</button>
                                        <a href="{{url('admin/categories')}}" class="btn default">{{__('cp.cancel')}}</a>
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

