{{-- Deepliner Sayfası --}}
@extends('layout.master')
@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr dlab-bnr-inr overlay-primary"
            style="background-image:url(/images/sart/sartbeauty_bg_5.webp);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Kalıcı Eyeliner ve Dipliner</h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="{{ route('route',['/']) }}" title="S Art Beauty Center Ana Sayfa"
                                    target="_self">Anasayfa</a></li>
                            <li>Kalıcı Eyeliner ve Dipliner</li>
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
                                    <li class="active"><a href="{{ route('pages.deepliner') }}" class="dez-page"
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
                            <b class="m-t0 m-b10 fw6 text-primary" style="font-size: 1.9em;">Kalıcı Eyeliner ve Dipliner
                                Uygulaması</b>
                            <p>Kalıcı eyeliner uygulamasıyla kirpikleriniz daha kalın ve daha siyah görünecek ve
                                bakışlarınız daha doğal, daha parlak ve daha anlamlı olacaktır.</p>

                            <div
                                class="blog-carousel mfp-gallery owl-loaded owl-theme owl-carousel gallery owl-btn-center-lr owl-btn-1 primary m-b30">
                                <div class="item">
                                    <div class="dlab-box service-iconbox" style="margin-right: 20px;">
                                        <div class="dlab-media dlab-img-overlay5"> <a href="#"
                                                title="Kalıcı Eyeliner ve Dipliner Uygulaması"><img
                                                    src="/images/sart/dipliner_1.webp"
                                                    alt="Kalıcı Eyeliner ve Dipliner Uygulaması"></a> </div>
                                        <div class="dlab-info p-a30 p-t60 border-1 bg-white text-center"
                                            style="height: 250px;">
                                            <div class="icon-bx-sm radius bg-white m-b20"> <a href="#"
                                                    class="icon-cell"><i class="flaticon-woman"></i></a> </div>
                                            <h6 class="dlab-title m-t0"><a href="#"
                                                    title="Kalıcı Eyeliner ve Dipliner Uygulaması">Bakımlı Gözler İçin
                                                    Dipliner</a>
                                            </h6>
                                            <p class="m-b15">Dipliner, her zaman bakımlı ve canlı bir görünüm sağlar.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="dlab-box service-iconbox" style="margin-right: 20px;">
                                        <div class="dlab-media dlab-img-overlay5"> <a href="#"
                                                title="Kalıcı Eyeliner ve Dipliner Uygulaması"><img
                                                    src="/images/sart/dipliner_3.webp"
                                                    alt="Kalıcı Eyeliner ve Dipliner Uygulaması"></a> </div>
                                        <div class="dlab-info p-a30 p-t60 border-1 bg-white text-center"
                                            style="height: 250px;">
                                            <div class="icon-bx-sm radius bg-white m-b20"> <a href="#"
                                                    class="icon-cell"><i class="flaticon-mortar"></i></a> </div>
                                            <h6 class="dlab-title m-t0"><a href="#"
                                                    title="Kalıcı Eyeliner ve Dipliner Uygulaması">Canlı Bakışlar</a>
                                            </h6>
                                            <p class="m-b15">Gözlerinizi belirginleştirir ve makyajınıza sofistike bir
                                                dokunuş katar.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="dlab-box service-iconbox" style="margin-right: 20px;">
                                        <div class="dlab-media dlab-img-overlay5"> <a href="#"
                                                title="Kalıcı Eyeliner ve Dipliner Uygulaması"><img
                                                    src="/images/sart/dipliner_4.webp"
                                                    alt="Kalıcı Eyeliner ve Dipliner Uygulaması"></a> </div>
                                        <div class="dlab-info p-a30 p-t60 border-1 bg-white text-center"
                                            style="height: 250px;">
                                            <div class="icon-bx-sm radius bg-white m-b20"> <a href="#"
                                                    class="icon-cell"><i class="flaticon-candle"></i></a> </div>
                                            <h6 class="dlab-title m-t0"><a href="#"
                                                    title="Kalıcı Eyeliner ve Dipliner Uygulaması">Gözlerinizde Dipliner
                                                    Etkisi</a>
                                            </h6>
                                            <p class="m-b15">Dipliner, her zaman bakımlı ve canlı bir görünüm sağlar.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="dlab-box service-iconbox" style="margin-right: 20px;">
                                        <div class="dlab-media dlab-img-overlay5"> <a href="#"
                                                title="Kalıcı Eyeliner ve Dipliner Uygulaması"><img
                                                    src="/images/sart/dipliner_5.webp"
                                                    alt="Kalıcı Eyeliner ve Dipliner Uygulaması"></a> </div>
                                        <div class="dlab-info p-a30 p-t60 border-1 bg-white text-center"
                                            style="height: 250px;">
                                            <div class="icon-bx-sm radius bg-white m-b20"> <a href="#"
                                                    class="icon-cell"><i class="flaticon-woman"></i></a> </div>
                                            <h6 class="dlab-title m-t0"><a href="#"
                                                    title="Kalıcı Eyeliner ve Dipliner Uygulaması">Bakımlı Gözler</a>
                                            </h6>
                                            <p class="m-b15">Dipliner, her zaman bakımlı ve canlı bir görünüm sağlar.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="dlab-box service-iconbox" style="margin-right: 20px;">
                                        <div class="dlab-media dlab-img-overlay5"> <a href="#"
                                                title="Kalıcı Eyeliner ve Dipliner Uygulaması"><img
                                                    src="/images/sart/dipliner-2.webp"
                                                    alt="Kalıcı Eyeliner ve Dipliner Uygulaması"></a> </div>
                                        <div class="dlab-info p-a30 p-t60 border-1 bg-white text-center"
                                            style="height: 250px;">
                                            <div class="icon-bx-sm radius bg-white m-b20"> <a href="#"
                                                    class="icon-cell"><i class="flaticon-mortar"></i></a> </div>
                                            <h6 class="dlab-title m-t0"><a href="#"
                                                    title="Kalıcı Eyeliner ve Dipliner Uygulaması">Canlı Bakışlar</a>
                                            </h6>
                                            <p class="m-b15">Gözlerinizi belirginleştirir ve makyajınıza sofistike bir
                                                dokunuş katar.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <h2 style="font-size: 1em; margin-bottom: 0.1em;">Kalıcı Dipliner Nedir?</h2>
                            Kalıcı Dipliner kirpikleri ve kirpik diplerini daha belirgin hale getirmek için uygulanan bir
                            kalıcı makyaj yöntemidir. Dipliner ile kalıcı olarak daha etkileyici, daha belirgin ve daha
                            güzel bakışlar elde edebilmek mümkündür.
                            <br><br>
                            </p>
                            <div class="m-tb20">
                                <div class="accordion no-gap" id="accordion1">
                                    <div class="panel">
                                        <div class="acod-head">
                                            <h2 style="font-size: 1em;" class="acod-title">
                                                <a href="#" data-toggle="collapse" data-target="#faq1"
                                                    class="" aria-expanded="true">
                                                    1. Dipliner uygulaması zor mu?</a>
                                            </h2>
                                        </div>
                                        <div id="faq1" class="acod-body collapse show" data-parent="#accordion1"
                                            style="">
                                            <div class="acod-content">Dipliner uygulaması başlangıçta biraz pratik
                                                gerektirebilir, ancak zamanla alışacaksınız. İyi bir fırça ve sabır ile
                                                mükemmel sonuçlar elde edebilirsiniz.</div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="acod-head">
                                            <h2 style="font-size: 1em;" class="acod-title">
                                                <a href="#" data-toggle="collapse" data-target="#faq2"
                                                    class="collapsed" aria-expanded="false">
                                                    2. Hangi renk dipliner tercih etmeliyim?</a>
                                            </h2>
                                        </div>
                                        <div id="faq2" class="acod-body collapse" data-parent="#accordion1"
                                            style="">
                                            <div class="acod-content">2. Siyah dipliner klasik ve belirgin bir seçenektir.
                                                Ancak göz renginize ve kıyafet stilinize göre renkli diplinerlar da
                                                kullanarak yaratıcı bir görünüm elde edebilirsiniz.</div>
                                        </div>
                                    </div>

                                    <div class="panel">
                                        <div class="acod-head">
                                            <h2 style="font-size: 1em;" class="acod-title">
                                                <a href="#" data-toggle="collapse" data-target="#faq3"
                                                    class="collapsed" aria-expanded="false">
                                                    3. Göz şeklime uygun dipliner nasıl seçerim?</a>
                                            </h2>
                                        </div>
                                        <div id="faq3" class="acod-body collapse" data-parent="#accordion1"
                                            style="">
                                            <div class="acod-content">Göz şeklinize uygun dipliner stili seçmek için makyaj
                                                uzmanlarından veya online kaynaklardan tavsiye alabilirsiniz. Göz yapınızı
                                                en iyi vurgulayan tekniği bulmak önemlidir.</div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="acod-head">
                                            <h2 style="font-size: 1em;" class="acod-title">
                                                <a href="#" data-toggle="collapse" data-target="#faq4"
                                                    class="collapsed" aria-expanded="false">
                                                    4. Dipliner ne kadar süreyle kalıcıdır? </a>
                                            </h2>
                                        </div>
                                        <div id="faq4" class="acod-body collapse" data-parent="#accordion1"
                                            style="">
                                            <div class="acod-content">Kalıcılık ürün kalitesine ve cilt tipinize göre
                                                değişebilir. Su geçirmez formüller daha uzun süre dayanabilir. Uygulamanızın
                                                kalıcılığını artırmak için makyaj bazı kullanabilirsiniz.</div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="acod-head">
                                            <h2 style="font-size: 1em;" class="acod-title">
                                                <a href="#" data-toggle="collapse" data-target="#faq5"
                                                    class="collapsed" aria-expanded="false">
                                                    5. Dipliner ile hangi makyaj ürünleri kombinlenir? </a>
                                            </h2>
                                        </div>
                                        <div id="faq5" class="acod-body collapse" data-parent="#accordion1"
                                            style="">
                                            <div class="acod-content">Dipliner uygulaması genellikle maskara, far ve kaş
                                                ürünleri ile kombinlenir. Göz makyajınızın bütünlüğünü sağlamak için bu
                                                ürünleri doğru bir şekilde kullanabilirsiniz.</div>
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
