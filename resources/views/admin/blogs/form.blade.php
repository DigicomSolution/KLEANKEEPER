@extends('spiderworks.miniweb.fileupload')

@section('head')

@endsection

@section('content')
    <div class="container-fluid">

        <div class="col-md-12" style="margin-bottom: 20px;" align="right">
            @if($obj->id)
                <span class="page-heading">EDIT BLOG</span>
            @else
                <span class="page-heading">CREATE NEW BLOG</span>
            @endif
            <div >
                <div class="btn-group">
                    <a href="{{route($route.'.index')}}"  class="btn btn-success"><i class="fa fa-list"></i> List
                    </a>
                    @if($obj->id)
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
                    <form method="POST" action="{{ route($route.'.update') }}" class="p-t-15" id="PageFrm" data-validate=true>
                @else
                    <form method="POST" action="{{ route($route.'.store') }}" class="p-t-15" id="PageFrm" data-validate=true>
                @endif
                @csrf

                        <input type="hidden" name="type" value="blog">

                <input type="hidden" name="id" @if($obj->id) value="{{encrypt($obj->id)}}" @endif id="inputId">


                <ul class="nav nav-tabs nav-tabs-simple d-none d-md-flex d-lg-flex d-xl-flex" role="tablist" data-init-reponsive-tabs="dropdownfx">
                    <li class="nav-item">
                        <a class="active show" data-toggle="tab" role="tab"
                           data-target="#tab1Basic"
                        href="#" aria-selected="true">Basic Details</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active show" id="tab1Basic">
                        <div class="row">




                            <div class="col-md-4">
                                <div class="row column-seperation padding-5">
                                    <div class="form-group form-group-default required">
                                        <label>Title</label>
                                        <input type="text" name="name" class="form-control" value="{{$obj->name}}" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row column-seperation padding-5">
                                    <div class="form-group form-group-default required">
                                        <label class="">Slug (for url)</label>
                                        <input type="text" name="slug" class="form-control" value="{{$obj->slug}}" id="slug">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row column-seperation padding-5">
                                    <div class="form-group form-group-default">
                                        <label>Choose a related service</label>
                                        <select name="related_service_id" class="form-control">
                                            <option value="">Please choose one</option>
                                            @foreach($services as $ob)
                                                <option value="{{$ob->id}}" @if($obj->related_service_id == $ob->id) selected @endif>{{$ob->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>



                            <div class="col-md-12">
                                <div class="row column-seperation padding-5">
                                    <div class="form-group form-group-default">
                                        <label>Short Description</label>
                                        <textarea name="short_description" class="form-control" rows="3" id="short_description">{{$obj->short_description}}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="row">
                                    <p class="col-md-12">Featured Image [770 X 480]</p>
                                    <div class="default-image-holder padding-5">
                                        <a href="javascript:void(0);" class="image-remove"><i class="fa  fa-times-circle"></i></a>
                                        <a href="{{route('spiderworks.miniweb.media.popup', ['popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'0', 'related_id'=>$obj->id])}}" class="miniweb-open-ajax-popup" title="Media Images" data-popup-size="large" id="image-holder-0">
                                            @if($obj->media_id && $obj->featured_image)
                                                <img class="card-img-top padding-20" src="{{ asset('public/'.$obj->featured_image->thumb_file_path) }}">
                                            @else
                                                <img class="card-img-top padding-20" src="{{asset('miniweb/img/add_image.png')}}">
                                            @endif
                                        </a>
                                        <input type="hidden" name="media_id" id="mediaId0" value="{{$obj->media_id}}">
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-10">
                                <div class="row column-seperation padding-5">
                                    <div class="form-group form-group-default required">
                                        <label>Content</label>
                                        <textarea name="content" class="form-control richtext" id="content" data-image-url="{{route('spiderworks.miniweb.summernote.image')}}">{{$obj->content}}</textarea>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <hr>
                            </div>

                            <div class="col-md-6">
                                <div class="row column-seperation padding-5">
                                    <div class="form-group form-group-default">
                                        <label>Browser title</label>
                                        <input type="text" class="form-control" name="browser_title" id="browser_title" value="{{$obj->browser_title}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row column-seperation padding-5">
                                    <div class="form-group form-group-default">
                                        <label class="">Meta Keywords</label>
                                        <textarea name="meta_keywords" class="form-control" rows="3" id="meta_keywords">{{$obj->meta_keywords}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row column-seperation padding-5">
                                    <div class="form-group form-group-default">
                                        <label class="">Meta description</label>
                                        <textarea name="meta_description" class="form-control" rows="3" id="meta_description">{{$obj->meta_description}}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <hr>
                            </div>

                            <div class="col-md-6">
                                <div class="row column-seperation padding-5">
                                    <div class="form-group form-group-default">
                                        <label>Author name</label>
                                        <input type="text" class="form-control" name="author" id="author" value="{{$obj->author}}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row column-seperation padding-5">
                                    <div class="form-group form-group-default">
                                        <label>Blog publishing date</label>
                                        <input type="date" class="form-control" name="blog_date" id="author" value="@if(!empty($obj->blog_date)){{$obj->blog_date}}@else{{date('Y-m-d')}}@endif">
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
    </div>
@endsection
@section('bottom')
    <script type="text/javascript">
        var validator = $('#PageFrm').validate({
            ignore: [],
            rules: {
                "name": "required",
                slug: {
                  required: true,
                  remote: {
                      url: "{{route('spiderworks.miniweb.unique.page-slug')}}",
                      data: {
                        id: function() {
                          return $( "#inputId" ).val();
                      }
                    }
                  }
                },
                content: {
                  required: function(textarea) {
                     return $('#'+textarea.id).summernote('isEmpty');
                  }
                },
              },
              messages: {
                "name": "Page title cannot be blank",
                slug: {
                  required: "Slug cannot be blank",
                  remote: "Slug is already in use",
                },
                "description": "Page content cannot be blank",
              },
            });
    </script>
@parent
@endsection