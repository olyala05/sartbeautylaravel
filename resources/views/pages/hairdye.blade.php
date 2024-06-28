{{-- Saç Boyama Sayfası --}}
@extends('layout.master')
@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr dlab-bnr-inr overlay-primary"
            style="background-image:url(/images/sart/sartbeauty_bg_5.webp);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Saç Boyası</h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="{{ route('route',['/']) }}" title="S Art Beauty Center Ana Sayfa"
                                    target="_self">Anasayfa</a></li>
                            <li>Saç Boyası</li>
                        </ul>
                    </div>
                    <!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- contact area -->
    <div class="content-block">
        <div class="section-full content-inner-2">
            <div class="container">
                <div class="row">
                    <ul class="service-list m-b30">
                        <li><a href="{{ route('pages.gelpolish') }}" class="dez-page" title="Kalıcı Oje">Kalıcı
                                Oje</a>
                        </li>
                        <li><a href="{{ route('pages.manicurepedicure') }}" class="dez-page"
                                title="Manikür ve Pedikür">Manikür ve Pedikür</a>
                        </li>
                        <li><a href="{{ route('pages.prostheticnails') }}" class="dez-page" title="Protez Tırnak">Protez
                                Tırnak</a></li>
                        <li><a href="{{ route('pages.nailart') }}" class="dez-page" title="Nail Art">Nail
                                Art</a>
                        </li>
                        <li><a href="{{ route('pages.eyelashextensions') }}" class="dez-page" title="İpek Kirpik">İpek
                                Kirpik</a></li>
                        <li><a href="{{ route('pages.eyelashlifting') }}" class="dez-page" title="Kirpik Lifting">Kirpik
                                Lifting</a></li>
                        <li><a href="{{ route('pages.deepliner') }}" class="dez-page" title="Dipliner">Dipliner</a>
                        </li>
                        <li><a href="{{ route('pages.eyebrowlamination') }}" class="dez-page" title="Kaş Laminasyon">Kaş
                                Laminasyon</a>
                        </li>
                        <li><a href="{{ 'microblading' }}" class="dez-page" title="Microblading">Microblading</a>
                        </li>
                        <li><a href="{{ route('pages.shugaring') }}" class="dez-page" title="Şeker Ağda">Şeker
                                Ağda</a></li>
                        <li><a href="{{ route('pages.iselaser') }}" class="dez-page" title="Buz Lazer Epilasyon">Buz
                                Lazer Epilasyon</a></li>
                        <li><a href="{{ route('pages.skincare') }}" class="dez-page" title="Cilt Bakımı">Cilt
                                Bakımı</a>
                        </li>
                        <li><a href="{{ route('pages.cellulitemassage') }}" class="dez-page" title="G5 Selülit Masajı">G5
                                Selülit
                                Masajı</a></li>
                        <li><a href="{{ route('pages.rollshape') }}" class="dez-page" title="Roll Shape">Roll
                                Shape</a>
                        </li>
                        <li><a href="{{ route('pages.lipcoloring') }}" class="dez-page" title="Dudak Renklendirme">Dudak
                                Renklendirme</a></li>
                        <li><a href="{{ route('pages.keratincare') }}" class="dez-page" title="Keratin Bakım">Keratin
                                Bakım</a>
                        </li>
                        <li><a href="{{ route('pages.perma') }}" class="dez-page" title="Perma">Perma</a></li>
                        <li><a href="{{ route('pages.brazilianblowdry') }}" class="dez-page" title="Brezilya Fönü">Brezilya
                                Fönü</a></li>
                        <li><a href="{{ route('pages.highlight') }}" class="dez-page" title="Röfle">Röfle</a>
                        </li>
                        <li><a href="{{ route('pages.hairdye') }}" class="dez-page" title="Saç Boyası">Saç
                                Boyası</a>
                        </li>
                        <li class="active"><a href="{{ route('pages.hairdipdye') }}" class="dez-page"
                                title="Dip Boyası">Dip
                                Boyası</a></li>
                        <li><a href="{{ route('pages.haircut') }}" class="dez-page" title="Saç Kesim">Saç
                                Kesim</a>
                        </li>
                        <li><a href="{{ route('pages.hairextension') }}" class="dez-page" title="Saç Kaynak">Saç
                                Kaynak</a></li>
                        <li><a href="{{ route('pages.bridalhair') }}" class="dez-page" title="Gelin Topuzu">Gelin
                                Topuzu</a></li>
                    </ul>
                    <div class="col-lg-9 col-md-8">
                        <b class="m-t0 m-b10 fw6 text-primary" style="font-size: 1.9em;">Saç Boyası</b>
                        <p>Saç renginizde değişiklik yapmak, tarzınızı yenilemek veya yeni bir görünüm elde etmek
                            istiyorsanız, birbirinden farklı seçeneklerimizle sizi bekliyoruz.</p>
                        <div
                            class="blog-carousel mfp-gallery owl-loaded owl-theme owl-carousel gallery owl-btn-center-lr owl-btn-1 primary m-b30">
                            <div class="item">
                                <div class="dlab-box service-iconbox" style="margin-right: 20px;">
                                    <div class="dlab-media dlab-img-overlay5"> <a href="#" title="Saç Boyası"><img
                                                src="/images/sart/saç_boyası_1.webp" alt="Saç Boyası"></a> </div>
                                    <div class="dlab-info p-a30 p-t60 border-1 bg-white text-center"
                                        style="height: 250px;">
                                        <div class="icon-bx-sm radius bg-white m-b20"> <a href="#"
                                                class="icon-cell"><i class="flaticon-woman"></i></a> </div>
                                        <h6 class="dlab-title m-t0"><a href="#" title="Saç Boyası">Doğal Tonlar</a>
                                        </h6>
                                        <p class="m-b15">S Art Beauty Center, saçınıza canlılık kazandıracak doğal
                                            tonlarla yenilenmiş bir görünüm sağlar.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="dlab-box service-iconbox" style="margin-right: 20px;">
                                    <div class="dlab-media dlab-img-overlay5"> <a href="#" title="Saç Boyası"><img
                                                src="/images/sart/saç_boyası_2.webp" alt="Saç Boyası"></a> </div>
                                    <div class="dlab-info p-a30 p-t60 border-1 bg-white text-center"
                                        style="height: 250px;">
                                        <div class="icon-bx-sm radius bg-white m-b20"> <a href="#"
                                                class="icon-cell"><i class="flaticon-mortar"></i></a> </div>
                                        <h6 class="dlab-title m-t0"><a href="#" title="Saç Boyası">Güzelliğinizi Ön
                                                Plana Çıkarın</a>
                                        </h6>
                                        <p class="m-b15">Bakımı kolay ve zarif bir stil elde edin; güzelliğinizi ön plana
                                            çıkarın.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="dlab-box service-iconbox" style="margin-right: 20px;">
                                    <div class="dlab-media dlab-img-overlay5"> <a href="#" title="Saç Boyası"><img
                                                src="/images/sart/saç_boyası_3.webp" alt="Saç Boyası"></a> </div>
                                    <div class="dlab-info p-a30 p-t60 border-1 bg-white text-center"
                                        style="height: 250px;">
                                        <div class="icon-bx-sm radius bg-white m-b20"> <a href="#"
                                                class="icon-cell"><i class="flaticon-candle"></i></a> </div>
                                        <h6 class="dlab-title m-t0"><a href="#" title="Saç Boyası">Tarzınızı
                                                Yansıtın</a>
                                        </h6>
                                        <p class="m-b15">Hayalinizdeki saç rengine sahip olmak için S.Art Beauty Center’a
                                            gelin.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>
                        <h2 style="font-size: 1em; margin-bottom: 0.1em;">Saç Boyası Nedir?</h2>
                        Saç boyası, saçın rengini değiştirmek veya canlandırmak için kullanılan kimyasal bir üründür. Geniş
                        renk skalası ile farklı stiller yaratmanıza olanak sağlar.
                        </p>
                        <div class="m-tb20">
                            <div class="accordion no-gap" id="accordion1">
                                <div class="panel">
                                    <div class="acod-head">
                                        <h2 style="font-size: 1em;" class="acod-title">
                                            <a href="#" data-toggle="collapse" data-target="#faq1" class=""
                                                aria-expanded="true">
                                                1. Saç Boyası Hangi Sıklıkla Yapılmalıdır?</a>
                                        </h2>
                                    </div>
                                    <div id="faq1" class="acod-body collapse show" data-parent="#accordion1"
                                        style="">
                                        <div class="acod-content">Saç boyası süresi saç tipi ve rengine bağlıdır.
                                            Genellikle 4 ila 8 hafta arasında tazelenmesi önerilir.</div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="acod-head">
                                        <h2 style="font-size: 1em;" class="acod-title">
                                            <a href="#" data-toggle="collapse" data-target="#faq2"
                                                class="collapsed" aria-expanded="false">
                                                2. Saç Boyası Zararlı mıdır?</a>
                                        </h2>
                                    </div>
                                    <div id="faq2" class="acod-body collapse" data-parent="#accordion1"
                                        style="">
                                        <div class="acod-content">Uzmanlar tarafından doğru ürünlerle ve yöntemlerle
                                            yapıldığında saç boyası zararlı değildir. Saç sağlığına dikkat edilmelidir.
                                        </div>
                                    </div>
                                </div>

                                <div class="panel">
                                    <div class="acod-head">
                                        <h2 style="font-size: 1em;" class="acod-title">
                                            <a href="#" data-toggle="collapse" data-target="#faq3"
                                                class="collapsed" aria-expanded="false">
                                                3. Doğal Saç Rengime Uygun Renk Nasıl Seçilir?</a>
                                        </h2>
                                    </div>
                                    <div id="faq3" class="acod-body collapse" data-parent="#accordion1"
                                        style="">
                                        <div class="acod-content"> S Art Beauty Center uzmanları, doğal saç renginize uygun
                                            renk seçeneklerini belirlemekte size yardımcı olur.</div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="acod-head">
                                        <h2 style="font-size: 1em;" class="acod-title">
                                            <a href="#" data-toggle="collapse" data-target="#faq4"
                                                class="collapsed" aria-expanded="false">
                                                4. Hangi Renkler Daha Uzun Süre Kalıcı Olur? </a>
                                        </h2>
                                    </div>
                                    <div id="faq4" class="acod-body collapse" data-parent="#accordion1"
                                        style="">
                                        <div class="acod-content">Koyu renkler genellikle daha uzun
                                            sühair_dye_subtitle1_contre kalıcı olabilirken, açık renkler daha sık tazelenme
                                            gerektirebilir.</div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="acod-head">
                                        <h2 style="font-size: 1em;" class="acod-title">
                                            <a href="#" data-toggle="collapse" data-target="#faq5"
                                                class="collapsed" aria-expanded="false">
                                                5. Evde Saç Boyası Kullanımı Güvenli midir?</a>
                                        </h2>
                                    </div>
                                    <div id="faq5" class="acod-body collapse" data-parent="#accordion1"
                                        style="">
                                        <div class="acod-content">Uzmanlarımız, saç boyası uygulamasının profesyonel
                                            ellerde daha güvenli ve istenilen sonuca ulaşmanın daha olası olduğunu önerir.
                                        </div>
                                    </div>
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
