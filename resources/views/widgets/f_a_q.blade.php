@if(!empty($faq->question_answers))

<section class="faq">

    <div class="container">

        <div class="row  ">

            <div class="col-xl-12 text-center">



                <h3>{{Key::get('faq-title')}}</h3>





            </div>

        </div>



        <div class="row">

            <div class="col-xl-12 col-lg-12">

                <div class="accordion" id="accordionExample">

                    <div class="row">

                       











                        @foreach($faq->question_answers as $obj)

                         <div class="col-xl-6 col-lg-6">

                            <div class="card" data-slideinbottom>

                                <div class="card-header">

                                    <div itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">

                                        <h2 class="mb-0" itemprop="name">

                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse{{$loop->index}}" aria-expanded="false" aria-controls="collapseOne">

                                                {{$obj->question}}



                                            </button>

                                        </h2>





                                        <div id="collapse{{$loop->index}}" class="collapse" data-parent="#accordionExample">

                                            <div class="card-body">

                                                <div itemprop="text">  {{$obj->answer}}</div>



                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                              </div>

                        @endforeach













                      







                    </div>



                </div>



            </div>

        </div>



    </div>

</section>

@endif