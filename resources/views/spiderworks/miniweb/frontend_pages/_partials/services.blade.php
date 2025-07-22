<div class="row">
                            <div class="col-md-6" >
                                <div class="card">
                                    <div class="card-header p-1">
                                        <b>Section1</b>
                                    </div>
                                    <div class="card-body p-1 row">
                                        <div class="col-md-4">
                                            <div class="default-image-holder padding-5">
                                                    <a href="javascript:void(0);" class="image-remove" data-remove-id="mediaId0"><i class="fa  fa-times-circle"></i></a>
                                                    <a href="{{route('spiderworks.miniweb.media.popup', ['popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'0'])}}" class="miniweb-open-ajax-popup" title="Media Images" data-popup-size="large" id="image-holder-0">
                                                      @if($content->section1->media_id && $image = $obj->get_image($content->section1->media_id))
                                                        <img class="card-img-top padding-20" src="{{ asset('public/'.$image->thumb_file_path) }}">
                                                      @else
                                                        <img class="card-img-top padding-20" src="{{asset('miniweb/img/add_image.png')}}">
                                                      @endif
                                                    </a>
                                                    <input type="hidden" name="section1[media_id]" id="mediaId0" value="{{$content->section1->media_id}}">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="row column-seperation padding-5">
                                                <div class="form-group form-group-default required">
                                                    <label>Heading 1</label>
                                                    <input type="text" name="section1[heading1]" class="form-control" value="{{$content->section1->heading1}}" required="">
                                                </div>
                                            </div>
                                            <div class="row column-seperation padding-5">
                                                <div class="form-group form-group-default required">
                                                    <label>Heading 2</label>
                                                    <input type="text" name="section1[heading2]" class="form-control" value="{{$content->section1->heading2}}" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 p-0">
                                            <div class="row column-seperation padding-5 mt-2">
                                                <div class="form-group form-group-default m-0">
                                                    <label class="">Description</label>
                                                    <textarea name="section1[description]" class="form-control" rows="3" >{{$content->section1->description}}</textarea>
                                                </div>
                                            </div>
                                            <div class="row column-seperation padding-5">
                                                <label for="basic-url">Related Page</label>
                                                <div class="input-group mb-3">
                                                  <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3">{{url('/')}}/</span>
                                                  </div>
                                                  <input type="text" class="form-control" name="section1[related_page]" aria-describedby="basic-addon3" value="{{$content->section1->related_page}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" >
                                <div class="card">
                                    <div class="card-header p-1">
                                        <b>Section2</b>
                                    </div>
                                    <div class="card-body p-1 row">
                                        <div class="col-md-4">
                                            <div class="default-image-holder padding-5">
                                                    <a href="javascript:void(0);" class="image-remove" data-remove-id="mediaId4"><i class="fa  fa-times-circle"></i></a>
                                                    <a href="{{route('spiderworks.miniweb.media.popup', ['popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'4'])}}" class="miniweb-open-ajax-popup" title="Media Images" data-popup-size="large" id="image-holder-4">
                                                      @if($content->section9->media_id && $image = $obj->get_image($content->section9->media_id))
                                                        <img class="card-img-top padding-20" src="{{ asset('public/'.$image->thumb_file_path) }}">
                                                      @else
                                                        <img class="card-img-top padding-20" src="{{asset('miniweb/img/add_image.png')}}">
                                                      @endif
                                                    </a>
                                                    <input type="hidden" name="section9[media_id]" id="mediaId4" value="{{$content->section9->media_id}}">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="row column-seperation padding-5">
                                                <div class="form-group form-group-default required">
                                                    <label>Heading</label>
                                                    <input type="text" name="section9[heading]" class="form-control" value="{{$content->section9->heading}}" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 p-0">
                                            <div class="row column-seperation padding-5 mt-2">
                                                <div class="form-group form-group-default m-0">
                                                    <label class="">Description</label>
                                                    <textarea name="section9[description]" class="form-control" rows="3">{{$content->section9->description}}</textarea>
                                                </div>
                                            </div>
                                            <div class="row column-seperation padding-5">
                                                <label for="basic-url">Related Listing</label>
                                                <div class="input-group mb-3">
                                                    <select name="section9[listing_id]" class="full-width miniweb-select2-input" data-select2-url="{{route('select2.listings')}}" data-placeholder="Select a Listing">
                                                        @if($content->section9->listing_id && $listing=$obj->get_listing($content->section9->listing_id))
                                                            <option value="{{$listing->id}}" selected="selected">{{$listing->name}}</option>
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-6" >
                                <div class="card">
                                    <div class="card-header p-1">
                                        <b>Section3</b>
                                    </div>
                                    <div class="card-body p-1 row">
                                        <div class="col-md-12 p-0">
                                            <div class="row column-seperation padding-5">
                                                <div class="form-group form-group-default required">
                                                    <label>Widget</label>
                                                    <select name="section3[widget_id]" class="full-width miniweb-select2-input" data-select2-url="{{route('select2.widgets')}}" data-placeholder="Select a Widget">
                                                        @if($content->section3->widget_id && $widget=$obj->get_widget($content->section3->widget_id))
                                                            <option value="{{$widget->id}}" selected="selected">{{$widget->name}}</option>
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" >
                                <div class="card">
                                    <div class="card-header p-1">
                                        <b>Section4</b>
                                    </div>
                                    <div class="card-body p-1 row">
                                        <div class="col-md-12 p-0">
                                            <div class="row column-seperation padding-5">
                                                <div class="form-group form-group-default required">
                                                    <label>Widget</label>
                                                    <select name="section4[widget_id]" class="full-width miniweb-select2-input" data-select2-url="{{route('select2.widgets')}}" data-placeholder="Select a Widget">
                                                        @if($content->section4->widget_id && $widget=$obj->get_widget($content->section4->widget_id))
                                                            <option value="{{$widget->id}}" selected="selected">{{$widget->name}}</option>
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>