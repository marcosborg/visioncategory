<!DOCTYPE html>
<html lang="pt">

<head>
    <title>Vision Category</title>
    <link rel="icon" href="/assets/website/images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Vision Category - Gestores de frota TVDE" name="description">
    <meta content="Netlook" name="author">
    <!-- CSS Files
    ================================================== -->
    <link href="/assets/website/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="/assets/website/css/mdb.min.css" rel="stylesheet" type="text/css" id="mdb">
    <link href="/assets/website/css/plugins.css" rel="stylesheet" type="text/css">
    <link href="/assets/website/css/style.css" rel="stylesheet" type="text/css">
    <link href="/assets/website/css/coloring.css" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="/assets/website/css/colors/scheme-07.css" rel="stylesheet" type="text/css">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="/assets/favicon/site.webmanifest">
</head>

<body>
    <div id="wrapper">

        <!-- page preloader begin -->
        <div id="de-preloader"></div>
        <!-- page preloader close -->

        <!-- header begin -->
        <header class="header-light scroll-light has-topbar">
            <x-website.topbar />
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <div class="de-flex-col">
                                    <!-- logo begin -->
                                    <div id="logo">
                                        <a href="index.html">
                                            <img class="logo-1" src="/assets/website/images/logo-light.png" alt="">
                                            <img class="logo-2" src="/assets/website/images/logo.png" alt="">
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                </div>
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <ul id="mainmenu">
                                    <li><a class="menu-item" href="index.html">Home</a></li>
                                    <li><a class="menu-item" href="cars.html">Cars</a>
                                        <ul>
                                            <li><a class="menu-item" href="cars.html">Cars List 1</a></li>
                                            <li><a class="menu-item" href="car-single.html">Cars Single</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="menu-item" href="about.html">About Us</a></li>
                                </ul>
                            </div>
                            <div class="de-flex-col">
                                <div class="menu_side_area">
                                    <a href="contact.html" class="btn-main">Contact</a>
                                    <span id="menu-btn"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>

            @yield('content')


        </div>
        <!-- content close -->
        <a href="#" id="back-to-top"></a>
        <!-- footer begin -->
        <x-website.footer-component />
        <!-- footer close -->
    </div>

    <!-- Javascript Files
    ================================================== -->
    <script src="/assets/website/js/plugins.js"></script>
    <script src="/assets/website/js/designesia.js"></script>

</body>

</html>
