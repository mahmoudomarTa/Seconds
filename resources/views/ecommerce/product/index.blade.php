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
                            <a href="{{url('admin/products/create')}}" style="margin-right: 5px"
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
                    <form class="form-horizontal" method="get" action="{{'products'}}">
                        <div class="row">
                            <div class="col-md-3">
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

                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group row">
                                    <label class="col-md-3 control-label">{{__('cp.sub_category')}}</label>
                                    <div class="col-md-9">
                                        <select id="multiple2" class="form-control" name="sub_category_id">
                                            <option value="">{{__('cp.all')}}</option>

                                            @foreach(\App\Models\ecommerce\SubCategory::get() as $subCategory)
                                                <option value="{{$subCategory->id}}" {{(Request::get('sub_category_id') == $subCategory->id) ? 'selected' : ''}}>
                                                    {{$subCategory->name}}
                                                </option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-3">
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
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn sbold blue">{{__('cp.search')}}
                                            <i class="fa fa-search"></i>
                                        </button>
                                        <a href="{{url('admin/products')}}" type="submit"
                                           class="btn sbold btn-default ">{{__('cp.reset')}}
                                            <i class="fa fa-refresh"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
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
                    <th> {{ucwords(__('cp.price'))}}</th>
                    <th> {{ucwords(__('cp.discount'))}}</th>
                    <th> {{ucwords(__('cp.availability'))}}</th>

                    {{--                    <th> {{ucwords(__('cp.status'))}}</th>--}}
                    <th> {{ucwords(__('cp.created'))}}</th>
                    {{--                    <th> {{ucwords(__('cp.action'))}}</th>--}}
                </tr>
                </thead>
                <tbody>
                @forelse($products as $product)
                    <tr class="odd gradeX" id="tr-{{$product->id}}">
                        <td>
                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                <input type="checkbox" class="checkboxes chkBox" value="{{$product->id}}" name="chkBox"/>
                                <span></span>
                            </label>
                        </td>

                        <td><img src="{{$product->logo}}" width="50px" height="50px"></td>

                        <td>{{$product->name}}</td>
                        <td>@if($product->priceOffer==$product->price) {{$product->price}} @else <del style="color: red;">{{$product->price}}</del> => {{$product->priceOffer}}  @endif</td>
                        <td>@if($product->finalDiscount>0) {{$product->finalDiscount}}% @else{{__('cp.no_discount')}} @endif</td>
                        <td style="color: {{$product->status=='active' ? "lime": 'red' }}">@if($product->status=='active') {{__('cp.available')}} @else {{__('cp.not_available')}} @endif</td>
                        {{--                        <td> <span class="label label-sm {{($category->status == "active")--}}
                        {{--                                ? "label-info" : "label-danger"}}" id="label-{{$category->id}}">--}}

                        {{--                                {{__('cp.'.$category->status)}}--}}
                        {{--                            </span>--}}
                        {{--                        </td>--}}

                        <td class="center">{{$product->created_at}}</td>

                        <td>
                            <div class="btn-group btn-action">
                                <a href="{{'products/'.$product->id.'/edit'}}"
                                   class="btn btn-xs blue tooltips" data-container="body" data-placement="top"
                                   data-original-title="{{__('cp.edit')}}"><i class="fa fa-edit"></i></a>

                            </div>

{{--                            <div class="btn-group btn-action">--}}
{{--                                <a href="{{'products/'.$product->id}}"--}}
{{--                                   class="btn btn-xs red tooltips" data-container="body" data-placement="top"--}}
{{--                                   data-original-title="{{__('cp.delete')}}"><i class="fa fa-remove"></i></a>--}}

{{--                            </div>--}}
                            <a href="#myModal{{$product->id}}" role="button"  data-toggle="modal" class="btn btn-xs red tooltips"><i class="fa fa-times" aria-hidden="true"></i></a>

                            <div id="myModal{{$product->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                            <h4 class="modal-title">{{__('cp.delete')}}</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>{{__('cp.confirm')}} </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn default" data-dismiss="modal" aria-hidden="true">{{__('cp.cancel')}}</button>
                                            <a href="#" onclick="delete_adv('{{$product->id}}','{{$product->id}}',event)"><button class="btn btn-danger">{{__('cp.delete')}}</button></a>
                                        </div>
                                    </div>
                                </div>
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


        function delete_adv(id, iss_id, e) {
            e.preventDefault();
            console.log(id);
            console.log(iss_id);
            var url = 'products/'+id+'/delete';
            var csrf_token = '{{csrf_token()}}';
            $.ajax({
                type: 'get',
                headers: {'X-CSRF-TOKEN': csrf_token},
                url: url,
                data: {_method: 'get'},
                success: function (response) {
                    console.log(response);
                    if (response === 'success') {
                        $('#tr-' + id).hide(500);
                        $('#myModal' + id).modal('toggle');
                    } else {
                        // swal('Error', {icon: "error"});
                    }
                },
                error: function (e) {
                    // swal('exception', {icon: "error"});
                }
            });

        }




        $('.btn--filter').click(function () {
            $('.box-filter-collapse').slideToggle(500);
        });
    </script>
@endsection
