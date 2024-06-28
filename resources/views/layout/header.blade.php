<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>@yield('title',config('setting.title'))</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="@yield('description',config('setting.description'))" content="Dlabs">

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
                                        title="@lang('header.whatsapp_line')" rel="nofollow">@lang('header.contact_us_section1_subtitle3_cont')</a></li>
                                <li><i class="fa fa-map-marker m-r5"></i><a href="https://goo.gl/maps/MLkCjkQovNnJvqrw6"
                                        target="_blank" title="location" rel="nofollow">@lang('header.contact_us_section1_subtitle1_cont')</li>
                            </ul>
                        </div>
                        <div class="dlab-topbar-right topbar-social">
                            <ul>
                                <li><a target="_blank" href="https://www.facebook.com/sartbeautymerkezi"
                                        class="site-button-link facebook hover" rel="nofollow"
                                        title="@lang('header.sart_official_center_facebook')"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a target="_blank" href="https://api.whatsapp.com/send?phone=905335085191"
                                        class="site-button-link whatsapp hover" rel="nofollow"
                                        title="@lang('header.sart_official_center_whatsapp')"><i class="fa fa-whatsapp"></i></a>
                                </li>
                                <li><a target="_blank" href="https://www.instagram.com/s.art.beauty"
                                        class="site-button-link instagram hover" rel="nofollow"
                                        title="@lang('header.sart_official_center_instagram')"><i class="fa fa-instagram"></i></a>
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
                            <a href="{{ route('pages.home') }}" class="dez-page" title="@lang('header.sart')"><img
                                    class="logo-img" src="/images/sart/logo.png" alt="@lang('header.sart')"></a>
                        </div>
                        <!-- nav toggle button -->
                        <button class="navbar-toggler collapsed navicon justify-content-end" type="button"
                            data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>

                        <!-- MENÜ START -->
                        <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="nav navbar-nav">
                                <li class=""><a href="{{ route('pages.home') }}">@lang('header.home')</a></li>
                                <li class=""><a href="{{ route('pages.about') }}" class="dez-page"
                                        title="@lang('header.about_us')">@lang('header.about_us')</li>
                                <!-- Hizmetlerimiz -->
                                <li class="">@lang('header.services')<a href="{{ route('pages.services') }}"
                                        title="@lang('header.sart_official_center_job_explanation')"><i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('pages.gelpolish') }}" class="dez-page"
                                                title="@lang('header.perminant_nail_polish')">@lang('header.perminant_nail_polish')</a></li>
                                        <li><a href="{{ route('pages.manicurepedicure') }}" class="dez-page"
                                                title="@lang('header.mani_pedi')">@lang('header.mani_pedi')</a></li>
                                        <li><a href="{{ route('pages.prostheticnails') }}" class="dez-page"
                                                title="@lang('header.prosthetic_nail')">@lang('header.prosthetic_nail')</a></li>
                                        <li><a href="{{ route('pages.nailart') }}" class="dez-page"
                                                title="@lang('header.nail_art')">@lang('header.nail_art')</a></li>
                                        <li><a href="{{ route('pages.eyelashextensions') }}" class="dez-page"
                                                title="@lang('header.silk_eyelash')">@lang('header.silk_eyelash')</a></li>
                                        <li><a href="{{ route('pages.eyelashlifting') }}" class="dez-page"
                                                title="@lang('header.eyelash_lifting')">@lang('header.eyelash_lifting')</a></li>
                                        <li><a href="{{ route('pages.eyelashlifting') }}" class="dez-page"
                                                title="@lang('header.dipliner')">@lang('header.dipliner')</a> </li>
                                        <li><a href="{{ route('pages.eyebrowlamination') }}" class="dez-page"
                                                title="@lang('header.eyebrow_lamination')">@lang('header.eyebrow_lamination')</a></li>
                                        <li><a href="{{ route('pages.microblading') }}" class="dez-page"
                                                title="@lang('header.microblading')">@lang('header.microblading')</a></li>
                                        <li><a href="{{ route('pages.shugaring') }}" class="dez-page"
                                                title="@lang('header.wax')">@lang('header.wax')</a></li>
                                        <li><a href="{{ route('pages.iselaser') }}" class="dez-page"
                                                title="@lang('header.lazer-epilasyon')">@lang('header.lazer-epilasyon')</a></li>
                                        <li><a href="{{ route('pages.skincare') }}" class="dez-page"
                                                title="@lang('header.skin-care')">@lang('header.skin-care')</a></li>
                                        <li><a href="{{ route('pages.cellulitemassage') }}" class="dez-page"
                                                title="@lang('header.cellulite-massage')">@lang('header.cellulite-massage')</a></li>
                                        <li><a href="{{ route('pages.rollshape') }}" class="dez-page"
                                                title="@lang('header.roll-shape')">@lang('header.roll-shape')</a> </li>
                                        <li><a href="{{ route('pages.lipcoloring') }}" class="dez-page"
                                                title="@lang('header.lip_filler')">@lang('header.lip_filler')</a></li>
                                        <li><a href="{{ route('pages.keratincare') }}" class="dez-page"
                                                title="@lang('header.keratin_care')">@lang('header.keratin_care')</a> </li>
                                        <li><a href="{{ route('pages.perma') }}" class="dez-page"
                                                title="@lang('header.perm')">@lang('header.perm')</a></li>
                                        <li><a href="{{ route('pages.brazilianblowdry') }}" class="dez-page"
                                                title="@lang('header.brazillian-blow-dry')">@lang('header.brazillian-blow-dry')</a></li>
                                        <li><a href="{{ route('pages.highlight') }}" class="dez-page"
                                                title="@lang('header.highlighted')">@lang('header.highlighted')</a></li>
                                        <li><a href="{{ route('pages.hairdye') }}" class="dez-page"
                                                title="@lang('header.hair_dye')">@lang('header.hair_dye')</a></li>
                                        <li><a href="{{ route('pages.hairdipdye') }}" class="dez-page"
                                                title="@lang('header.hair_dip_dye')">@lang('header.hair_dip_dye')</a></li>
                                        <li><a href="{{ route('pages.haircut') }}" class="dez-page"
                                                title="@lang('header.hair_cut')">@lang('header.hair_cut')</a> </li>
                                        <li><a href="{{ route('pages.hairextension') }}" class="dez-page"
                                                title="@lang('header.hair_extension')">@lang('header.hair_extension')</a></li>
                                        <li><a href="{{ route('pages.bridalhair') }}" class="dez-page"
                                                title="@lang('header.bridal_hair')">@lang('header.bridal_hair')</a></li>
                                    </ul>
                                </li>
                                <li class=" $class4"><a href="{{ route('pages.contact') }}" class="dez-page"
                                        title="@lang('header.sart_official_center_contact')">@lang('header.contact_us')</a></li>
                                <!-- Language -->
                                {{-- <li><a href="javascript:void(0);" class="dez-page" title="@lang('header.sart_official_center_lang_options')"><i class="fa fa-globe fa-3x globe-fs-20"></i class="fa fa-chevron-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="#" class="dez-page" title="@lang('header.turkish')"><img src="/images/tr.webp" class="lang-img" alt="@lang('header.turkish')">TR</a></li>
                                            <li><a href="#" class="dez-page" title="@lang('header.russian')"><img src="/images/ru.webp" class="lang-img" alt="@lang('header.russian')">RU</a></li>
                                            <li><a href="#" class="dez-page" title="@lang('header.english')"><img src="/images/us.webp" class="lang-img" alt="@lang('header.english')">ENG</a></li>
                                        </ul>
                                    </li> --}}

                                <!-- Language -->
                                <li>
                                    <a href="javascript:void(0);" class="dez-page"
                                        title="{{ __('header.sart_official_center_lang_options') }}">
                                        <i class="fa fa-globe fa-3x globe-fs-20"></i>
                                        <i class="fa fa-chevron-down"></i>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="@if (app()->getLocale() == 'tr') selected @endif">
                                            <a href="{{ route('set.language', 'tr') }}" class="dez-page"
                                                title="{{ __('header.turkish') }}">
                                                <img src="/images/tr.webp" class="lang-img"
                                                    alt="{{ __('header.turkish') }}"> TR
                                            </a>
                                        </li>
                                        <li class="@if (app()->getLocale() == 'ru') selected @endif">
                                            <a href="{{ route('set.language', 'ru') }}" class="dez-page"
                                                title="{{ __('header.russian') }}">
                                                <img src="/images/ru.webp" class="lang-img"
                                                    alt="{{ __('header.russian') }}"> RU
                                            </a>
                                        </li>
                                        <li class="@if (app()->getLocale() == 'en') selected @endif">
                                            <a href="{{ route('set.language', 'en') }}" class="dez-page"
                                                title="{{ __('header.english') }}">
                                                <img src="/images/us.webp" class="lang-img"
                                                    alt="{{ __('header.english') }}"> ENG
                                            </a>
                                        </li>
                                    </ul>
                                </li>


                                <!-- MENÜ END-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- main header END -->
        </header>
        <!-- header END -->
