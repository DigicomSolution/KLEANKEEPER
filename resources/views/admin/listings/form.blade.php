@extends('spiderworks.miniweb.fileupload')

@section('head')

@endsection

@section('content')
    <div class="container-fluid">

        <div class="col-md-12" style="margin-bottom: 20px;" align="right">
            @if($obj->id)
                <span class="page-heading">EDIT LISTING</span>
            @else
                <span class="page-heading">CREATE NEW LISTING</span>
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
<ul class="nav nav-tabs nav-tabs-simple d-none d-md-flex d-lg-flex d-xl-flex" role="tablist" data-init-reponsive-tabs="dropdownfx">
    <li class="nav-item">
        <a class="active show" data-toggle="tab" role="tab"
        data-target="#tab1Basic"
        href="#" aria-selected="true">LISTINGS</a>
    </li>
 
</ul>
<div class="tab-content">
    <div class="tab-pane active show" id="tab1Basic">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-body">
                     @if($obj->id)
                     <?php
                              $id = array($obj->id);
                            ?>
                    <form role="form" method="post"  action="{{URL::to('admin/listings/update', $obj->id)}}">
                         @else
                            <?php
                              $id = array();
                            ?>
                            <form role="form" method="post"  action="{{URL::to('admin/listings/store')}}">
                            @endif
                        @csrf
                        <input type="hidden" @if($obj->id) value="{{encrypt($obj->id)}}" @endif id="inputId" >
                        <div class="row">
                            <div class="col-md-12">
                                    <div class="row column-seperation padding-5">
                                        <div class="form-group form-group-default required">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" value="{{$obj->name}}" required="">
                                        </div>
                                    </div>
                                </div>

                        <div class="row w-100" id="box">
                             @php
                                        if($obj->id)
                                            $count = count($obj->items);
                                        else
                                            $count = 0;
                                    @endphp
                            @if(count($obj->items)>0)     
                                @foreach ($obj->items as $key => $value) 
                                <div class="row w-100 mb-2 descriptionwrapper" >
                                    <div class="card">
                                        <div class="card-body p-1 row">
                                            <div class="col-md-4">
                                                <div class="default-image-holder padding-5">
                                                        <a href="javascript:void(0);" class="image-remove" data-remove-id="mediaId{{$key}}"><i class="fa  fa-times-circle"></i></a>
                                                        <a href="{{route('spiderworks.miniweb.media.popup', ['popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>$key])}}" class="miniweb-open-ajax-popup" title="Media Images" data-popup-size="large" id="image-holder-{{$key}}">
                                                          @if($value->media_id && $value->featured_image)
                                                            <img class="card-img-top padding-20" src="{{ asset('public/'.$value->featured_image->thumb_file_path) }}">
                                                          @else
                                                            <img class="card-img-top padding-20" src="{{asset('assets/img/add_image.png')}}">
                                                          @endif
                                                        </a>
                                                        <input type="hidden" name="listing[{{$key}}][media_id]" id="mediaId{{$key}}" value="{{$value->media_id}}">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="row column-seperation padding-5">
                                                    <div class="form-group form-group-default">
                                                        <label>Title</label>
                                                        <input type="text" name="listing[{{$key}}][title]" class="form-control" value="{{$value->heading}}">
                                                    </div>
                                                </div>
                                                <div class="row column-seperation padding-5 mt-2">
                                                    <div class="form-group form-group-default m-0">
                                                        <label class="">Description</label>
                                                        <textarea name="listing[{{$key}}][description]" class="form-control" rows="3">{{$value->description}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                @endforeach
                            @endif
                                <div class="row w-100 mb-2 descriptionwrapper" >
                                    <div class="card">
                                        <div class="card-body p-1 row">
                                            <div class="col-md-4">
                                                <div class="default-image-holder padding-5">
                                                        <a href="javascript:void(0);" class="image-remove" data-remove-id="mediaId{{$count}}"><i class="fa  fa-times-circle"></i></a>
                                                        <a href="{{route('spiderworks.miniweb.media.popup', ['popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>$count])}}" class="miniweb-open-ajax-popup" title="Media Images" data-popup-size="large" id="image-holder-{{$count}}">
                                                          <img class="card-img-top padding-20" src="{{asset('miniweb/img/add_image.png')}}">
                                                        </a>
                                                        <input type="hidden" name="listing[{{$count}}][media_id]" id="mediaId{{$count}}" >
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="row column-seperation padding-5">
                                                    <div class="form-group form-group-default">
                                                        <label>Title</label>
                                                        <input type="text" name="listing[{{$count}}][title]" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row column-seperation padding-5 mt-2">
                                                    <div class="form-group form-group-default m-0">
                                                        <label class="">Description</label>
                                                        <textarea name="listing[{{$count}}][description]" class="form-control" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                        </div>
                                </div>
                 

  <div class="row">
                                <div class="col align-self-end">
                                    <button type="button" name="add" id="add" class="float-right btn btn-success" >Add More</button>
                                </div>
                            </div>


                        <!--<button class="btn btn-success" type="submit">Submit</button>-->
                             <button type="submit" class="btn btn-success">Save</button>
                    <a href="{{url('admin/faq')}}" class="btn btn-default">Cancel</a>
                    </form>
                </div>
                <br>
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
              },
              messages: {
                "name": "Page title cannot be blank",
              },
            });
            
            
        var i = '{{$count}}';
        $("#add").click(function(){
            i++;
            var href = "{{route('spiderworks.miniweb.media.popup', ['popup_type'=>'single_image', 'type'=>'Image'])}}";
            var img = "{{asset('miniweb/img/add_image.png')}}";
            $("#box").append('<div class="row w-100 mb-2 descriptionwrapper" ><div class="card"><div class="card-body p-1 row"><div class="col-md-4"><div class="default-image-holder padding-5"><a href="javascript:void(0);" class="image-remove" data-remove-id="mediaId'+i+'"><i class="fa  fa-times-circle"></i></a><a href="'+href+'/'+i+'" class="miniweb-open-ajax-popup" title="Media Images" data-popup-size="large" id="image-holder-'+i+'"><img class="card-img-top padding-20" src="'+img+'"></a><input type="hidden" name="listing['+i+'][media_id]" id="mediaId'+i+'" value=""></div></div><div class="col-md-8"><div class="row column-seperation padding-5"><div class="form-group form-group-default"><label>Title</label><input type="text" name="listing['+i+'][title]" class="form-control" value=""></div></div><div class="row column-seperation padding-5 mt-2"><div class="form-group form-group-default m-0"><label class="">Description</label><textarea name="listing['+i+'][description]" class="form-control" rows="3" ></textarea></div></div></div></div></div></div>');
        });

$(document).on('click', '.remove', function(){  
$(this).parents('.descriptionwrapper').remove();
}); 
$(document).on('click', '.delete', function(){  
$(this).parents('.delete').remove();
}); 
    </script>
@parent
@endsection