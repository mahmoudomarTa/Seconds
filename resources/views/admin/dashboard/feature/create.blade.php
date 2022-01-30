@extends('layouts.admin_layout')

@section('page_container')
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-title">
                <div class="caption">
                    <span class="caption-subject font-red sbold uppercase">{{__('cp.add_new_feature')}}</span>
                </div>
            </div>
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form action="{{url('feature/store')}}" method="post" class="form-horizontal" novalidate="novalidate"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">



                        <fieldset>
                            @foreach($locales as $locale)
                                <div class="form-group">
                                    <label class="control-label col-md-3 for="title_{{$locale->lang}}">
                                    {{Lang::get('cp.title').$locale->lang}}
                                    <span class="required" aria-required="true">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="title_{{$locale->lang}}" data-required="1"
                                               id="title_{{$locale->lang}}"
                                               required>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        </fieldset>

                        <fieldset>
                            @foreach($locales as $locale)
                                <div class="form-group">
                                    <label class="control-label col-md-3 for="title_{{$locale->lang}}">
                                    {{__('cp.description').$locale->lang}}

                                    <span class="required" aria-required="true">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="description_{{$locale->lang}}" data-required="1"
                                                id="description_{{$locale->lang}}"
                                               required>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        </fieldset>


                    </div>



                    <div style="width: 102%;">
                        <label class="control-label col-md-3" >
                            {{Lang::get('cp.image')}}
                        </label>

                        <div class="">
                            <div class="fileinput fileinput-new" data-provides="fileinput" >
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                </div>
                                <div>
                                                            <span class="btn red btn-outline btn-file">
                                                                <span class="fileinput-new">{{__('cp.select_image')}}</span>
                                                                <span class="fileinput-exists">{{__('cp.change')}}</span>
                                                                <input type="file" name="image"> </span>
                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">{{__('cp.remove')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green">Save</button>
                                <a type="button" href="{{url('feature/index')}}"  class="btn grey-salsa btn-outline">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>
        <!-- END VALIDATION STATES-->
    </div>




@stop
