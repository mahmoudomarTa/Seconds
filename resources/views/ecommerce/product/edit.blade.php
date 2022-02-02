@extends('layouts.admin_layout')
@section('title') {{__('cp.categories')}}
@endsection
@section('css')
@endsection

@section('page_container')


    @if (Session::has('success'))
        <div class="alert alert-success">
            <h5>
                {{Session::get('success')}}
            </h5>
        </div>
    @elseif(Session::has('error'))
        <div class="alert alert-danger">
            <h5>
                {{Session::get('error')}}
            </h5>
        </div>
    @endif


    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject font-dark sbold uppercase"
                              style="color: #e02222 !important;">{{__('cp.editProduct')}}</span>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form method="post" action="{{url('admin/products/'.$product->id.'/update')}}"
                          enctype="multipart/form-data" class="form-horizontal" role="form" id="form_city">
                        {{ csrf_field() }}

                        <div class="form-body">
                            <fieldset>
                                @foreach($locales as $locale)
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="name_{{$locale->lang}}">
                                            {{__('cp.name_'.$locale->lang)}}
                                            <span class="symbol">*</span>
                                        </label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="name_{{$locale->lang}}"

                                                   id="name_{{$locale->lang}}"
                                                   value="{{$product->translate($locale->lang)->name}}" required>
                                            @if($errors->has('name_'.$locale->lang))
                                                <div
                                                    class="alert alert-danger">{{ $errors->first('name_'.$locale->lang)}}</div>
                                            @endif
                                        </div>
                                    </div>

                                @endforeach
                            </fieldset>


                            <fieldset>
                                @foreach($locales as $locale)
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="description_{{$locale->lang}}">
                                            {{__('cp.description_'.$locale->lang)}}
                                            <span class="symbol">*</span>
                                        </label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="description_{{$locale->lang}}"
                                                   id="name_{{$locale->lang}}"
                                                   value="{{$product->translate($locale->lang)->description}}" required>
                                            @if($errors->has('description_'.$locale->lang))
                                                <div
                                                    class="alert alert-danger">{{ $errors->first('name_'.$locale->lang)}}</div>
                                            @endif
                                        </div>
                                    </div>

                                @endforeach
                            </fieldset>
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="price">
                                        {{__('cp.price')}}
                                        <span class="symbol">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="number" class="form-control" name="price"
                                               placeholder="{{__('cp.price')}}"
                                               id="price"
                                               value="{{ $product->price }}" required>
                                        @if($errors->has('price'))
                                            <div class="alert alert-danger">{{ $errors->first('price')}}</div>
                                        @endif
                                    </div>
                                </div>
                            </fieldset>
                            <hr>

                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label class="col-md-3 control-label">{{__('cp.category')}}</label>
                                    <div class="col-md-9">
                                        <select id="multiple2" class="form-control" name="category_id">
                                            <option value="">{{__('cp.select')}}</option>

                                            @foreach(\App\Models\ecommerce\Category::get() as $category)
                                                <option
                                                    value="{{$category->id}}" {{($category->id == $product->category_id) ? 'selected' : ''}}>
                                                    {{$category->name}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label class="col-md-3 control-label">{{__('cp.subCategory')}}</label>
                                    <div class="col-md-9">
                                        <select id="multiple2" class="form-control" name="sub_category_id" required>
                                            <option value="">{{__('cp.select')}}</option>

                                            @foreach(\App\Models\ecommerce\SubCategory::get() as $subCategory)
                                                <option
                                                    value="{{$subCategory->id}}" {{($subCategory->id ==$product->sub_category_id) ? 'selected' : ''}}>
                                                    {{$subCategory->name}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label class="col-md-3 control-label">{{__('cp.status')}}</label>
                                    <div class="col-md-9">
                                        <select id="multiple2" class="form-control" name="status" required>
                                            <option
                                                value="active" {{$product->status == 'active' ? 'selected' : ''}}>{{__('cp.active')}}</option>
                                            <option
                                                value="not_active" {{$product->status == 'not_active' ? 'selected' : ''}}>{{__('cp.not_active')}}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div>
                                @if($errors->has('category_id'))
                                    <div class="alert alert-danger">{{ $errors->first('category_id')}}</div>
                                @endif
                                @if($errors->has('category_id'))
                                    <div class="alert alert-danger">{{ $errors->first('category_id')}}</div>
                                @endif
                                @if($errors->has('status'))
                                    <div class="alert alert-danger">{{ $errors->first('status')}}</div>
                                @endif
                            </div>
                            <br>

                            <div>
                                @if($errors->has('category_id'))
                                    <div class="alert alert-danger">{{ $errors->first('category_id')}}</div>
                                @endif
                                @if($errors->has('category_id'))
                                    <div class="alert alert-danger">{{ $errors->first('category_id')}}</div>
                                @endif
                                @if($errors->has('status'))
                                    <div class="alert alert-danger">{{ $errors->first('status')}}</div>
                                @endif
                            </div>

                            <hr>

                            <fieldset>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="order">
                                        {{__('cp.discount')}} %
                                    </label>
                                    <div class="col-md-6">
                                        <input type="number" class="form-control" name="discount"
                                               value="{{ $product->discount}}"
                                               placeholder=" {{__('cp.discount')}}"/>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        {{__('cp.offer_time')}}
                                        <span class="symbol">*</span>
                                    </label>
                                    <label class="col-sm-1 control-label">
                                        {{__('cp.from')}}
                                    </label>
                                    <div class="col-md-3">
                                        <input type="date" class="form-control" name="offer_from"
                                               value="{{$product->offer_from}}">
                                    </div>

                                    <label class="col-sm-1 control-label">
                                        {{__('cp.to')}}
                                    </label>
                                    <div class="col-md-3">
                                        <input type="date" class="form-control" name="offer_to"
                                               value="{{$product->offer_to}}">
                                    </div>
                                </div>
                            </fieldset>

                            <br>
                            @if($errors->has('discount'))
                                <div class="alert alert-danger">{{ $errors->first('discount')}}</div>
                            @endif
                            @if($errors->has('offer_from'))
                                <div class="alert alert-danger">{{ $errors->first('offer_from')}}</div>
                            @endif
                            @if($errors->has('offer_to'))
                                <div class="alert alert-danger">{{ $errors->first('offer_to')}}</div>
                            @endif
                            <br>


                            <br>
                            <fieldset>
                                <legend>{{__('cp.logo')}}</legend>
                                <div class="col-md-9">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbnail" data-trigger="fileinput"
                                             style="width: 200px; height: 150px;">
                                            <img src="{{$product->logo}}">
                                        </div>
                                        <div>
                                                            <span class="btn red btn-outline btn-file">
                                                                <span class="fileinput-new">
                                                                {{Lang::get('cp.select_image')}}
                                                                </span>
                                                                <span class="fileinput-exists">
                                                                {{Lang::get('cp.change')}}
                                                                </span>
                                                                <input type="file" name="logo"> </span>
                                            <a href="javascript:;" class="btn red fileinput-exists"
                                               data-dismiss="fileinput">
                                                {{Lang::get('cp.remove')}}
                                            </a>
                                        </div>
                                        <br>
                                        @if($errors->has('logo'))
                                            <div class="alert alert-danger">{{ $errors->first('logo')}}</div>
                                        @endif
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <legend>{{__('cp.images')}}</legend>
                                <div class="form-group {{ $errors->has('image') ? ' has-error' : '' }}">
                                    <div class="col-md-12 col-md-offset-0">
                                        @if ($errors->has('image'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                                        @endif
                                        <div class="imageupload" style="display:flex;flex-wrap:wrap">
                                            @foreach($product->attachments as $one)
                                                <div class="imageBox text-center"
                                                     style="width:150px;height:190px;margin:5px">
                                                    <img src="{{$one->product_img}}" style="width:150px;height:150px">
                                                    <button class="btn btn-danger deleteImage"
                                                            type="button">{{__("cp.remove")}}</button>
                                                    <input class="attachedValues" type="hidden" name="oldImages[]"
                                                           value="{{$one->id}}">
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="input-group control-group increment">
                                            <div class="input-group-btn"
                                                 onclick="document.getElementById('all_images').click()">
                                                <button class="btn btn-success" type="button"><i
                                                        class="glyphicon glyphicon-plus"></i>{{__("cp.addImages")}}
                                                </button>
                                            </div>
                                            <input type="file" class="form-control hidden" accept="image/*"
                                                   id="all_images" multiple/>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>


                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn green">{{__('cp.edit')}}</button>
                                        <a href="{{url('admin/products')}}" class="btn default">{{__('cp.cancel')}}</a>
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

@section('scripts')
    <script>
        $(document).on("click", ".deleteImage", function () {
            $(this).parent().remove();
        });

        $('#all_images').on('change', function (e) {

            readURLMultiple(this, $('.imageupload'));

        });
    </script>
@endsection
