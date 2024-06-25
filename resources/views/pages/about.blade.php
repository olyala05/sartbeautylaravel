{{-- Hakkımızda Sayfası --}}
@extends('layout.master')
@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-primary" style="background-image:url(/images/sart/kuafor_bg.webp);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white fw-4">Hakkımızda</h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="{{ route('pages.home') }}" title="S ART Beauty Center">Ana Sayfa</a></li>
                            <li>Hizmetlerimiz</li>
                        </ul>
                    </div>
                    <!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <div class="content-block">
            <div class="section-full content-inner overlay-white-middle"
                style="background-image:url(/images/sart/002.png); background-position: bottom, top; background-size: 100% 100%; background-repeat: no-repeat;">
                <div class="container">
                    <div class="section-head text-black text-center">
                        <div class="dlab-separator-outer m-b0">
                            <div class="dlab-separator text-primary style-icon"><img src="/images/sart/logo_fav.png"></div>
                        </div>
                        <h2 class="text-primary m-b10">S ART Beauty Center</h2>
                        <h6 class="m-b10">Güzellik Hizmetlerimizle Yenilenin</h6>
                        <p>S Art Beauty Center olarak, güzellik ve kuaför alanındaki profesyonel hizmetlerimizle İstanbul
                            Kadıköy'de yer alan değerli müşterilerimize en yüksek kalitede hizmet sunmaktan gurur duyuyoruz.
                            Uzman ekibimiz ve deneyimli personelimizle, güzellik ve bakımın sınırlarını zorluyoruz.
                            Amacımız, her müşterimize özgün ve kişisel bir deneyim yaşatmak ve güzelliklerini ortaya
                            çıkarmak.</p>
                    </div>
                </div>
            </div>
            <!-- Why Chose Us -->
            <!-- Our Pricing -->
            <div class="section-full content-inner bg-blue-light"
                style="background-image:url(/images/sart/005.png); background-position: bottom; background-size: cover; background-repeat: no-repeat;">
                <div class="container">
                    <div class="section-head text-black text-center">
                        <div class="dlab-separator-outer m-b0">
                            <div class="dlab-separator text-primary style-icon"><img src="/images/sart/logo_fav.png"></div>
                        </div>
                        <h2 class="text-primary m-b10">Misyon ve Vizyonumuz</h2>
                        <p>Misyonumuz, müşterilerimize en güncel güzellik trendlerini sunarak memnuniyetlerini sağlamaktır.
                            Her birinin ihtiyaçlarına özel hizmetlerle, güzellik ve bakım alanında fark yaratmayı
                            amaçlıyoruz.</p>
                        <p>Vizyonumuz, güzellik ve bakım sektöründe öncü bir marka olarak tanınmaktır. Sektördeki en son
                            yenilikleri takip ederek, sürekli olarak kendimizi geliştiriyor ve müşterilerimize en iyi
                            hizmeti sunmaya devam ediyoruz.</p>
                    </div>
                </div>
            </div>
            <!-- Our Pricing -->

            <!-- Testimonials Of Our Clients -->
            <div class="section-full content-inner"
                style="background-image:url(/images/sart/003.webp); background-position: bottom; background-size:cover;">
                <div class="container">
                    <div class="section-head text-black text-center">
                        <div class="dlab-separator-outer m-b0">
                            <div class="dlab-separator text-primary style-icon"><img
                                    src="/images/sart/logo-transparent.png"></div>
                        </div>
                        <h2 class="text-white m-b10">Bizim İçin Ne Dediler?</h2>
                        <p>Müşterilerimiz bizim için neler dediler? <br> Daha fazlası için <a
                                href="https://www.google.com/maps/place/Sart+Beauty+Sa%C3%A7+Tasar%C4%B1m/@41.002914,29.038749,14z/data=!4m8!3m7!1s0x14cab9651709e8f9:0x9552484cb55df7fc!8m2!3d41.0014885!4d29.038792!9m1!1b1!16s%2Fg%2F11stjbbl8s?hl=tr&entry=ttu"
                                target="_blank" title="S Art Beuty Center Google Yorumları" rel="nofollow">GOOGLE Sayfamızı
                            </a>ziyaret etmeyi unutmayın.></p>
                    </div>
                    <div
                        class="testimonial-two-dots owl-carousel owl-theme owl-dots-primary-full owl-btn-center-lr owl-btn-3">
                        <div class="item p-a5">
                            <div class="testimonial-9">
                                <div class="testimonial-pic radius style1"><img src="/images/sart/kas_laminasyon_5.webp"
                                        width="100" height="100" alt=""></div>
                                <div class="testimonial-text">
                                    <p>S Art Beauty Center'a gittiğimde kaş laminasyonu yaptırdım ve sonuçtan çok memnun
                                        kaldım! Kaşlarım daha dolgun ve düzenli görünüyor. Profesyonel ekibin samimi
                                        yaklaşımı da harikaydı.</p>
                                </div>
                                <div class="testimonial-detail"> <strong class="testimonial-name">Ayşe K.</strong> <span
                                        class="testimonial-position">Öğretmen></span> </div>
                            </div>
                        </div>
                        <div class="item p-a5">
                            <div class="testimonial-9">
                                <div class="testimonial-pic radius style1"><img src="/images/sart/gelin_topuzu_1.webp"
                                        width="100" height="100" alt=""></div>
                                <div class="testimonial-text">
                                    <p>Düğün makyajım için gelin topuzu ve ipek kirpik uygulaması yaptırdım. Sonuç gerçekten
                                        harikaydı! Kendimi prenses gibi hissettim. Teşekkürler S Art Beauty Center</p>
                                </div>
                                <div class="testimonial-detail"> <strong class="testimonial-name">Zeynep Y.</strong> <span
                                        class="testimonial-position">Kimyager</span> </div>
                            </div>
                        </div>
                        <div class="item p-a5">
                            <div class="testimonial-9">
                                <div class="testimonial-pic radius style1"><img src="/images/sart/dip_boyası_4.webp"
                                        width="100" height="100" alt=""></div>
                                <div class="testimonial-text">
                                    <p>Saç rengimi değiştirmek istediğimde S Art Beauty Center'a uğradım. Renk uzmanları
                                        sayesinde istediğim tonu mükemmel bir şekilde yakaladık. Kesinlikle en favori
                                        kuaförüm!</p>
                                </div>
                                <div class="testimonial-detail"> <strong class="testimonial-name">Selin A.</strong> <span
                                        class="testimonial-position">Öğrenci</span> </div>
                            </div>
                        </div>
                        <div class="item p-a5">
                            <div class="testimonial-9">
                                <div class="testimonial-pic radius style1"><img src="/images/sart/protez_tırnak_2.webp"
                                        width="100" height="100" alt=""></div>
                                <div class="testimonial-text">
                                    <p>Protez tırnak uygulaması için S Art Beauty Center'ı tercih ettim ve sonuçtan çok
                                        mutluyum. Tırnaklarım doğal görünüyor ve uzun süre dayanıyor. Kesinlikle tavsiye
                                        ederim!</p>
                                </div>
                                <div class="testimonial-detail"> <strong class="testimonial-name">Elif S.</strong> <span
                                        class="testimonial-position">Ev Kadını</span> </div>
                            </div>
                        </div>
                        <div class="item p-a5">
                            <div class="testimonial-9">
                                <div class="testimonial-pic radius style1"><img src="/images/sart/ipek_kirpik_3.webp"
                                        width="100" height="100" alt=""></div>
                                <div class="testimonial-text">
                                    <p>İpek kirpik uygulaması yaptırdım ve gözlerim çok daha belirgin görünüyor. Uzman
                                        ekibin dikkatli çalışması ve rahatlatıcı ortamı sayesinde kendimi çok rahat
                                        hissettim.</p>
                                </div>
                                <div class="testimonial-detail"> <strong class="testimonial-name">Suzan B.</strong> <span
                                        class="testimonial-position">Tasarımcı</span> </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Testimonials Of Our Clients -->
        </div>
        <!-- contact area END -->
    </div>
    <!-- Content END-->
@endsection
