@extends('spiderworks.miniweb.app')



@section('content')

    <div class="container-fluid bg-white">

        <div class="container">

            <!-- START card -->

            <div class="row">



                <div class="col-md-3">

                    <div class="row">

                        <h4>Manage menu</h4>



                        <div class="col-md-12">

                            <hr>

                            <a href="{{url('admin/menus/edit/'.encrypt(1))}}" target="_blank">Main menu</a><br>

                            <a href="{{url('admin/menus/edit/'.encrypt(2))}}" target="_blank">Footer menu 1</a><br>

                            <a href="{{url('admin/menus/edit/'.encrypt(3))}}" target="_blank">Footer menu 2</a><br>

                            <a href="{{url('admin/menus/edit/'.encrypt(4))}}" target="_blank">Footer menu 3</a><br>

                            <a href="{{url('admin/menus/edit/'.encrypt(5))}}" target="_blank">Footer menu 4</a><br>

                            <a href="{{url('admin/menus/edit/'.encrypt(8))}}" target="_blank">Bottom menu</a></br>
                            </br>
                            <p>EXTRA FOOTERS</p>
                            <a href="{{url('admin/menus/edit/'.encrypt(9))}}" target="_blank">Extra Footer 1</a>
                            </br>

                            <a href="{{url('admin/menus/edit/'.encrypt(10))}}" target="_blank">Extra Footer 2</a>
                             </br>

                            <a href="{{url('admin/menus/edit/'.encrypt(11))}}" target="_blank">Extra Footer 3</a>
                            </br>
                            <a href="{{url('admin/menus/edit/'.encrypt(12))}}" target="_blank">Extra Footer 4</a>
                            </br>

                            <a href="{{url('admin/menus/edit/'.encrypt(13))}}" target="_blank">Extra Footer 5</a>
                             </br>

                            <a href="{{url('admin/menus/edit/'.encrypt(14))}}" target="_blank">Extra Footer 6</a>
                           


                        </div>

                        <!-- END card -->





                    </div>

                </div>



                <div class="col-md-3">

                    <div class="row">

                        <h4>Manage Slider</h4>



                        <div class="col-md-12">

                            <hr>

                            <a href="{{url('admin/sliders/edit/'.encrypt(8))}}" target="_blank">Home</a><br>

                            <a href="{{url('admin/sliders/edit/'.encrypt(79))}}" target="_blank">Offers</a><br>

                            <a href="{{url('admin/sliders/edit/'.encrypt(83))}}" target="_blank">Brands</a><br>

                        </div>

                        <!-- END card -->



                    </div>

                </div>



                <div class="col-md-3">

                    <div class="row">

                        <h4>Edit custom info blocks</h4>



                        <div class="col-md-12">

                            <hr>

                            <a href="{{url('admin/manage/about-us')}}" target="_blank">About us page</a><br>

                            <a href="{{url('admin/manage/contact-us')}}" target="_blank">Contact us page</a><br>

                            <a href="{{url('admin/manage/service')}}" target="_blank">Service  page</a><br>

                            <a href="{{url('admin/manage/partner')}}" target="_blank">Partner  page</a><br>

                            <a href="{{url('admin/manage/about')}}" target="_blank">About block</a><br>

                            <a href="{{url('admin/manage/home')}}" target="_blank">Home page/ CTA blocks</a><br>
                            <a href="{{url('admin/pages/edit/eyJpdiI6IlBnUXJFNHdsN09idWp2NkFkbm5jaVE9PSIsInZhbHVlIjoiSEErc0dzOUQzWnAvQmFGc1JRNmZvQT09IiwibWFjIjoiOWM2N2ZjMGJjNzI0ZGFlOWFhYjU1MDc3NjdiMWU5YjQ3ZTllOTc1OGQ0MmZhMDUxODA3NGQzODgxZmYzODNmYSJ9')}}" target="_blank">Home page Footer Content</a><br>

                            <a href="{{url('admin/manage/app')}}" target="_blank">App block</a><br>

                            <a href="{{url('admin/manage/hdiwork')}}" target="_blank">How it works block</a><br>

                            <a href="{{url('admin/manage/brands')}}" target="_blank">Brands block</a><br>

                        </div>

                        <!-- END card -->



                    </div>

                </div>



                <div class="col-md-3">

                    <div class="row">

                        <h4>Edit custom pages </h4>



                        <div class="col-md-12">

                            <hr>

                            <a href="{{url('admin/manage/about-us')}}" target="_blank">About us page</a><br>

                            <a href="{{url('admin/manage/contact-us')}}" target="_blank">Contact us page</a><br>

                             <a href="{{url('admin/manage/blogs')}}" target="_blank">Blogs page</a><br>

                        </div>

                        <!-- END card -->



                    </div>

                </div>





                <div class="col-md-3">

                    <div class="row">

                        <h4>Faq </h4>



                        <div class="col-md-12">

                            <hr>

                            <a href="{{url('admin/faq/edit/'.encrypt(1))}}" target="_blank">Home page</a><br>

                        </div>

                        <!-- END card -->



                    </div>

                </div>



            </div>





        </div>

    </div>

@endsection

    @section('bottom')



    @parent

@endsection