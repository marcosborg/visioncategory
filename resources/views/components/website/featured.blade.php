<section id="section-img-with-tab" data-bgcolor="#f8f8f8">
    @foreach (\App\Models\Page::where('featured', true)->get() as $page)
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 offset-lg-7">
                <h2>{{ $page->title }}</h2>
                <div class="spacer-20"></div>
                <p>{{ $page->description }}</p>
            </div>
        </div>
    </div>
    <div class="image-container col-md-6 pull-right" data-bgimage="url({{ $page->image ? $page->image->getUrl() : 'assets/website/images/background/5.jpg' }}) center">
    </div>
    @endforeach
</section>
