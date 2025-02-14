@extends('layouts.website')

@section('content')

<div class="container" style="margin-top: 150px; margin-bottom: 50px;">
    <h1 style="color: #555555; text-align: center;">{{ $car->title }}<br><small>{{ $car->subtitle }}</small></h1>
</div>

<section id="section-car-details">
    <div class="container">
        <div class="row g-5">

            <div class="col-lg-6">
                <img src="{{ $car->photo->getUrl() }}" class="img-fluid">
                <h3>{{ $car->title }}<br><small>{{ $car->subtitle }}</small></h3>
                <div class="spacer-20"></div>
                {!! $car->specifications !!}
            </div>

            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="de-price text-center">
                            Por dia
                            <h3>€{{ $car->price }}</h3>
                        </div>
                        <div class="spacer-30"></div>
                        <div class="de-box mb25">
                            <form name="contactForm" method="post">
                                <h4>Pedido de contacto</h4>

                                <div class="spacer-20"></div>

                                <div class="row">
                                    <div class="col-lg-12 mb20">
                                        <h5>Nome *</h5>
                                        <input type="text" name="name" placeholder="" class="form-control" required>
                                    </div>
                                    <div class="col-lg-12 mb20">
                                        <h5>Telefone *</h5>
                                        <input type="text" name="phone" placeholder="" class="form-control" required>
                                    </div>
                                    <div class="col-lg-12 mb20">
                                        <h5>Email *</h5>
                                        <input type="email" name="email" placeholder="" class="form-control" required>
                                    </div>
                                    <div class="col-lg-12 mb20">
                                        <h5>Mensagem</h5>
                                        <textarea name="message" placeholder="" class="form-control"></textarea>
                                    </div>

                                </div>
                                <input type='submit' id='send_message' value='Pedir contacto' class="btn-main btn-fullwidth">
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

@endsection