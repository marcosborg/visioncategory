@extends('layouts.website')

@section('content')

<div class="container" style="margin-top: 150px; margin-bottom: 50px;">
    <h1 style="color: #555555; text-align: center;">{{ $legal->title }}</h1>
</div>

<section id="section-img-with-tab" data-bgcolor="#f8f8f8">
    <div class="container">
        {!! $legal->text !!}
    </div>
</section>


@endsection
