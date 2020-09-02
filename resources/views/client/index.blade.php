@extends('layouts.client')

@section('content')
    <!--- Image Slider -->
    <div id="slides" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1"></li>
            <li data-target="#slides" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100"
                     src="{{ asset('../image/1.jpg') }}" alt="First slide"/>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100"
                     src="{{ asset('../image/2.jpg') }}" alt="Second slide"/>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100"
                     src="{{ asset('../image/3.jpg') }}" alt="Third slide"/>
            </div>
        </div>
        <a
            class="carousel-control-prev"
            href="#slides"
            role="button"
            data-slide="prev"
        >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a
            class="carousel-control-next"
            href="#slides"
            role="button"
            data-slide="next"
        >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container padding">
        <div class="main-section text-center">
            <div class="breakfast">
                <div class="row padding">
                    <div class="col-lg-6">
                        <img src="{{ asset('../image/Rectangle 1.png') }}" class="img-fluid" alt=""/>
                    </div>
                    <div class="col-lg-6">
                        <h2>Breakfast</h2>
                        <hr/>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Consequuntur, unde quaerat aliquid possimus ab sequi iusto animi
                            odit est natus. Repellat impedit nihil molestias eligendi sequi
                            sint itaque maiores consequuntur.
                        </p>
                        <br/>
                        <a href="foodmenu.html#breakfast" class="btn btn-primary"
                        >See all Menu</a
                        >
                    </div>
                </div>
            </div>
            <div class="dinner">
                <div class="row padding">
                    <div class="col-lg-6">
                        <h2>Dinner</h2>
                        <hr/>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Consequuntur, unde quaerat aliquid possimus ab sequi iusto animi
                            odit est natus. Repellat impedit nihil molestias eligendi sequi
                            sint itaque maiores consequuntur.
                        </p>
                        <br/>
                        <a href="foodmenu.html#dinner" class="btn btn-primary"
                        >See all Menu</a
                        >
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset('../image/Rectangle 2.png') }}" class="img-fluid" alt=""/>
                    </div>
                </div>
            </div>
            <div class="weekend">
                <div class="row padding">
                    <div class="col-lg-6">
                        <img src="{{ asset('../image/Rectangle 3.png') }}" class="img-fluid" alt=""/>
                    </div>
                    <div class="col-lg-6">
                        <h2>Weekend</h2>
                        <hr/>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Consequuntur, unde quaerat aliquid possimus ab sequi iusto animi
                            odit est natus. Repellat impedit nihil molestias eligendi sequi
                            sint itaque maiores consequuntur.
                        </p>
                        <br/>
                        <a href="foodmenu.html#weekend" class="btn btn-primary"
                        >See all Menu</a
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="contact-homepage">
        <div class="container">
            <div class="contact-section">
                <div class="row">
                    <div class="col-lg-6">
                        <!--Google map-->
                        <div
                            id="map-container-google-1"
                            class="z-depth-1-half map-container"
                            style="height: 500px"
                        >
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3190.3280738854473!2d174.73089849650964!3d-36.90641960143118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d468a0a70e753%3A0x34b49b15f68b8e40!2sBaklawa%20Cafe%20(Shefco)!5e0!3m2!1sen!2snz!4v1598782006305!5m2!1sen!2snz"
                                width="100%"
                                height="400px"
                                frameborder="0"
                                style="border: 0"
                                allowfullscreen=""
                                aria-hidden="false"
                                tabindex="0"
                            ></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h2>Visit Us</h2>
                        <hr/>

                        <p class="text-left">
                            <i class="fas fa-map-marker-alt"></i> 46 Stoddard Road, Mount
                            Roskill, Auckland 1041
                        </p>
                        <p class="text-left">
                            <i class="fas fa-envelope"></i> info@shefco.co.nz
                        </p>
                        <p class="text-left">
                            <i class="fas fa-phone-alt"></i> 09-620 5400 Ext 4
                        </p>
                        <p class="text-left">
                            <i class="fas fa-clock"></i> Monday - Sunday 8am - 10pm
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--- Connect -->
@endsection
