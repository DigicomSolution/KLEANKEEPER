@extends('spiderworks.miniweb.fileupload')



@section('head')

@endsection



@section('content')





        <div class="col-md-12" style="margin-bottom: 20px;" align="right">

            @if($obj->id)

                <span class="page-heading">EDIT SERVICE</span>

            @else

                <span class="page-heading">CREATE NEW SERVICE</span>

            @endif

            <div >

                <div class="btn-group">



                        @if(!empty($offer))

                            <a  class="btn btn-default" href="{{url('admin/sliders/edit/'.encrypt($offer->id))}}" target="_blank">Manage offers</a>

                        @endif

                    <a href="{{route($route.'.index')}}"  class="btn btn-success"><i class="fa fa-list"></i> List

                    </a>

                    @if($obj->id)

                            <a href="{{url('service/'.$obj->slug)}}" class="btn btn-tag-dark" target="_blank">View service page

                            </a>



                    <a href="{{route($route.'.create')}}" class="btn btn-success"><i class="fa fa-pencil"></i> Create new

                    </a>

                    <a href="{{route($route.'.destroy', [encrypt($obj->id)])}}" class="btn btn-success miniweb-btn-warning-popup" data-message="Are you sure to delete?  Associated data will be removed if it is deleted." data-redirect-url="{{route($route.'.index')}}"><i class="fa fa-trash"></i> Delete</a>

                    @endif

                </div>

            </div>

        </div>



        <div class="col-lg-12">

            <div class="card card-borderless">

                @if($obj->id)

                    <form method="POST" action="{{ route($route.'.update') }}" class="p-t-15" id="InputFrm" data-validate=true>

                @else

                    <form method="POST" action="{{ route($route.'.store') }}" class="p-t-15" id="InputFrm" data-validate=true>

                @endif

                @csrf

                <input type="hidden" name="id" @if($obj->id) value="{{encrypt($obj->id)}}" @endif id="inputId">



                <ul class="nav nav-tabs nav-tabs-simple d-none d-md-flex d-lg-flex d-xl-flex" role="tablist" data-init-reponsive-tabs="dropdownfx">

                    <li class="nav-item">

                        <a @if($tab == 'basic') class="active show" @endif data-toggle="tab" role="tab"

                           data-target="#tab1Basic"

                        href="#" aria-selected="true">Basic Details</a>

                    </li>

                    <li class="nav-item">

                        <a @if($tab == 'seo') class="active show" @endif data-toggle="tab" role="tab"

                           data-target="#tab2Content"

                        class="" aria-selected="false">SEO</a>

                    </li>

                    <li class="nav-item">

                        <a @if($tab == 'services') class="active show" @endif data-toggle="tab" role="tab"

                           data-target="#tab3Service"

                        class="" aria-selected="false">Related Services</a>

                    </li>



                    <li class="nav-item">

                        <a @if($tab == 'media') class="active show" @endif data-toggle="tab" role="tab"

                           data-target="#tab3SEO"

                        class="" aria-selected="false">Media</a>

                    </li>

                </ul>

                <div class="tab-content">

                    <div class="tab-pane @if($tab == 'basic') active show @endif" id="tab1Basic">

                        <div class="row">


                        	<div class="col-md-3">

                                  <div class="row column-seperation padding-5">

                                        <div class="form-group form-group-default">

                                        

                                            <input type="text" class="form-control" name="app_service_id"  @if($obj->app_service_id) value="{{$obj->app_service_id}}" @endif>

                                            <label for="checkbox-agree">App service ID

                                            </label>

                                     

                                        </div>

                                  </div>

                            </div>

                            

                            <div class="col-md-3">

                                  <div class="row column-seperation padding-5">

                                        <div class="form-group form-group-default">

                                          <div class="checkbox check-success  ">

                                            <input type="checkbox" name="is_featured" id="checkbox-agree" @if($obj->is_featured == 1) checked="checked" @endif>

                                            <label for="checkbox-agree">Is Featured? [<small>Shows in icon banner, Icon should be updated on media</small>]

                                            </label>

                                          </div>

                                        </div>

                                  </div>

                            </div>

                             


                            <div class="col-md-3">

                                  <div class="row column-seperation padding-5">

                                        <div class="form-group form-group-default">

                                          <div class="checkbox check-success  ">

                                            <input type="checkbox" name="is_show_home" id="checkbox-agree1" @if($obj->is_show_home == 1) checked="checked" @endif>

                                            <label for="checkbox-agree1">Shows in home page with its child services?

                                            </label>

                                          </div>

                                        </div>

                                  </div>

                            </div>

                             <div class="col-md-3">

                                  <div class="row column-seperation padding-5">

                                        <div class="form-group form-group-default">

                                          <div class="checkbox check-success  ">

                                            <input type="checkbox" name="is_show_detail" id="checkbox-agree2" @if($obj->is_show_detail == 1) checked="checked" @endif>

                                            <label for="checkbox-agree2">Show detail page?

                                            </label>

                                          </div>

                                        </div>

                                  </div>

                            </div>


                             <div class="col-md-3">

                                  <div class="row column-seperation padding-5">

                                        <div class="form-group form-group-default">

                                          <div class="checkbox check-success  ">

                                            <input type="checkbox" name="is_show_in_main_service" id="checkbox-agree3" @if($obj->is_show_in_main_service == 1) checked="checked" @endif>

                                            <label for="checkbox-agree3">Show in main service page?

                                            </label>

                                          </div>

                                        </div>

                                  </div>

                            </div>

                            <div class="col-md-6">

                                <div class="row column-seperation padding-5">

                                    <div class="form-group form-group-default required">

                                        <label>Service name</label>

                                        <input type="text" name="name" class="form-control" value="{{$obj->name}}" required="" @if(!$obj->id) id="name" @endif>

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="row column-seperation padding-5">

                                    <div class="form-group form-group-default required">

                                        <label>Slug</label>

                                        <input type="text" name="slug" class="form-control" value="{{$obj->slug}}" required="" id="slug">

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="row column-seperation padding-5">

                                    <div class="form-group form-group-default">

                                        <label>Title1</label>

                                        <input type="text" name="title1" class="form-control" value="{{$obj->title1}}" >

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="row column-seperation padding-5">

                                    <div class="form-group form-group-default">

                                        <label>Title2</label>

                                        <input type="text" name="title2" class="form-control" value="{{$obj->title2}}" >

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-12">

                                <div class="row column-seperation padding-5">

                                    <div class="form-group form-group-default">

                                        <label class="">Summary</label>

                                        <textarea class="form-control" name="short_description" rows="3">{{$obj->short_description}}</textarea>

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-12">

                                    <div class="row column-seperation padding-5">

                                        <div class="form-group form-group-default">

                                            <label>Description</label>

                                            <textarea name="content" class="form-control richtext" id="description" data-image-url="{{route('spiderworks.miniweb.summernote.image')}}">{{$obj->content}}</textarea>

                                        </div>

                                    </div>

                            </div>

                            <div class="col-md-12">

                                    <div class="row column-seperation padding-5">

                                        <div class="form-group form-group-default">

                                            <label>Footer content</label>

                                            <textarea name="process_behind_description" class="form-control richtext" id="description" data-image-url="{{route('spiderworks.miniweb.summernote.image')}}">{{$obj->process_behind_description}}</textarea>

                                        </div>

                                    </div>

                            </div>

                        </div>

                    </div>

                    <div class="tab-pane @if($tab == 'seo') active show @endif" id="tab2Content">

                        <div class="row">



                            <div class="col-md-2">

                                <div class="row">

                                    <p class="col-md-12">Image left [580 X 680]</p>

                                    <div class="default-image-holder padding-5">

                                        <a href="javascript:void(0);" class="image-remove" data-remove-id="mediaId10"><i class="fa  fa-times-circle"></i></a>

                                        <a href="{{route('spiderworks.miniweb.media.popup', ['popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'10'])}}" class="miniweb-open-ajax-popup" title="Media Images" data-popup-size="large" id="image-holder-10">

                                            @if($obj->image_left_id && $obj->image_left)

                                                <img class="card-img-top padding-20" src="{{ asset('public/'.$obj->image_left->thumb_file_path) }}">

                                            @else

                                                <img class="card-img-top padding-20" src="{{asset('assets/img/add_image.png')}}">

                                            @endif

                                        </a>

                                        <input type="hidden" name="image_left_id" id="mediaId10" value="{{$obj->image_left_id}}">

                                    </div>

                                </div>

                            </div>



                                <div class="col-md-10">

                                    <div class="row column-seperation padding-5">

                                        <div class="form-group form-group-default">

                                            <label>Top Description</label>

                                            <textarea name="top_description" class="form-control richtext" id="top_description" data-image-url="{{route('spiderworks.miniweb.summernote.image')}}">{{$obj->top_description}}</textarea>

                                        </div>

                                    </div>

                                </div>





                                <div class="col-md-10">

                                    <div class="row column-seperation padding-5">

                                        <div class="form-group form-group-default">

                                            <label>Bottom Description</label>

                                            <textarea name="bottom_description" class="form-control richtext" id="bottom_description" data-image-url="{{route('spiderworks.miniweb.summernote.image')}}">{{$obj->bottom_description}}</textarea>

                                        </div>

                                    </div>

                                </div>



                            <div class="col-md-2">

                                <div class="row">

                                    <p class="col-md-12">Image right [580 X 680]</p>

                                    <div class="default-image-holder padding-5">

                                        <a href="javascript:void(0);" class="image-remove" data-remove-id="mediaId20"><i class="fa  fa-times-circle"></i></a>

                                        <a href="{{route('spiderworks.miniweb.media.popup', ['popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'20'])}}" class="miniweb-open-ajax-popup" title="Media Images" data-popup-size="large" id="image-holder-20">

                                            @if($obj->image_right_id && $obj->image_right)

                                                <img class="card-img-top padding-20" src="{{ asset('public/'.$obj->image_right->thumb_file_path) }}">

                                            @else

                                                <img class="card-img-top padding-20" src="{{asset('assets/img/add_image.png')}}">

                                            @endif

                                        </a>

                                        <input type="hidden" name="image_right_id" id="mediaId20" value="{{$obj->image_right_id}}">

                                    </div>

                                </div>

                            </div>

                                <div class="col-md-6">

                                    <div class="row column-seperation padding-5">

                                        <div class="form-group form-group-default">

                                            <label>Browser Title</label>

                                            <input type="text" name="browser_title" class="form-control" value="{{$obj->browser_title}}" required="" id="browser_title">

                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="row column-seperation padding-5">

                                        <div class="form-group form-group-default">

                                            <label>Meta Description</label>

                                            <textarea class="form-control" name="meta_description" rows="3">{{$obj->meta_description}}</textarea>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="row column-seperation padding-5">

                                        <div class="form-group form-group-default">

                                            <label>Meta Keywords</label>

                                            <textarea class="form-control" name="meta_keywords" rows="3">{{$obj->meta_keywords}}</textarea>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="row column-seperation padding-5">

                                        <div class="form-group form-group-default">

                                            <label>Extra Js</label>

                                            <textarea class="form-control" name="extra_js" rows="3">{{$obj->extra_js}}</textarea>

                                        </div>

                                    </div>

                                </div>

                        </div>

                    </div>

                    <div class="tab-pane @if($tab == 'services') active show @endif" id="tab3Service">

                        <div class="row">

                                <div class="col-md-12">

                                    <div class="row column-seperation padding-5">

                                        <div class="form-group form-group-default form-group-default-select2">

                                            <label class="">Related Services</label>

                                            <select name="related_services[]" class="full-width miniweb-select2-input" data-select2-url="{{route('select2.services')}}" data-placeholder="Select Related Service" multiple="">

                                                @if($obj->related_services && count($obj->related_services)>0)

                                                    @foreach($obj->related_services as $service)
                                                        @if(!empty($service->service))
                                                        <option value="{{$service->related_service_id}}" selected="selected">{{$service->service->name}}</option>
                                                        @endif

                                                    @endforeach

                                                @endif

                                            </select>

                                        </div>

                                    </div>

                                </div>

                        </div>

                    </div>

                    <div class="tab-pane @if($tab == 'media') active show @endif" id="tab3SEO">

                        <div class="row">

                            <div class="col-md-3">

                                <div class="row">

                                    <p class="col-md-12">Banner Image [1920 X 680]</p>

                                    <div class="default-image-holder padding-5">

                                        <a href="javascript:void(0);" class="image-remove" data-remove-id="mediaId0"><i class="fa  fa-times-circle"></i></a>

                                        <a href="{{route('spiderworks.miniweb.media.popup', ['popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'0'])}}" class="miniweb-open-ajax-popup" title="Media Images" data-popup-size="large" id="image-holder-0">

                                          @if($obj->banner_image_id && $obj->banner_image)

                                            <img class="card-img-top padding-20" src="{{ asset('public/'.$obj->banner_image->thumb_file_path) }}">

                                          @else

                                            <img class="card-img-top padding-20" src="{{asset('assets/img/add_image.png')}}">

                                          @endif

                                        </a>

                                        <input type="hidden" name="banner_image_id" id="mediaId0" value="{{$obj->banner_image_id}}">

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-3">

                                <div class="row">

                                    <p class="col-md-12">Featured Image [300 X 200]</p>

                                    <div class="default-image-holder padding-5">

                                        <a href="javascript:void(0);" class="image-remove" data-remove-id="mediaId1"><i class="fa  fa-times-circle"></i></a>

                                        <a href="{{route('spiderworks.miniweb.media.popup', ['popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'1'])}}" class="miniweb-open-ajax-popup" title="Media Images" data-popup-size="large" id="image-holder-1">

                                          @if($obj->featured_image_id && $obj->featured_image)

                                            <img class="card-img-top padding-20" src="{{ asset('public/'.$obj->featured_image->thumb_file_path) }}">

                                          @else

                                            <img class="card-img-top padding-20" src="{{asset('assets/img/add_image.png')}}">

                                          @endif

                                        </a>

                                        <input type="hidden" name="featured_image_id" id="mediaId1" value="{{$obj->featured_image_id}}">

                                    </div>

                              </div>

                            </div>



                            <div class="col-md-3">

                                <div class="row">

                                    <p class="col-md-12">Icon [65 X 65]</p>

                                    <div class="default-image-holder padding-5">

                                        <a href="javascript:void(0);" class="image-remove" data-remove-id="mediaId30"><i class="fa  fa-times-circle"></i></a>

                                        <a href="{{route('spiderworks.miniweb.media.popup', ['popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'30'])}}" class="miniweb-open-ajax-popup" title="Media Images" data-popup-size="large" id="image-holder-30">

                                            @if($obj->icon_image_id && $obj->icon)

                                                <img class="card-img-top padding-20" src="{{ asset('public/'.$obj->icon->thumb_file_path) }}">

                                            @else

                                                <img class="card-img-top padding-20" src="{{asset('assets/img/add_image.png')}}">

                                            @endif

                                        </a>

                                        <input type="hidden" name="icon_image_id" id="mediaId30" value="{{$obj->icon_image_id}}">

                                    </div>

                                </div>

                            </div>



                            <div class="col-md-3">

                                <div class="row">

                                    <p class="col-md-12">Icon alt [65 X 65]</p>

                                    <div class="default-image-holder padding-5">

                                        <a href="javascript:void(0);" class="image-remove" data-remove-id="mediaId40"><i class="fa  fa-times-circle"></i></a>

                                        <a href="{{route('spiderworks.miniweb.media.popup', ['popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'40'])}}" class="miniweb-open-ajax-popup" title="Media Images" data-popup-size="large" id="image-holder-40">

                                            @if($obj->icon_alt_image_id && $obj->icon_alt)

                                                <img class="card-img-top padding-20" src="{{ asset('public/'.$obj->icon_alt->thumb_file_path) }}">

                                            @else

                                                <img class="card-img-top padding-20" src="{{asset('assets/img/add_image.png')}}">

                                            @endif

                                        </a>

                                        <input type="hidden" name="icon_alt_image_id" id="mediaId40" value="{{$obj->icon_alt_image_id}}">

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-12" align="right">

                            <button type="submit" class="btn btn-primary">Submit</button>

                        </div>

                    </div>

                </div>

                </form>

            </div>

        </div>



@endsection

@section('bottom')

    <script type="text/javascript">

        $("#name").keyup(function () {

          $("#slug").val(slugify($("#name").val()))

        });

        var validator = $('#InputFrm').validate({

              rules: {

                "name": "required",

                slug: {

                  required: true,

                  remote: {

                      url: "{{url('validation/unique-slug')}}",

                      data: {

                        id: function() {

                          return $( "#inputId" ).val();

                        },

                        table: 'services',

                    }

                  }

                },

              },

              messages: {

                "name": "Service name cannot be blank",

                "slug": {

                    required: "Slug cannot be blank",

                    remote: "Slug already in use"

                },

              },

            });





    </script>

@parent

@endsection