@extends('layouts.admin_layout')

@section('page_container')

    <div class="page-head">
        <div class="page-title">
            <ul class="page-breadcrumb breadcrumb">
                <li>
                    <a href="index.html">Admins</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span class="active">All Admins</span>
                </li>
            </ul>
        </div>
    </div>
    <div>

        @if(\App\Http\Helpers::can('admins'))
        <a style="margin-top: 25px;margin-bottom: 25px" href="{{url('admin/create/'.app()->getLocale())}}">
            <button id="sample_editable_1_new" class="btn sbold green">{{__('cp.add_admin')}}
                <i class="fa fa-plus"></i>
            </button>
        </a>
        @endif

        <div class="portlet-body">
            <div class="table-scrollable">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr style="background: #eee7e7">

                        <th>{{__('cp.admin_name')}}</th>
                        <th>{{__('cp.admin_email')}}</th>

                        @if(\App\Http\Helpers::can('admins'))
                        <th>{{__('cp.delete')}}</th>
                        <th>{{__('cp.edit')}}</th>
                        @endif
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($admins as $admin)
                        @if($admin->id == \Illuminate\Support\Facades\Auth::guard('admin')->id())
                            @continue
                        @endif

                        <tr>

                            <td> {{$admin->name}} </td>
                            <td> {{$admin->email}} </td>

                            @if(\App\Http\Helpers::can('admins'))
                            <td style="padding-top: 20px">

                                <a style="
                                        background: #ff0000;
                                        color: white;
                                        padding: 10px;
                                        margin-top: 10px;
                                        border-radius: 10px;
                                        text-align: center;" href="{{url('admin/delete/'.$admin->id)}}">delete</a>

                            </td>
                            <td style="padding-top: 20px" >
                                <a style="
                                        background: #00ff9d;
                                        color: white;
                                        padding: 10px;
                                        margin-top: 10px;
                                        border-radius: 10px;
                                        text-align: center;" href="{{url('admin/edit/'.app()->getLocale().'/'.$admin->id)}}">edit</a>

                            </td>
                            @endif
                        </tr>
                    @endforeach


                    </tbody>
                </table>
            </div>
        </div>

    </div>


<script>
    function myFunction() {
        var x = document.getElementById("admin_password_{{$admin->id}}");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

</script>

@endsection
