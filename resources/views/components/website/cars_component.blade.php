@if (App\Models\Car::all()->count() > 0)
<section id="section-cars" class="no-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 offset-lg-3 text-center">
                <h2>Aluguer de viaturas</h2>
                <div class="spacer-20"></div>
            </div>
            <div class="clearfix"></div>
            <div id="items-carousel" class="owl-carousel wow fadeIn">
                @foreach (App\Models\Car::all() as $car)

                <div class="col-lg-12">
                    <div class="de-item mb30">
                        <div class="d-img">
                            <img src="{{ $car->photo ? $car->photo->getUrl() : 'https://placehold.co/1920x1080' }}" class="img-fluid" alt="">
                        </div>
                        <div class="d-info">
                            <div class="d-text">
                                <h4>{{ $car->title ?? '' }}</h4>
                                <div class="d-price">
                                    {{ $car->subtitle ?? '' }} <span>€{{ $car->price ?? '' }}</span>
                                    <a class="btn-main" href="/rent/{{ $car->id }}/{{ Str::slug($car->title) }}">Saber mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>

        </div>
    </div>
</section>
@endif
