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
                            <a href="{{url('admin/sub-categories/create')}}" style="margin-right: 5px"
                               class="btn sbold green">{{__('cp.add')}}
                                <i class="fa fa-plus"></i>
                            </a>
                            <button class="btn sbold blue btn--filter">{{__('cp.filter')}}
                                <i class="fa fa-search"></i>
                            </button>
                            <button class="btn sbold green event"  href="#activation" role="button"  data-toggle="modal">{{__('cp.active')}}
                                <i class="fa fa-check"></i>
                            </button>
                            <button class="btn sbold default event"  href="#cancel_activation" role="button"  data-toggle="modal">{{__('cp.not_active')}}
                                <i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>

                </div>
                <div class="box-filter-collapse">
                    <form class="form-horizontal" method="get" action="{{'sub-categories'}}">
                        <div class="row">
{{--                            <div class="col-md-4">--}}
{{--                                <div class="form-group row">--}}
{{--                                    <label class="col-md-3 control-label">{{__('cp.email')}}</label>--}}
{{--                                    <div class="col-md-9">--}}
{{--                                        <input type="text" class="form-control" name="email" value="{{request('email')?request('email'):''}}"--}}
{{--                                               placeholder="{{__('cp.email')}}">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label class="col-md-3 control-label">{{__('cp.category')}}</label>
                                    <div class="col-md-9">
                                        <select id="multiple2" class="form-control" name="category_id">
                                            <option value="">{{__('cp.all')}}</option>

                                            @foreach(\App\Models\ecommerce\Category::get() as $category)
                                                <option value="{{$category->id}}" {{(Request::get('category_id') == $category->id) ? 'selected' : ''}}>
                                                    {{$category->name}}
                                                </option>
                                            @endforeach

{{--                                            --}}
{{--                                            <option value="active" {{Request::get('statusUser') == 'active' ? 'selected' : ''}}>{{__('cp.active')}}</option>--}}
{{--                                            <option value="not_active" {{Request::get('statusUser') == 'not_active' ? 'selected' : ''}}>{{__('cp.not_active')}}</option>--}}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label class="col-md-3 control-label">{{__('cp.status')}}</label>
                                    <div class="col-md-9">
                                        <select id="multiple2" class="form-control" name="status">
                                            <option value="">{{__('cp.all')}}</option>
                                            <option value="active" {{Request::get('status') == 'active' ? 'selected' : ''}}>{{__('cp.active')}}</option>
                                            <option value="not_active" {{Request::get('status') == 'not_active' ? 'selected' : ''}}>{{__('cp.not_active')}}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn sbold blue">{{__('cp.search')}}
                                            <i class="fa fa-search"></i>
                                        </button>
                                        <a href="{{url('admin/sub-categories')}}" type="submit"
                                           class="btn sbold btn-default ">{{__('cp.reset')}}
                                            <i class="fa fa-refresh"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
{{--                        <div class="row">--}}
{{--                            <div class="col-md-4">--}}
{{--                                <div class="form-group row">--}}
{{--                                    <label class="col-md-3 control-label">{{__('cp.mobile')}}</label>--}}
{{--                                    <div class="col-md-9">--}}
{{--                                        <input type="text" class="form-control" name="mobile" value="{{request('mobile')?request('mobile'):''}}"--}}
{{--                                               placeholder="{{__('cp.mobile')}}">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}


{{--                        </div>--}}
                    </form>
                </div>
                <br>
                <br>
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
                @forelse($subCategories as $subCategory)
                    <tr class="odd gradeX" id="tr-{{$subCategory->id}}">
                        <td>
                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                <input type="checkbox" class="checkboxes chkBox" value="{{$subCategory->id}}" name="chkBox"/>
                                <span></span>
                            </label>
                        </td>

                        <td><img src="{{$subCategory->image}}" width="50px" height="50px"></td>

                        <td>{{$subCategory->name}}</td>

                        {{--                        <td> <span class="label label-sm {{($category->status == "active")--}}
                        {{--                                ? "label-info" : "label-danger"}}" id="label-{{$category->id}}">--}}

                        {{--                                {{__('cp.'.$category->status)}}--}}
                        {{--                            </span>--}}
                        {{--                        </td>--}}

                        <td class="center">{{$subCategory->created_at}}</td>

                        <td>
                            <div class="btn-group btn-action">
                                <a href="{{'sub-categories/'.$subCategory->id.'/edit'}}"
                                   class="btn btn-xs blue tooltips" data-container="body" data-placement="top"
                                   data-original-title="{{__('cp.edit')}}"><i class="fa fa-edit"></i></a>

                            </div>

                            <div class="btn-group btn-action">
                                <a href="{{'sub-categories/'.$subCategory->id.'/delete'}}"
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

    @section('scripts')
        <script>
            $('.btn--filter').click(function () {
                $('.box-filter-collapse').slideToggle(500);
            });
        </script>
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
