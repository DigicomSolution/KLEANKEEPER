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
                @include('admin._partials.file_upload',['key' => "about-us-banner-image-id"])
            </div>

            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-12">
                    @include('admin._partials.input',['key' => "about-us-banner-title",'label' => "Update about us title"])

                    @include('admin._partials.input',['key' => "about-us-banner-title-sub",'label' => "Update about us second title"])
                    </div>

                    <div class="col-md-6">
                    @include('admin._partials.input',['key' => "about-us-banner-cta-label",'label' => "Update about us cta label"])
                    </div>

                    <div class="col-md-6">
                    @include('admin._partials.input',['key' => "about-us-banner-cta-action",'label' => "Update about us cta link"])
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <hr>
                <h4>Part 2: Featured image and contents</h4>
            </div>
            <div class="col-md-12">
                <div class="row">

                    <div class="col-md-2">
                        @include('admin._partials.file_upload',['key' => "about-us-feature-image-id"])
                    </div>

                    <div class="col-md-10">
                        @include('admin._partials.textarea',['key' => "about-us-feature-content",'label' => "About us featured content",'class'=>'richtext'])
                    </div>

                    <div class="col-md-12">
                        @include('admin._partials.textarea',['key' => "about-us-feature-footer-title",'label' => "About us featured footer content title"])
                    </div>

                    <div class="col-md-12">
                        @include('admin._partials.textarea',['key' => "about-us-feature-footer-sub-title",'label' => "About us featured footer content sub title"])
                    </div>


                </div>
            </div>

            <div class="col-md-12">
                <hr>
                <h4>Part 3: Message from founder</h4>
            </div>

            <div class="col-md-12">
                <div class="row">

                    <div class="col-md-2">
                        @include('admin._partials.file_upload',['key' => "about-us-founder-image-id",'label' => "Founder image"])
                    </div>

                    <div class="col-md-10">
                        @include('admin._partials.textarea',['key' => "about-us-founder-content",'label' => "About us featured content",'class'=>'richtext'])
                    </div>

                </div>
            </div>


            <div class="col-md-12">
                <hr>
                <h4>Part 4: Team</h4>
            </div>

            <div class="col-md-12">
                <div class="row">

                    <div class="col-md-3">
                        @include('admin._partials.textarea',['key' => "about-us-team-title",'label' => "Team title"])
                        @include('admin._partials.textarea',['key' => "about-us-team-subheading",'label' => "Sub heading"])
                    </div>


                </div>
            </div>


            <div class="col-md-12">
                <hr>
                <h4>Part 5: Stats</h4>
            </div>

            <div class="col-md-12">
                <div class="row">

                    <div class="col-md-3">
                        @include('admin._partials.input',['key' => "about-us-stats-block-1-label",'label' => "Block 1 label"])
                        @include('admin._partials.input',['key' => "about-us-stats-block-1-value",'label' => "Block 1 value"])
                    </div>

                    <div class="col-md-3">
                        @include('admin._partials.input',['key' => "about-us-stats-block-2-label",'label' => "Block 2 label"])
                        @include('admin._partials.input',['key' => "about-us-stats-block-2-value",'label' => "Block 2 value"])
                    </div>

                    <div class="col-md-3">
                        @include('admin._partials.input',['key' => "about-us-stats-block-3-label",'label' => "Block 3 label"])
                        @include('admin._partials.input',['key' => "about-us-stats-block-3-value",'label' => "Block 3 value"])
                    </div>

                    <div class="col-md-3">
                        @include('admin._partials.input',['key' => "about-us-stats-block-4-label",'label' => "Block 4 label"])
                        @include('admin._partials.input',['key' => "about-us-stats-block-4-value",'label' => "Block 4 value"])
                    </div>

                </div>
            </div>


            <div class="col-md-12">
                <hr>
                <h4>Part 6: Highlighted points</h4>
            </div>

            <div class="col-md-12">
                <div class="row">

                    <div class="col-md-4">
                        @include('admin._partials.file_upload',['key' => "about-us-highlighted-1-image-id",'label' => "Block 1 image"])
                        @include('admin._partials.input',['key' => "about-us-highlighted-1-label",'label' => "Block 1 label"])
                        @include('admin._partials.input',['key' => "about-us-highlighted-1-value",'label' => "Block 1 value"])
                    </div>

                    <div class="col-md-4">
                        @include('admin._partials.file_upload',['key' => "about-us-highlighted-2-image-id",'label' => "Block 2 image"])
                        @include('admin._partials.input',['key' => "about-us-highlighted-2-label",'label' => "Block 2 label"])
                        @include('admin._partials.input',['key' => "about-us-highlighted-2-value",'label' => "Block 2 value"])
                    </div>

                    <div class="col-md-4">
                        @include('admin._partials.file_upload',['key' => "about-us-highlighted-3-image-id",'label' => "Block 3 image"])
                        @include('admin._partials.input',['key' => "about-us-highlighted-3-label",'label' => "Block 3 label"])
                        @include('admin._partials.input',['key' => "about-us-highlighted-3-value",'label' => "Block 3 value"])
                    </div>

                </div>
            </div>


            <div class="col-md-12">
                <hr>
                <h4>Part 7: Why choose us</h4>
            </div>

            <div class="col-md-12">
                <div class="row">

                    <div class="col-md-5">
                        @include('admin._partials.textarea',['key' => "about-us-why-us-left-content",'label' => "Why Choose Us left side content", 'class' => 'richtext'])
                    </div>

                    <div class="col-md-2">
                        @include('admin._partials.file_upload',['key' => "about-us-why-us-image-id",'label' => "Center image"])
                    </div>

                    <div class="col-md-5">
                        @include('admin._partials.textarea',['key' => "about-us-why-us-right-content",'label' => "Why Choose Us right side content", 'class' => 'richtext'])
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