@extends('spiderworks.miniweb.fileupload')

@section('head')
    <style>
        label{
            margin-top: 10px;
        }
    </style>
@endsection

@section('content')
    <form method="post" enctype="multipart/form-data" action="{{url('admin/keys/save')}}">@csrf
        <div class="row">


            <div class="col-md-12">
                <h4>Part 1: Banner section</h4>
            </div>
            <div class="col-md-2">
                @include('admin._partials.file_upload',['key' => "history-iso-image-id"])
            </div>

            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-12">
                        @include('admin._partials.input',['key' => "history-experience-years",'label' => "Experience in years"])
                    </div>

                    <div class="col-md-6">
                        @include('admin._partials.textarea',['key' => "history-experience-years-text",'label' => "Experience in years",'class'=>'richtext'])
                    </div>

                    <div class="col-md-6">
                        @include('admin._partials.textarea',['key' => "history-experience-content",'label' => "Experience in years",'class'=>'richtext'])
                    </div>

                </div>
            </div>


            <div class="col-md-12" align="right">
                <button type="submit" class="btn btn-warning">Submit changes</button>
            </div>


        </div>
    </form>
@endsection
@section('bottom')
    <script>
        $('.remove-key').on('click', function () {
            var key = $(this).data('key');
            $.confirm({
                title: 'Confirm!',
                content: 'You are going to delete this image',
                buttons: {
                    confirm: function () {
                        $.post('{{route('remove.key')}}',{_token:'{{csrf_token()}}',key:key}).done(function (data) {
                            window.location.replace();
                        })
                    },
                    cancel: function () {

                    }
                }
            });

        })
    </script>
    @parent
@endsection