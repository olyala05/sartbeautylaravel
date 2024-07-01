<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>@yield('title', settings('seo')->title)</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="@yield('description', settings('seo')->description)" content="Dlabs">

    <!-- END SettingsTableSeeder Language -->

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
                                <li><a target="_blank" href="{{ settings('social-media')->facebook->href ?? '#' }}"
                                        class="site-button-link facebook hover" rel="nofollow"
                                        title="{{ settings('social-media')->facebook->alt ?? '#' }}"><i
                                            class="fa fa-facebook"></i></a>
                                </li>
                                <li><a target="_blank" href="{{ settings('social-media')->whatsapp->href ?? '#' }}"
                                        class="site-button-link whatsapp hover" rel="nofollow"
                                        title="{{ settings('social-media')->whatsapp->alt ?? '#' }}"><i
                                            class="fa fa-whatsapp"></i></a>
                                </li>
                                <li><a target="_blank" href="{{ settings('social-media')->instagram->href ?? '#' }}"
                                        class="site-button-link instagram hover" rel="nofollow"
                                        title="{{ settings('social-media')->instagram->alt ?? '#' }}"><i
                                            class="fa fa-instagram"></i></a>
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
                            <a href="{{ route('route', ['/']) }}" class="dez-page"
                                title="{{ settings('footer')->sart }}"><img class="logo-img"
                                    src="{{ settings('logo')->href }}" alt="{{ settings('logo')->alt }}"></a>
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
                                <li class=""><a href="{{ route('route', ['/']) }}">@lang('header.home')</a></li>
                                <li class=""><a href="{{ uniqRt('about-us') }}" class="dez-page"
                                        title="@lang('header.about_us')">@lang('header.about_us')</li>
                                <!-- Hizmetlerimiz -->
                                <li class="">@lang('header.services')<a href="{{ uniqRt('services') }}"
                                        title="@lang('header.sart_official_center_job_explanation')"><i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ uniqRt('permanent-nail-polish') }}" class="dez-page"
                                                title="@lang('header.perminant_nail_polish')">@lang('header.perminant_nail_polish')</a></li>
                                        <li><a href="{{ uniqRt('manicure-pedicure') }}" class="dez-page"
                                                title="@lang('header.mani_pedi')">@lang('header.mani_pedi')</a></li>
                                        <li><a href="{{ uniqRt('prosthetic-nails') }}" class="dez-page"
                                                title="@lang('header.prosthetic_nail')">@lang('header.prosthetic_nail')</a></li>
                                        <li><a href="{{ uniqRt('nail-art') }}" class="dez-page"
                                                title="@lang('header.nail_art')">@lang('header.nail_art')</a></li>
                                        <li><a href="{{ uniqRt('silk-eyelash') }}" class="dez-page"
                                                title="@lang('header.silk_eyelash')">@lang('header.silk_eyelash')</a></li>
                                        <li><a href="{{ uniqRt('eyelash-lifting') }}" class="dez-page"
                                                title="@lang('header.eyelash_lifting')">@lang('header.eyelash_lifting')</a></li>
                                        <li><a href="{{ uniqRt('deepliner') }}" class="dez-page"
                                                title="@lang('header.dipliner')">@lang('header.dipliner')</a> </li>
                                        <li><a href="{{ uniqRt('eyebrow-lamination') }}" class="dez-page"
                                                title="@lang('header.eyebrow_lamination')">@lang('header.eyebrow_lamination')</a></li>
                                        <li><a href="{{ uniqRt('microblading') }}" class="dez-page"
                                                title="@lang('header.microblading')">@lang('header.microblading')</a></li>
                                        <li><a href="{{ uniqRt('wax-application') }}" class="dez-page"
                                                title="@lang('header.wax')">@lang('header.wax')</a></li>
                                        <li><a href="{{ uniqRt('ice-laser-hair-removal') }}" class="dez-page"
                                                title="@lang('header.lazer-epilasyon')">@lang('header.lazer-epilasyon')</a></li>
                                        <li><a href="{{ uniqRt('skin-care') }}" class="dez-page"
                                                title="@lang('header.skin-care')">@lang('header.skin-care')</a></li>
                                        <li><a href="{{ uniqRt('cellulite-massage') }}" class="dez-page"
                                                title="@lang('header.cellulite-massage')">@lang('header.cellulite-massage')</a></li>
                                        <li><a href="{{ uniqRt('roll-shape') }}" class="dez-page"
                                                title="@lang('header.roll-shape')">@lang('header.roll-shape')</a> </li>
                                        <li><a href="{{ uniqRt('lip-coloring') }}" class="dez-page"
                                                title="@lang('header.lip_filler')">@lang('header.lip_filler')</a></li>
                                        <li><a href="{{ uniqRt('keratin-care') }}" class="dez-page"
                                                title="@lang('header.keratin_care')">@lang('header.keratin_care')</a> </li>
                                        <li><a href="{{ uniqRt('perma') }}" class="dez-page"
                                                title="@lang('header.perm')">@lang('header.perm')</a></li>
                                        <li><a href="{{ uniqRt('brazillian-blow-dry') }}" class="dez-page"
                                                title="@lang('header.brazillian-blow-dry')">@lang('header.brazillian-blow-dry')</a></li>
                                        <li><a href="{{ uniqRt('hair-color-highlights') }}" class="dez-page"
                                                title="@lang('header.highlighted')">@lang('header.highlighted')</a></li>
                                        <li><a href="{{ uniqRt('hair-dye') }}" class="dez-page"
                                                title="@lang('header.hair_dye')">@lang('header.hair_dye')</a></li>
                                        <li><a href="{{ uniqRt('hair-dip-dye') }}" class="dez-page"
                                                title="@lang('header.hair_dip_dye')">@lang('header.hair_dip_dye')</a></li>
                                        <li><a href="{{ uniqRt('hair-cut') }}" class="dez-page"
                                                title="@lang('header.hair_cut')">@lang('header.hair_cut')</a> </li>
                                        <li><a href="{{ uniqRt('hair-extension') }}" class="dez-page"
                                                title="@lang('header.hair_extension')">@lang('header.hair_extension')</a></li>
                                        <li><a href="{{ uniqRt('bridal-hair') }}" class="dez-page"
                                                title="@lang('header.bridal_hair')">@lang('header.bridal_hair')</a></li>
                                    </ul>
                                </li>
                                <li class=" $class4"><a href="{{ uniqRt('contact-us') }}" class="dez-page"
                                        title="@lang('header.sart_official_center_contact')">@lang('header.contact_us')</a></li>
                                <li>
                                    <a href="javascript:void(0);" class="dez-page"
                                        title="{{ __('header.sart_official_center_lang_options') }}"><i
                                            class="fa fa-globe fa-3x globe-fs-20"></i><i
                                            class="fa fa-chevron-down"></i>
                                    </a>

                                    <ul class="sub-menu">
                                        <li class="@if (app()->getLocale() == 'tr') selected @endif"><a
                                                href="{{ langRt('tr', $route->uniq_slug) }}" class="dez-page"
                                                title="{{ __('header.turkish') }}">
                                                <img src="/images/tr.webp" class="lang-img"
                                                    alt="{{ __('header.turkish') }}"> TR
                                            </a>
                                        </li>
                                        <li class="@if (app()->getLocale() == 'ru') selected @endif">
                                            <a href="{{ langRt('ru', $route->uniq_slug) }}" class="dez-page"
                                                title="{{ __('header.russian') }}">
                                                <img src="/images/ru.webp" class="lang-img"
                                                    alt="{{ __('header.russian') }}"> RU
                                            </a>
                                        </li>
                                        <li class="@if (app()->getLocale() == 'en') selected @endif">
                                            <a href="{{ langRt('en', $route->uniq_slug) }}" class="dez-page"
                                                title="{{ __('header.english') }}">
                                                <img src="/images/us.webp" class="lang-img"
                                                    alt="{{ __('header.english') }}"> EN
                                            </a>
                                        </li>
                                    </ul>
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
    </div>
</body>
