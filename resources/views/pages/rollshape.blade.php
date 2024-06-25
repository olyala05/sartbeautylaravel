{{-- Roll-Shape Sayfası --}}
@extends('layout.master')
@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr dlab-bnr-inr overlay-primary"
            style="background-image:url(/images/sart/sartbeauty_bg_5.webp);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Roll Shape Uygulaması</h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="{{ route('pages.home') }}" title="S Art Beauty Center Ana Sayfa"
                                    target="_self">Anasayfa</a></li>
                            <li>Roll Shape Uygulaması</li>
                        </ul>
                    </div>
                    <!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block">
            <div class="section-full content-inner-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                            <div class="sticky-top">
                                <ul class="service-list m-b30">
                                    <li><a href="{{ route('pages.gelpolish') }}" class="dez-page" title="Kalıcı Oje">Kalıcı
                                            Oje</a>
                                    </li>
                                    <li><a href="{{ route('pages.manicurepedicure') }}" class="dez-page"
                                            title="Manikür ve Pedikür">Manikür ve Pedikür</a>
                                    </li>
                                    <li><a href="{{ route('pages.prostheticnails') }}" class="dez-page"
                                            title="Protez Tırnak">Protez
                                            Tırnak</a></li>
                                    <li><a href="{{ route('pages.nailart') }}" class="dez-page" title="Nail Art">Nail
                                            Art</a>
                                    </li>
                                    <li><a href="{{ route('pages.eyelashextensions') }}" class="dez-page"
                                            title="İpek Kirpik">İpek
                                            Kirpik</a></li>
                                    <li><a href="{{ route('pages.eyelashlifting') }}" class="dez-page"
                                            title="Kirpik Lifting">Kirpik
                                            Lifting</a></li>
                                    <li><a href="{{ route('pages.deepliner') }}" class="dez-page"
                                            title="Dipliner">Dipliner</a>
                                    </li>
                                    <li><a href="{{ route('pages.eyebrowlamination') }}" class="dez-page"
                                            title="Kaş Laminasyon">Kaş
                                            Laminasyon</a>
                                    </li>
                                    <li><a href="{{ 'microblading' }}" class="dez-page"
                                            title="Microblading">Microblading</a>
                                    </li>
                                    <li><a href="{{ route('pages.shugaring') }}" class="dez-page" title="Şeker Ağda">Şeker
                                            Ağda</a></li>
                                    <li><a href="{{ route('pages.iselaser') }}" class="dez-page"
                                            title="Buz Lazer Epilasyon">Buz
                                            Lazer Epilasyon</a></li>
                                    <li><a href="{{ route('pages.skincare') }}" class="dez-page" title="Cilt Bakımı">Cilt
                                            Bakımı</a>
                                    </li>
                                    <li><a href="{{ route('pages.cellulitemassage') }}" class="dez-page"
                                            title="G5 Selülit Masajı">G5
                                            Selülit
                                            Masajı</a></li>
                                    <li class="active"><a href="{{ route('pages.rollshape') }}" class="dez-page"
                                            title="Roll Shape">Roll
                                            Shape</a>
                                    </li>
                                    <li><a href="{{ route('pages.lipcoloring') }}" class="dez-page"
                                            title="Dudak Renklendirme">Dudak
                                            Renklendirme</a></li>
                                    <li><a href="{{ route('pages.keratincare') }}" class="dez-page"
                                            title="Keratin Bakım">Keratin
                                            Bakım</a>
                                    </li>
                                    <li><a href="{{ route('pages.perma') }}" class="dez-page" title="Perma">Perma</a></li>
                                    <li><a href="{{ route('pages.brazilianblowdry') }}" class="dez-page"
                                            title="Brezilya Fönü">Brezilya
                                            Fönü</a></li>
                                    <li><a href="{{ route('pages.highlight') }}" class="dez-page" title="Röfle">Röfle</a>
                                    </li>
                                    <li><a href="{{ route('pages.hairdye') }}" class="dez-page" title="Saç Boyası">Saç
                                            Boyası</a>
                                    </li>
                                    <li><a href="{{ route('pages.hairdipdye') }}" class="dez-page" title="Dip Boyası">Dip
                                            Boyası</a></li>
                                    <li><a href="{{ route('pages.haircut') }}" class="dez-page" title="Saç Kesim">Saç
                                            Kesim</a>
                                    </li>
                                    <li><a href="{{ route('pages.hairextension') }}" class="dez-page"
                                            title="Saç Kaynak">Saç
                                            Kaynak</a></li>
                                    <li><a href="{{ route('pages.bridalhair') }}" class="dez-page"
                                            title="Gelin Topuzu">Gelin
                                            Topuzu</a></li>
                                </ul>
                                <div class="download-brochure m-b30 ">
                                    <h4 class="text-primary">Sosyal Medyada Biz</h4>
                                    <p>Instagramda Bizi Takip Edin</p>
                                    <a href="https://www.instagram.com/s.art.beauty" class="site-button"
                                        title="S Art Beauty Center Instagram Hesabı" target="_blank">S.ART.BEAUTY</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8">
                            <b class="m-t0 m-b10 fw6 text-primary" style="font-size: 1.9em;">Roll Shape Uygulaması</b>
                            <p>Roller Shape’in temel amacı yağ dokusunu azaltarak vücudu daha ince bir hale getirmektir.</b>
                            </p>

                            <div
                                class="blog-carousel mfp-gallery owl-loaded owl-theme owl-carousel gallery owl-btn-center-lr owl-btn-1 primary m-b30">
                                <div class="item">
                                    <div class="dlab-box service-iconbox"style="margin-right: 20px;">
                                        <div class="dlab-media dlab-img-overlay5"> <a href="#"
                                                title="Roll Shape Uygulaması"><img
                                                    src="/images/sart/img_roll_shape/roll-shape5.jpg"
                                                    alt="Roll Shape Uygulaması"></a> </div>
                                        <div class="dlab-info p-a30 p-t60 border-1 bg-white text-center"
                                            style="height: 250px;">
                                            <div class="icon-bx-sm radius bg-white m-b20"> <a href="#"
                                                    class="icon-cell" title="Roll Shape Uygulaması"><i
                                                        class="flaticon-woman"></i></a> </div>
                                            <h6 class="dlab-title m-t0"><a href="#"
                                                    title="Roll Shape Uygulaması">Cildin Sarkmasını Önler.</a>
                                            </h6>
                                            <p class="m-b15">Cildin kendini yenilemesini destekler ve yağ tabakasını
                                                azaltır.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="dlab-box service-iconbox"style="margin-right: 20px;">
                                        <div class="dlab-media dlab-img-overlay5"> <a href="#"
                                                title="Roll Shape Uygulaması"><img
                                                    src="/images/sart/img_roll_shape/roll-shape4.jpg"
                                                    alt="Roll Shape Uygulaması"></a> </div>
                                        <div class="dlab-info p-a30 p-t60 border-1 bg-white text-center"
                                            style="height: 250px;">
                                            <div class="icon-bx-sm radius bg-white m-b20"> <a href="#"
                                                    class="icon-cell" title="Roll Shape Uygulaması"><i
                                                        class="flaticon-mortar"></i></a> </div>
                                            <h6 class="dlab-title m-t0"><a href="#"
                                                    title="Roll Shape Uygulaması">Selülit Önleyici</a>
                                            </h6>
                                            <p class="m-b15">Selüliti azaltır ve kas gerginliğini gidermeye yardımcı olur.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="dlab-box service-iconbox"style="margin-right: 20px;">
                                        <div class="dlab-media dlab-img-overlay5"> <a href="#"
                                                title="Roll Shape Uygulaması"><img
                                                    src="/images/sart/img_roll_shape/roll-shape3.jpg"
                                                    alt="Roll Shape Uygulaması"></a> </div>
                                        <div class="dlab-info p-a30 p-t60 border-1 bg-white text-center"
                                            style="height: 250px;">
                                            <div class="icon-bx-sm radius bg-white m-b20"> <a href="#"
                                                    class="icon-cell" title="Roll Shape Uygulaması"><i
                                                        class="flaticon-candle"></i></a> </div>
                                            <h6 class="dlab-title m-t0"><a href="#"
                                                    title="Roll Shape Uygulaması">Bağ Dokusunu Güçlendirir</a>
                                            </h6>
                                            <p class="m-b15">Masajın etkisiyle, kas tonusu ve esnekliği artar, cilt
                                                elastikiyeti gelişir.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <p>
                            <h2 style="font-size: 1em;">Roll Shape Nedir?</h2>
                            </p>
                            <p class="m-b20">Roll Shape, kızılötesi teknolojisini kullanarak vücut masajı yapmak için
                                tasarlanmıştır. Bu tedavi, selülitlerin ortadan kaldırılmasını ve ince vücut şeklinin elde
                                edilmesini desteklemeyi amaçlar. Düzenli kullanımda, Roll Shape gözle görülür şekilde
                                selülitlerin giderilmesine, sıkılaşmaya ve vücut kusurlarının azalmasına yardımcı olur.

                            </p>
                            <div class="m-tb20">
                                <div class="accordion no-gap" id="accordion1">
                                    <div class="panel">
                                        <div class="acod-head">
                                            <h2 style="font-size: 1em;" class="acod-title">
                                                <a href="#" data-toggle="collapse" data-target="#faq1"
                                                    class="" aria-expanded="true">
                                                    1. Roll Shape Kullanırken Ağrı Hissedilir mi?</a>
                                            </h2>
                                        </div>
                                        <div id="faq1" class="acod-body collapse show" data-parent="#accordion1"
                                            style="">
                                            <div class="acod-content">1. Roll Shape ağrısız bir uygulama yöntemidir.</div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="acod-head">
                                            <h2 style="font-size: 1em;" class="acod-title">
                                                <a href="#" data-toggle="collapse" data-target="#faq2"
                                                    class="collapsed" aria-expanded="false">
                                                    2. Roll Shape Kullanımı Ne Kadar Sıklıkta Önerilir?</a>
                                            </h2>
                                        </div>
                                        <div id="faq2" class="acod-body collapse" data-parent="#accordion1"
                                            style="">
                                            <div class="acod-content">2. Kullanım süresi kişisel tercihlere ve hedeflenen
                                                sonuçlara göre değişebilir. Ancak, genellikle haftada birkaç kez belirli bir
                                                süre kullanılması tavsiye edilir.</div>
                                        </div>
                                    </div>

                                    <div class="panel">

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact area END -->
    </div>
    <!-- Content END-->
@endsection
