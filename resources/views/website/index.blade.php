@extends('layouts.website')

@section('content')
<x-website.hero_banner />

<x-website.cars_component />

<section id="section-img-with-tab" data-bgcolor="#f8f8f8">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 offset-lg-7">

                <h2>Aluguer de viaturas</h2>
                <div class="spacer-20"></div>

                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Luxury</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Comfort</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Prestige</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <p>We offer a meticulously curated collection of the most sought-after luxury
                            vehicles on the market. Whether you prefer the sporty allure of a
                            high-performance sports car, the sophistication of a sleek and luxurious sedan,
                            or the versatility of a premium SUV, we have the perfect car to match your
                            discerning taste.</p>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <p>We prioritize your comfort and convenience throughout your journey. We understand
                            that a comfortable ride can make a world of difference, whether you're embarking
                            on a business trip or enjoying a leisurely vacation. That's why we offer a wide
                            range of well-maintained, comfortable cars that cater to your specific needs.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <p>We understand that prestige goes beyond luxury. It's about making a statement,
                            embracing sophistication, and indulging in the finer things in life. That's why
                            we offer an exclusive selection of prestigious cars that exude elegance, style,
                            and status.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="image-container col-md-6 pull-right" data-bgimage="url(assets/website/images/background/5.jpg) center">
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h2>Explore the world with comfortable car</h2>
                <div class="spacer-20"></div>
            </div>
            <div class="col-md-3">
                <i class="fa fa-trophy de-icon mb20"></i>
                <h4>First Class Services</h4>
                <p>Where luxury meets exceptional care, creating unforgettable moments and exceeding your
                    every expectation.</p>
            </div>
            <div class="col-md-3">
                <i class="fa fa-road de-icon mb20"></i>
                <h4>24/7 road assistance</h4>
                <p>Reliable support when you need it most, keeping you on the move with confidence and peace
                    of mind.</p>
            </div>
            <div class="col-md-3">
                <i class="fa fa-map-pin de-icon mb20"></i>
                <h4>Free Pick-Up & Drop-Off</h4>
                <p>Enjoy free pickup and drop-off services, adding an extra layer of ease to your car rental
                    experience.</p>
            </div>
        </div>
    </div>
</section>

<section id="section-testimonials" class="no-top no-bottom">
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

<section id="section-news">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 offset-lg-3 text-center">
                <h2>Latest News</h2>
                <p>Breaking news, fresh perspectives, and in-depth coverage - stay ahead with our latest
                    news, insights, and analysis.</p>
                <div class="spacer-20"></div>
            </div>

            <div class="col-lg-4 mb10">
                <div class="bloglist s2 item">
                    <div class="post-content">
                        <div class="post-image">
                            <div class="date-box">
                                <div class="m">10</div>
                                <div class="d">MAR</div>
                            </div>
                            <img alt="" src="assets/website/images/news/pic-blog-1.jpg" class="lazy">
                        </div>
                        <div class="post-text">
                            <h4><a href="news-single.html">Enjoy Best Travel Experience<span></span></a>
                            </h4>
                            <p>Dolore officia sint incididunt non excepteur ea mollit commodo ut enim
                                reprehenderit cupidatat labore ad laborum consectetur.</p>
                            <a class="btn-main" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb10">
                <div class="bloglist s2 item">
                    <div class="post-content">
                        <div class="post-image">
                            <div class="date-box">
                                <div class="m">12</div>
                                <div class="d">MAR</div>
                            </div>
                            <img alt="" src="assets/website/images/news/pic-blog-2.jpg" class="lazy">
                        </div>
                        <div class="post-text">
                            <h4><a href="news-single.html">The Future of Car Rent<span></span></a></h4>
                            <p>Dolore officia sint incididunt non excepteur ea mollit commodo ut enim
                                reprehenderit cupidatat labore ad laborum consectetur.</p>
                            <a class="btn-main" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb10">
                <div class="bloglist s2 item">
                    <div class="post-content">
                        <div class="post-image">
                            <div class="date-box">
                                <div class="m">14</div>
                                <div class="d">MAR</div>
                            </div>
                            <img alt="" src="assets/website/images/news/pic-blog-3.jpg" class="lazy">
                        </div>
                        <div class="post-text">
                            <h4><a href="news-single.html">Holiday Tips For Backpacker<span></span></a></h4>
                            <p>Dolore officia sint incididunt non excepteur ea mollit commodo ut enim
                                reprehenderit cupidatat labore ad laborum consectetur.</p>
                            <a class="btn-main" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="section-fun-facts" class="bg-color text-light">
    <div class="container">
        <div class="row g-custom-x force-text-center">
            <div class="col-md-3 col-sm-6 mb-sm-30">
                <div class="de_count wow fadeInUp">
                    <h3 class="timer" data-to="15425" data-speed="3000">0</h3>
                    Trips Powered
                    <p class="d-small">Lorem ipsum adipisicing officia in adipisicing do velit sit tempor ea
                        consectetur.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-sm-30">
                <div class="de_count wow fadeInUp">
                    <h3 class="timer" data-to="8745" data-speed="3000">0</h3>
                    Happy Customers
                    <p class="d-small">Lorem ipsum adipisicing officia in adipisicing do velit sit tempor ea
                        consectetur.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-sm-30">
                <div class="de_count wow fadeInUp">
                    <h3 class="timer" data-to="235" data-speed="3000">0</h3>
                    Fleets Vehicle
                    <p class="d-small">Lorem ipsum adipisicing officia in adipisicing do velit sit tempor ea
                        consectetur.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-sm-30">
                <div class="de_count wow fadeInUp">
                    <h3 class="timer" data-to="15" data-speed="3000">0</h3>
                    Years Experience
                    <p class="d-small">Lorem ipsum adipisicing officia in adipisicing do velit sit tempor ea
                        consectetur.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section aria-label="section" class="pt40 pb40 text-light" data-bgcolor="#181818">
    <div class="wow fadeInRight d-flex">
        <div class="de-marquee-list">
            <div class="d-item">
                <span class="d-item-txt">SUV</span>
                <span class="d-item-display">
                    <i class="d-item-dot"></i>
                </span>
                <span class="d-item-txt">Hatchback</span>
                <span class="d-item-display">
                    <i class="d-item-dot"></i>
                </span>
                <span class="d-item-txt">Crossover</span>
                <span class="d-item-display">
                    <i class="d-item-dot"></i>
                </span>
                <span class="d-item-txt">Convertible</span>
                <span class="d-item-display">
                    <i class="d-item-dot"></i>
                </span>
                <span class="d-item-txt">Sedan</span>
                <span class="d-item-display">
                    <i class="d-item-dot"></i>
                </span>
                <span class="d-item-txt">Sports Car</span>
                <span class="d-item-display">
                    <i class="d-item-dot"></i>
                </span>
                <span class="d-item-txt">Coupe</span>
                <span class="d-item-display">
                    <i class="d-item-dot"></i>
                </span>
                <span class="d-item-txt">Minivan</span>
                <span class="d-item-display">
                    <i class="d-item-dot"></i>
                </span>
                <span class="d-item-txt">Station Wagon</span>
                <span class="d-item-display">
                    <i class="d-item-dot"></i>
                </span>
                <span class="d-item-txt">Pickup Truck</span>
                <span class="d-item-display">
                    <i class="d-item-dot"></i>
                </span>
                <span class="d-item-txt">Minivans</span>
                <span class="d-item-display">
                    <i class="d-item-dot"></i>
                </span>
                <span class="d-item-txt">Exotic Cars</span>
                <span class="d-item-display">
                    <i class="d-item-dot"></i>
                </span>
            </div>
        </div>

        <div class="de-marquee-list">
            <div class="d-item">
                <span class="d-item-txt">SUV</span>
                <span class="d-item-display">
                    <i class="d-item-dot"></i>
                </span>
                <span class="d-item-txt">Hatchback</span>
                <span class="d-item-display">
                    <i class="d-item-dot"></i>
                </span>
                <span class="d-item-txt">Crossover</span>
                <span class="d-item-display">
                    <i class="d-item-dot"></i>
                </span>
                <span class="d-item-txt">Convertible</span>
                <span class="d-item-display">
                    <i class="d-item-dot"></i>
                </span>
                <span class="d-item-txt">Sedan</span>
                <span class="d-item-display">
                    <i class="d-item-dot"></i>
                </span>
                <span class="d-item-txt">Sports Car</span>
                <span class="d-item-display">
                    <i class="d-item-dot"></i>
                </span>
                <span class="d-item-txt">Coupe</span>
                <span class="d-item-display">
                    <i class="d-item-dot"></i>
                </span>
                <span class="d-item-txt">Minivan</span>
                <span class="d-item-display">
                    <i class="d-item-dot"></i>
                </span>
                <span class="d-item-txt">Station Wagon</span>
                <span class="d-item-display">
                    <i class="d-item-dot"></i>
                </span>
                <span class="d-item-txt">Pickup Truck</span>
                <span class="d-item-display">
                    <i class="d-item-dot"></i>
                </span>
                <span class="d-item-txt">Minivans</span>
                <span class="d-item-display">
                    <i class="d-item-dot"></i>
                </span>
                <span class="d-item-txt">Exotic Cars</span>
                <span class="d-item-display">
                    <i class="d-item-dot"></i>
                </span>
            </div>
        </div>
    </div>
</section>
@endsection
