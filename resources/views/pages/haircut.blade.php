{{--  Saç Kesim Sayfası --}}
@extends('layout.master')
@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr dlab-bnr-inr overlay-primary"
            style="background-image:url(/images/sart/sartbeauty_bg_5.webp);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Saç Kesimi</h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="{{ route('route',['/']) }}" title="S Art Beauty Center Ana Sayfa"
                                    target="_self">Anasayfa</a></li>
                            <li>Saç Kesimi</li>
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
                                    <li><a href="{{ route('pages.rollshape') }}" class="dez-page" title="Roll Shape">Roll
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
                                    <li class="active"><a href="{{ route('pages.haircut') }}" class="dez-page"
                                            title="Saç Kesim">Saç
                                            Kesim</a>
                                    </li>
                                    <li><a href="{{ route('pages.hairextension') }}" class="dez-page" title="Saç Kaynak">Saç
                                            Kaynak</a></li>
                                    <li><a href="{{ route('pages.bridalhair') }}" class="dez-page" title="Gelin Topuzu">Gelin
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
                            <b class="m-t0 m-b10 fw6 text-primary" style="font-size: 1.9em;">Saç Kesimi</b>
                            <p>Saçlarınızın şekil ve uzunluğu, tarzınızı yansıtır. S Art Beauty Center’da istediğiniz
                                saçlara ulaşabilirsiniz.</p>

                            <div
                                class="blog-carousel mfp-gallery owl-loaded owl-theme owl-carousel gallery owl-btn-center-lr owl-btn-1 primary m-b30">
                                <div class="item">
                                    <div class="dlab-box service-iconbox" style="margin-right: 20px;">
                                        <div class="dlab-media dlab-img-overlay5"> <a href="#"
                                                title="Saç Kesimi"><img src="/images/sart/saç_kesim_1.webp"
                                                    alt="Saç Kesimi"></a> </div>
                                        <div class="dlab-info p-a30 p-t60 border-1 bg-white text-center"
                                            style="height: 300px;">
                                            <div class="icon-bx-sm radius bg-white m-b20"> <a href="#"
                                                    class="icon-cell"><i class="flaticon-woman"></i></a> </div>
                                            <h6 class="dlab-title m-t0"><a href="#" title="Saç Kesimi">Farklı
                                                    Tarzlar</a></h6>
                                            <p class="m-b15">Özgün saç kesiminiz ile tarzınızı vurgulayın.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="dlab-box service-iconbox" style="margin-right: 20px;">
                                        <div class="dlab-media dlab-img-overlay5"> <a href="#"
                                                title="Saç Kesimi"><img src="/images/sart/saç_kesim_2.webp"
                                                    alt="Saç Kesimi"></a> </div>
                                        <div class="dlab-info p-a30 p-t60 border-1 bg-white text-center"
                                            style="height: 300px;">
                                            <div class="icon-bx-sm radius bg-white m-b20"> <a href="#"
                                                    class="icon-cell"><i class="flaticon-mortar"></i></a> </div>
                                            <h6 class="dlab-title m-t0"><a href="#" title="Saç Kesimi">Sağlıklı
                                                    Saçlar</a></h6>
                                            <p class="m-b15">Kırık uçlardan kurtulun ve saçlarınızın daha sağlıklı
                                                uzamasını sağlayın.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="dlab-box service-iconbox" style="margin-right: 20px;">
                                        <div class="dlab-media dlab-img-overlay5"> <a href="#"
                                                title="Saç Kesimi"><img src="/images/sart/saç_kesim_3.webp"
                                                    alt="Saç Kesimi"></a> </div>
                                        <div class="dlab-info p-a30 p-t60 border-1 bg-white text-center"
                                            style="height: 300px;">
                                            <div class="icon-bx-sm radius bg-white m-b20"> <a href="#"
                                                    class="icon-cell"><i class="flaticon-candle"></i></a> </div>
                                            <h6 class="dlab-title m-t0"><a href="#" title="Saç Kesimi">Yenilenmiş
                                                    Hissedin</a></h6>
                                            <p class="m-b15">S Art Beauty Center'da profesyonel bir saç kesimiyle
                                                görünümünüzü yenileyin.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--// Değişmesi gereken resimler burada bitiyor //-->
                            <br>
                            <h2 style="font-size: 1em; margin-bottom: 0.1em;">Saç Kesiminiz ile Tarzınızı Yansıtın</h2><br>
                            <h3 style="font-size: 1em; margin-bottom: 0.1em;">Farklı Kesimler</h3>
                            S Art Beauty Center'da düz kesimden katlı kesime, kısa saçtan uzun saça kadar farklı saç kesim
                            stilleri arasından seçim yapabilirsiniz. Uzmanlarımız, saç tipinizi ve yüz hatlarınızı dikkate
                            alarak size en uygun saç kesimini önerir.
                            <div class="m-tb20">
                                <div class="accordion no-gap" id="accordion1">
                                    <div class="panel">
                                        <div class="acod-head">
                                            <h2 style="font-size: 1em;" class="acod-title">
                                                <a href="#" data-toggle="collapse" data-target="#faq1"
                                                    class="" aria-expanded="true">
                                                    1. Hangi Saç Kesimi Stili Bana Uygun Olur?</a>
                                            </h2>
                                        </div>
                                        <div id="faq1" class="acod-body collapse show" data-parent="#accordion1"
                                            style="">
                                            <div class="acod-content">Uzmanlarımız, saç tipiniz, yüz hatlarınız ve
                                                tarzınıza uygun saç kesimi stilini belirlemek için size rehberlik eder.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="acod-head">
                                            <h2 style="font-size: 1em;" class="acod-title">
                                                <a href="#" data-toggle="collapse" data-target="#faq2"
                                                    class="collapsed" aria-expanded="false">
                                                    2. Kaç Ayda Bir Saç Kesimi Yapılmalıdır?</a>
                                            </h2>
                                        </div>
                                        <div id="faq2" class="acod-body collapse" data-parent="#accordion1"
                                            style="">
                                            <div class="acod-content">Saç büyüme hızınıza bağlı olarak ortalama 6 ila 8
                                                haftada bir saç kesimi önerilir.</div>
                                        </div>
                                    </div>

                                    <div class="panel">
                                        <div class="acod-head">
                                            <h2 style="font-size: 1em;" class="acod-title">
                                                <a href="#" data-toggle="collapse" data-target="#faq3"
                                                    class="collapsed" aria-expanded="false">
                                                    3. Kısa Saç Kesimi Uygun mu?</a>
                                            </h2>
                                        </div>
                                        <div id="faq3" class="acod-body collapse" data-parent="#accordion1"
                                            style="">
                                            <div class="acod-content">Uzmanlarımız, saç tipinize ve yüz hatlarınıza göre
                                                kısa saç kesiminin size uygun olup olmadığını değerlendirir.</div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="acod-head">
                                            <h2 style="font-size: 1em;" class="acod-title">
                                                <a href="#" data-toggle="collapse" data-target="#faq4"
                                                    class="collapsed" aria-expanded="false">
                                                    4. Saç Kesimi Sonrası Bakım Nasıl Olmalıdır? </a>
                                            </h2>
                                        </div>
                                        <div id="faq4" class="acod-body collapse" data-parent="#accordion1"
                                            style="">
                                            <div class="acod-content">Saç kesimi sonrası doğru saç bakım ürünleri kullanmak
                                                ve düzenli bakım yapmak saçlarınızın daha sağlıklı görünmesini sağlar.</div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="acod-head">
                                            <h2 style="font-size: 1em;" class="acod-title">
                                                <a href="#" data-toggle="collapse" data-target="#faq5"
                                                    class="collapsed" aria-expanded="false">
                                                    5. Evde Saç Kesimi Yapmak Güvenli midir? </a>
                                            </h2>
                                        </div>
                                        <div id="faq5" class="acod-body collapse" data-parent="#accordion1"
                                            style="">
                                            <div class="acod-content">Uzmanlarımız, saç kesiminin profesyonel ellere
                                                bırakılmasının daha güvenli olduğunu önerir. Uzman dokunuşuyla istediğiniz
                                                sonuca ulaşabilirsiniz.</div>
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
