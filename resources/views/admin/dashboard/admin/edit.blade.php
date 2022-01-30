@extends('layouts.admin_layout')

@section('page_container')

    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-title">
                <div class="caption">
{{--                    <span class="caption-subject font-red sbold uppercase">{{__('cp.add_new_comment')}}</span>--}}
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="index.html">Admins</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span class="active">Edit Admin</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="portlet-body">


                <form class="login-form" method="POST" action="{{url('admin/update/'.$admin->id)}}">

                    @csrf
                    <div class="alert alert-danger display-hide">
                        <button class="close" data-close="alert"></button>
                    </div>
                    <div class="form-group">
                        <label class="control-label visible-ie8 visible-ie9">{{ __('cp.admin_name') }}</label>
                        <div class="input-icon">
                            <i class="fa fa-user"></i>
                            <input class="form-control placeholder-no-fix" type="text" autocomplete="off" name="name"
                                   value="{{ $admin->name }}"/></div>
                    </div>

                    <div class="form-group">
                        <label class="control-label visible-ie8 visible-ie9">{{ __('cp.email') }}</label>
                        <div class="input-icon">
                            <i class="fa fa-user"></i>
                            <input class="form-control placeholder-no-fix" type="text" autocomplete="off"
                                   value="{{ $admin->email }}" name="email"/></div>
                    </div>

                    <div class="form-group">
                        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                        <label class="control-label visible-ie8 visible-ie9">{{ __('cp.password') }}</label>
                        <div class="input-icon">
                            <i class="fa fa-user"></i>
                            <input class="form-control placeholder-no-fix" type="password" autocomplete="off"
                                   placeholder="new password" name="password"/></div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Permissions
                            <span class="required" aria-required="true"> * </span>
                        </label>
                        <div class="col-md-9">
                            <select class="form-control select2" name="permissions[]" id="permissions" multiple="multiple">
                                @foreach($permissions as $permission)
                                    <option value="{{$permission->role_slug}}"
                                            @if(in_array($permission->role_slug,$adminPermissions)) selected @endif
                                    >{{$permission->role_slug}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary"> {{ __('cp.add_now') }} </button>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>
        <!-- END VALIDATION STATES-->
    </div>

@endsection
