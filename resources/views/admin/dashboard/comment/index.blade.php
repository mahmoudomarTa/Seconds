@extends('layouts.admin_layout')

@section('page_container')

            <div class="page-head">
                <div class="page-title">
                    <h1>{{__('cp.all_comments')}}
                    </h1>
                </div>
            </div>
            <div>

                <a style="margin-top: 25px;margin-bottom: 25px" href="{{url('comment/create/'.app()->getLocale())}}">
                    <button id="sample_editable_1_new" class="btn sbold green">{{__('cp.add_comment')}}
                        <i class="fa fa-plus"></i>
                    </button>
                </a>


                <div class="portlet-body">
                    <div class="table-scrollable">
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>

                                <th>{{__('cp.comment_text')}}</th>
                                <th>{{__('cp.user_name')}}</th>
                                <th>{{__('cp.rating')}}</th>
                                <th>{{__('cp.image')}}</th>
                                <th>{{__('cp.delete')}}</th>
                                <th>{{__('cp.edit')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($comments as $comment)
                                <tr>

                                    <td> {{$comment->comment_text}} </td>
                                    <td> {{$comment->user_name}} </td>
                                    <td> {{$comment->rating}} </td>
                                    <td>
                                        <figure >
                                            <img style="width: 40px;height: 40px"src="{{$comment->image}}"  alt="user image" />
                                        </figure>
                                    </td>
                                    <td style="padding-top: 20px">

                                        <a style="
                                        background: #ff0000;
                                        color: white;
                                        padding: 10px;
                                        margin-top: 10px;
                                        border-radius: 10px;
                                        text-align: center;" href="{{url('comment/delete/'.$comment->id)}}">delete</a>

                                    </td>
                                    <td style="padding-top: 20px" >
                                        <a style="
                                        background: #00ff9d;
                                        color: white;
                                        padding: 10px;
                                        margin-top: 10px;
                                        border-radius: 10px;
                                        text-align: center;" href="{{url('comment/edit/'.app()->getLocale().'/'.$comment->id)}}">edit</a>

                                    </td>

                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>

            </div>




@endsection
