@extends('spiderworks.miniweb.fileupload')

@section('head')

@endsection

@section('content')
    @php
        $content = json_decode($obj->top_description);
    @endphp
    <div class="container-fluid">

        <div class="col-md-12" style="margin-bottom: 20px;" align="right">
            @if($obj->id)
                <span class="page-heading">EDIT PAGE</span>
            @else
                <span class="page-heading">CREATE NEW PAGE</span>
            @endif
            <div >
                <div class="btn-group">
                    <a href="{{route($route.'.index')}}"  class="btn btn-success"><i class="fa fa-list"></i> List
                    </a>
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
                <input type="hidden" name="id" @if($obj->id) value="{{encrypt($obj->id)}}" @endif id="inputId">

                <ul class="nav nav-tabs nav-tabs-simple d-none d-md-flex d-lg-flex d-xl-flex" role="tablist" data-init-reponsive-tabs="dropdownfx">
                    <li class="nav-item">
                        <a class="active show" data-toggle="tab" role="tab"
                           data-target="#tab1Basic"
                        href="#" aria-selected="true">Extra Details</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" data-toggle="tab" role="tab"
                           data-target="#tab3SEO"
                        class="" aria-selected="false">SEO</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active show" id="tab1Basic">
                        @include('spiderworks.miniweb.frontend_pages._partials.'.$obj->slug)
                    </div>
                    <div class="tab-pane" id="tab3SEO">
                        <div class="row">
                            <div class="col-md-12">
                                    <div class="row column-seperation padding-5">
                                        <div class="form-group form-group-default">
                                            <label>Bottom Description</label>
                                            <textarea name="bottom_description" class="form-control richtext" id="bottom_description" data-image-url="{{route('spiderworks.miniweb.summernote.image')}}">{{$obj->bottom_description}}</textarea>
                                        </div>
                                    </div>
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