@extends('layouts.admin_layout')
@section('title') {{__('cp.categories')}}
@endsection
@section('css')
@endsection

@section('page_container')


    <div class="portlet light bordered">
        <div class="portlet-body">
            <div class="table-toolbar">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="btn-group">
                            <a href="{{url('admin/categories/create')}}" style="margin-right: 5px"
                               class="btn sbold green">{{__('cp.add')}}
                                <i class="fa fa-plus"></i>
                            </a>

                            <button class="btn sbold green event"  href="#activation" role="button"  data-toggle="modal">{{__('cp.active')}}
                                <i class="fa fa-check"></i>
                            </button>
                            <button class="btn sbold default event"  href="#cancel_activation" role="button"  data-toggle="modal">{{__('cp.not_active')}}
                                <i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
            <table class="table table-striped table-bordered table-hover table-checkable order-column" id="toolsTable">
                <thead>
                <tr>
                    <th>

                    </th>
                    <th> {{ucwords(__('cp.image'))}}</th>
                    <th> {{ucwords(__('cp.name'))}}</th>

{{--                    <th> {{ucwords(__('cp.status'))}}</th>--}}
                    <th> {{ucwords(__('cp.created'))}}</th>
{{--                    <th> {{ucwords(__('cp.action'))}}</th>--}}
                </tr>
                </thead>
                <tbody>
                @forelse($categories as $category)
                    <tr class="odd gradeX" id="tr-{{$category->id}}">
                        <td>
                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                <input type="checkbox" class="checkboxes chkBox" value="{{$category->id}}" name="chkBox"/>
                                <span></span>
                            </label>
                        </td>

                        <td><img src="{{$category->image}}" width="50px" height="50px"></td>

                        <td>{{$category->name}}</td>

{{--                        <td> <span class="label label-sm {{($category->status == "active")--}}
{{--                                ? "label-info" : "label-danger"}}" id="label-{{$category->id}}">--}}

{{--                                {{__('cp.'.$category->status)}}--}}
{{--                            </span>--}}
{{--                        </td>--}}

                        <td class="center">{{$category->created_at}}</td>

                        <td>
                            <div class="btn-group btn-action">
                                <a href="{{'categories/'.$category->id.'/edit'}}"
                                   class="btn btn-xs blue tooltips" data-container="body" data-placement="top"
                                   data-original-title="{{__('cp.edit')}}"><i class="fa fa-edit"></i></a>

                            </div>

                            <div class="btn-group btn-action">
                                <a href="{{'categories/'.$category->id.'/delete'}}"
                                   class="btn btn-xs red tooltips" data-container="body" data-placement="top"
                                   data-original-title="{{__('cp.delete')}}"><i class="fa fa-remove"></i></a>

                            </div>
                        </td>

                    </tr>
                @empty
                    {{__('cp.no')}}
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

{{--@section('js')--}}
{{--@endsection--}}
{{--@section('script')--}}
{{--    <script>--}}
{{--        function delete_adv(id, iss_id, e) {--}}
{{--            //alert(id);--}}
{{--            e.preventDefault();--}}

{{--            var url = '{{url(getLocal()."/admin/categories")}}/' + id;--}}
{{--            var csrf_token = '{{csrf_token()}}';--}}
{{--            $.ajax({--}}
{{--                type: 'delete',--}}
{{--                headers: {'X-CSRF-TOKEN': csrf_token},--}}
{{--                url: url,--}}
{{--                data: {_method: 'delete'},--}}
{{--                success: function (response) {--}}
{{--                    console.log(response);--}}
{{--                    if (response === 'success') {--}}
{{--                        $('#tr-' + id).hide(500);--}}
{{--                        $('#myModal' + id).modal('toggle');--}}

{{--                    } else {--}}
{{--                        swal('Error', {icon: "error"});--}}
{{--                    }--}}
{{--                },--}}
{{--                error: function (e) {--}}

{{--                }--}}
{{--            });--}}

{{--        }--}}


{{--    </script>--}}
{{--@endsection--}}
