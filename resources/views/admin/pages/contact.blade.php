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
                @include('admin._partials.file_upload',['key' => "contact-banner-image-id"])
            </div>

            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-12">
                        @include('admin._partials.input',['key' => "contact-banner-title",'label' => "contact banner title"])

                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <hr>
                <h4>Part 2: Contact Information</h4>
            </div>
            <div class="col-md-12">
                <div class="row">

                    <div class="col-md-12">
                        @include('admin._partials.input',['key' => "contact-title",'label' => " Contact Information : title"])
                    </div>

                    <div class="col-md-10">
                        @include('admin._partials.textarea',['key' => "contact-phone-number",'label' => "Contact Information : phone number"])
                    </div>

                    <div class="col-md-12">
                        @include('admin._partials.textarea',['key' => "contact-address",'label' => " Contact Information : address"])
                    </div>

                    <div class="col-md-12">
                        @include('admin._partials.textarea',['key' => "contact-email",'label' => " Contact Information : email"])
                    </div>



                </div>
            </div>


            <div class="col-md-12">
                <hr>
                <h4>Part 3: Form and Location</h4>
            </div>
            <div class="col-md-12">
                <div class="row">

                    <div class="col-md-12">
                        @include('admin._partials.input',['key' => "contact-form-title",'label' => " Contact form title"])
                    </div>

                    <div class="col-md-12">
                        @include('admin._partials.textarea',['key' => "contact-iframe",'label' => "Location iframe"])
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