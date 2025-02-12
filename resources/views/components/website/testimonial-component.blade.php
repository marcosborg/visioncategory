<section id="section-testimonials" class="no-top">
    <div class="container">
        <div class="row">
            @foreach (\App\Models\Testimonial::all() as $testimonial)
            <div class="col-md-4">
                <div class="de-image-text">
                    <div class="d-text">
                        <div class="d-quote id-color"><i class="fa fa-quote-right"></i></div>
                        <h4>{{ $testimonial->title }}</h4>
                        <blockquote>
                            {{ $testimonial->text }}
                            <span class="by">{{ $testimonial->name }}</span>
                        </blockquote>
                    </div>
                    <img src="{{ $testimonial->photo->getUrl() }}" class="img-fluid" alt="">
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>