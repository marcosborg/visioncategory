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
                            Por semana
                            <h3>€{{ $car->price }}</h3>
                        </div>
                        <div class="spacer-30"></div>
                        <div class="de-box mb25">
                            <form action="/forms/rent" method="post" id="rent">
                                @csrf
                                <input type="hidden" name="car_id" value="{{ $car->id }}">
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
                                        <h5>Cidade *</h5>
                                        <input type="text" name="city" placeholder="" class="form-control" required>
                                    </div>
                                    <div class="col-lg-12 mb20">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input type="hidden" name="tvde" value="0">
                                                    <input class="form-check-input" type="checkbox" value="1" id="tvde" name="tvde" style="border: solid 1px #999;">
                                                    <label class="form-check-label" for="tvde">
                                                        Tem cartão TVDE?
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="tvde_card" placeholder="Indique o n.º" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb20">
                                        <h5>Mensagem</h5>
                                        <textarea name="message" placeholder="" class="form-control"></textarea>
                                    </div>
                                    <div class="col-lg-12 mb20">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="1" id="rgpd" name="rgpd" style="border: solid 1px #999;" required>
                                            <label class="form-check-label" for="rgpd">
                                                Autorizo o tratamento dos dados fornecidos
                                            </label>
                                        </div>
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
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://malsup.github.io/jquery.form.js"></script>
<script>
    $(document).ready(function() {
        $('#rent').ajaxForm({
            beforeSubmit: function() {
                $.LoadingOverlay('show');
            }
            , success: function(resp) {
                $.LoadingOverlay('hide');
                Swal.fire({
                    title: "Enviado com sucesso!"
                    , text: "Vamos contactar brevemente!"
                    , icon: "success"
                }).then(() => {
                    window.location.reload();
                });
            }
            , error: function(err) {
                console.log(err);
                $.LoadingOverlay('hide');
                Swal.fire({
                    title: "Erro no envio!"
                    , text: "Tente visioncategory@gmail.com"
                    , icon: "danger"
                }).then(() => {
                    window.location.reload();
                });
            }
        });
    });

</script>
@endsection
