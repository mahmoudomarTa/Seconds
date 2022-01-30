@extends('layouts.admin_layout')

@section('page_container')

            <div class="page-head">
                <div class="page-title">
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="index.html">Messages</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span class="active">All Messages</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="portlet-body">
                    <div class="table-scrollable">
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>

                                <th>{{__('cp.user_name')}}</th>
                                <th>{{__('cp.email')}}</th>
                                <th>{{__('cp.message')}}</th>
                                <th>{{__('cp.delete')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($messages as $message)
                                <tr>

                                    <td> {{$message->user_name}} </td>
                                    <td> {{$message->email}} </td>
                                    <td> {{$message->message}} </td>

                                    <td style="padding-top: 20px;padding-bottom: 20px;">

                                        <a style="
                                        background: #ff0000;
                                        color: white;
                                        padding: 10px;
                                        margin-top: 10px;
                                        border-radius: 10px;
                                        text-align: center;" href="{{url('message/delete/'.$message->id)}}">delete</a>

                                    </td>


                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>

            </div>


@endsection
