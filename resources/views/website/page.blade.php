@extends('layouts.website')
@section('content')
<!-- section begin -->
<section id="subheader" class="jarallax text-light">
    <img src="/assets/website/images/background/subheader.jpg" class="jarallax-img" alt="">
    <div class="center-y relative text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>About Us</h1>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>
<!-- section close -->

<section>
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInRight">
                <img src="{{ $page->image->getUrl() }}" class="img-fluid">
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay=".25s">
                Lorem ipsum non aliquip esse do eu ad amet laboris do labore reprehenderit mollit exercitation cillum irure fugiat magna laboris aliquip adipisicing consectetur officia dolor minim ea enim amet in ut non non excepteur anim magna dolor nostrud commodo qui irure deserunt adipisicing nisi ex nostrud sunt officia in aliquip velit anim id aliqua qui do sed non ad qui sed in eu in aliqua sunt pariatur occaecat in ullamco deserunt dolor consectetur laborum non duis occaecat nulla ut sed qui sunt id ex sint sed eu excepteur minim nulla minim excepteur exercitation.
            </div>
        </div>
        <div class="spacer-double"></div>
    </div>
</section>
@endsection
<script>
    console.log({
        !!$page!!
    })

</script>
