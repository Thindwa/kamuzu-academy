@extends('layouts.frontend-master')

@section('content')
    <section class="page-header cta2">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center">
                    <h2 class="mb-3 text-capitalize text-white">Contact Us</h2>
                    <ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
                        <li class="list-inline-item"><a class="text-white" href="{{ URL::to('/home') }}">Home</a>
                        </li>
                        <li class="list-inline-item text-white">/ &nbsp; <a class="text-white"
                                href="{{ URL::to('/contact') }}">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


  <section class="section">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <!-- First Column -->
            <div class="col-lg-6 mt-5 mt-lg-0 text-center">
                <div class="contact-info">
                     <div class="row ">
                         
                          <div class="col-lg-6">
                                <!-- Block for Questions -->
                    <div class="block mt-0">
                        <h4 class="h5">Still Have Questions?</h4>
                        <div class="content">Call Us. We Will Be Happy To Help.
                            <br> <a href="tel:+265 999 971 196 ">+265 999 971 196 </a>
                            <br>Monday - Friday
                            <br>From 8AM to 6PM
                            <br>Central African Time
                        </div>
                    </div>
                              
                          </div>
                          
                           <div class="col-lg-6">
                                 <!-- Block for Main Campus -->
                    <div class="block mt-0">
                        <h4 class="h5">Main Campus</h4>
                        <div class="content">Kamuzu Academy,
                            <br>Private Bag 1,
                            <br>Mtunthama,
                            <br>Kasungu,
                            <br>Malawi.
                        </div>
                    </div>
                              
                          </div>
                      </div>
                  
                 
                    <!-- Social Icons Block -->
                    <div class="block">
                        <hr>
                        <ul class="list-unstyled list-inline my-4 social-icons">
                            <li class="list-inline-item me-3">
                                <a title="Explorer Facebook Profile" class="text-black" href="https://www.facebook.com/kamuzuacademy/" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- gmap -->
    <section class=" pt-0">
        <!-- Google Map -->
        <!-- <div id="map_canvas" data-latitude="51.507351" data-longitude="-0.127758"></div> -->
        <iframe id="map_canvas"
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14799.256305361405!2d33.6864209!3d-13.0304266!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x191ef121942f25c7%3A0xb074e0afac098696!2sKamuzu%20Academy!5e1!3m2!1sen!2smw!4v1682949640208!5m2!1sen!2smw"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <!-- /gmap -->
@endsection
