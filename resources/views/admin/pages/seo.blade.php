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

                <div class="row">

                    <div class="col-md-12">

                        <label for="">Home page meta tags</label>

                        <hr>

                    </div>

                    <div class="col-md-4">

                        @include('admin._partials.input',['key' => "home-meta-title",'label' => "Meta title"])

                    </div>

                    <div class="col-md-4">

                        @include('admin._partials.textarea',['key' => "home-meta-description",'label' => "Meta description"])

                    </div>

                    <div class="col-md-4">

                        @include('admin._partials.textarea',['key' => "home-meta-keywords",'label' => "Meta keywords"])

                    </div>

                </div>

            </div>



            <div class="col-md-12">

                <div class="row">

                    <div class="col-md-12">

                        <label for="">Contact page meta tags</label>

                        <hr>

                    </div>

                    <div class="col-md-4">

                        @include('admin._partials.input',['key' => "contact-meta-title",'label' => "Meta title"])

                    </div>

                    <div class="col-md-4">

                        @include('admin._partials.textarea',['key' => "contact-meta-description",'label' => "Meta description"])

                    </div>

                    <div class="col-md-4">

                        @include('admin._partials.textarea',['key' => "contact-meta-keywords",'label' => "Meta keywords"])

                    </div>

                </div>

            </div>





            <div class="col-md-12">

                <div class="row">

                    <div class="col-md-12">

                        <label for="">Service index page meta tags</label>

                        <hr>

                    </div>

                    <div class="col-md-4">

                        @include('admin._partials.input',['key' => "service-meta-title",'label' => "Meta title"])

                    </div>

                    <div class="col-md-4">

                        @include('admin._partials.textarea',['key' => "service-meta-description",'label' => "Meta description"])

                    </div>

                    <div class="col-md-4">

                        @include('admin._partials.textarea',['key' => "service-meta-keywords",'label' => "Meta keywords"])

                    </div>

                </div>

            </div>





            <div class="col-md-12">

                <div class="row">

                    <div class="col-md-12">

                        <label for="">Blog index page meta tags</label>

                        <hr>

                    </div>

                    <div class="col-md-4">

                        @include('admin._partials.input',['key' => "blog-meta-title",'label' => "Meta title"])

                    </div>

                    <div class="col-md-4">

                        @include('admin._partials.textarea',['key' => "blog-meta-description",'label' => "Meta description"])

                    </div>

                    <div class="col-md-4">

                        @include('admin._partials.textarea',['key' => "blog-meta-keywords",'label' => "Meta keywords"])

                    </div>

                </div>

            </div>



            <div class="col-md-12">

                <div class="row">

                    <div class="col-md-12">

                        <label for="">Company page meta tags</label>

                        <hr>

                    </div>

                    <div class="col-md-4">

                        @include('admin._partials.input',['key' => "company-meta-title",'label' => "Meta title"])

                    </div>

                    <div class="col-md-4">

                        @include('admin._partials.textarea',['key' => "company-meta-description",'label' => "Meta description"])

                    </div>

                    <div class="col-md-4">

                        @include('admin._partials.textarea',['key' => "company-meta-keywords",'label' => "Meta keywords"])

                    </div>

                </div>

            </div>





            <div class="col-md-12">

                <div class="row">

                    <div class="col-md-12">

                        <label for="">Partner page meta tags</label>

                        <hr>

                    </div>

                    <div class="col-md-4">

                        @include('admin._partials.input',['key' => "partner-meta-title",'label' => "Meta title"])

                    </div>

                    <div class="col-md-4">

                        @include('admin._partials.textarea',['key' => "partner-meta-description",'label' => "Meta description"])

                    </div>

                    <div class="col-md-4">

                        @include('admin._partials.textarea',['key' => "partner-meta-keywords",'label' => "Meta keywords"])

                    </div>

                </div>

            </div>





            <div class="col-md-12">

                <div class="row">

                    <div class="col-md-12">

                        <label for="">Pricing page meta tags</label>

                        <hr>

                    </div>

                    <div class="col-md-4">

                        @include('admin._partials.input',['key' => "pricing-meta-title",'label' => "Meta title"])

                    </div>

                    <div class="col-md-4">

                        @include('admin._partials.textarea',['key' => "pricing-meta-description",'label' => "Meta description"])

                    </div>

                    <div class="col-md-4">

                        @include('admin._partials.textarea',['key' => "pricing-meta-keywords",'label' => "Meta keywords"])

                    </div>

                </div>

            </div>



            <div class="col-md-12">

                <div class="row">

                    <div class="col-md-12">

                        <label for="">About page meta tags</label>

                        <hr>

                    </div>

                    <div class="col-md-4">

                        @include('admin._partials.input',['key' => "about-meta-title",'label' => "Meta title"])

                    </div>

                    <div class="col-md-4">

                        @include('admin._partials.textarea',['key' => "about-meta-description",'label' => "Meta description"])

                    </div>

                    <div class="col-md-4">

                        @include('admin._partials.textarea',['key' => "about-meta-keywords",'label' => "Meta keywords"])

                    </div>

                </div>

            </div>


              <div class="col-md-12">
                    <button type="submit" class="btn btn-success">Submit</button>
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