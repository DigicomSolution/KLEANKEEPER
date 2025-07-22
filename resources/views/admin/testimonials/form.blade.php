@extends('spiderworks.miniweb.fileupload')

@section('head')

@endsection

@section('content')
    <div class="container-fluid">

        <div class="col-md-12" style="margin-bottom: 20px;" align="right">
            @if($obj->id)
                <span class="page-heading">EDIT Testimonial</span>
            @else
                <span class="page-heading">Create Testimonial</span>
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
                    <form method="POST" action="{{ route($route.'.update') }}" class="p-t-15" id="InputFrm" data-validate=true>
                @else
                    <form method="POST" action="{{ route($route.'.store') }}" class="p-t-15" id="InputFrm" data-validate=true>
                @endif
                @csrf
                <input type="hidden" name="id" @if($obj->id) value="{{encrypt($obj->id)}}" @endif id="inputId">
                
                

                <ul class="nav nav-tabs nav-tabs-simple d-none d-md-flex d-lg-flex d-xl-flex" role="tablist" data-init-reponsive-tabs="dropdownfx">
                    <li class="nav-item">
                        <a class="active show" data-toggle="tab" role="tab"
                           data-target="#tab1Basic"
                        href="#" aria-selected="true">Basic Details</a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tab" role="tab"
                           data-target="#tabService"
                        class="" aria-selected="false">Services</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active show" id="tab1Basic">
                        <div class="row">
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                                  <div class="row column-seperation padding-5">
                                        <div class="form-group form-group-default">
                                          <div class="checkbox check-success  ">
                                            <input type="checkbox" name="is_featured" id="checkbox-agree" @if($obj->is_featured == 1) checked="checked" @endif>
                                            <label for="checkbox-agree">Is Featured?
                                            </label>
                                          </div>
                                        </div>
                                  </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row column-seperation padding-5">
                                    <div class="form-group form-group-default required">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control" value="{{$obj->name}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="row column-seperation padding-5">
                                        <div class="form-group form-group-default form-group-default-select2">
                                            <label class="">Client <small><a href="{{url('admin/clients/create')}}" target="_blank">[ create new client ]</a></small></label>
                                            <select name="client_id" class="full-width miniweb-select2-input" data-select2-url="{{route('select2.clients')}}" data-placeholder="Select a Client">
                                                @if($obj->client)
                                                    <option value="{{$obj->client->id}}" selected="selected">{{$obj->client->name}}</option>
                                                @endif
                                            </select>
                                        </div>

                                    </div>
                                </div>

                            <div class="col-md-12">
						        <div class="form-group form-group-default ">
						          <label>Description</label>
                                    <textarea name="description" class="form-control" id="" cols="30" rows="10">{{$obj->description}}</textarea>
						        </div>
						    </div>
                            <input type="hidden" name="type" value="Text">

                            <div class="col-md-6">
                                <div class="row">
                                    <p class="col-md-12">User Image</p>
                                    <div class="default-image-holder padding-5">
                                        <a href="javascript:void(0);" class="image-remove" data-remove-id="mediaId0"><i class="fa  fa-times-circle"></i></a>
                                        <a href="{{route('spiderworks.miniweb.media.popup', ['popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'0', 'related_id'=>$obj->id])}}" class="miniweb-open-ajax-popup" title="Media Images" data-popup-size="large" id="image-holder-0">
                                          @if($obj->media_id && $obj->media)
                                            <img class="card-img-top padding-20" src="{{ asset('public/'.$obj->media->thumb_file_path) }}">
                                          @else
                                            <img class="card-img-top padding-20" src="{{asset('miniweb/img/add_image.png')}}">
                                          @endif
                                        </a>
                                        <input type="hidden" name="media_id" id="mediaId0" value="{{$obj->media_id}}">
                                    </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-pane" id="tabService">
                        @php
                            $service_array = ($obj->id)?$obj->services->pluck('id')->toArray():[];
                        @endphp
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <p class="col-md-12">All Services</p>
                                    <div class="padding-5 w-100">
                                        <ul id="sortable1" class="connectedSortable list-group" style="min-height: 100px !important; border:1px solid #ddd;">
                                            @if(count($services)>0)
                                                @foreach($services as $service)
                                                    @if(!in_array($service->id, $service_array))
                                                        <li class="ui-state-default list-group-item" id="{{$service->id}}">{{$service->name}}</li>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <p class="col-md-12">Selected Services</p>
                                    <div class="padding-5 w-100" >
                                        <ul id="sortable2" class="connectedSortable list-group" style="min-height: 100px !important; border:1px solid #ddd;">
                                            @if(count($obj->services)>0)
                                                @foreach($obj->services as $service)
                                                    <li class="ui-state-default list-group-item" id="{{$service->id}}">{{$service->name}}</li>
                                                @endforeach
                                            @endif
                                        </ul>
                                        <input type="hidden" name="services" id="services" />
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
        var validator = $('#InputFrm').validate({
              rules: 
              {
                "name": "required",
              },
              messages: 
              {
                "name": "Name cannot be blank",
              },
        });

        $(document).ready(function(){
        	$('#type-select').change(function(){
        		if($(this).val() == 'Text')
        		{
        			$('#text-div').show();
        			$('#youtube-div').hide();
                    $('#video-div').hide();
        		}
        		else if($(this).val() == 'Youtube Video')
        		{	
        			$('#text-div').hide();
                    $('#video-div').hide();
        			$('#youtube-div').show();
        		}
                else{
                    $('#text-div').hide();
                    $('#video-div').show();
                    $('#youtube-div').hide();
                }
        	})
        })
    </script>
    <script>
        $(function () {
            $( "#sortable1" ).sortable({
                    connectWith: ".connectedSortable"
            }).disableSelection();

            var $sortable = $( "#sortable2" ).sortable({
                    connectWith: ".connectedSortable",
                    update: function (event, ui) {
                        var data = $(this).sortable('toArray');
                        $("#services").val(data);
                    }
            }).disableSelection();

            $("#services").val($sortable.sortable("toArray"));
        });
    </script>
@parent
@endsection