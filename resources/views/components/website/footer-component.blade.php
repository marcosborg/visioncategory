@php
$website_configuration = \App\Models\WebsiteConfiguration::find(1);
$pages = \App\Models\Page::all();
$featured = \App\Models\Page::where('featured', true)->first();
$legals = \App\Models\Legal::all();
@endphp

<footer class="text-light">
    <div class="container">
        <div class="row g-custom-x">
            <div class="col-lg-3">
                <div class="widget">
                    <h5>{{ $website_configuration->name }}</h5>
                    <p>{{ $featured->description }}</p>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="widget">
                    <h5>Contactos</h5>
                    <address class="s1">
                        <span><i class="id-color fa fa-map-marker fa-lg"></i>{{ $website_configuration->address }}</span>
                        <span><i class="id-color fa fa-phone fa-lg"></i>{{ $website_configuration->phone }}</span>
                        <span><i class="id-color fa fa-envelope-o fa-lg"></i><a href="mailto:{{ $website_configuration->email }}">{{ $website_configuration->email }}</a></span>
                    </address>
                </div>
            </div>

            <div class="col-lg-3">
                <h5>Links</h5>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="widget">
                            <ul>
                                @foreach ($pages as $page)
                                <li><a href="/cms/{{ $page->id }}/{{ Str::slug($page->title) }}">{{ $page->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="widget">
                    <h5>Social Network</h5>
                    <div class="social-icons">
                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                        <a href="#"><i class="fa fa-instagram fa-lg"></i></a>
                        <a href="#"><i class="fa fa-whatsapp fa-lg"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="subfooter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="de-flex">
                        <div class="de-flex-col">
                            <a href="index.html">
                                Copyright {{ date('Y') }} - <a href="https://gestvde.pt" target="_new">gesTVDE</a>
                            </a>
                        </div>
                        <ul class="menu-simple">
                            @foreach ($legals as $legal)
                            <li><a href="/legal/{{ $legal->id }}/{{ Str::slug($legal->title) }}">{{ $legal->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
