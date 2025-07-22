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

            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-12">
                        @include('admin._partials.input',['key' => "service-title",'label' => "Service title"])

                        @include('admin._partials.textarea',['key' => "service-content",'label' => "Service content","class" => "richtext"])
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