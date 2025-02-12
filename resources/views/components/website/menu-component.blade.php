<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="de-flex sm-pt10">
                <div class="de-flex-col">
                    <div class="de-flex-col">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="/">
                                <img class="logo-1" src="/assets/website/images/logo-light.png" alt="">
                                <img class="logo-2" src="/assets/website/images/logo.png" alt="">
                            </a>
                        </div>
                        <!-- logo close -->
                    </div>
                </div>
                <div class="de-flex-col header-col-mid">
                    <ul id="mainmenu">
                        <li><a class="menu-item" href="/">Home</a></li>
                        @foreach ($pages as $page)
                        <li><a class="menu-item" href="/cms/{{ $page->id }}/{{ Str::slug($page->title) }}">{{ $page->title }}</a>    
                        @endforeach
                    </ul>
                </div>
                <div class="de-flex-col">
                    <div class="menu_side_area">
                        <a href="/cms/{{ $last_page->id }}/{{ Str::slug($last_page->title) }}" class="btn-main">{{ $last_page->title }}</a>
                        <span id="menu-btn"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>