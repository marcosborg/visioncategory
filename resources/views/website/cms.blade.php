@extends('layouts.website')

@section('content')

<div class="container" style="margin-top: 150px; margin-bottom: 50px;">
    <h1 style="color: #555555; text-align: center;">{{ $page->title }}</h1>
</div>

<section id="section-img-with-tab" data-bgcolor="#f8f8f8">
    @if ($page->image)
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 offset-lg-7">
                <p>{{ $page->description }}</p>
                <div class="spacer-20"></div>
                {!! $page->text !!}
            </div>
        </div>
    </div>
    <div class="image-container col-md-6 pull-right" data-bgimage="url({{ $page->image ? $page->image->getUrl() : '/assets/website/images/background/5.jpg' }}) center">
    </div>
    @else
    <div class="container">
        <p>{{ $page->description }}</p>
                <div class="spacer-20"></div>
                {!! $page->text !!}
    </div>
    @endif
    
</section>


@endsection
