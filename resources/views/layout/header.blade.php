<!DOCTYPE html>
<html">

    <head>
        <!-- STYLESHEETS -->
        <link rel="stylesheet" type="text/css" href="/css/plugins.css">
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <link rel="stylesheet" type="text/css" href="/css/templete.min.css">
        <link class="skin" rel="stylesheet" type="text/css" href="/css/skin/skin-1.css">
        <!--font family-->

        <!-- Revolution Slider Css -->
        <link rel="stylesheet" type="text/css" href="/plugins/revolution/revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="/plugins/revolution/revolution/css/settings.css">
        <link rel="stylesheet" type="text/css" href="/plugins/revolution/revolution/css/navigation.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <!-- Revolution Navigation Style -->

        {{-- <?php
        // $deger = '';
        // if ($deger == 'menu1') {
        //     $class1 = 'active';
        // } elseif ($deger == 'menu2') {
        //     $class2 = 'active';
        // } elseif ($deger == 'menu3') {
        //     $class3 = 'active';
        // } elseif ($deger == 'menu4') {
        //     $class4 = 'active';
        // } elseif ($deger == 'menu5') {
        //     $class5 = 'active';
        // } else {
        //     $class = ' ';
        // }
        ?> --}}
        
    </head>

    <body id="bg">
        <div class="page-wraper">
            <div id="loading-area"></div>

            <!-- header -->
            <header class="site-header header mo-left ">
                <div class="top-bar bg-secondary text-white">
                    <div class="container">
                        <div class="row d-flex justify-content-between">
                            <div class="dlab-topbar-left">
                                <ul>
                                    <li><i class="fa fa-phone m-r5"></i> <a
                                            href="https://api.whatsapp.com/send?phone=905335085191" target="_blank"
                                            title="whatsapp_line" rel="nofollow">+90 533 508 51 91</a></li>
                                    <li><i class="fa fa-map-marker m-r5"></i><a
                                            href="https://goo.gl/maps/MLkCjkQovNnJvqrw6" target="_blank"
                                            title="location" rel="nofollow">Acıbadem, Lise Yolu Sk. No:9/B 34718
                                            Kadıköy/İstanbul</li>
                                </ul>
                            </div>
                            <div class="dlab-topbar-right topbar-social">
                                <ul>
                                    <li><a target="_blank" href="https://www.facebook.com/sartbeautymerkezi"
                                            class="site-button-link facebook hover" rel="nofollow"
                                            title="sart_official_center_facebook"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a target="_blank" href="https://api.whatsapp.com/send?phone=905335085191"
                                            class="site-button-link whatsapp hover" rel="nofollow"
                                            title="sart_official_center_whatsapp"><i class="fa fa-whatsapp"></i></a>
                                    </li>
                                    <li><a target="_blank" href="https://www.instagram.com/s.art.beauty"
                                            class="site-button-link instagram hover" rel="nofollow"
                                            title="sart_official_center_instagram"><i class="fa fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- main header -->
                <div class="sticky-header main-bar-wraper navbar-expand-lg">
                    <div class="main-bar clearfix ">
                        <div class="container clearfix">
                            <!-- website logo -->
                            <div class="logo-header mostion">
                                <a href="{{ route('pages.home') }}" class="dez-page" title="S ART BEAUTY CENTER"><img
                                        class="logo-img" src="/images/sart/logo.png" alt="S ART BEAUTY CENTER"></a>
                            </div>
                            <!-- nav toggle button -->
                            <button class="navbar-toggler collapsed navicon justify-content-end" type="button"
                                data-toggle="collapse" data-target="#navbarNavDropdown"
                                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>

                            <!-- MENÜ START -->
                            <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                                <ul class="nav navbar-nav">
                                    <li class=""><a href="{{ route('pages.home') }}">Ana Sayfa </a></li>
                                    <li class=""><a href="{{ route('pages.about') }}" class="dez-page"
                                            title="#">Hakkımızda</li>
                                    <!-- Hizmetlerimiz -->
                                    {{-- <li class="">Hizmetlerimiz<a href="{{ route('pages.services') }}"  title="S Art Beauty Center Neler Yapar?"> <i class="fa fa-chevron-down"></i></a> --}}
                                    <li class="">Hizmetlerimiz
                                        <a href="{{ route('pages.services') }}"
                                            title="S Art Beauty Center Neler Yapar?">
                                            <i class="fa fa-chevron-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('pages.manicurepedicure') }}" class="dez-page"
                                                    title="Manikür ve Pedikür">Manikür ve
                                                    Pedikür</a></li>
                                            <li><a href="{{ route('pages.gelpolish') }}" class="dez-page"
                                                    title="Kalıcı Oje">Kalıcı Oje</a>
                                            </li>
                                            <li><a href="{{ route('pages.prostheticnails') }}" class="dez-page"
                                                    title="Protez Tırnak">Protez
                                                    Tırnak</a>
                                            </li>
                                            <li><a href="{{ route('pages.nailart') }}" class="dez-page"
                                                    title="Nail Art">Nail Art</li>
                                            <li><a href="{{ route('pages.eyelashextensions') }}" class="dez-page"
                                                    title="İpek Kirpik">İpek
                                                    Kirpik</a></li>
                                            <li><a href="{{ route('pages.eyelashlifting') }}" class="dez-page"
                                                    title="Kirpik Lifting">Kirpik
                                                    Lifting</a>
                                            </li>
                                            <li><a href="{{ route('pages.deepliner') }}" class="dez-page"
                                                    title="Dipliner">Dipliner</a></li>
                                            <li><a href="{{ route('pages.eyebrowlamination') }}" class="dez-page"
                                                    title="Kaş Laminasyon">Kaş
                                                    Laminasyon</a>
                                            </li>
                                            <li><a href="{{ route('pages.microblading') }}" class="dez-page"
                                                    title="Microblading">Microblading</a></li>

                                            <li><a href="{{ route('pages.shugaring') }}" class="dez-page"
                                                    title="Şeker Ağda">Şeker Ağda</a>
                                            </li>
                                            <li><a href="{{ route('pages.iselaser') }}" class="dez-page"
                                                    title="Buz Lazer Epilasyon">Buz
                                                    Lazer Epilasyon</a>
                                            </li>
                                            <li><a href="{{ route('pages.skincare') }}" class="dez-page"
                                                    title="Cilt Bakımı">Cilt
                                                    Bakımı</a></li>
                                            <li><a href="{{ route('pages.cellulitemassage') }}" class="dez-page"
                                                    title="G5 Selülit Masajı">G5
                                                    Selülit Masajı</a>
                                            </li>
                                            <li><a href="{{ route('pages.rollshape') }}" class="dez-page"
                                                    title="Roll Shape">Roll Shape</a>
                                            </li>
                                            <li><a href="{{ route('pages.lipcoloring') }}" class="dez-page"
                                                    title="Dudak Renklendirme">Dudak
                                                    Renklendirme</a></li>
                                            <li><a href="{{ route('pages.keratincare') }}" class="dez-page"
                                                    title="Keratin Bakım">Keratin
                                                    Bakım</a></li>
                                            <li><a href="{{ route('pages.perma') }}" class="dez-page"
                                                    title="Perma">Perma</a></li>
                                            <li><a href="{{ route('pages.brazilianblowdry') }}" class="dez-page"
                                                    title="Brezilya Fönü">Brezilya
                                                    Fönü</a></li>
                                            <li><a href="{{ route('pages.highlight') }}" class="dez-page"
                                                    title="Röfle">Röfle</a></li>
                                            <li><a href="{{ route('pages.hairdye') }}" class="dez-page"
                                                    title="Saç Boyası">Saç Boyası</a>
                                            </li>
                                            <li><a href="{{ route('pages.hairdipdye') }}" class="dez-page"
                                                    title="Dip Boyası">Dip Boyası</a>
                                            </li>
                                            <li><a href="{{ route('pages.haircut') }}" class="dez-page"
                                                    title="Saç Kesimi>">Saç Kesimi</a>
                                            </li>
                                            <li><a href="{{ route('pages.hairextension') }}" class="dez-page"
                                                    title="Saç Kaynak Uygulaması">Saç
                                                    Kaynak Uygulaması</a>
                                            </li>
                                            <li><a href="{{ route('pages.bridalhair') }}" class="dez-page"
                                                    title="Gelin Topuzu">Gelin
                                                    Topuzu</a></li>
                                        </ul>
                                    </li>
                                    <li class=" $class4"><a href="{{ route('pages.contact') }}" class="dez-page"
                                            title="S Art Beauty Center İletişim Sayfası">İletişim</a>
                                    </li>
                                    <!-- Language -->
                                    <li><a href="javascript:void(0);" class="dez-page"
                                            title="S Art Beauty Center Dil Seçeneği"><i
                                                class="fa fa-globe fa-3x globe-fs-20"></i> <span {{-- class="current-lang">(<?= $current_lang ?>)</span><i --}}
                                                class="fa fa-chevron-down"></i></a>

                                        <ul class="sub-menu">
                                            <li><a href="#" class="dez-page" title="turkish"><img
                                                        src="/images/tr.webp" class="lang-img"
                                                        alt="turkish">TR</a></li>
                                            <li><a href="#" class="dez-page" title="russian"><img
                                                        src="/images/ru.webp" class="lang-img"
                                                        alt="russian">RU</a></li>
                                            <li><a href="#" class="dez-page" title="english"><img
                                                        src="/images/us.webp" class="lang-img"
                                                        alt="english">ENG</a></li>
                                        </ul>
                                    </li>
                                    <!-- End Language -->

                                    <!-- MENÜ END-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- main header END -->
            </header>
            <!-- header END -->
