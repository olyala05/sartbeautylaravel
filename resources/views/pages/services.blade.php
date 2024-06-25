{{-- Hizmetlerimiz Sayfası --}}
@extends('layout.master')
@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- Services -->
        <div class="section-full bg-white content-inner-2 overlay-white-middle"
            style="background-image:url(/images/sart/002.png); background-position: bottom, top; background-size: 100% 100%; background-repeat: no-repeat;">
            <div class="container">
                <div class="section-head text-black text-center">
                    <div class="dlab-separator-outer m-b0">
                        <div class="dlab-separator text-primary style-icon"><img src="/images/sart/logo_fav.png"
                                alt="S Art Beauty Center"></div>
                    </div>
                    <h2 class="text-primary m-b10">Hizmetlerimiz</h2>
                    <h6 class="m-b10">Güzelliğinizi Ön Plana Çıkarın!</h6>
                    <p>Dudak renklendirme, kaş laminasyonu, ipek kirpik, saç kesimi ve daha fazlasıyla, sizlere yeni bir
                        görünüm sunuyoruz. Tarzınızı yansıtmak için profesyonel ekibimize güvenin.</p>
                </div>
                <div
                    class="img-carousel owl-carousel owl-theme owl-none owl-dots-primary-big owl-btn-center-lr owl-loade m-b30">
                    <div class="item">
                        <div class="service-box text-center">
                            <div class="service-images m-b15">
                                <img width="300" height="300" src="/images/sart/kirpik_lifting_6.webp"
                                    alt="Kirpik Tasarımı" />
                                <i class="flaticon-woman-1"></i>
                            </div>
                            <div class="service-content">
                                <h6 class="text-uppercase">
                                    <a href="#" class="text-primary" title="Kirpik Lifting" target="_self">Kirpik
                                        Lifting</a>
                                </h6>
                                <p>Kirpik lifting ile kirpiklerinizi kıvırmak için maskaraya veda edin. Uzmanlarımızın
                                    deneyimiyle kirpiklerinizi güçlendirin.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service-box text-center">
                            <div class="service-images m-b15">
                                <img width="300" height="300" src="/images/sart/kas_laminasyonu_2.webp"
                                    alt="Kaş Laminasyon Uygulaması" />
                                <i class="flaticon-woman-1"></i>
                            </div>
                            <div class="service-content">
                                <h6 class="text-uppercase">
                                    <a href="#" class="text-primary" title="Kaş Laminasyon" target="_self">Kaş
                                        Laminasyon</a>
                                </h6>
                                <p>Kaşlarınıza hacimli ve düzenli bir görünüm kazandırmak için kaş laminasyonu işlemini
                                    tercih edin. Uzman ekibimizle kaşlarınızın doğal güzelliklerini ön plana çıkarın.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service-box text-center">
                            <div class="service-images m-b15">
                                <img width="300" height="300" src="/images/sart/dudak_renklendirme_islemi.webp"
                                    alt="Dudak Renklendirme" />
                                <i class="flaticon-lotus"></i>
                            </div>
                            <div class="service-content">
                                <h6 class="text-uppercase">
                                    <a href="#" class="text-primary" title="Dudak Renklendirme" target="_self">Dudak
                                        Renklendirme</a>
                                </h6>
                                <p>Kalıcı dudak renklendirme ile dudaklarınıza doğal bir renk katın.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service-box text-center">
                            <div class="service-images m-b15">
                                <img width="300" height="300" src="/images/sart/protez_tirnak_tasarim.webp"
                                    alt="Protez Tırnak Tasarımı" />
                                <i class="flaticon-candle-1"></i>
                            </div>
                            <div class="service-content">
                                <h6 class="text-uppercase">
                                    <a href="#" class="text-primary" title="Protez Tırnak Tasarımı"
                                        target="_self">Protez Tırnak Tasarımı</a>
                                </h6>
                                <p>Tırnaklarınıza istediğiniz uzunluğu ve şekli vermek için protez tırnak hizmetimizden
                                    faydalanın.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service-box text-center">
                            <div class="service-images m-b15">
                                <img width="300" height="300" src="/images/sart/kirpik_bakim.webp"
                                    alt="İpek Kirpik Uygulaması" />
                                <i class="flaticon-candle"></i>
                            </div>
                            <div class="service-content">
                                <h6 class="text-uppercase">
                                    <a href="#" class="text-primary" title="İpek Kirpik" target="_self">İpek
                                        Kirpik</a>
                                </h6>
                                <p>Etkileyici bakışlar için ipek kirpik hizmetimizden faydalanın.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service-box text-center">
                            <div class="service-images m-b15">
                                <img width="300" height="300" src="/images/sart/sac_kesim_model.webp"
                                    alt="Saç Kesim" />
                                <i class="flaticon-lotus"></i>
                            </div>
                            <div class="service-content">
                                <h6 class="text-uppercase">
                                    <a href="#" class="text-primary" title="Saç Kesim" target="_self">Saç
                                        Kesim</a>
                                </h6>
                                <p>Saç tipinize ve tarzınıza uygun kesimlerle kişiye özel görünümler sunuyoruz.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service-box text-center">
                            <div class="service-images m-b15">
                                <img width="300" height="300" src="/images/sart/protez_tirnak_2.webp"
                                    alt="Tırnak Tasarımı" />
                                <i class="flaticon-candle"></i>
                            </div>
                            <div class="service-content">
                                <h6 class="text-uppercase">
                                    <a href="#" class="text-primary" title="Tırnak Tasarımı" target="_self">Tırnak
                                        Tasarımı</a>
                                </h6>
                                <p>Protez tırnak ve manikür işlemi ile tırnaklarınıza bakımlı bir görünüm kazandırın.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service-box text-center">
                            <div class="service-images m-b15">
                                <img width="300" height="300" src="/images/sart/kaynak_sac_cesitleri.webp"
                                    alt="Kaynak Saç" />
                                <i class="flaticon-candle-1"></i>
                            </div>
                            <div class="service-content">
                                <h6 class="text-uppercase">
                                    <a href="#" class="text-primary" title="Kaynak Saç" target="_self">Kaynak
                                        Saç</a>
                                </h6>
                                <p>Hayalinizdeki uzun ve dolgun saçlara kavuşmak için kaynak saç hizmetlerimizden
                                    faydalanın.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service-box text-center">
                            <div class="service-images m-b15">
                                <img width="300" height="300" src="/images/sart/manikur_kalici_oje.webp"
                                    alt="Kalıcı Oje" />
                                <i class="flaticon-candle"></i>
                            </div>
                            <div class="service-content">
                                <h6 class="text-uppercase">
                                    <a href="#" class="text-primary" title="Kalıcı Oje" target="_self">Kalıcı
                                        Oje</a>
                                </h6>
                                <p>Tırnaklarınıza parlaklık ve renk katarken, bozulmadan ve soyulmadan uzun süre kalmasını
                                    sağlayın.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service-box text-center">
                            <div class="service-images m-b15">
                                <img width="300" height="300" src="/images/sart/saç_boyası_3.webp"
                                    alt="Saç Boyama" />
                                <i class="flaticon-candle-1"></i>
                            </div>
                            <div class="service-content">
                                <h6 class="text-uppercase">
                                    <a href="#" class="text-primary" title="Saç Boyama" target="_self">Saç
                                        Boyama</a>
                                </h6>
                                <p>Saçlarınızı renklendirirken, kişisel tarzınıza uygun bir stil elde edin.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service-box text-center">
                            <div class="service-images m-b15">
                                <img width="300" height="300" src="/images/sart/seker_agda_1.webp"
                                    alt="Şeker Ağda" />
                                <i class="flaticon-lotus"></i>
                            </div>
                            <div class="service-content">
                                <h6 class="text-uppercase">
                                    <a href="#" class="text-primary" title="Şeker Ağda" target="_self">Şeker
                                        Ağda</a>
                                </h6>
                                <p>Şeker ağda ile kalıcı pürüzsüzlüğün keyfini çıkarın. Profesyonel şeker ağda hizmetimizle
                                    tanışın ve doğal güzelliğinizi keşfedin.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <a href="{{ route('pages.services') }}" class="site-button outline focus-white"
                        title="sart_official_center_job_explanation" target="_self">Tüm Hizmetlerimize Bakın</a>
                </div>
            </div>
        </div>
        <!-- Why Chose Us -->
        <div class="section-full content-inner-2 our-portfolio">
            <div class="container">
                <div class="section-head text-black text-center m-b20">
                    <div class="dlab-separator-outer m-b0">
                        <div class="dlab-separator text-primary style-icon"><img src="/images/sart/logo_fav.png"
                                alt="S Art Beauty Center Fotoğraf Galerisi"></div>
                    </div>
                    <h2 class="text-primary m-b10">"Fotoğraf Galerimiz"</h2>
                    <p class="m-b0">Sizin için hazırladığımız güzellik öykülerine göz atın!</p>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="site-filters style1 clearfix center">
                            <ul class="filters" data-toggle="buttons">
                                <li data-filter="" class="btn active"><a href="#" title="Hepsi"><span>Hepsi
                                        </span></a></li>
                                <li data-filter="image-1" class="btn"><a href="#" title="Saç"><span>Saç
                                        </span></a></li>
                                <li data-filter="image-2" class="btn"><a href="#" title="Kirpik"><span>Kirpik
                                        </span></a></li>
                                <li data-filter="image-3" class="btn"><a href="#" title="Tırnak"><span>Tırnak
                                        </span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- //Saç -->
                <div class="clearfix">
                    <ul id="masonry" class="portfolio-box dlab-gallery-listing gallery-grid-4 gallery row lightgallery">

                        <li class="image-1  card-container col-lg-3 col-md-3 col-sm-3">
                            <div class="dlab-box">
                                <div class="dlab-media dlab-img-overlay9 dlab-img-effect zoom">
                                    <img width="385" height="385"img src="/images/sart/kaynak_sac_sq.webp"
                                        alt="Saç Kaynak">
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <span data-exthumbimage="images/gallery/middle/thumb/pic1.webp"
                                                data-src="images/sart/kaynak_sac_sq.webp" class="icon-bx-xs check-km"
                                                title="Saç Kaynak">
                                                <i class="ti-fullscreen"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dlab-box p-tb30 image-2">
                                <div class="dlab-media dlab-img-overlay9 dlab-img-effect zoom">
                                    <img width="385" height="385"img src="/images/sart/sac_islemleri.webp"
                                        alt="Saç Boyası">
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <span data-exthumbimage="/images/gallery/middle/thumb/pic2.webp"
                                                data-src="images/sart/sac_islemleri.webp" class="icon-bx-xs check-km"
                                                title="Saç Boyası">
                                                <i class="ti-fullscreen"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="image-2 card-container col-lg-6 col-md-6 col-sm-6">
                            <div class="dlab-box m-b30">
                                <div class="dlab-media dlab-img-overlay9 dlab-img-effect zoom">
                                    <img src="/images/sart/kirpik_tasarim.webp" alt="silk_eyelash">
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <span data-exthumbimage="/images/gallery/middle/thumb/pic3.webp"
                                                data-src="/images/sart/kirpik_tasarim.webp" class="icon-bx-xs check-km"
                                                title="silk_eyelash">
                                                <i class="ti-fullscreen"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="image-3 image-4 card-container col-lg-3 col-md-3 col-sm-3">
                            <div class="dlab-box m-b30">
                                <div class="dlab-media dlab-img-overlay9 dlab-img-effect zoom">
                                    <img width="385" height="385"img src="/images/sart/tirnak_manikur.webp"
                                        alt="mani_pedi">
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <span data-exthumbimage="/images/gallery/middle/thumb/pic4.webp"
                                                data-src="/images/sart/tirnak_manikur.webp" class="icon-bx-xs check-km"
                                                title="mani_pedi">
                                                <i class="ti-fullscreen"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dlab-box">
                                <div class="dlab-media dlab-img-overlay9 dlab-img-effect zoom">
                                    <img width="385" height="385"img src="/images/sart/kirpik_bakim.webp"
                                        alt="solarium">
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <span data-exthumbimage="/images/gallery/middle/thumb/pic5.webp"
                                                data-src="/images/sart/kirpik_bakim.webp" class="icon-bx-xs check-km"
                                                title="solarium">
                                                <i class="ti-fullscreen"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>

                <!-- JavaScript -->
                <script>
                    $(document).ready(function() {
                        $(".filters li").on("click", function() {
                            $(".filters li").removeClass("active");
                            $(this).addClass("active");

                            var filterValue = $(this).data("filter");
                            if (filterValue === "") {
                                $(".portfolio-box li").fadeIn();
                            } else {
                                $(".portfolio-box li").fadeOut();
                                $(".portfolio-box ." + filterValue).fadeIn();
                            }
                        });
                    });
                </script>
            </div>
        </div>
        <!-- Why Chose Us End -->
        <!-- Our Portfolio -->
        <div class="section-full video-presentation overlay-black-dark bg-img-fix"
            style="background-image:url(/images/sart/kuafor_bg.webp);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 text-white text-center">
                        <h2 class="text-primary fw-4">Tanıtım Videomuz</h2>
                        <p class="max-w700 m-auto">S Art Beauty Center olarak, güzellik ve bakımı bir araya getirerek
                            hizmet vermekteyiz. Videomuzda dudak renklendirme, ipek kirpik uygulaması, saç kesimi gibi
                            çeşitli hizmetlerimizi ve bu işlemleri büyük bir özenle gerçekleştiren uzman ekibimizi yakından
                            tanıma fırsatı bulacaksınız. Her zaman en yeni trendleri takip ederek, hijyenik bir ortamda
                            kaliteli ve memnuniyet odaklı hizmetler sunmaya devam ediyoruz.</p>
                        <div class="video-play-icon m-t50">
                            <a href="/images/sart/guzellik_merkezi.mp4" class="popup-youtube video"
                                title="S Art Beauty Center Tanıtım Filmi"><i class="ti-control-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Portfolio END -->
        <!-- Our Professional Team -->
        <div class="section-full content-inner-2 overlay-white-middle"
            style="background-image:url(/images/sart/002-op.png); background-position: bottom, top; background-size: 100% 100%; background-repeat: no-repeat;">
            <div class="container">
                <div class="section-head text-black text-center">
                    <div class="dlab-separator-outer m-b0">
                        <div class="dlab-separator text-primary style-icon"><img src="/images/sart/logo_fav.png"
                                alt="S Art Beauty Center Profesyonel Ekip İle Hizmet Verir."></div>
                    </div>
                    <h2 class="text-primary m-b10">Hizmetinizdeyiz</h2>
                    <p>S Art Beauty Center olarak, güzellik ve bakım ihtiyaçlarınız için deneyimli ve uzman kadromuzla
                        buradayız. Saç, cilt, tırnak bakımı ve daha fazlası için kaliteli hizmet anlayışımızla her zaman
                        yanınızdayız.</p>
                </div>
                <div
                    class="team-carousel owl-carousel owl-carousel owl-btn-center-lr owl-btn-3 owl-theme owl-dots-primary-full owl-loaded owl-drag">
                    <div class="item">
                        <div class="dlab-box text-center team-box">
                            <div class="dlab-media"> <img width="300" height="300"img
                                    src="/images/sart/dudak_renklendirme.webp" alt="Dudak Renklendirme"></div>

                        </div>
                    </div>
                    <div class="item">
                        <div class="dlab-box text-center team-box">
                            <div class="dlab-media"> <img width="300" height="300"img
                                    src="/images/sart/sac_islemleri.webp" alt="Saç Kesim"></div>

                        </div>
                    </div>
                    <div class="item">
                        <div class="dlab-box text-center team-box">
                            <div class="dlab-media"> <img width="300" height="300"img
                                    src="/images/sart/kirpik_bakimi.webp" alt="Kirpik Lifting"></div>

                        </div>
                    </div>
                    <div class="item">
                        <div class="dlab-box text-center team-box">
                            <div class="dlab-media"> <img width="300" height="300"img
                                    src="/images/sart/göz_alti_islemleri.webp" alt="İpek Kirpik"></div>

                        </div>
                    </div>
                    <div class="item">
                        <div class="dlab-box text-center team-box">
                            <div class="dlab-media"> <img width="300" height="300"img
                                    src="/images/sart/desenli_protez_tirnak.webp" alt="Nail Art"></div>

                        </div>
                    </div>
                    <div class="item">
                        <div class="dlab-box text-center team-box">
                            <div class="dlab-media"> <img width="300" height="300"img
                                    src="/images/sart/kas_kirpik_bakimi.webp" alt="İpek Kirpik"></div>

                        </div>
                    </div>
                    <div class="item">
                        <div class="dlab-box text-center team-box">
                            <div class="dlab-media"> <img width="300" height="300"img
                                    src="/images/sart/kalici_oje.webp" alt="Kalıcı Oje"></div>

                        </div>
                    </div>
                    <div class="item">
                        <div class="dlab-box text-center team-box">
                            <div class="dlab-media"> <img width="300" height="300"img
                                    src="/images/sart/kaynak_sac_modelleri.webp" alt="Saç Kaynak"></div>

                        </div>
                    </div>
                    <div class="item">
                        <div class="dlab-box text-center team-box">
                            <div class="dlab-media"> <img width="300" height="300"img
                                    src="/images/sart/kas_laminasyonu.webp" alt="Kaş Laminasyon"></div>

                        </div>
                    </div>
                    <div class="item">
                        <div class="dlab-box text-center team-box">
                            <div class="dlab-media"> <img width="300" height="300"img
                                    src="/images/sart/manikur_islemleri.webp" alt="Manikür ve Pedikür"></div>

                        </div>
                    </div>
                    <div class="item">
                        <div class="dlab-box text-center team-box">
                            <div class="dlab-media"> <img width="300" height="300"img
                                    src="/images/sart/pedikur_6.webp" alt="Manikür ve Pedikür"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Portfolio -->
        <div class="section-full content-inner-2"
            style="background-image:url(/images/sart/003.webp); background-position: bottom; background-size:cover;">
            <div class="container">
                <div class="section-head text-black text-center">
                    <div class="dlab-separator-outer m-b0">
                        <div class="dlab-separator text-primary style-icon"><img src="/images/sart/logo-transparent.png"
                                alt="MÜŞTERİ YORUMLARI"></div>
                    </div>
                    <h2 class="text-white m-b10">Müşteri Yorumları</h2>
                    <p>Müşterilerimizin deneyimleri, bizim için en değerli referanslardan biridir.</p>
                </div>
                <div class="testimonial-two-dots owl-carousel owl-theme owl-dots-primary-full owl-btn-center-lr owl-btn-3">
                    <div class="item p-a5">
                        <div class="testimonial-9">
                            <div class="testimonial-pic radius style1">
                                <img src="/images/sart/dudak_renklendirme_3.webp" width="100" height="100"
                                    alt="MÜŞTERİ YORUMLARI">
                            </div>
                            <div class="testimonial-text">
                                <p>
                                    Hijyen ve kalite konusunda mükemmel özenli çalışıyorlar. güler yüzleri ve hoş sohbetleri
                                    de cabası. sadece tırnak değil bir çok hizmetleri de var. full bakım yaptırıp
                                    çıkabilirsiniz. tüm güzel tırnaklarımdan onlar sorumlu :)
                                    {{-- <?= substr($lang['index_section5_slide1_cont'], 0, 150) ?>
                                    <?= strlen($lang['index_section5_slide1_cont']) > 150 ? '...' : '' ?> --}}
                                </p>
                            </div>
                            <div class="testimonial-detail">
                                <strong class="testimonial-name">Sinem ÖZGENÇ</strong>
                                <span class="testimonial-position"></span>
                            </div>
                        </div>
                    </div>

                    <div class="item p-a5">
                        <div class="testimonial-9">
                            <div class="testimonial-pic radius style1">
                                <img src="/images/sart/ipek_kirpik_1.webp" width="100" height="100"
                                    alt="MÜŞTERİ YORUMLARI">
                            </div>
                            <div class="testimonial-text">
                                <p>
                                    İpek kirpik uygulaması için tercih ettiğim S Art Beauty Center, beni hayran bıraktı.
                                    Kirpiklerim hem doğal hem de dolgun görünüyor. Profesyonel ekibiniz sayesinde
                                    bakışlarımda büyülü bir etki yarattım. Çok teşekkür ederim!
                                    {{-- <?= substr($lang['index_section5_slide2_cont'], 0, 150) ?>
                                    <?= strlen($lang['index_section5_slide2_cont']) > 150 ? '...' : '' ?> --}}
                                </p>
                            </div>
                            <div class="testimonial-detail">
                                <strong class="testimonial-name">Burcu TOPRAK</strong>
                                <span class="testimonial-position"></span>
                            </div>
                        </div>
                    </div>

                    <div class="item p-a5">
                        <div class="testimonial-9">
                            <div class="testimonial-pic radius style1">
                                <img src="/images/sart/saç_kesim_sqr.webp" width="100" height="100"
                                    alt="MÜŞTERİ YORUMLARI">
                            </div>
                            <div class="testimonial-text">
                                <p>
                                    Çalışanlar hijyene önem veriyor ve oldukça güleryüzlüler. Yeni keşfettim ama bundan
                                    sonra tüm bakımlarımı burada yaptırmayı düşünüyorum. Özellikle kirpik, mikro kaynak ve
                                    protez tırnak konusunda işlerini gördüm ve çok memnun kaldım.
                                    {{-- <?= substr($lang['index_section5_slide3_cont'], 0, 150) ?>
                                    <?= strlen($lang['index_section5_slide3_cont']) > 150 ? '...' : '' ?> --}}
                                </p>
                            </div>
                            <div class="testimonial-detail">
                                <strong class="testimonial-name">Ayşenur KADER</strong>
                                <span class="testimonial-position"></span>
                            </div>
                        </div>
                    </div>

                    <div class="item p-a5">
                        <div class="testimonial-9">
                            <div class="testimonial-pic radius style1">
                                <img src="/images/sart/nail_art_5.webp" width="100" height="100"
                                    alt="MÜŞTERİ YORUMLARI">
                            </div>
                            <div class="testimonial-text">
                                <p>
                                    Bu S Art Beauty'nin hizmetlerini ilk kullanışım değil. Salon sadece elverişli bir konuma
                                    sahip ve çeşitli hizmetler sunmakla kalmıyor, aynı zamanda en önemlisi burada
                                    profesyoneller çalışıyor!
                                    {{-- <?= substr($lang['index_section5_slide4_cont'], 0, 150) ?>
                                    <?= strlen($lang['index_section5_slide4_cont']) > 150 ? '...' : '' ?> --}}
                                </p>
                            </div>
                            <div class="testimonial-detail">
                                <strong class="testimonial-name">Nina ULUTAŞ</strong>
                                <span class="testimonial-position"></span>
                            </div>
                        </div>
                    </div>

                    <div class="item p-a5">
                        <div class="testimonial-9">
                            <div class="testimonial-pic radius style1">
                                <img src="/images/sart/kirpik_lifting_2.webp" width="100" height="100"
                                    alt="MÜŞTERİ YORUMLARI">
                            </div>
                            <div class="testimonial-text">
                                <p>
                                    Her şeyi çok beğendim! Şekerleme yaptım, cildi o kadar pürüzsüz ve yumuşak ki, kirpik
                                    laminasyonu da yaptım. Her şey çok mükemmel bir şekilde yapıldı. Hizmet en üst seviyede.
                                    Düzenli olarak geleceğim. Herkese tavsiye ederim
                                    {{-- <?= substr($lang['index_section5_slide5_cont'], 0, 150) ?>
                                    <?= strlen($lang['index_section5_slide5_cont']) > 150 ? '...' : '' ?> --}}
                                </p>
                            </div>
                            <div class="testimonial-detail">
                                <strong class="testimonial-name">Ezgi KARTAL</strong>
                                <span class="testimonial-position"></span>
                            </div>
                        </div>
                    </div>

                    <div class="item p-a5">
                        <div class="testimonial-9">
                            <div class="testimonial-pic radius style1">
                                <img src="/images/sart/manikur_bakim.webp" width="100" height="100"
                                    alt="MÜŞTERİ YORUMLARI">
                            </div>
                            <div class="testimonial-text">
                                <p>
                                    Süper hoş ve arkadaş canlısı:) Saç Yıkama ve Saç Blow ve Kaş şekillendirme için oraya
                                    gittim, her şey muhteşemdi. Teşekkür ederim :)
                                    {{-- <?= substr($lang['index_section5_slide6_cont'], 0, 150) ?>
                                    <?= strlen($lang['index_section5_slide6_cont']) > 150 ? '...' : '' ?> --}}
                                </p>
                            </div>
                            <div class="testimonial-detail">
                                <strong class="testimonial-name">Zeynep TARIK</strong>
                                <span class="testimonial-position"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content END-->
@endsection
