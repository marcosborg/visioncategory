<div id="topbar" class="topbar-dark text-light">
    <div class="container">
        <div class="topbar-left xs-hide">
            <div class="topbar-widget">
                <div class="topbar-widget"><a href="#"><i class="fa fa-phone"></i>{{ \App\Models\WebsiteConfiguration::find(1)->phone }}</a></div>
                <div class="topbar-widget"><a href="#"><i class="fa fa-envelope"></i>{{ \App\Models\WebsiteConfiguration::find(1)->email }}</a>
                </div>
            </div>
        </div>

        <div class="topbar-right">
            <div class="social-icons">
                <a href="{{ \App\Models\WebsiteConfiguration::find(1)->facebook }}"><i class="fa fa-facebook fa-lg"></i></a>
                <a href="{{ \App\Models\WebsiteConfiguration::find(1)->instagram }}"><i class="fa fa-instagram fa-lg"></i></a>
                <a href="https://wa.me/{{ \App\Models\WebsiteConfiguration::find(1)->whatsapp }}" target="_new"><i class="fa fa-whatsapp fa-lg"></i></a>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>