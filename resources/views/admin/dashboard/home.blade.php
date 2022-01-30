@extends('layouts.admin_layout')

@section('page_container')

    <div class="col-md-12">
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-title">
                <div class="caption">
                    <span class="caption-subject font-red sbold uppercase">{{__('cp.landing_page_attribute')}}</span>
                </div>
            </div>
            <div class="portlet-body">
                <form method="post" action="{{url('home/update')}}" enctype="multipart/form-data">
                    @csrf
                    <hr>


                    <div>
                        <fieldset>
                            @foreach($locales as $locale)
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="home_title_{{$locale->lang}}">
                                        {{__('cp.home_title').' '.$locale->lang}}<span class="symbol"> *</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-circle" name="home_title_{{$locale->lang}}"
                                               value="{{$landingPage->translate($locale->lang)->home_title}}"
                                               id="home_title_{{$locale->lang}}" required>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        </fieldset>
                    </div>

                    <hr>
                    <div>
                        <fieldset>
                            @foreach($locales as $locale)
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="home_description_{{$locale->lang}}">
                                        {{__('cp.home_description').' '.$locale->lang}}<span class="symbol"> *</span>
                                    </label>
                                    <div class="col-md-7">
                                    <textarea type="text" class="form-control input-circle" name="home_description_{{$locale->lang}}"
                                              id="home_description_{{$locale->lang}}" required>{{$landingPage->translate($locale->lang)->home_description}}
                                    </textarea>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        </fieldset>
                        <hr>
                    </div>
                    <div>
                        <fieldset>
                            @foreach($locales as $locale)
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="likes_{{$locale->lang}}">
                                        {{__('cp.likes').' '.$locale->lang}}                                    <span class="symbol"> *</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-circle" name="likes_{{$locale->lang}}"
                                               value="{{$landingPage->translate($locale->lang)->likes}}"
                                               id="likes_{{$locale->lang}}" required>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        </fieldset>
                    </div>

                    <hr>
                    <div>
                        <fieldset>
                            @foreach($locales as $locale)
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="communication_{{$locale->lang}}">
                                        {{__('cp.communication').' '.$locale->lang}}<span class="symbol"> *</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-circle" name="communication_{{$locale->lang}}"
                                               value="{{$landingPage->translate($locale->lang)->communication}}"
                                               id="likes_{{$locale->lang}}" required>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        </fieldset>
                    </div>

                    <hr>
                    <div>
                        <fieldset>
                            @foreach($locales as $locale)
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="advertising_{{$locale->lang}}">
                                        {{__('cp.advertising').' '.$locale->lang}}<span class="symbol"> *</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-circle" name="advertising_{{$locale->lang}}"
                                               value="{{$landingPage->translate($locale->lang)->advertising}}"
                                               id="likes_{{$locale->lang}}" required>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        </fieldset>
                    </div>

                    <hr>
                    <div>
                        <fieldset>
                            @foreach($locales as $locale)
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="users_{{$locale->lang}}">
                                        {{__('cp.users').' '.$locale->lang}}<span class="symbol"> *</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-circle" name="users_{{$locale->lang}}"
                                               value="{{$landingPage->translate($locale->lang)->users}}"
                                               id="users_{{$locale->lang}}" required>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        </fieldset>
                    </div>

                    <hr>
                    <div>
                        <fieldset>
                            @foreach($locales as $locale)
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="about_{{$locale->lang}}">
                                        {{__('cp.about').' '.$locale->lang}}<span class="symbol"> *</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-circle" name="about_{{$locale->lang}}"
                                               value="{{$landingPage->translate($locale->lang)->about}}"
                                               id="about_{{$locale->lang}}" required>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        </fieldset>
                    </div>

                    <hr>
                    <div>
                        <fieldset>
                            @foreach($locales as $locale)
                                <div class="form-group">
                                    <label  class="col-sm-3 control-label" for="about_description_{{$locale->lang}}">
                                        {{__('cp.about_description').' '.$locale->lang}}<span class="symbol"> *</span>
                                    </label>
                                    <div class="col-md-7">
                                    <textarea type="text" class="form-control input-circle" name="about_description_{{$locale->lang}}"
                                              id="about_description_{{$locale->lang}}" required>{{$landingPage->translate($locale->lang)->about_description}}
                                    </textarea>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        </fieldset>
                    </div>

                    <hr>
                    <div>
                        <fieldset>
                            @foreach($locales as $locale)
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="first_about_{{$locale->lang}}">
                                        {{__('cp.first_about').' '.$locale->lang}}<span class="symbol"> *</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-circle" name="first_about_{{$locale->lang}}"
                                               value="{{$landingPage->translate($locale->lang)->first_about}}"
                                               id="first_about_{{$locale->lang}}" required>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        </fieldset>
                    </div>

                    <hr>
                    <div>
                        <fieldset>
                            @foreach($locales as $locale)
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="second_about_{{$locale->lang}}">
                                        {{__('cp.second_about').' '.$locale->lang}}<span class="symbol"> *</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-circle" name="second_about_{{$locale->lang}}"
                                               value="{{$landingPage->translate($locale->lang)->second_about}}"
                                               id="second_about_{{$locale->lang}}" required>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        </fieldset>
                    </div>
                    <hr>
                    <div>
                        <fieldset>
                            @foreach($locales as $locale)
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="third_about_{{$locale->lang}}">
                                        {{__('cp.second_about').' '.$locale->lang}}<span class="symbol"> *</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-circle" name="third_about_{{$locale->lang}}"
                                               value="{{$landingPage->translate($locale->lang)->third_about}}"
                                               id="third_about_{{$locale->lang}}" required>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        </fieldset>
                    </div>

                    <hr>
                    <div>
                        <fieldset>
                            @foreach($locales as $locale)
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="features_{{$locale->lang}}">
                                        {{__('cp.features').' '.$locale->lang}}<span class="symbol"> *</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-circle" name="features_{{$locale->lang}}"
                                               value="{{$landingPage->translate($locale->lang)->features}}"
                                               id="features_{{$locale->lang}}" required>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        </fieldset>
                    </div>


                    <hr>
                    <div>
                        <fieldset>
                            @foreach($locales as $locale)
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="features_description_{{$locale->lang}}">
                                        {{__('cp.features_description').' '.$locale->lang}}<span class="symbol"> *</span>
                                    </label>
                                    <div class="col-md-7">
                                    <textarea type="text" class="form-control input-circle" name="features_description_{{$locale->lang}}"
                                              id="features_description_{{$locale->lang}}" required>{{$landingPage->translate($locale->lang)->features_description}}
                                    </textarea>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        </fieldset>
                    </div>

                    <hr>
                    <div>
                        <fieldset>
                            @foreach($locales as $locale)
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="how_works_{{$locale->lang}}">
                                        {{__('cp.how_works').' '.$locale->lang}}<span class="symbol"> *</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-circle" name="how_works_{{$locale->lang}}"
                                               value="{{$landingPage->translate($locale->lang)->how_works}}"
                                               id="how_works_{{$locale->lang}}" required>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        </fieldset>
                    </div>

                    <hr>
                    <div>
                        <fieldset>
                            @foreach($locales as $locale)
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="how_works_description_{{$locale->lang}}">
                                        {{__('cp.how_works_description').' '.$locale->lang}}<span class="symbol"> *</span>
                                    </label>
                                    <div class="col-md-7">
                                    <textarea type="text" class="form-control input-circle" name="how_works_description_{{$locale->lang}}"
                                              id="how_works_description_{{$locale->lang}}" required>{{$landingPage->translate($locale->lang)->how_works_description}}
                                    </textarea>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        </fieldset>
                    </div>


                    <hr>
                    <div>
                        <fieldset>
                            @foreach($locales as $locale)
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="first_step_{{$locale->lang}}">
                                        {{__('cp.first_step').' '.$locale->lang}}<span class="symbol"> *</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-circle" name="first_step_{{$locale->lang}}"
                                               value="{{$landingPage->translate($locale->lang)->first_step}}"
                                               id="first_step_{{$locale->lang}}" required>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        </fieldset>
                    </div>

                    <hr>
                    <div>
                        <fieldset>
                            @foreach($locales as $locale)
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="first_step_description_{{$locale->lang}}">
                                        {{__('cp.first_step_description').' '.$locale->lang}}<span class="symbol"> *</span>
                                    </label>
                                    <div class="col-md-7">
                                    <textarea type="text" class="form-control input-circle" name="first_step_description_{{$locale->lang}}"
                                              id="first_step_description_{{$locale->lang}}" required>{{$landingPage->translate($locale->lang)->first_step_description}}
                                    </textarea>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        </fieldset>
                    </div>

                    <hr>
                    <div>
                        <fieldset>
                            @foreach($locales as $locale)
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="second_step_{{$locale->lang}}">
                                        {{__('cp.second_step').' '.$locale->lang}}<span class="symbol"> *</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-circle" name="second_step_{{$locale->lang}}"
                                               value="{{$landingPage->translate($locale->lang)->second_step}}"
                                               id="second_step_{{$locale->lang}}" required>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        </fieldset>
                    </div>

                    <hr>
                    <div>
                        <fieldset>
                            @foreach($locales as $locale)
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="second_step_description_{{$locale->lang}}">
                                        {{__('cp.second_step_description').' '.$locale->lang}}<span class="symbol">*</span>
                                    </label>
                                    <div class="col-md-7">
                                    <textarea type="text" class="form-control input-circle" name="second_step_description_{{$locale->lang}}"

                                              id="second_step_description_{{$locale->lang}}" required>{{$landingPage->translate($locale->lang)->second_step_description}}
                                    </textarea>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        </fieldset>
                    </div>

                    <hr>
                    <div>
                        <fieldset>
                            @foreach($locales as $locale)
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="third_step_{{$locale->lang}}">
                                        {{__('cp.third_step').' '.$locale->lang}}<span class="symbol"> *</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-circle" name="third_step_{{$locale->lang}}"
                                               value="{{$landingPage->translate($locale->lang)->third_step}}"
                                               id="third_step_{{$locale->lang}}" required>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        </fieldset>
                    </div>

                    <hr>
                    <div>
                        <fieldset>
                            @foreach($locales as $locale)
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="third_step_description_{{$locale->lang}}">
                                        {{__('cp.third_step_description').' '.$locale->lang}}<span class="symbol"> *</span>
                                    </label>
                                    <div class="col-md-7">
                                    <textarea type="text" class="form-control input-circle" name="third_step_description_{{$locale->lang}}"
                                              id="third_step_description_{{$locale->lang}}" required>{{$landingPage->translate($locale->lang)->third_step_description}}
                                    </textarea>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        </fieldset>
                    </div>

                    <hr>
                    <div>
                        <fieldset>
                            @foreach($locales as $locale)
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="fourth_step_{{$locale->lang}}">
                                        {{__('cp.fourth_step').' '.$locale->lang}}<span class="symbol"> *</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-circle" name="fourth_step_{{$locale->lang}}"
                                               value="{{$landingPage->translate($locale->lang)->fourth_step}}"
                                               id="fourth_step_{{$locale->lang}}" required>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        </fieldset>
                    </div>

                    <hr>
                    <div>
                        <fieldset>
                            @foreach($locales as $locale)
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="fourth_step_description_{{$locale->lang}}">
                                        {{__('cp.fourth_step_description').' '.$locale->lang}}<span class="symbol">*</span>
                                    </label>
                                    <div class="col-md-7">
                                        <textarea type="text" class="form-control input-circle" name="fourth_step_description_{{$locale->lang}}"id="fourth_step_description_{{$locale->lang}}" required>{{$landingPage->translate($locale->lang)->fourth_step_description}}</textarea>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        </fieldset>
                    </div>


                    <hr>
                    <div>
                        <fieldset>
                            @foreach($locales as $locale)
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="client_say_{{$locale->lang}}">
                                        {{__('cp.client_say').' '.$locale->lang}}<span class="symbol"> *</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-circle" name="client_say_{{$locale->lang}}"
                                               value="{{$landingPage->translate($locale->lang)->client_say}}"
                                               id="client_say_{{$locale->lang}}" required>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        </fieldset>
                    </div>

                    <hr>
                    <div>
                        <fieldset>
                            @foreach($locales as $locale)
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="contact_us_{{$locale->lang}}">
                                        {{__('cp.contact_us').' '.$locale->lang}}<span class="symbol"> *</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-circle" name="contact_us_{{$locale->lang}}"
                                               value="{{$landingPage->translate($locale->lang)->contact_us}}"
                                               id="contact_us_{{$locale->lang}}" required>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        </fieldset>
                    </div>

                    <hr>
                    <div>
                        <fieldset>
                            @foreach($locales as $locale)
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="contact_information_{{$locale->lang}}">
                                        {{__('cp.contact_information').' '.$locale->lang}}<span class="symbol"> *</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-circle" name="contact_information_{{$locale->lang}}"
                                               value="{{$landingPage->translate($locale->lang)->contact_information}}"
                                               id="contact_information_{{$locale->lang}}" required>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        </fieldset>
                    </div>

                    <hr>
                    <div>
                        <fieldset>
                            @foreach($locales as $locale)
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="location_{{$locale->lang}}">
                                        {{__('cp.location').' '.$locale->lang}}<span class="symbol"> *</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-circle" name="location_{{$locale->lang}}"
                                               value="{{$landingPage->translate($locale->lang)->location}}"
                                               id="location_{{$locale->lang}}" required>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        </fieldset>
                    </div>

                    <hr>
                    <div>
                        <fieldset>
                            @foreach($locales as $locale)
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="location_value_{{$locale->lang}}">
                                        {{__('cp.location_value').' '.$locale->lang}}<span class="symbol"> *</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-circle" name="location_value_{{$locale->lang}}"
                                               value="{{$landingPage->translate($locale->lang)->location_value}}"
                                               id="location_value_{{$locale->lang}}" required>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        </fieldset>
                    </div>

                    <hr>
                    <div>
                        <fieldset>
                            @foreach($locales as $locale)
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="mobile_{{$locale->lang}}">
                                        {{__('cp.mobile').' '.$locale->lang}}<span class="symbol"> *</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-circle" name="mobile_{{$locale->lang}}"
                                               value="{{$landingPage->translate($locale->lang)->mobile}}"
                                               id="mobile_{{$locale->lang}}" required>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        </fieldset>
                    </div>


                    <hr>
                    <div>
                        <fieldset>
                            @foreach($locales as $locale)
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="phone_{{$locale->lang}}">
                                        {{__('cp.phone').' '.$locale->lang}}<span class="symbol"> *</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-circle" name="phone_{{$locale->lang}}"
                                               value="{{$landingPage->translate($locale->lang)->phone}}"
                                               id="phone_{{$locale->lang}}" required>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        </fieldset>
                    </div>


                    <hr>
                    <div>
                        <fieldset>
                            @foreach($locales as $locale)
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="full_name_{{$locale->lang}}">
                                        {{__('cp.full_name ').' '.$locale->lang}}<span class="symbol"> *</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-circle" name="full_name_{{$locale->lang}}"
                                               value="{{$landingPage->translate($locale->lang)->full_name}}"
                                               id="full_name_{{$locale->lang}}" required>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        </fieldset>
                    </div>


                    <hr>
                    <div>
                        <fieldset>
                            @foreach($locales as $locale)
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="send_{{$locale->lang}}">
                                        {{__('cp.send').' '.$locale->lang}}<span class="symbol"> *</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-circle" name="send_{{$locale->lang}}"
                                               value="{{$landingPage->translate($locale->lang)->send}}"
                                               id="send_{{$locale->lang}}" required>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        </fieldset>
                    </div>


                    <hr>
                    <div>
                        <fieldset>
                            @foreach($locales as $locale)
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="copy_write_{{$locale->lang}}">
                                        {{__('cp.copy_write').' '.$locale->lang}}<span class="symbol"> *</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-circle" name="copy_write_{{$locale->lang}}"
                                               value="{{$landingPage->translate($locale->lang)->copy_write}}"
                                               id="copy_write_{{$locale->lang}}" required>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        </fieldset>
                    </div>


                    <hr>
                    <div>
                        <fieldset>
                            @foreach($locales as $locale)
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="contact_form_{{$locale->lang}}">
                                        {{__('cp.contact_form').' '.$locale->lang}}<span class="symbol"> *</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-circle" name="contact_form_{{$locale->lang}}"
                                               value="{{$landingPage->translate($locale->lang)->contact_form}}"
                                               id="contact_form_{{$locale->lang}}" required>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        </fieldset>
                    </div>


                    <hr>
                    <div>
                        <fieldset>
                            @foreach($locales as $locale)
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="email_{{$locale->lang}}">
                                        {{__('cp.email').' '.$locale->lang}}<span class="symbol"> *</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-circle" name="email_{{$locale->lang}}"
                                               value="{{$landingPage->translate($locale->lang)->email}}"
                                               id="email_{{$locale->lang}}" required>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        </fieldset>
                    </div>


                    <hr>
                    <div>
                        <fieldset>
                            @foreach($locales as $locale)
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="write_your_message_{{$locale->lang}}">
                                        {{__('cp.write_your_message').' '.$locale->lang}}<span class="symbol"> *</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-circle" name="write_your_message_{{$locale->lang}}"
                                               value="{{$landingPage->translate($locale->lang)->write_your_message}}"
                                               id="write_your_message_{{$locale->lang}}" required>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        </fieldset>
                    </div>


                    <hr>
                    <div>
                        <fieldset>
                            @foreach($locales as $locale)
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="google_play_{{$locale->lang}}">
                                        {{__('cp.google_play').' '.$locale->lang}}<span class="symbol"> *</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-circle" name="google_play_{{$locale->lang}}"
                                               value="{{$landingPage->translate($locale->lang)->google_play}}"
                                               id="google_play_{{$locale->lang}}" required>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        </fieldset>
                    </div>


                    <hr>
                    <div>
                        <fieldset>
                            @foreach($locales as $locale)
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="app_store_{{$locale->lang}}">
                                        {{__('cp.app_store').' '.$locale->lang}}<span class="symbol"> *</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-circle" name="app_store_{{$locale->lang}}"
                                               value="{{$landingPage->translate($locale->lang)->app_store}}"
                                               id="app_store_{{$locale->lang}}" required>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        </fieldset>
                    </div>

                    <hr>
                    <div>
                        <fieldset>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="email_value">
                                    {{__('cp.email_value').' '.$locale->lang}}<span class="symbol"> *</span>
                                </label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control input-circle" name="email_value"
                                           value="{{$landingPage->email_value}}"
                                           id="email_value" required>
                                </div>
                            </div>
                            <br>
                        </fieldset>
                    </div>

                    <hr>
                    <div>
                        <fieldset>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="mobile_value">
                                    {{__('cp.mobile_value').' '.$locale->lang}}<span class="symbol"> *</span>
                                </label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control input-circle" name="mobile_value"
                                           value="{{$landingPage->mobile_value}}"
                                           id="mobile_value" required>
                                </div>
                            </div>
                            <br>
                        </fieldset>
                    </div>

                    <hr>
                    <div>
                        <fieldset>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="phone_value">
                                    {{__('cp.phone_value').' '.$locale->lang}} <span class="symbol"> *</span>
                                </label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control input-circle" name="phone_value"
                                           value="{{$landingPage->phone_value}}"
                                           id="phone_value}" required>
                                </div>
                            </div>
                            <br>
                        </fieldset>
                    </div>

                    <div class="form-group ">
                        <label class="control-label col-md-3" >
                            {{__('cp.logo')}}
                        </label>
                        <div class="col-md-9">
                            <div class="fileinput fileinput-new" data-provides="fileinput" >
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                    <img src="{{$landingPage->logo}}">
                                </div>
                                <div>
                                                            <span class="btn red btn-outline btn-file">
                                                                <span class="fileinput-new">{{__('cp.select_image')}}</span>
                                                                <span class="fileinput-exists">{{__('cp.change')}}</span>
                                                                <input type="file" name="logo"> </span>
                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">{{__('cp.remove')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-group" >
                        <label class="control-label col-md-3" >{{__('cp.home_image')}}</label>
                        <div class="col-md-9">
                            <div class="fileinput fileinput-new" data-provides="fileinput" >
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                    <img src="{{$landingPage->home_image}}">
                                </div>
                                <div>
                                                            <span class="btn red btn-outline btn-file">
                                                                <span class="fileinput-new">{{__('cp.select_image')}}</span>
                                                                <span class="fileinput-exists">{{__('cp.change')}}</span>
                                                                <input type="file" name="home_image"> </span>
                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">{{__('cp.remove')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="form-group" >
                        <label class="control-label col-md-3" >{{__('cp.about_image')}}</label>
                        <div class="col-md-9">
                            <div class="fileinput fileinput-new" data-provides="fileinput" >
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                    <img src="{{$landingPage->about_image}}">
                                </div>
                                <div>
                                                            <span class="btn red btn-outline btn-file">
                                                                <span class="fileinput-new">{{__('cp.select_image')}}</span>
                                                                <span class="fileinput-exists">{{__('cp.change')}}</span>
                                                                <input type="file" name="about_image"> </span>
                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">{{__('cp.remove')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="form-group" >
                        <label class="control-label col-md-3" >{{__('cp.how_it_works_image')}}</label>
                        <div class="col-md-9">
                            <div class="fileinput fileinput-new" data-provides="fileinput" >
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                    <img src="{{$landingPage->how_it_works_image}}">
                                </div>
                                <div>
                                                            <span class="btn red btn-outline btn-file">
                                                                <span class="fileinput-new">{{__('cp.select_image')}}</span>
                                                                <span class="fileinput-exists">{{__('cp.change')}}</span>
                                                                <input type="file" name="how_it_works_image"> </span>
                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">{{__('cp.remove')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="form-group" >
                        <label class="control-label col-md-3" >{{__('cp.location_image')}}</label>
                        <div class="col-md-9">
                            <div class="fileinput fileinput-new" data-provides="fileinput" >
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                    <img src="{{$landingPage->location_image}}">

                                </div>
                                <div>
                                                            <span class="btn red btn-outline btn-file">
                                                                <span class="fileinput-new">{{__('cp.select_image')}}</span>
                                                                <span class="fileinput-exists">{{__('cp.change')}}</span>
                                                                <input type="file" name="location_image"> </span>
                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">{{__('cp.remove')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>





                    <div class="form-group" >
                        <label class="control-label col-md-3" >{{__('cp.email_image')}}</label>
                        <div class="col-md-9">
                            <div class="fileinput fileinput-new" data-provides="fileinput" >
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                    <img src="{{$landingPage->email_image}}">

                                </div>
                                <div>
                                                            <span class="btn red btn-outline btn-file">
                                                                <span class="fileinput-new">{{__('cp.select_image')}}</span>
                                                                <span class="fileinput-exists">{{__('cp.change')}}</span>
                                                                <input type="file" name="email_image"> </span>
                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">{{__('cp.remove')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>





                    <div class="form-group" >
                        <label class="control-label col-md-3" >{{__('cp.mobile_image')}}</label>
                        <div class="col-md-9">
                            <div class="fileinput fileinput-new" data-provides="fileinput" >
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                    <img src="{{$landingPage->mobile_image}}">
                                </div>
                                <div>
                                                            <span class="btn red btn-outline btn-file">
                                                                <span class="fileinput-new">{{__('cp.select_image')}}</span>
                                                                <span class="fileinput-exists">{{__('cp.change')}}</span>
                                                                <input type="file" name="mobile_image"> </span>
                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">{{__('cp.remove')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>





                    <div class="form-group" >
                        <label class="control-label col-md-3" >{{__('cp.phone_image')}}</label>
                        <div class="col-md-9">
                            <div class="fileinput fileinput-new" data-provides="fileinput" >
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                    <img src="{{$landingPage->phone_image}}">
                                </div>
                                <div>
                                                            <span class="btn red btn-outline btn-file">
                                                                <span class="fileinput-new">{{__('cp.select_image')}}</span>
                                                                <span class="fileinput-exists">{{__('cp.change')}}</span>
                                                                <input type="file" name="phone_image"> </span>
                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">{{__('cp.remove')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-group" >
                        <label class="control-label col-md-3" >{{__('cp.full_name_image')}}</label>
                        <div class="col-md-9">
                            <div class="fileinput fileinput-new" data-provides="fileinput" >
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                    <img src="{{$landingPage->full_name_image}}">
                                </div>
                                <div>
                                                            <span class="btn red btn-outline btn-file">
                                                                <span class="fileinput-new">{{__('cp.select_image')}}</span>
                                                                <span class="fileinput-exists">{{__('cp.change')}}</span>
                                                                <input type="file" name="full_name_image"> </span>
                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">{{__('cp.remove')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-group" >
                        <label class="control-label col-md-3" >{{__('cp.communication_image')}}</label>
                        <div class="col-md-9">
                            <div class="fileinput fileinput-new" data-provides="fileinput" >
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                    <img src="{{$landingPage->communication_image}}">
                                </div>
                                <div>
                                                            <span class="btn red btn-outline btn-file">
                                                                <span class="fileinput-new">{{__('cp.select_image')}}</span>
                                                                <span class="fileinput-exists">{{__('cp.change')}}</span>
                                                                <input type="file" name="communication_image"> </span>
                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">{{__('cp.remove')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-group" >
                        <label class="control-label col-md-3" >{{__('cp.advertising_image')}}</label>
                        <div class="col-md-9">
                            <div class="fileinput fileinput-new" data-provides="fileinput" >
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                    <img src="{{$landingPage->advertising_image}}">
                                </div>
                                <div>
                                                            <span class="btn red btn-outline btn-file">
                                                                <span class="fileinput-new">{{__('cp.select_image')}}</span>
                                                                <span class="fileinput-exists">{{__('cp.change')}}</span>
                                                                <input type="file" name="advertising_image"> </span>
                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">{{__('cp.remove')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="form-group" >
                        <label class="control-label col-md-3" >{{__('cp.users_image')}}</label>
                        <div class="col-md-9">
                            <div class="fileinput fileinput-new" data-provides="fileinput" >
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                    <img src="{{$landingPage->users_image}}">
                                </div>
                                <div>
                                                            <span class="btn red btn-outline btn-file">
                                                                <span class="fileinput-new">{{__('cp.select_image')}}</span>
                                                                <span class="fileinput-exists">{{__('cp.change')}}</span>
                                                                <input type="file" name="users_image"> </span>
                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">{{__('cp.remove')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>



{{--                    <div class="form-group" >--}}
{{--                        <label class="control-label col-md-3" >{{__('cp.user_image')}}</label>--}}
{{--                        <div class="col-md-9">--}}
{{--                            <div class="fileinput fileinput-new" data-provides="fileinput" >--}}
{{--                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">--}}
{{--                                    <img src="{{$landingPage->user_image}}">--}}
{{--                                </div>--}}
{{--                                <div>--}}
{{--                                                            <span class="btn red btn-outline btn-file">--}}
{{--                                                                <span class="fileinput-new">{{__('cp.select_image')}}</span>--}}
{{--                                                                <span class="fileinput-exists">{{__('cp.change')}}</span>--}}
{{--                                                                <input type="file" name="user_image"> </span>--}}
{{--                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">{{__('cp.remove')}}</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}




                    <br>
                    <br>
                    <br>


                    <div class="form-group">
                        <button type="submit" class="btn btn-success"style="margin-top: 20px;" @if(!\App\Http\Helpers::can('home')) disabled @endif >{{__('cp.save')}}</button>
                    </div>

                    <br>
                    <br>
                    <br>


                </form>
                <!-- END FORM-->
            </div>
        </div>
        <!-- END VALIDATION STATES-->
    </div>






@endsection
