@extends('layouts.website')

@section('content')

<x-website.hero_banner />

<x-website.cars_component />

<x-website.featured />

<x-website.service-component />

<section id="section-testimonials" class="no-top">
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <div class="de-image-text">
                    <div class="d-text">
                        <div class="d-quote id-color"><i class="fa fa-quote-right"></i></div>
                        <h4>Excellent Service! Car Rent Service!</h4>
                        <blockquote>
                            I have been using Rentaly for my Car Rental needs for over 5 years now. I have
                            never had any problems with their service. Their customer support is always
                            responsive and helpful. I would recommend Rentaly to anyone looking for a
                            reliable Car Rental provider.
                            <span class="by">Stepanie Hutchkiss</span>
                        </blockquote>
                    </div>
                    <img src="assets/website/images/testimonial/1.jpg" class="img-fluid" alt="">
                </div>
            </div>


            <div class="col-md-4">
                <div class="de-image-text">
                    <div class="d-text">
                        <div class="d-quote id-color"><i class="fa fa-quote-right"></i></div>
                        <h4>Excellent Service! Car Rent Service!</h4>
                        <blockquote>
                            We have been using Rentaly for our trips needs for several years now and have
                            always been happy with their service. Their customer support is Excellent
                            Service! and they are always available to help with any issues we have. Their
                            prices are also very competitive.
                            <span class="by">Jovan Reels</span>
                        </blockquote>
                    </div>
                    <img src="assets/website/images/testimonial/2.jpg" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-md-4">
                <div class="de-image-text">
                    <div class="d-text">
                        <div class="d-quote id-color"><i class="fa fa-quote-right"></i></div>
                        <h4>Excellent Service! Car Rent Service!</h4>
                        <blockquote>
                            Endorsed by industry experts, Rentaly is the Car Rental solution you can trust.
                            With years of experience in the field, we provide fast, reliable and secure Car
                            Rental services.
                            <span class="by">Kanesha Keyton</span>
                        </blockquote>
                    </div>
                    <img src="assets/website/images/testimonial/3.jpg" class="img-fluid" alt="">
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
