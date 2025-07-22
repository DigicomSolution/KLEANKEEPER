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
                @include('admin._partials.file_upload',['key' => "partner-banner-image-id",'label' => "Banner image (1920X500)"])
            </div>

            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-12">
                    @include('admin._partials.input',['key' => "partner-title",'label' => "Update partner title"])

                    @include('admin._partials.input',['key' => "partner-sub-title",'label' => "Update partner sub title"])
                    </div>

                </div>
            </div>

            <div class="col-md-12">
                <hr>
                <h4>Part 2: First intro</h4>
            </div>
            <div class="col-md-12">
                <div class="row">

                    <div class="col-md-2">
                        @include('admin._partials.file_upload',['key' => "partner-first-banner-image-id",'label' => "First intro image (470X612)"])
                    </div>

                    <div class="col-md-10">
                        @include('admin._partials.textarea',['key' => "partner-first-title",'label' => "Partner first intro title"])
                        
                          @include('admin._partials.textarea',['key' => "partner-first-content",'label' => "Partner first intro content",'class' => "richtext"])
                    </div>

                </div>
            </div>
            
            
            <div class="col-md-12">
                <hr>
                <h4>Part 2: Second intro</h4>
            </div>
            <div class="col-md-12">
                <div class="row">

                    <div class="col-md-2">
                        @include('admin._partials.file_upload',['key' => "partner-second-banner-image-id",'label' => "Second intro image (470X612)"])
                    </div>

                    <div class="col-md-10">
                        @include('admin._partials.textarea',['key' => "partner-second-title",'label' => "Partner second intro title"])
                        
                          @include('admin._partials.textarea',['key' => "partner-second-content",'label' => "Partner second intro content",'class' => "richtext"])
                    </div>

                </div>
            </div>

            <div class="col-md-12">
                <hr>
                <h4>Part 3: Registration form</h4>
            </div>

            <div class="col-md-12">
                <div class="row">

                    <div class="col-md-2">
                        @include('admin._partials.input',['key' => "partner-register-title",'label' => "Partner register form title"])
                    </div>

                    <div class="col-md-10">
                        @include('admin._partials.textarea',['key' => "partner-register-description",'label' => "Partner register form subtitle"])
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