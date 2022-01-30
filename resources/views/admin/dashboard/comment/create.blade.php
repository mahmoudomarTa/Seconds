@extends('layouts.admin_layout')

@section('page_container')

    <div class="col-md-12">
    <!-- BEGIN VALIDATION STATES-->
    <div class="portlet light portlet-fit portlet-form bordered">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-red sbold uppercase">{{__('cp.add_new_comment')}}</span>
            </div>
        </div>
        <div class="portlet-body">
            <!-- BEGIN FORM-->
            <form action="{{url('comment/store')}}" method="post" class="form-horizontal" novalidate="novalidate"  enctype="multipart/form-data">
                @csrf
                <div class="form-body">
                    <div class="alert alert-danger display-hide">
                        <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                    <div class="alert alert-success display-hide">
                        <button class="close" data-close="alert"></button> Your form validation is successful! </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">
                            {{Lang::get('cp.user_name')}}
                            <span class="required" aria-required="true"> * </span>
                        </label>
                        <div class="col-md-9">
                            <input type="text" name="user_name" data-required="1" class="form-control"> </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">
                            {{Lang::get('cp.comment_text')}}
                            <span class="required" aria-required="true"> * </span>
                        </label>
                        <div class="col-md-9">
                            <input name="comment_text" type="text" class="form-control"> </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">
                            {{Lang::get('cp.rating')}}
                            <span class="required" aria-required="true"> * </span>
                        </label>
                        <div class="col-md-9">
                            <select class="form-control" name="rating">
                                <option value="">
                                    {{Lang::get('cp.select')}}
                                </option>
                                @for($i=1;$i<=5;$i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                        </div>
                    </div>

                    <div class="form-group " style="width: 102%;">
                        <label class="control-label col-md-3" >
                            {{Lang::get('cp.image')}}

                        </label>
                        <div class="col-md-9">
                            <div class="fileinput fileinput-new" data-provides="fileinput" >
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"> </div>
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
                    </div>


                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn green">
                                {{Lang::get('cp.save')}}
                            </button>
                            <a type="button" href="{{url('comment/index')}}"  class="btn grey-salsa btn-outline">
                                {{Lang::get('cp.cancel')}}
                            </a>
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
