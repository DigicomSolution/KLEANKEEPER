@if(count($photos)>0)
	@foreach($photos as $photo)
		<div class="col-md-3 media-preview-wrap parent">
			<a href="{{url('admin/sliders/photo-edit', array('id'=>$photo->id, 'slider_id'=>$slider, 'type'=>$type))}}" class="miniweb-open-ajax-popup" title="update Image Details" data-popup-size="xlarge"><img src="{{ asset('public/'.$photo->media->thumb_file_path) }}"></a>
			<a href="{{url('admin/sliders/photo-delete',['slider'=>$slider, 'media'=>$photo->id, 'type'=>$type])}}" class="btn btn-danger delete-btn miniweb-btn-warning-popup" message="Are you sure?" data-redirect-url="{{url('admin/sliders/edit', [encrypt($slider)])}}">X</a>
		</div>
	@endforeach
@endif