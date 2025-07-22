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
                                                    <a href="javascript:void(0);" class="image-remove" data-remove-id="mediaId1"><i class="fa  fa-times-circle"></i></a>
                                                    <a href="{{route('spiderworks.miniweb.media.popup', ['popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'1'])}}" class="miniweb-open-ajax-popup" title="Media Images" data-popup-size="large" id="image-holder-1">
                                                      @if($content->section2->media_id && $image = $obj->get_image($content->section2->media_id))
                                                        <img class="card-img-top padding-20" src="{{ asset('public/'.$image->thumb_file_path) }}">
                                                      @else
                                                        <img class="card-img-top padding-20" src="{{asset('miniweb/img/add_image.png')}}">
                                                      @endif
                                                    </a>
                                                    <input type="hidden" name="section2[media_id]" id="mediaId1" value="{{$content->section2->media_id}}">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="row column-seperation padding-5">
                                                <div class="form-group form-group-default required">
                                                    <label>Heading 1</label>
                                                    <input type="text" name="section2[heading1]" class="form-control" value="{{$content->section2->heading1}}" required="">
                                                </div>
                                            </div>
                                            <div class="row column-seperation padding-5">
                                                <div class="form-group form-group-default required">
                                                    <label>Heading 2</label>
                                                    <input type="text" name="section2[heading2]" class="form-control" value="{{$content->section2->heading2}}" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 p-0">
                                            <div class="row column-seperation padding-5 mt-2">
                                                <div class="form-group form-group-default m-0">
                                                    <label class="">Description</label>
                                                    <textarea name="section2[description]" class="form-control" rows="3" >{{$content->section2->description}}</textarea>
                                                </div>
                                            </div>
                                            <div class="row column-seperation padding-5">
                                                <label for="basic-url">Related Page</label>
                                                <div class="input-group mb-3">
                                                  <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3">{{url('/')}}/</span>
                                                  </div>
                                                  <input type="text" class="form-control" name="section2[related_page]" aria-describedby="basic-addon3" value="{{$content->section2->related_page}}">
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
                                        <div class="col-md-6">
                                            Video
                                            <div class="default-image-holder default-video-holder padding-5 m-2">
                                                    <a href="javascript:void(0);" class="video-remove" data-remove-id="mediaId2"><i class="fa  fa-times-circle"></i></a>
                                                    <a href="{{route('spiderworks.miniweb.media.popup', ['popup_type'=>'single_image', 'type'=>'Video', 'holder_attr'=>'2'])}}" class="miniweb-open-ajax-popup" title="Media Videos" data-popup-size="large" id="image-holder-2">
                                                      @if($content->section3->video_id && $image = $obj->get_image($content->section3->video_id))
                                                        <div class="embed-responsive embed-responsive-16by9">
                                                          <video class="embed-responsive-item" controls>
                                                            <source src="{{ asset('public/'.$image->file_path) }}" type="{{$image->file_type}}">
                                                            Your browser does not support the video tag.
                                                          </video>
                                                        </div>
                                                      @else
                                                        <img class="card-img-top padding-20" src="{{asset('miniweb/img/add_image.png')}}">
                                                      @endif
                                                    </a>
                                                    <input type="hidden" name="section3[video_id]" id="mediaId2" value="{{$content->section3->video_id}}">
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-6">
                                            Image
                                            <div class="default-image-holder padding-5 m-2">
                                                    <a href="javascript:void(0);" class="image-remove" data-remove-id="mediaId3"><i class="fa  fa-times-circle"></i></a>
                                                    <a href="{{route('spiderworks.miniweb.media.popup', ['popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'3'])}}" class="miniweb-open-ajax-popup" title="Media Images" data-popup-size="large" id="image-holder-3">
                                                      @if($content->section3->media_id && $image = $obj->get_image($content->section3->media_id))
                                                        <img class="card-img-top padding-20" src="{{ asset('public/'.$image->thumb_file_path) }}">
                                                      @else
                                                        <img class="card-img-top padding-20" src="{{asset('miniweb/img/add_image.png')}}">
                                                      @endif
                                                    </a>
                                                    <input type="hidden" name="section3[media_id]" id="mediaId3" value="{{$content->section3->media_id}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row column-seperation padding-5">
                                                <div class="form-group form-group-default required">
                                                    <label>Heading 1</label>
                                                    <input type="text" name="section3[heading1]" class="form-control" value="{{$content->section3->heading1}}" required="">
                                                </div>
                                            </div>
                                        </div><div class="col-md-6">
                                            <div class="row column-seperation padding-5">
                                                <div class="form-group form-group-default required">
                                                    <label>Heading 2</label>
                                                    <input type="text" name="section3[heading2]" class="form-control" value="{{$content->section3->heading2}}" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 p-0">
                                            <div class="row column-seperation padding-5 mt-2">
                                                <div class="form-group form-group-default m-0">
                                                    <label class="">Description</label>
                                                    <textarea name="section3[description]" class="form-control" rows="3" >{{$content->section3->description}}</textarea>
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
                                        <div class="col-md-4">
                                            <div class="default-image-holder padding-5">
                                                    <a href="javascript:void(0);" class="image-remove" data-remove-id="mediaId4"><i class="fa  fa-times-circle"></i></a>
                                                    <a href="{{route('spiderworks.miniweb.media.popup', ['popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'4'])}}" class="miniweb-open-ajax-popup" title="Media Images" data-popup-size="large" id="image-holder-4">
                                                      @if($content->section4->media_id && $image = $obj->get_image($content->section4->media_id))
                                                        <img class="card-img-top padding-20" src="{{ asset('public/'.$image->thumb_file_path) }}">
                                                      @else
                                                        <img class="card-img-top padding-20" src="{{asset('miniweb/img/add_image.png')}}">
                                                      @endif
                                                    </a>
                                                    <input type="hidden" name="section4[media_id]" id="mediaId4" value="{{$content->section4->media_id}}">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="row column-seperation padding-5">
                                                <div class="form-group form-group-default required">
                                                    <label>Heading 1</label>
                                                    <input type="text" name="section4[heading1]" class="form-control" value="{{$content->section4->heading1}}" required="">
                                                </div>
                                            </div>
                                            <div class="row column-seperation padding-5">
                                                <div class="form-group form-group-default required">
                                                    <label>Heading 2</label>
                                                    <input type="text" name="section4[heading2]" class="form-control" value="{{$content->section4->heading2}}" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 p-0">
                                            <div class="row column-seperation padding-5 mt-2">
                                                <div class="form-group form-group-default m-0">
                                                    <label class="">Description</label>
                                                    <textarea name="section4[description]" class="form-control" rows="3" >{{$content->section4->description}}</textarea>
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
                                        <b>Section5</b>
                                    </div>
                                    <div class="card-body p-1 row">
                                        <div class="col-md-4">
                                            <div class="default-image-holder padding-5">
                                                    <a href="javascript:void(0);" class="image-remove" data-remove-id="mediaId5"><i class="fa  fa-times-circle"></i></a>
                                                    <a href="{{route('spiderworks.miniweb.media.popup', ['popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'5'])}}" class="miniweb-open-ajax-popup" title="Media Images" data-popup-size="large" id="image-holder-5">
                                                      @if($content->section5->media_id && $image = $obj->get_image($content->section5->media_id))
                                                        <img class="card-img-top padding-20" src="{{ asset('public/'.$image->thumb_file_path) }}">
                                                      @else
                                                        <img class="card-img-top padding-20" src="{{asset('miniweb/img/add_image.png')}}">
                                                      @endif
                                                    </a>
                                                    <input type="hidden" name="section5[media_id]" id="mediaId5" value="{{$content->section5->media_id}}">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="row column-seperation padding-5">
                                                <div class="form-group form-group-default required">
                                                    <label>Heading 1</label>
                                                    <input type="text" name="section5[heading1]" class="form-control" value="{{$content->section5->heading1}}" required="">
                                                </div>
                                            </div>
                                            <div class="row column-seperation padding-5">
                                                <div class="form-group form-group-default required">
                                                    <label>Heading 2</label>
                                                    <input type="text" name="section5[heading2]" class="form-control" value="{{$content->section5->heading2}}" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 p-0">
                                            <div class="row column-seperation padding-5 mt-2">
                                                <div class="form-group form-group-default m-0">
                                                    <label class="">Description</label>
                                                    <textarea name="section5[description]" class="form-control" rows="3" >{{$content->section5->description}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" >
                                <div class="card">
                                    <div class="card-header p-1">
                                        <b>Section6</b>
                                    </div>
                                    <div class="card-body p-1 row">
                                        <div class="col-md-4">
                                            <div class="default-image-holder padding-5">
                                                    <a href="javascript:void(0);" class="image-remove" data-remove-id="mediaId6"><i class="fa  fa-times-circle"></i></a>
                                                    <a href="{{route('spiderworks.miniweb.media.popup', ['popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'6'])}}" class="miniweb-open-ajax-popup" title="Media Images" data-popup-size="large" id="image-holder-6">
                                                      @if($content->section6->media_id && $image = $obj->get_image($content->section6->media_id))
                                                        <img class="card-img-top padding-20" src="{{ asset('public/'.$image->thumb_file_path) }}">
                                                      @else
                                                        <img class="card-img-top padding-20" src="{{asset('miniweb/img/add_image.png')}}">
                                                      @endif
                                                    </a>
                                                    <input type="hidden" name="section6[media_id]" id="mediaId6" value="{{$content->section6->media_id}}">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="row column-seperation padding-5">
                                                <div class="form-group form-group-default required">
                                                    <label>Heading 1</label>
                                                    <input type="text" name="section6[heading1]" class="form-control" value="{{$content->section6->heading1}}" required="">
                                                </div>
                                            </div>
                                            <div class="row column-seperation padding-5">
                                                <div class="form-group form-group-default required">
                                                    <label>Heading 2</label>
                                                    <input type="text" name="section6[heading2]" class="form-control" value="{{$content->section6->heading2}}" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 p-0">
                                            <div class="row column-seperation padding-5 mt-2">
                                                <div class="form-group form-group-default m-0">
                                                    <label class="">Description</label>
                                                    <textarea name="section6[description]" class="form-control" rows="3" >{{$content->section6->description}}</textarea>
                                                </div>
                                            </div>
                                            <div class="row column-seperation padding-5">
                                                <label for="basic-url">Related Listing</label>
                                                <div class="input-group mb-3">
                                                    <select name="section6[listing_id]" class="full-width miniweb-select2-input" data-select2-url="{{route('select2.listings')}}" data-placeholder="Select a Listing">
                                                        @if($content->section6->listing_id && $listing=$obj->get_listing($content->section6->listing_id))
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
                                        <b>Section7</b>
                                    </div>
                                    <div class="card-body p-1 row">
                                        <div class="col-md-12 p-0">
                                            <div class="row column-seperation padding-5">
                                                <div class="form-group form-group-default required">
                                                    <label>Heading1</label>
                                                    <input type="text" name="section7[heading1]" class="form-control" value="{{$content->section7->heading1}}" required="">
                                                </div>
                                            </div>
                                            <div class="row column-seperation padding-5">
                                                <div class="form-group form-group-default required">
                                                    <label>Heading2</label>
                                                    <input type="text" name="section7[heading2]" class="form-control" value="{{$content->section7->heading2}}" required="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-md-6" >
                                <div class="card">
                                    <div class="card-header p-1">
                                        <b>Section8</b>
                                    </div>
                                    <div class="card-body p-1 row">
                                        <div class="col-md-6 p-0">
                                            <div class="row column-seperation padding-5">
                                                <div class="form-group form-group-default required">
                                                    <label>Heading1</label>
                                                    <input type="text" name="section8[heading1]" class="form-control" value="{{$content->section8->heading1}}" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 p-0">
                                            <div class="row column-seperation padding-5">
                                                <div class="form-group form-group-default required">
                                                    <label>Heading2</label>
                                                    <input type="text" name="section8[heading2]" class="form-control" value="{{$content->section8->heading2}}" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 p-0">
                                            <div class="row column-seperation padding-5">
                                                <div class="form-group form-group-default required">
                                                    <label>BEHIND THE WALL</label>
                                                    <select name="section8[member_id]" class="full-width miniweb-select2-input" data-select2-url="{{route('select2.team')}}" data-placeholder="Select Person">
                                                        @if($content->section8->member_id && $member=$obj->get_member($content->section8->member_id))
                                                            <option value="{{$member->id}}" selected="selected">{{$member->name}}</option>
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
                                        <b>Section9</b>
                                    </div>
                                    <div class="card-body p-1 row">
                                        <div class="col-md-12 p-0">
                                            <div class="row column-seperation padding-5">
                                                <div class="form-group form-group-default required">
                                                    <label>Widget</label>
                                                    <select name="section9[widget_id]" class="full-width miniweb-select2-input" data-select2-url="{{route('select2.widgets')}}" data-placeholder="Select a Widget">
                                                        @if($content->section9->widget_id && $widget=$obj->get_widget($content->section9->widget_id))
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