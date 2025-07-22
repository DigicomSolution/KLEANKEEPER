@extends('spiderworks.miniweb.fileupload')

@section('head')

@endsection

@section('content')

    <div class="container-fluid">

        <div class="col-md-12" style="margin-bottom: 20px;" align="right">
            <span class="page-heading">WIDGETS</span>
        </div>

        <div class="col-lg-12">
            <div class="card card-borderless">
                <div class="p-t-15">

                <ul class="nav nav-tabs nav-tabs-simple d-none d-md-flex d-lg-flex d-xl-flex" role="tablist" data-init-reponsive-tabs="dropdownfx">
                    
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active show" id="tab1Basic">
                        <div class="row">
                            <form method="POST" action="{{ url('admin/widgets/save') }}" class="col-md-6" data-validate=true>
                                @csrf
                                <input type="hidden" name="id" value="1">
                                <div  >
                                    <div class="card">
                                        <div class="card-header">
                                            <b>Business Transformed</b>
                                        </div>
                                        <div class="card-body row">
                                            <div class="col-md-12">
                                                <div class="row column-seperation padding-5">
                                                    <div class="form-group form-group-default required">
                                                        <label>Heading</label>
                                                        <input type="text" name="section[heading]" class="form-control" value="{{$data['business-transformed']['heading']}}" required="">
                                                    </div>
                                                </div>
                                                <div class="row column-seperation padding-5 mt-2">
                                                    <div class="form-group form-group-default m-0">
                                                        <label class="">Description</label>
                                                        <textarea name="section[description]" class="form-control" rows="3" >{{$data['business-transformed']['description']}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <form method="POST" action="{{ url('admin/widgets/save') }}" class="col-md-6" data-validate=true>
                                @csrf
                                <input type="hidden" name="id" value="2">
                                <div>
                                    <div class="card">
                                        <div class="card-header">
                                            <b>Statistics</b>
                                        </div>
                                        <div class="card-body row">
                                            <div class="col-md-4">
                                                <div class="row column-seperation padding-5">
                                                    <div class="form-group form-group-default required">
                                                        <label>Years</label>
                                                        <input type="text" name="section[years1]" class="form-control" value="{{$data['business-statistics']['years1']}}" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="row column-seperation padding-5">
                                                    <div class="form-group form-group-default required">
                                                        <label>Text</label>
                                                        <input type="text" name="section[text1]" class="form-control" value="{{$data['business-statistics']['text1']}}" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row column-seperation padding-5">
                                                    <div class="form-group form-group-default required">
                                                        <label>Years</label>
                                                        <input type="text" name="section[years2]" class="form-control" value="{{$data['business-statistics']['years2']}}" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="row column-seperation padding-5">
                                                    <div class="form-group form-group-default required">
                                                        <label>Text</label>
                                                        <input type="text" name="section[text2]" class="form-control" value="{{$data['business-statistics']['text2']}}" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row column-seperation padding-5">
                                                    <div class="form-group form-group-default required">
                                                        <label>Years</label>
                                                        <input type="text" name="section[years3]" class="form-control" value="{{$data['business-statistics']['years3']}}" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="row column-seperation padding-5">
                                                    <div class="form-group form-group-default required">
                                                        <label>Text</label>
                                                        <input type="text" name="section[text3]" class="form-control" value="{{$data['business-statistics']['text3']}}" required="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                                <div class="col-md-6">
                                    <form method="POST" action="{{ url('admin/widgets/save') }}" data-validate=true>
                                    @csrf
                                    <input type="hidden" name="id" value="3">
                                    <div class="card">
                                        <div class="card-header">
                                            <b>Testimonials</b>
                                        </div>
                                        <div class="card-body row">
                                            <div class="col-md-12">
                                                <div class="row column-seperation padding-5">
                                                    <div class="form-group form-group-default required">
                                                        <label>Heading</label>
                                                        <input type="text" name="section[heading]" class="form-control" value="{{$data['testimonials']['heading']}}" required="">
                                                    </div>
                                                </div>
                                                <div class="row column-seperation padding-5 mt-2">
                                                    <div class="form-group form-group-default m-0">
                                                        <label class="">Description</label>
                                                        <textarea name="section[description]" class="form-control" rows="3" >{{$data['testimonials']['description']}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                    </form>
                                    <form method="POST" action="{{ url('admin/widgets/save') }}" data-validate=true>
                                        @csrf
                                        <input type="hidden" name="id" value="5">
                                    <div class="card">
                                        <div class="card-header">
                                            <b>Contact Us</b>
                                        </div>
                                        <div class="card-body mb-2 row">
                                            <div class="col-md-5 p-0">
                                                <div class="default-image-holder padding-5">
                                                        <a href="javascript:void(0);" class="image-remove" data-remove-id="mediaId2"><i class="fa  fa-times-circle"></i></a>
                                                        <a href="{{route('spiderworks.miniweb.media.popup', ['popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'2'])}}" class="miniweb-open-ajax-popup" title="Media Images" data-popup-size="large" id="image-holder-2">
                                                            @if($data['contact-us']['media_id'] && $image = App\Models\Widget::get_image($data['contact-us']['media_id']))
                                                                <img class="card-img-top padding-20" src="{{ asset('public/'.$image->thumb_file_path) }}">
                                                            @else
                                                                <img class="card-img-top padding-20" src="{{asset('miniweb/img/add_image.png')}}">
                                                            @endif
                                                        </a>
                                                        <input type="hidden" name="section[media_id]" id="mediaId2" value="{{$data['contact-us']['media_id']}}">
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="row column-seperation padding-5">
                                                    <div class="form-group form-group-default required">
                                                        <label>Heading 1</label>
                                                        <input type="text" name="section[heading1]" class="form-control" required="" value="{{$data['contact-us']['heading1']}}" >
                                                    </div>
                                                </div>
                                                <div class="row column-seperation padding-5">
                                                    <div class="form-group form-group-default required">
                                                        <label>Heading 2</label>
                                                        <input type="text" name="section[heading2]" class="form-control" required="" value="{{$data['contact-us']['heading2']}}" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            
                            <form method="POST" action="{{ url('admin/widgets/save') }}" class="col-md-6" data-validate=true>
                                @csrf
                                <input type="hidden" name="id" value="4">
                                <div >
                                    <div class="card">
                                        <div class="card-header">
                                            <b>Brands</b>
                                        </div>
                                        <div class="card-body row">
                                            <div class="col-md-5 p-0">
                                                <div class="default-image-holder padding-5">
                                                        <a href="javascript:void(0);" class="image-remove" data-remove-id="mediaId3"><i class="fa  fa-times-circle"></i></a>
                                                        <a href="{{route('spiderworks.miniweb.media.popup', ['popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'3'])}}" class="miniweb-open-ajax-popup" title="Media Images" data-popup-size="large" id="image-holder-3">
                                                            @if($data['brands']['media_id'] && $image = App\Models\Widget::get_image($data['brands']['media_id']))
                                                                <img class="card-img-top padding-20" src="{{ asset('public/'.$image->thumb_file_path) }}">
                                                            @else
                                                                <img class="card-img-top padding-20" src="{{asset('miniweb/img/add_image.png')}}">
                                                            @endif
                                                        </a>
                                                        <input type="hidden" name="section[media_id]" id="mediaId3" value="{{$data['brands']['media_id']}}">
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="row column-seperation padding-5">
                                                    <div class="form-group form-group-default required">
                                                        <label>Heading 1</label>
                                                        <input type="text" name="section[heading1]" class="form-control" value="{{$data['brands']['heading1']}}" required="">
                                                    </div>
                                                </div>
                                                <div class="row column-seperation padding-5">
                                                    <div class="form-group form-group-default required">
                                                        <label>Heading 2</label>
                                                        <input type="text" name="section[heading2]" class="form-control" value="{{$data['brands']['heading2']}}" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row column-seperation padding-5 mt-2">
                                                    <div class="form-group form-group-default m-0">
                                                        <label class="">Description</label>
                                                        <textarea name="section[description]" class="form-control" rows="3" >{{$data['brands']['description']}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="row column-seperation padding-5">
                                                    <label for="basic-url">Related Page</label>
                                                    <div class="input-group mb-3">
                                                      <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon3">{{url('/')}}/</span>
                                                      </div>
                                                      <input type="text" class="form-control" name="section[related_page]" aria-describedby="basic-addon3" value="{{$data['brands']['related_page']}}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <form method="POST" action="{{ url('admin/widgets/save') }}" class="col-md-6" data-validate=true>
                                @csrf
                                <input type="hidden" name="id" value="7">
                                <div >
                                    <div class="card">
                                        <div class="card-header">
                                            <b>Case Studies</b>
                                        </div>
                                        <div class="card-body row">
                                            <div class="col-md-12">
                                                <div class="row column-seperation padding-5">
                                                    <div class="form-group form-group-default required">
                                                        <label>Heading</label>
                                                        <input type="text" name="section[heading]" class="form-control" value="{{$data['case-studies']['heading']}}" required="">
                                                    </div>
                                                </div>
                                                <div class="row column-seperation padding-5 mt-2">
                                                    <div class="form-group form-group-default m-0">
                                                        <label class="">Description</label>
                                                        <textarea name="section[description]" class="form-control" rows="3" >{{$data['case-studies']['description']}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <form method="POST" action="{{ url('admin/widgets/save') }}" class="col-md-6" data-validate=true>
                                @csrf
                                <input type="hidden" name="id" value="6">
                                <div>
                                    <div class="card">
                                        <div class="card-header">
                                            <b>commitments</b>
                                        </div>
                                        <div class="card-body row">
                                            <div class="col-md-5 p-0">
                                                <div class="default-image-holder padding-5">
                                                        <a href="javascript:void(0);" class="image-remove" data-remove-id="mediaId4"><i class="fa  fa-times-circle"></i></a>
                                                        <a href="{{route('spiderworks.miniweb.media.popup', ['popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'4'])}}" class="miniweb-open-ajax-popup" title="Media Images" data-popup-size="large" id="image-holder-4">
                                                            @if($data['commitments']['media_id'] && $image = App\Models\Widget::get_image($data['commitments']['media_id']))
                                                                <img class="card-img-top padding-20" src="{{ asset('public/'.$image->thumb_file_path) }}">
                                                            @else
                                                                <img class="card-img-top padding-20" src="{{asset('miniweb/img/add_image.png')}}">
                                                            @endif
                                                        </a>
                                                        <input type="hidden" name="section[media_id]" id="mediaId4" value="{{$data['commitments']['media_id']}}">
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="row column-seperation padding-5">
                                                    <div class="form-group form-group-default required">
                                                        <label>Heading</label>
                                                        <input type="text" name="section[heading]" class="form-control" value="{{$data['commitments']['heading']}}" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row column-seperation padding-5 mt-2">
                                                    <div class="form-group form-group-default m-0">
                                                        <label class="">Description</label>
                                                        <textarea name="section[description]" class="form-control" rows="3">{{$data['commitments']['description']}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="row column-seperation padding-5">
                                                    <label for="basic-url">Related Listing</label>
                                                    <div class="input-group mb-3">
                                                        <select name="section[listing_id]" class="full-width miniweb-select2-input" data-select2-url="{{route('select2.listings')}}" data-placeholder="Select a Listing">
                                                            @if($data['commitments']['listing_id'] && $listing=App\Models\Widget::get_listing($data['commitments']['listing_id']))
                                                                <option value="{{$listing->id}}" selected="selected">{{$listing->name}}</option>
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
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