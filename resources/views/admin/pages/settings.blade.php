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

<a href="{{url('/admin/media')}}" class="btn btn-info">Media</a>
                    </div>





                </div>

            </div>

            <div class="col-md-12">

                <h4>Common Tracking codes</h4>

            </div>

            <div class="col-md-6">

                @include('admin._partials.textarea',['key' => "tracking-in-head",'label'=>'Tracking code will add in head tag'])

                @include('admin._partials.textarea',['key' => "tracking-in-body",'label'=>'Tracking code will add after body tag'])

            </div>



            <div class="col-md-6">

                <div class="row">

                    <div class="col-md-12">

                        @include('admin._partials.textarea',['key' => "tracking-in-bottom",'label' => "Tracking code will add in bottom section"])

                    </div>





                </div>

            </div>





            <div class="col-md-6">

                <div class="row">

                    <div class="col-md-12">

                        @include('admin._partials.input',['key' => "admin-leads-email",'label' => "Admin emails to receive leads"])

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