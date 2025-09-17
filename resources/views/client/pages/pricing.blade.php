 @extends('client.base')



 @section('title',Key::get('pricing-meta-title'))

 @section('description',Key::get('pricing-meta-description'))

 @section('keywords',Key::get('pricing-meta-keywords'))





 @section('head')

 <link rel="stylesheet" href="{{asset('assets/css/new.css')}}">

 <style type="text/css">
    .tab-pane form {
       display: none;
    }

    .card-body form {
       display: none;
    }

    .note {
       padding: 20px;
       background: rgb(51 51 51 / 4%);
       border: 1px dashed #ccc;
       font-weight: 600;
    }
 </style>
 @endsection







 @section('content')





 <!--====== BREADCRUMBS PART START ======-->

 <section class="  pt-90 pb-0 ">

    <div class="container">

       <div class="heading">

          <span class="heading__pre-title">Pricing</span>

          <h1 class="heading__title">The <span class="color--green">Right Price</span> for you</h1>

          <span class="heading__layout">Pricing</span>

       </div>

    </div>

 </section>

 <!--====== BREADCRUMBS PART END ======-->



 <!--====== FEATURE PART START ======-->

 <section class="feature-area pb-130 price-collapes ">

    <div class="container">















       <div class="accordion" id="accordionExample">





          <!-----------------------   Cleaning Services    --------------->











          <div class="card to-top active-tab">

             <div class="card-header" id="headingOne">





                <div class="pricing-table " data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                   <div class="row align-items-center">

                      <div class="col-lg-3">

                         <h5 class="pricing-table__title">Cleaning Services</h5>

                      </div>

                      <div class="col-lg-5">



                         <div class="pricing-table__price">

                            <span class="pricing-table__text">Price starting from</span>

                            <span><i class="fas fa-pound-sign ml-2"></i> 16</span>

                            <span> </span>

                         </div>

                      </div>

                      <div class="col-lg-4 text-lg-right"><a class="button button--green" href="#"><span>Explore</span>

                            <svg class="icon">

                               <i class="fas fa-arrow-down"></i>

                            </svg></a>

                      </div>

                   </div>

                </div>

             </div>



             <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">

                <div class="card-body">

                   <div class="row">

                      <div class="col-12 col-md-3">









                         <ul class="nav nav-pills nav-tabs-dropdown" role="tablist">

                            <li class="  active">

                               <a class="nav-link  active" id="v-pills-home-tab" data-toggle="pill" href="#tab-sec-1" role="tab" aria-controls="tab-sec-1" aria-selected="true">Maid services </a>

                            </li>

                            <li class=" ">

                               <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#tab-sec-2" role="tab" aria-controls="tab-sec-2" aria-selected="false">Deep Clean</a>

                            </li>

                            <li class=" ">

                               <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#tab-sec-3" role="tab" aria-controls="tab-sec-3" aria-selected="false">End of Tenancy</a>

                            </li>



                            <li class=" ">

                               <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#tab-sec-4" role="tab" aria-controls="tab-sec-4" aria-selected="false">After Builders Clean</a>

                            </li>

                            <li class=" ">

                               <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#tab-sec-5" role="tab" aria-controls="tab-sec-5" aria-selected="false">Holiday Rental Cleaning</a>

                            </li>

                            <li class=" ">

                               <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#tab-sec-6" role="tab" aria-controls="tab-sec-6" aria-selected="false">Hard Floor Cleaning</a>

                            </li>

                            <li class=" ">

                               <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#tab-sec-7" role="tab" aria-controls="tab-sec-7" aria-selected="false">Carpet Cleaning</a>

                            </li>

                            <li class=" ">

                               <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#tab-sec-8" role="tab" aria-controls="tab-sec-8" aria-selected="false">Upholstery Cleaning</a>

                            </li>

                            <li class=" ">

                               <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#tab-sec-9" role="tab" aria-controls="tab-sec-9" aria-selected="false">Window Cleaning </a>

                            </li>

                            <li class=" ">

                               <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#tab-sec-10" role="tab" aria-controls="tab-sec-10" aria-selected="false">Oven Cleaning </a>

                            </li>









                         </ul>





                      </div>

                      <div class="col-12 col-md-9">

                         <div class="tab-content" id="v-pills-tabContent">



                            <div class="tab-pane fade show active" id="tab-sec-1" role="tabpanel" aria-labelledby="tab-sec-1-tab">

                               <h5>Maid services</h5>

                               <p>For maid services we charge per hour from £16 per hour. Please work out how many hours required and enter while booking on the app or website.</p>



                               <table class="table table-striped">

                                  <thead class="thead-dark">

                                     <tr>

                                        <th scope="col">Services </th>

                                        <th scope="col">Price</th>

                                     </tr>

                                  </thead>

                                  <tbody>

                                     <tr>

                                        <th scope="row">Maid services </th>

                                        <!--<td>16</td> -->
                                        <td>£16/hr</td>
                                     </tr>

                                  </tbody>

                               </table>

                               <p></p>

                               <form class="form-inline  ">

                                  <input class="form-control  " type="search" placeholder="Search" aria-label="Search">

                                  <button class="btn  " type="submit">BOOK</button>

                               </form>



                            </div>







                            <div class="tab-pane fade" id="tab-sec-2" role="tabpanel" aria-labelledby="tab-sec-2-tab">

                               <h5>Deep Clean</h5>
                               <p>The Deep clean service is priced based on the number of bedrooms. The price includes hoovering of any carpets you may have. If you require professional carpet cleaning or upholstery clean you can add those services on top.</p>

                               <!-- <p>To book your deep clean service you would need to work out the hours required per person and the number of people required for the job. The price is calculated based on the number of hours you have entered multiplied by the number of people required. Enter the information you think is correct and pay the booking deposit to confirm the booking.</p> -->



                               <table class="table table-striped">

                                  <thead class="thead-dark">

                                     <tr>

                                        <th scope="col">Services </th>

                                        <th scope="col">Price</th>

                                     </tr>

                                  </thead>

                                  <tbody>

                                     <tr>

                                        <th scope="row">Studio flat </th>

                                        <td>£80.00</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">1 Bedroom </th>

                                        <td>£144.00</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">2 Bedroom </th>

                                        <td>£184.00</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">3 Bedroom</th>

                                        <td>£203.00</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">4 Bedroom </th>

                                        <td>£359.00</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">5 Bedroom </th>

                                        <td>£502.00</td>

                                     </tr>
                                     <tr>

                                        <th scope="row">6 Bedroom </th>

                                        <td>£545.00</td>

                                     </tr>
                                     <tr>

                                        <th scope="row">7 Bedroom </th>

                                        <td>£634.00</td>

                                     </tr>
                                     <tr>

                                        <th scope="row">8 Bedroom </th>

                                        <td>£723.00</td>

                                     </tr>

                                  </tbody>

                               </table>



                               <form class="form-inline  ">

                                  <input class="form-control  " type="search" placeholder="Search" aria-label="Search">

                                  <button class="btn  " type="submit">BOOK</button>

                               </form>

                            </div>





                            <div class="tab-pane fade" id="tab-sec-3" role="tabpanel" aria-labelledby="tab-sec-3-tab">

                               <h5>End of Tenancy</h5>

                               <p>The price for end of tenancy is worked out on the type of property you have and number of rooms like bedrooms toilets and hallways. Please enter the correct information and you will be instantly quoted while booking on the app or website. If you require carpet cleaning please add that service to your order.</p>



                               <table class="table table-striped">

                                  <thead class="thead-dark">

                                     <tr>

                                        <th scope="col">Services </th>

                                        <th scope="col">Price</th>

                                     </tr>

                                  </thead>

                                  <tbody>

                                     <tr>

                                        <th scope="row">Studio flat </th>

                                        <td>£80.00</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">1 Bedroom </th>

                                        <td>£144.00</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">2 Bedroom </th>

                                        <td>£184.00</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">3 Bedroom</th>

                                        <td>£203.00</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">4 Bedroom </th>

                                        <td>£359.00</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">5 Bedroom </th>

                                        <td>£502.00</td>

                                     </tr>
                                     <tr>

                                        <th scope="row">6 Bedroom </th>

                                        <td>£545.00</td>

                                     </tr>
                                     <tr>

                                        <th scope="row">7 Bedroom </th>

                                        <td>£634.00</td>

                                     </tr>
                                     <tr>

                                        <th scope="row">8 Bedroom </th>

                                        <td>£723.00</td>

                                     </tr>

                                  </tbody>

                               </table>



                               <form class="form-inline  ">

                                  <input class="form-control  " type="search" placeholder="Search" aria-label="Search">

                                  <button class="btn  " type="submit">BOOK</button>

                               </form>

                            </div>





                            <div class="tab-pane fade" id="tab-sec-4" role="tabpanel" aria-labelledby="tab-sec-4-tab">

                               <h5>After Builders Clean</h5>

                               <p>The price for an after build clean is worked out on the type of property you have and number of rooms like bedrooms toilets and hallways. Please enter the correct information and you will be instantly quoted while booking on the app or website. </p>



                               <table class="table table-striped">

                                  <thead class="thead-dark">

                                     <tr>

                                        <th scope="col">Services </th>

                                        <th scope="col">Price</th>

                                     </tr>

                                  </thead>

                                  <tbody>

                                     <tr>

                                        <th scope="row">After Builders Clean </th>

                                        <td>£19/Hr</td>

                                     </tr>



                                  </tbody>

                               </table>



                               <form class="form-inline  ">

                                  <input class="form-control  " type="search" placeholder="Search" aria-label="Search">

                                  <button class="btn  " type="submit">BOOK</button>

                               </form>

                            </div>







                            <div class="tab-pane fade" id="tab-sec-5" role="tabpanel" aria-labelledby="tab-sec-5-tab">

                               <h5>Holiday Rental Cleaning</h5>

                               <p>The price for holiday rental cleaning is determined by the type of property you have and number of rooms like bedrooms toilets and hallways. Please enter appropriately to work out the cost instantly while booking on the website or mobile app. </p>



                               <table class="table table-striped">

                                  <thead class="thead-dark">

                                     <tr>

                                        <th scope="col">Services </th>

                                        <th scope="col">Price</th>

                                     </tr>

                                  </thead>

                                  <tbody>

                                     <tr>

                                        <th scope="row">Holiday Rental Cleaning </th>

                                        <td>£19/Hr</td>

                                     </tr>



                                  </tbody>

                               </table>



                               <form class="form-inline  ">

                                  <input class="form-control  " type="search" placeholder="Search" aria-label="Search">

                                  <button class="btn  " type="submit">BOOK</button>

                               </form>

                            </div>







                            <div class="tab-pane fade" id="tab-sec-6" role="tabpanel" aria-labelledby="tab-sec-6-tab">

                               <h5>Hard Floor Cleaning</h5>

                               <p>The price for hard floor cleaning is determined by the type of floor you have and the size of your floor in square metres. Enter the type of floor you have and if you want it polished. Enter accurately and you will get an estimate of the cost while booking on our website or mobile application.</p>



                               <table class="table table-striped">

                                  <thead class="thead-dark">

                                     <tr>

                                        <th scope="col">Services </th>

                                        <th scope="col">Price</th>

                                     </tr>

                                  </thead>

                                  <tbody>

                                     <tr>

                                        <th scope="row">Cleaning/ Scrubbing</th>

                                        <td>£4.50/m2</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">Polishing</th>

                                        <td>£6.00/m2</td>

                                     </tr>

                                  </tbody>

                               </table>



                               <form class="form-inline  ">

                                  <input class="form-control  " type="search" placeholder="Search" aria-label="Search">

                                  <button class="btn  " type="submit">BOOK</button>

                               </form>

                            </div>





                            <div class="tab-pane fade" id="tab-sec-7" role="tabpanel" aria-labelledby="tab-sec-7-tab">

                               <h5>Carpet Cleaning</h5>

                               <p>To determine the price to clean your carpets or rugs firstly enter the type of material you have like synthetic, delicate or regular and which areas needs to be cleaned like bedrooms, staircase, hallway etc</p>



                               <table class="table table-striped">

                                  <thead class="thead-dark">

                                     <tr>

                                        <th scope="col">Services </th>

                                        <th scope="col">Price</th>

                                     </tr>

                                  </thead>

                                  <tbody>

                                     <tr>

                                        <th scope="row">launge/Dining</th>

                                        <td>£47</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">Through Lounge</th>

                                        <td>£67</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">Hallway</th>

                                        <td>£23</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">Staircase (one flight) </th>

                                        <td>£35</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">Single Bedroom</th>

                                        <td>£37</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">Standard Rugs</th>

                                        <td>£32</td>

                                     </tr>



                                  </tbody>

                               </table>



                               <form class="form-inline  ">

                                  <input class="form-control  " type="search" placeholder="Search" aria-label="Search">

                                  <button class="btn  " type="submit">BOOK</button>

                               </form>

                            </div>





                            <div class="tab-pane fade" id="tab-sec-8" role="tabpanel" aria-labelledby="tab-sec-8-tab">

                               <h5>Upholstery Cleaning</h5>

                               <p>To determine the price to clean your upholstery firstly enter the type of material you have like synthetic, delicate or regular and what furniture needs cleaning like arm chair, sofa or any other you have. </p>



                               <table class="table table-striped">

                                  <thead class="thead-dark">

                                     <tr>

                                        <th scope="col">Services </th>

                                        <th scope="col">Price</th>

                                     </tr>

                                  </thead>

                                  <tbody>

                                     <tr>

                                        <th scope="row">Arm Chair</th>

                                        <td>£27.00</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">Two seater Sofa</th>

                                        <td>£47.00</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">Three seater Sofa</th>

                                        <td>£57.00</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">L shaped 4 Seater Sofa </th>

                                        <td>£96.00</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">Dining Chairs </th>

                                        <td>£17.00</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">office chairs </th>

                                        <td>£27.00</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">Matress </th>

                                        <td>£37.00</td>

                                     </tr>

                                  </tbody>

                               </table>



                               <form class="form-inline  ">

                                  <input class="form-control  " type="search" placeholder="Search" aria-label="Search">

                                  <button class="btn  " type="submit">BOOK</button>

                               </form>

                            </div>



                            <div class="tab-pane fade" id="tab-sec-9" role="tabpanel" aria-labelledby="tab-sec-9-tab">

                               <h5>Window Cleaning </h5>

                               <p>To determine the price for your windows to be cleaned you need to enter the type of property you have either a studio, flat or a house and how high the property is. Then enter the floor you are on as we can only reach up to 4 floors. Once the information is entered out, you will be provided with an estimate.</p>



                               <table class="table table-striped">

                                  <thead class="thead-dark">

                                     <tr>

                                        <th scope="col">Services </th>

                                        <th scope="col">Price</th>

                                     </tr>

                                  </thead>

                                  <tbody>

                                     <tr>

                                        <th scope="row">Studio/Flat</th>

                                        <td>£59</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">Masonite</th>

                                        <td>£65</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">Terraced house/end of terrace house</th>

                                        <td>£69</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">Semi-detached property </th>

                                        <td>£75</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">Detached property </th>

                                        <td>£83</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">Conservatory</th>

                                        <td>£99</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">Building uptp two floors </th>

                                        <td>£199</td>

                                     </tr>

                                  </tbody>

                               </table>



                               <form class="form-inline  ">

                                  <input class="form-control  " type="search" placeholder="Search" aria-label="Search">

                                  <button class="btn  " type="submit">BOOK</button>

                               </form>

                            </div>



                            <div class="tab-pane fade" id="tab-sec-10" role="tabpanel" aria-labelledby="tab-sec-10-tab">



                               <h5> Oven Cleaning </h5>

                               <p>To determine the price for your oven cleaning enter the type of oven you have and any appropriate information which then prompt an estimate.</p>



                               <table class="table table-striped">

                                  <thead class="thead-dark">

                                     <tr>

                                        <th scope="col">Services </th>

                                        <th scope="col">Price</th>

                                     </tr>

                                  </thead>

                                  <tbody>

                                     <tr>

                                        <th scope="row">Single Oven, including two racks </th>

                                        <td>£50</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">Double oven, including three racks </th>

                                        <td>£68</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">Standard hob ( 4 burners)</th>

                                        <td>£19</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">Range Oven 90cm/100-110cm </th>

                                        <td>£90</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">Range Hob ( 5-8 burners) </th>

                                        <td>£25</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">AGA oven</th>

                                        <td>£84</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">BBQ </th>

                                        <td>£50</td>

                                     </tr>

                                  </tbody>

                               </table>



                               <form class="form-inline  ">

                                  <input class="form-control  " type="search" placeholder="Search" aria-label="Search">

                                  <button class="btn  " type="submit">BOOK</button>

                               </form>

                            </div>



                         </div>

                      </div>

                   </div>

                </div>

             </div>

          </div>



          <!-----------------------   Gardening    --------------->





          <div class="card to-top1">

             <div class="card-header" id="headingTwo">



                <div class="pricing-table   " type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

                   <div class="row align-items-center">

                      <div class="col-lg-3">

                         <h5 class="pricing-table__title">Gardening </h5>

                      </div>

                      <div class="col-lg-5">



                         <div class="pricing-table__price">

                            <span class="pricing-table__text">Price starting from </span>

                            <span> <i class="fas fa-pound-sign ml-2"></i> 40</span>

                            <span></span>

                         </div>

                      </div>

                      <div class="col-lg-4 text-lg-right"><a class="button button--green"><span>Explore</span>

                            <svg class="icon">

                               <i class="fas fa-arrow-down"></i>

                            </svg></a>

                      </div>

                   </div>

                </div>

             </div>

             <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">

                <div class="card-body">

                   <h5> Gardening </h5>

                   <p>The price for gardening services are determined based on the number of hours required. To determine the price for your general gardening services, select the condition your garden is in. You need to enter the hours you think is required to complete the job. This can be accurately accessed by the gardening expert who attends your property. You will only need to cover the booking deposit to confirm your booking. </p>



                   <table class="table table-striped">

                      <thead class="thead-dark">

                         <tr>

                            <th scope="col">Services </th>

                            <th scope="col">Price</th>

                         </tr>

                      </thead>

                      <tbody>

                         <tr>

                            <th scope="row">First Hour </th>

                            <td>£45</td>

                         </tr>



                         <tr>

                            <th scope="row">Subsequent Hour </th>

                            <td>£40</td>

                         </tr>



                      </tbody>

                   </table>

                   <p></p>

                   <form class="form-inline  ">

                      <input class="form-control  " type="search" placeholder="Search" aria-label="Search">

                      <button class="btn  " type="submit">BOOK</button>

                   </form>









                </div>


                <div class="card-body">

                   <h5> Hedge Trimming </h5>

                   <p>To determine the price for your hedge trimming services, select the condition your hedge is in. You enter the hours required it will take to complete the job. This can be changed if incorrect once the expert attends the property. You will only need to cover the deposit to confirm your booking. </p>



                   <table class="table table-striped">

                      <thead class="thead-dark">

                         <tr>

                            <th scope="col">Services </th>

                            <th scope="col">Price</th>

                         </tr>

                      </thead>

                      <tbody>

                         <tr>

                            <th scope="row">First Hour </th>

                            <td>£45</td>

                         </tr>



                         <tr>

                            <th scope="row">Subsequent Hour </th>

                            <td>£40</td>

                         </tr>


                      </tbody>

                   </table>

                   <p></p>

                   <form class="form-inline  ">

                      <input class="form-control  " type="search" placeholder="Search" aria-label="Search">

                      <button class="btn  " type="submit">BOOK</button>

                   </form>









                </div>

                <div class="card-body">

                   <h5> Lawn Mowing </h5>

                   <p>To determine the price for your lawn mowing, select the condition your lawn is in. You enter the hours required it will take to complete the job. This can be changed if incorrect then the price will be displayed. </p>



                   <table class="table table-striped">

                      <thead class="thead-dark">

                         <tr>

                            <th scope="col">Services </th>

                            <th scope="col">Price</th>

                         </tr>

                      </thead>

                      <tbody>

                         <tr>

                            <th scope="row">First Hour </th>

                            <td>£45</td>

                         </tr>



                         <tr>

                            <th scope="row">Subsequent Hour </th>

                            <td>£40</td>

                         </tr>


                      </tbody>

                   </table>

                   <p></p>

                   <form class="form-inline  ">

                      <input class="form-control  " type="search" placeholder="Search" aria-label="Search">

                      <button class="btn  " type="submit">BOOK</button>

                   </form>









                </div>
                <div class="card-body">

                   <h5> Jet Washing </h5>

                   <p>To determine the price for your jet washing services, select the area to be jet washed in square metres and the price will be calculated based on the area you have entered in square meters. Our expert will recalculate the area and will inform you of any changes.</p>



                   <table class="table table-striped">

                      <thead class="thead-dark">

                         <tr>

                            <th scope="col">Services </th>

                            <th scope="col">Price</th>

                         </tr>

                      </thead>

                      <tbody>

                         <tr>

                            <th scope="row">First Hour </th>

                            <td>£45</td>

                         </tr>



                         <tr>

                            <th scope="row">Subsequent Hour </th>

                            <td>£40</td>

                         </tr>


                      </tbody>

                   </table>

                   <p></p>

                   <form class="form-inline  ">

                      <input class="form-control  " type="search" placeholder="Search" aria-label="Search">

                      <button class="btn  " type="submit">BOOK</button>

                   </form>









                </div>
                <div class="card-body">

                   <h5> Fencing </h5>

                   <p>To determine the price for your fencing enter the information required for a free survey and an expert would arrive on the allocated date to provide a quotation. </p>



                   <table class="table table-striped">

                      <thead class="thead-dark">

                         <tr>

                            <th scope="col">Services </th>

                            <th scope="col">Price</th>

                         </tr>

                      </thead>

                      <tbody>

                         <tr>

                            <th scope="row">First Hour </th>

                            <td>£45</td>

                         </tr>



                         <tr>

                            <th scope="row">Subsequent Hour </th>

                            <td>£40</td>

                         </tr>


                      </tbody>

                   </table>

                   <p></p>

                   <form class="form-inline  ">

                      <input class="form-control  " type="search" placeholder="Search" aria-label="Search">

                      <button class="btn  " type="submit">BOOK</button>

                   </form>









                </div>
                <div class="card-body">

                   <h5> Tree Surgery </h5>

                   <p>To determine the price for your fencing enter the information required for a free survey and a tree surgeon would arrive on the allocated date to provide a quotation. </p>



                   <table class="table table-striped">

                      <thead class="thead-dark">

                         <tr>

                            <th scope="col">Services </th>

                            <th scope="col">Price</th>

                         </tr>

                      </thead>

                      <tbody>

                         <tr>

                            <th scope="row">First Hour </th>

                            <td>£45</td>

                         </tr>



                         <tr>

                            <th scope="row">Subsequent Hour </th>

                            <td>£40</td>

                         </tr>


                      </tbody>

                   </table>

                   <p></p>

                   <form class="form-inline  ">

                      <input class="form-control  " type="search" placeholder="Search" aria-label="Search">

                      <button class="btn  " type="submit">BOOK</button>

                   </form>









                </div>

             </div>

          </div>



          <!-----------------------   Pest Control     --------------->



          <div class="card to-top2">

             <div class="card-header" id="headingThree">

                <div class="pricing-table  " type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">

                   <div class="row align-items-center">

                      <div class="col-lg-3">

                         <h5 class="pricing-table__title">Pest Control </h5>

                      </div>

                      <div class="col-lg-5">

                         <div class="pricing-table__price">

                            <span class="pricing-table__text">Price starting from</span>

                            <span><i class="fas fa-pound-sign ml-2"></i> 168</span>

                            <span></span>

                         </div>

                      </div>

                      <div class="col-lg-4 text-lg-right">

                         <a class="button button--green">

                            <span>Explore</span>

                            <svg class="icon">

                               <i class="fas fa-arrow-down"></i>

                            </svg>

                         </a>

                      </div>

                   </div>

                </div>

             </div>

             <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">

                <div class="card-body">

                   <!--          <h5> Pest Control </h5>
 -->
                   <!--  -->


                   <h5> Rodent Infestation</h5>

                   <p>

                      To determine the price of rodent infestation service, select the type of property you live in and then enter the rooms that you require for the service to be conducted in. Complete the rest of the information and a quote will be instantly shown.</p>
                   <table class="table table-striped">

                      <thead class="thead-dark">

                         <tr>

                            <th scope="col">Services </th>

                            <th scope="col">Price</th>

                         </tr>

                      </thead>

                      <tbody>



                         <tr>

                            <th scope="row">Rodent Infestation </th>

                            <td>£232</td>

                         </tr>





                      </tbody>

                   </table>
                   <h5> Bed Bugs </h5>

                   <p>

                      To determine the price of bed bugs service, select the type of property you live in and then enter the rooms that you require for the service to be conducted in. Complete the rest of the information and a quote will be instantly shown.</p>
                   <table class="table table-striped">

                      <thead class="thead-dark">

                         <tr>

                            <th scope="col">Services </th>

                            <th scope="col">Price</th>

                         </tr>

                      </thead>

                      <tbody>



                         <tr>

                            <th scope="row">Bed Bugs </th>

                            <td>£244</td>

                         </tr>





                      </tbody>

                   </table>


                   <h5>Insect Infestation</h5>

                   <p>
                      To determine the price of insect infestation service, select the type of property you live in and then enter the rooms that you require for the service to be conducted in. Complete the rest of the information and a quote will be instantly shown.</p>
                   <table class="table table-striped">


                      <thead class="thead-dark">

                         <tr>

                            <th scope="col">Services </th>

                            <th scope="col">Price</th>

                         </tr>

                      </thead>

                      <tbody>



                         <tr>

                            <th scope="row">Insect Infestation </th>

                            <td>£232</td>

                         </tr>



                      </tbody>

                   </table>




                   <h5>General Fumigation</h5>

                   <p>
                      To determine the price of insect general fumigation service, select the type of property you live in and then enter the rooms that you require for the service to be conducted in. Complete the rest of the information and a quote will be instantly shown.</p>
                   <table class="table table-striped">

                      <thead class="thead-dark">

                         <tr>

                            <th scope="col">Services </th>

                            <th scope="col">Price</th>

                         </tr>

                      </thead>

                      <tbody>



                         <tr>

                            <th scope="row">General Fumigation </th>

                            <td>£168 </td>

                         </tr>

                      </tbody>

                   </table>

                   <form class="form-inline  ">

                      <input class="form-control  " type="search" placeholder="Search" aria-label="Search">

                      <button class="btn  " type="submit">BOOK</button>

                   </form>

                </div>

             </div>

          </div>







          <!-----------------------   Removals    --------------->





          <div class="card to-top3">

             <div class="card-header" id="headingfour">

                <div class="pricing-table  " type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">

                   <div class="row align-items-center">

                      <div class="col-lg-3">

                         <h5 class="pricing-table__title">Removals </h5>

                      </div>

                      <div class="col-lg-5">

                         <div class="pricing-table__price">

                            <span class="pricing-table__text">Price starting from</span>

                            <span><i class="fas fa-pound-sign ml-2"></i> 45</span>

                            <span></span>

                         </div>

                      </div>

                      <div class="col-lg-4 text-lg-right">

                         <a class="button button--green">

                            <span>Explore</span>

                            <svg class="icon">

                               <i class="fas fa-arrow-down"></i>

                            </svg>

                         </a>

                      </div>

                   </div>

                </div>

             </div>

             <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">

                <div class="card-body">



                   <div class="row">

                      <div class="col-12 col-md-3">





                         <ul class="nav nav-pills nav-tabs-dropdown" role="tablist">

                            <li class="  active">



                               <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#tab-sec5-1" role="tab" aria-controls="tab-sec5-1" aria-selected="true">Man and Van </a>

                            </li>

                            <li class=" ">



                               <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#tab-sec5-2" role="tab" aria-controls="tab-sec5-2" aria-selected="false">Moving Home/office </a>

                            </li>

                         </ul>





                      </div>

                      <div class="col-12 col-md-9">

                         <div class="tab-content" id="v-pills-tabContent">



                            <div class="tab-pane fade show active" id="tab-sec5-1" role="tabpanel" aria-labelledby="tab-sec5-1-tab">

                               <h5> Man and Van </h5>

                               <p>To determine the price of man and van service enter if you have a lift in the property then Select the type of van and number of people that you need. Next you enter the hours you think to complete the job. Complete the rest of the information required to instantly be quoted.</p>

                               <table class="table table-striped">

                                  <thead class="thead-dark">

                                     <tr>

                                        <th scope="col">Services </th>

                                        <th scope="col">Price</th>

                                     </tr>

                                  </thead>

                                  <tbody>



                                     <tr>

                                        <th scope="row">Transit Van - 1 man </th>

                                        <td>£45 p/hr</td>


                                     </tr>

                                     <tr>

                                        <th scope="row">Transit Van - 2 men </th>

                                        <td>£54 p/hr</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">Luton Van - 1 man </th>

                                        <td>£55 p/hr</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">Luton Van - 2 men </th>

                                        <td>£65 p/hr</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">Luton Van - 3 men </th>

                                        <td>£75 p/hr</td>
                                     </tr>

                                  </tbody>

                               </table>



                               <form class="form-inline  ">

                                  <input class="form-control  " type="search" placeholder="Search" aria-label="Search">

                                  <button class="btn  " type="submit">BOOK</button>

                               </form>

                            </div>



                            <div class="tab-pane fade    " id="tab-sec5-2" role="tabpanel" aria-labelledby="tab-sec5-2-tab">

                               <h5> Moving Home/office </h5>

                               <p>To determine the price of moving home or office service, enter if you have a lift in the property then Select the type of van and number of people that you need. Next you enter the hours you think to complete the job. Complete the rest of the information required to instantly be quoted.</p>

                               <table class="table table-striped">

                                  <thead class="thead-dark">

                                     <tr>

                                        <th scope="col">Services </th>

                                        <th scope="col">Price</th>

                                     </tr>

                                  </thead>

                                  <tbody>



                                     <tr>

                                        <th scope="row">Transit Van - 1 man </th>

                                        <td>£45 p/hr</td>


                                     </tr>

                                     <tr>

                                        <th scope="row">Transit Van - 2 men </th>

                                        <td>£54 p/hr</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">Luton Van - 1 man </th>

                                        <td>£55 p/hr</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">Luton Van - 2 men </th>

                                        <td>£65 p/hr</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">Luton Van - 3 men </th>

                                        <td>£75 p/hr</td>
                                     </tr>

                                  </tbody>

                               </table>

                               <!-- -->

                               <form class="form-inline  ">

                                  <input class="form-control  " type="search" placeholder="Search" aria-label="Search">

                                  <button class="btn  " type="submit">BOOK</button>

                               </form>

                            </div>











                         </div>





                      </div>



                   </div>



                </div>

             </div>

          </div>













          <!-----------------------   Waste Disposal     --------------->















          <div class="card to-top4">

             <div class="card-header" id="headingfive">

                <div class="pricing-table  " type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">

                   <div class="row align-items-center">

                      <div class="col-lg-3">

                         <h5 class="pricing-table__title">Waste Disposal </h5>

                      </div>

                      <div class="col-lg-5">

                         <div class="pricing-table__price">

                            <span class="pricing-table__text">Price starting from</span>

                            <span><i class="fas fa-pound-sign ml-2"></i> 50</span>

                            <span></span>

                         </div>

                      </div>

                      <div class="col-lg-4 text-lg-right">

                         <a class="button button--green">

                            <span>Explore</span>

                            <svg class="icon">

                               <i class="fas fa-arrow-down"></i>

                            </svg>

                         </a>

                      </div>

                   </div>

                </div>

             </div>

             <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">

                <div class="card-body">



                   <h5> Waste Disposal </h5>

                   <!--  -->

                   <table class="table table-striped">

                      <thead class="thead-dark">

                         <tr>

                            <th scope="col">Services </th>

                            <th scope="col">Price</th>

                         </tr>

                      </thead>

                      <tbody>



                         <tr>

                            <th scope="row">Minimum Charge ( lesss than 1 cubic meter) </th>

                            <td>£50



                            </td>

                         </tr>

                         <tr>

                            <th scope="row">1/4 Van ( 3 Cubic Meters) </th>

                            <td>£110</td>

                         </tr>

                         <tr>

                            <th scope="row">1/2 Van ( 6 Cubic Meters) </th>

                            <td>£210</td>

                         </tr>

                         <tr>

                            <th scope="row">3/4 Van ( 9 Cubic Meters) </th>

                            <td>£250</td>

                         </tr>

                         <tr>

                            <th scope="row">Full Van ( 12 Cubic Meters) </th>

                            <td>£390</td>

                         </tr>

                      </tbody>

                   </table>


                   <h5>Builders Waste</h5>
                   <p>To determine the price of your builder’s waste services, select if there is a lift in the property followed by the volume of waste to be disposed of in cubic metres and the price will be calculated for you while on our mobile app or website. </p>


                   <h5>Household Waste</h5>
                   <p>To determine the price of your household waste services, select if there is a lift in the property followed by the volume of household waste to be disposed of in cubic metres and the price will be calculated for you.</p>


                   <h5>Green Waste</h5>
                   <p>To determine the price of your green waste services, select if there is a lift in the property followed by the volume of green waste to be disposed of in cubic metres and the price will be calculated for you.</p>


                   <h5>Office Waste</h5>
                   <p>To determine the price of your office waste services, select if there is a lift in the property followed by the volume of office waste to be disposed of in cubic metres and the price will be calculated for you.</p>

                   <form class="form-inline  ">

                      <input class="form-control  " type="search" placeholder="Search" aria-label="Search">

                      <button class="btn  " type="submit">BOOK</button>

                   </form>



                </div>

             </div>

          </div>











          <!-----------------------   Drainage     --------------->











          <div class="card to-top5">

             <div class="card-header" id="headingsix">

                <div class="pricing-table  " type="button" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">

                   <div class="row align-items-center">

                      <div class="col-lg-3">

                         <h5 class="pricing-table__title">Drainage </h5>

                      </div>

                      <div class="col-lg-5">

                         <div class="pricing-table__price">

                            <span class="pricing-table__text">Price starting from</span>

                            <span><i class="fas fa-pound-sign ml-2"></i> 50</span>

                            <span></span>

                         </div>

                      </div>

                      <div class="col-lg-4 text-lg-right">

                         <a class="button button--green">

                            <span>Explore</span>

                            <svg class="icon">

                               <i class="fas fa-arrow-down"></i>

                            </svg>

                         </a>

                      </div>

                   </div>

                </div>

             </div>

             <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionExample">

                <div class="card-body">



                   <div class="row">

                      <div class="col-12 col-md-3">







                         <ul class="nav nav-pills nav-tabs-dropdown" role="tablist">

                            <li class="  active">

                               <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#tab-sec7-1" role="tab" aria-controls="tab-sec7-1" aria-selected="true">Blocked Tolets and Soil Pipes</a>

                            </li>

                            <li class=" ">

                               <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#tab-sec7-2" role="tab" aria-controls="tab-sec7-2" aria-selected="false">Blocked Sink</a>

                            </li>



                            <li class=" ">

                               <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#tab-sec7-3" role="tab" aria-controls="tab-sec7-3" aria-selected="false">CCTV Drainage Survey </a>

                            </li>



                            <li class=" ">

                               <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#tab-sec7-4" role="tab" aria-controls="tab-sec7-4" aria-selected="false">External Drain Blockage </a>

                            </li>







                         </ul>













                      </div>

                      <div class="col-12 col-md-9">

                         <div class="tab-content" id="v-pills-tabContent">



                            <div class="tab-pane fade show active" id="tab-sec7-1" role="tabpanel" aria-labelledby="tab-sec7-1-tab">

                               <h5> Blocked Tolets and Soil Pipes </h5>

                               <p>To determine the price of blocked toilets and soil pipes service, enter the hours you will think to complete the job and complete the rest of the information required to instantly be quoted.</p>
                               <table class="table table-striped">

                                  <thead class="thead-dark">

                                     <tr>

                                        <th scope="col">Services </th>

                                        <th scope="col">Price</th>

                                     </tr>

                                  </thead>

                                  <tbody>



                                     <tr>

                                        <th scope="row">First Half Hour </th>

                                        <td>£65</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">Subsequent Hour </th>

                                        <td>£50</td>

                                     </tr>

                                  </tbody>

                               </table>

                               <form class="form-inline  ">

                                  <input class="form-control  " type="search" placeholder="Search" aria-label="Search">

                                  <button class="btn  " type="submit">BOOK</button>

                               </form>

                            </div>



                            <div class="tab-pane fade    " id="tab-sec7-2" role="tabpanel" aria-labelledby="tab-sec7-2-tab">

                               <h5>Blocked sink and wash basin</h5>

                               <p>To determine the price of blocked sink and wash basin service, enter the hours you will think to complete the job and complete the rest of the information required to instantly be quoted.</p>
                               <table class="table table-striped">

                                  <thead class="thead-dark">

                                     <tr>

                                        <th scope="col">Services </th>

                                        <th scope="col">Price</th>

                                     </tr>

                                  </thead>

                                  <tbody>



                                     <tr>

                                        <th scope="row">First Half Hour </th>

                                        <td>£65</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">Subsequent Hour </th>

                                        <td>£50</td>

                                     </tr>

                                  </tbody>

                               </table>

                               <form class="form-inline  ">

                                  <input class="form-control  " type="search" placeholder="Search" aria-label="Search">

                                  <button class="btn  " type="submit">BOOK</button>

                               </form>

                            </div>





                            <div class="tab-pane fade    " id="tab-sec7-3" role="tabpanel" aria-labelledby="tab-sec7-3-tab">

                               <h5> CCTV Drainage Survey </h5>

                               <p>To determine the price of the cctv drainage survey service, enter the hours you will think to complete the job and complete the rest of the information required to instantly be quoted. You will only be charged a booking deposit to confirm your booking. </p>
                               <table class="table table-striped">

                                  <thead class="thead-dark">

                                     <tr>

                                        <th scope="col">Services </th>

                                        <th scope="col">Price</th>

                                     </tr>

                                  </thead>

                                  <tbody>



                                     <tr>

                                        <th scope="row">First Half Hour </th>

                                        <td>£65</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">Subsequent Hour </th>

                                        <td>£50</td>

                                     </tr>

                                  </tbody>

                               </table>

                               <form class="form-inline  ">

                                  <input class="form-control  " type="search" placeholder="Search" aria-label="Search">

                                  <button class="btn  " type="submit">BOOK</button>

                               </form>

                            </div>



                            <div class="tab-pane fade    " id="tab-sec7-4" role="tabpanel" aria-labelledby="tab-sec7-4-tab">

                               <h5>External Drain Blockage</h5>



                               <table class="table table-striped">

                                  <thead class="thead-dark">

                                     <tr>

                                        <th scope="col">Services </th>

                                        <th scope="col">Price</th>

                                     </tr>

                                  </thead>

                                  <tbody>



                                     <tr>

                                        <th scope="row">First Half Hour </th>

                                        <td>£65</td>

                                     </tr>

                                     <tr>

                                        <th scope="row">Subsequent Hour </th>

                                        <td>£50</td>

                                     </tr>

                                  </tbody>

                               </table>

                               <form class="form-inline  ">

                                  <input class="form-control  " type="search" placeholder="Search" aria-label="Search">

                                  <button class="btn  " type="submit">BOOK</button>

                               </form>

                            </div>

















                         </div>





                      </div>



                   </div>



                </div>

             </div>

          </div>













          <!-----------------------   Tradesman Services      --------------->













          <div class="card to-top6">

             <div class="card-header" id="headingseven">

                <div class="pricing-table  " type="button" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">

                   <div class="row align-items-center">

                      <div class="col-lg-3">

                         <h5 class="pricing-table__title">Tradesman Services </h5>

                      </div>

                      <div class="col-lg-5">

                         <div class="pricing-table__price">

                            <span class="pricing-table__text">Price starting from</span>

                            <span><i class="fas fa-pound-sign ml-2"></i> 20</span>

                            <span></span>

                         </div>

                      </div>

                      <div class="col-lg-4 text-lg-right">

                         <a class="button button--green">

                            <span>Explore</span>

                            <svg class="icon">

                               <i class="fas fa-arrow-down"></i>

                            </svg>

                         </a>

                      </div>

                   </div>

                </div>

             </div>

             <div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#accordionExample">

                <div class="card-body">



                   <h5> Tradesman Services </h5>

                   <!--  -->
                   <h5>Handyman</h5>
                   <p>The price for handyman service is determined based on the number of hours you choose. A minimum of 2 hours applies. </p>
                   <table class="table table-striped">

                      <thead class="thead-dark">

                         <tr>

                            <th scope="col">Services </th>

                            <th scope="col">Price</th>

                         </tr>

                      </thead>

                      <tbody>



                         <tr>

                            <th scope="row">Handyman </th>

                            <td>£45/hr</td>

                         </tr>








                      </tbody>

                   </table>

                   <h5>Plumber</h5>
                   <p>The price for the plumber service is based on the number of hours that are required for the service. </p>
                   <table class="table table-striped">

                      <thead class="thead-dark">

                         <tr>

                            <th scope="col">Services </th>

                            <th scope="col">Price</th>

                         </tr>

                      </thead>

                      <tbody>







                         <tr>

                            <th scope="row">Plumber </th>

                            <td>£110/hr</td>

                         </tr>








                      </tbody>

                   </table>


                   <h5>Electrician </h5>
                   <p>The price for the electrician service is based on the number of hours that are required for the service. </p>
                   <table class="table table-striped">

                      <thead class="thead-dark">

                         <tr>

                            <th scope="col">Services </th>

                            <th scope="col">Price</th>

                         </tr>

                      </thead>

                      <tbody>





                         <tr>

                            <th scope="row">Electrician </th>

                            <td>£110/hr</td>

                         </tr>











                      </tbody>

                   </table>


                   <h5>Painters and Decorators</h5>
                   <p>The price for the painter and decorators service is based on the number of hours that are required for the service. If purchase time applies that will be added on site by the expert.</p>
                   <table class="table table-striped">

                      <thead class="thead-dark">

                         <tr>

                            <th scope="col">Services </th>

                            <th scope="col">Price</th>

                         </tr>

                      </thead>

                      <tbody>








                         <tr>

                            <th scope="row">Painters and Decorators </th>

                            <td> £45/hr</td>

                         </tr>





                      </tbody>

                   </table>



                   <form class="form-inline  ">

                      <input class="form-control  " type="search" placeholder="Search" aria-label="Search">

                      <button class="btn  " type="submit">BOOK</button>

                   </form>



                </div>

             </div>

          </div>








          <!-----------------------   Furniture Assembly.     --------------->







          <div class="card to-top7">

             <div class="card-header" id="headingeight">

                <div class="pricing-table  " type="button" data-toggle="collapse" data-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">

                   <div class="row align-items-center">

                      <div class="col-lg-3">

                         <h5 class="pricing-table__title">Furniture Assembly </h5>

                      </div>

                      <div class="col-lg-5">

                         <div class="pricing-table__price">

                            <span class="pricing-table__text">Price starting from</span>

                            <span><i class="fas fa-pound-sign ml-2"></i> 16</span>

                            <span></span>

                         </div>

                      </div>

                      <div class="col-lg-4 text-lg-right">

                         <a class="button button--green">

                            <span>Explore</span>

                            <svg class="icon">

                               <i class="fas fa-arrow-down"></i>

                            </svg>

                         </a>

                      </div>

                   </div>

                </div>

             </div>

             <div id="collapseeight" class="collapse" aria-labelledby="headingeight" data-parent="#accordionExample">

                <div class="card-body">



                   <h5> Furniture Assembly</h5>

                   <!--  -->
                   <p>The price for the completion of the job is determined based on the hours required for completing the job. If you are not sure of the exact hours enter the hours you think will be required. You will only be charged a booking deposit. Any changes in the hours can be discussed once the expert attends your property. The price per hour is given below. </p>
                   <table class="table table-striped">

                      <thead class="thead-dark">

                         <tr>

                            <th scope="col">Services </th>

                            <th scope="col">Price</th>

                         </tr>

                      </thead>

                      <tbody>



                         <tr>

                            <th scope="row">Furniture Assembly </th>

                            <td>£16</td>

                         </tr>








                      </tbody>

                   </table>




                   <h5>Furniture Disassembly </h5>
                   <p>The price for furniture dis assembly is based on the number of hours it takes for the job to be completed. Not to worry if you cannot provide an accurate number of hours required. Our expert will discuss the exact hours before he commences the job. You will only be charged a booking deposit. </p>
                   <table class="table table-striped">

                      <thead class="thead-dark">

                         <tr>

                            <th scope="col">Services </th>

                            <th scope="col">Price</th>

                         </tr>

                      </thead>

                      <tbody>








                         <tr>

                            <th scope="row">Furniture Disassembly </th>

                            <td>£16</td>

                         </tr>





                      </tbody>

                   </table>



                   <form class="form-inline  ">

                      <input class="form-control  " type="search" placeholder="Search" aria-label="Search">

                      <button class="btn  " type="submit">BOOK</button>

                   </form>



                </div>

             </div>

          </div>

























       </div>

    </div>

















    </div>



 </section>

 <!--====== FEATURE PART ENDS ======-->







 <!--====== PRICING PART START ======-->

 <section class="pricing-area pricing-area-two bg_cover pt-130 pb-100"

    style="background-image: url({{asset('assets/images/pricing-bg.jpg')}});">

    <div class="container">







       <div class="row justify-content-center">

          <div class="col-lg-4 col-md-6 col-sm-9">

             <div class="feature-item style-three text-center mt-30">

                <i class="flaticon-avatar"><span></span></i>

                <h4 class="title">Estimated Price</h4>

                <p>Klean keepers always try to give you an estimated price for the service that you are looking for.</p>

             </div>

          </div>

          <div class="col-lg-4 col-md-6 col-sm-9">

             <div class="feature-item style-three text-center mt-30">

                <i class="flaticon-tag"><span></span></i>

                <h4 class="title">Fixed price</h4>

                <p>Once our expert has examined the work that needs to be done and have discussed any changes from the estimated price with you then a fixed price is set.</p>

             </div>

          </div>

          <div class="col-lg-4 col-md-7 col-sm-9">

             <div class="feature-item style-three text-center mt-30">

                <i class="flaticon-thumb-up"><span></span></i>

                <h4 class="title">Free quote</h4>

                <p>Some jobs are a bit more complex and we require a site visit to give you a more accurate quote.</p>

             </div>

          </div>

       </div>













    </div>

 </section>













 <!--====== CTA PART START ======-->

 <section class="cta-section">

    <div class="container">

       <div class="row align-items-center">

          <div class="col-lg-8">

             <div class="cta-text">

                <h2>{{Key::get('service-cta-title')}}</h2>

                <p>

                   {{Key::get('service-cta-description')}}

                </p>

             </div>

          </div>

          <div class="col-lg-4">

             <div class="cta-links text-right">

                <p><a
                     aria-label="cat links modal1"
                      @if(strpos(Key::get('service-cta-btn-1-action'),'#') !==false) data-toggle="modal" data-target="{{Key::get('service-cta-btn-1-action')}}"

                      @elseif(strpos(Key::get('service-cta-btn-1-action'),'http') !==false)

                      href="{{Key::get('service-cta-btn-1-action')}}"

                      @else

                      href="{{url(Key::get('service-cta-btn-1-action'))}}"

                      @endif data-slideinleft><span class="btn-span">{{Key::get('service-cta-btn-1-label')}}</span></a></p>





                <a class="main-btn main-btn-3"
                  aria-label="cat links mainbtn"
                   @if(strpos(Key::get('service-cta-btn-2-action'),'#') !==false) data-toggle="modal" data-target="{{Key::get('service-cta-btn-2-action')}}"

                   @elseif(strpos(Key::get('service-cta-btn-2-action'),'http') !==false)

                   href="{{Key::get('service-cta-btn-2-action')}}"

                   @else

                   href="{{url(Key::get('service-cta-btn-2-action'))}}"

                   @endif

                   data-slideinright><span class="btn-span">{{Key::get('service-cta-btn-2-label')}}</span></a>





             </div>

          </div>

       </div>

    </div>

 </section>

 <!--====== CTA PART END ======-->





 @endsection





 @section('bottom')



 <script type="text/javascript">
    $(document).ready(function() {



       $('.accordion .card').click(function() {

          $('.accordion .card').removeClass('active-tab');

          $(this).addClass('active-tab');

       });





       $('.nav-tabs-dropdown')

          .on("click", "li:not('.active') a", function(event) {
             $(this).closest('ul').removeClass("open");

          })

          .on("click", "li.active a", function(event) {
             $(this).closest('ul').toggleClass("open");

          });



       $('.nav-tabs-dropdown li').click(function() {

          $('.nav-tabs-dropdown li').removeClass('active');

          $(this).addClass('active');

       });










       $('.to-top a').click(function() {
          $("html, body").stop().animate({
             scrollTop: 200
          }, 600);

       });


       $('.to-top1 a').click(function() {
          $("html, body").stop().animate({
             scrollTop: 200
          }, 600);

       });


       $('.to-top2 a').click(function() {
          $("html, body").stop().animate({
             scrollTop: 330
          }, 600);

       });


       $('.to-top3 a').click(function() {
          $("html, body").stop().animate({
             scrollTop: 430
          }, 600);

       });

       $('.to-top4 a').click(function() {
          $("html, body").stop().animate({
             scrollTop: 560
          }, 600);

       });


       $('.to-top5 a').click(function() {
          $("html, body").stop().animate({
             scrollTop: 660
          }, 600);

       });



       $('.to-top6 a').click(function() {
          $("html, body").stop().animate({
             scrollTop: 760
          }, 600);

       });


       $('.to-top7 a').click(function() {
          $("html, body").stop().animate({
             scrollTop: 860
          }, 600);

       });



       $('table').after("<div class='note'>Note: There will be additional 20% charges on weekend </div>");






    });
 </script>



 @endsection