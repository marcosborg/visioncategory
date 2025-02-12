<section>
    <div class="container">
        <div class="row">
            @foreach (\App\Models\Service::all() as $service)
            <div class="col-md-3">
                {!! $service->icon !!}
                <h4>{{ $service->title }}</h4>
                <p>{{ $service->text }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>