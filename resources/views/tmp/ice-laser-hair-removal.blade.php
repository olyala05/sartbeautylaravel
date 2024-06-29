   <!-- Content -->
   <div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr dlab-bnr-inr overlay-primary"
        style="background-image:url(/images/sart/sartbeauty_bg_5.webp);">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">@lang('ice-laser-hair-removal.lazer-epilasyon')</h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="{{ route('route',['/']) }}" target="_self">@lang('ice-laser-hair-removal.home')</a></li>
                        <li>@lang('ice-laser-hair-removal.lazer-epilasyon')</li>
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
                            {{-- <ul class="service-list m-b30">
                                <li><a href="{{ route('pages.gelpolish') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.perminant_nail_polish')">@lang('ice-laser-hair-removal.perminant_nail_polish')</a></li>
                                <li><a href="{{ route('pages.manicurepedicure') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.mani_pedi')">@lang('ice-laser-hair-removal.mani_pedi')</a></li>
                                <li><a href="{{ route('pages.prostheticnails') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.prosthetic_nail')">@lang('ice-laser-hair-removal.prosthetic_nail')</a></li>
                                <li><a href="{{ route('pages.nailart') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.nail_art')">@lang('ice-laser-hair-removal.nail_art')</a></li>
                                <li><a href="{{ route('pages.eyelashextensions') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.silk_eyelash')">@lang('ice-laser-hair-removal.silk_eyelash')</a></li>
                                <li><a href="{{ route('pages.eyelashlifting') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.eyelash_lifting')">@lang('ice-laser-hair-removal.eyelash_lifting')</a></li>
                                <li><a href="{{ route('pages.icelaser') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.dipliner')">@lang('ice-laser-hair-removal.dipliner')</a> </li>
                                <li><a href="{{ route('pages.eyebrowlamination') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.eyebrow_lamination')">@lang('ice-laser-hair-removal.eyebrow_lamination')</a></li>
                                <li><a href="{{ route('pages.microblading') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.microblading')">@lang('ice-laser-hair-removal.microblading')</a></li>
                                <li><a href="{{ route('pages.shugaring') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.wax')">@lang('ice-laser-hair-removal.wax')</a></li>
                                <li  class="active"><a href="{{ route('pages.iselaser') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.lazer-epilasyon')">@lang('ice-laser-hair-removal.lazer-epilasyon')</a></li>
                                <li><a href="{{ route('pages.skincare') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.skin-care')">@lang('ice-laser-hair-removal.skin-care')</a></li>
                                <li><a href="{{ route('pages.cellulitemassage') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.cellulite-massage')">@lang('ice-laser-hair-removal.cellulite-massage')</a></li>
                                <li><a href="{{ route('pages.rollshape') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.roll-shape')">@lang('ice-laser-hair-removal.roll-shape')</a> </li>
                                <li><a href="{{ route('pages.lipcoloring') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.lip_filler')">@lang('ice-laser-hair-removal.lip_filler')</a></li>
                                <li><a href="{{ route('pages.keratincare') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.keratin_care')">@lang('ice-laser-hair-removal.keratin_care')</a> </li>
                                <li><a href="{{ route('pages.perma') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.perm')">@lang('ice-laser-hair-removal.perm')</a></li>
                                <li><a href="{{ route('pages.brazilianblowdry') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.')">@lang('ice-laser-hair-removal.')</a></li>
                                <li><a href="{{ route('pages.highlight') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.highlighted')">@lang('ice-laser-hair-removal.highlighted')</a></li>
                                <li><a href="{{ route('pages.hairdye') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.hair_dye')">@lang('ice-laser-hair-removal.hair_dye')</a></li>
                                <li><a href="{{ route('pages.hairdipdye') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.hair_dip_dye')">@lang('ice-laser-hair-removal.hair_dip_dye')</a></li>
                                <li><a href="{{ route('pages.haircut') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.hair_cut')">@lang('ice-laser-hair-removal.hair_cut')</a> </li>
                                <li><a href="{{ route('pages.hairextension') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.hair_extension')">@lang('ice-laser-hair-removal.hair_extension')</a></li>
                                <li><a href="{{ route('pages.bridalhair') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.bridal_hair')">@lang('ice-laser-hair-removal.bridal_hair')</a></li>
                            </ul> --}}

                            <ul class="service-list m-b30">
                                <li><a href="{{ route('pages.gelpolish') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.perminant_nail_polish')">@lang('ice-laser-hair-removal.perminant_nail_polish')</a></li>
                                <li><a href="{{ route('pages.manicurepedicure') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.mani_pedi')">@lang('ice-laser-hair-removal.mani_pedi')</a></li>
                                <li><a href="{{ route('pages.prostheticnails') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.prosthetic_nail')">@lang('ice-laser-hair-removal.prosthetic_nail')</a></li>
                                <li><a href="{{ route('pages.nailart') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.nail_art')">@lang('ice-laser-hair-removal.nail_art')</a></li>
                                <li><a href="{{ route('pages.eyelashextensions') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.silk_eyelash')">@lang('ice-laser-hair-removal.silk_eyelash')</a></li>
                                <li><a href="{{ route('pages.eyelashlifting') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.eyelash_lifting')">@lang('ice-laser-hair-removal.eyelash_lifting')</a></li>
                                <li><a href="{{ route('pages.keratincare') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.dipliner')">@lang('ice-laser-hair-removal.dipliner')</a> </li>
                                <li><a href="{{ route('pages.eyebrowlamination') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.eyebrow_lamination')">@lang('ice-laser-hair-removal.eyebrow_lamination')</a></li>
                                <li><a href="{{ route('pages.microblading') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.microblading')">@lang('ice-laser-hair-removal.microblading')</a></li>
                                <li><a href="{{ route('pages.shugaring') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.wax')">@lang('ice-laser-hair-removal.wax')</a></li>
                                <li  class="active"><a href="{{ route('pages.iselaser') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.lazer-epilasyon')">@lang('ice-laser-hair-removal.lazer-epilasyon')</a></li>
                                <li><a href="{{ route('pages.skincare') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.skin-care')">@lang('ice-laser-hair-removal.skin-care')</a></li>
                                <li><a href="{{ route('pages.cellulitemassage') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.cellulite-massage')">@lang('ice-laser-hair-removal.cellulite-massage')</a></li>
                                <li><a href="{{ route('pages.rollshape') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.roll-shape')">@lang('ice-laser-hair-removal.roll-shape')</a> </li>
                                <li><a href="{{ route('pages.lipcoloring') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.lip_filler')">@lang('ice-laser-hair-removal.lip_filler')</a></li>
                                <li><a href="{{ route('pages.keratincare') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.keratin_care')">@lang('ice-laser-hair-removal.keratin_care')</a> </li>
                                <li><a href="{{ route('pages.perma') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.perm')">@lang('ice-laser-hair-removal.perm')</a></li>
                                <li><a href="{{ route('pages.brazilianblowdry') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.brazillian-blow-dry')">@lang('ice-laser-hair-removal.brazillian-blow-dry')</a></li>
                                <li><a href="{{ route('pages.highlight') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.highlighted')">@lang('ice-laser-hair-removal.highlighted')</a></li>
                                <li><a href="{{ route('pages.hairdye') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.hair_dye')">@lang('ice-laser-hair-removal.hair_dye')</a></li>
                                <li><a href="{{ route('pages.hairdipdye') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.hair_dip_dye')">@lang('ice-laser-hair-removal.hair_dip_dye')</a></li>
                                <li><a href="{{ route('pages.haircut') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.hair_cut')">@lang('ice-laser-hair-removal.hair_cut')</a> </li>
                                <li><a href="{{ route('pages.hairextension') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.hair_extension')">@lang('ice-laser-hair-removal.hair_extension')</a></li>
                                <li><a href="{{ route('pages.bridalhair') }}" class="dez-page"
                                        title="@lang('ice-laser-hair-removal.bridal_hair')">@lang('ice-laser-hair-removal.bridal_hair')</a></li>
                            </ul>
                            <div class="download-brochure m-b30 ">
                                <h4 class="text-primary">@lang('ice-laser-hair-removal.sart_on_social_media')</h4>
                                <p>@lang('ice-laser-hair-removal.follow_us_on_insta')</p>
                                <a href="https://www.instagram.com/s.art.beauty" class="site-button"
                                    title="@lang('ice-laser-hair-removal.sart_official_center_instagram')" target="_blank">S.ART.BEAUTY</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <b class="m-t0 m-b10 fw6 text-primary" style="font-size: 1.9em;">@lang('ice-laser-hair-removal.lazer-epilasyon')</b>
                        <p>@lang('ice-laser-hair-removal.lazer_context_content')</b></p>

                        <div
                            class="blog-carousel mfp-gallery owl-loaded owl-theme owl-carousel gallery owl-btn-center-lr owl-btn-1 primary m-b30">
                            <div class="item">
                                <div class="dlab-box service-iconbox" style="margin-right: 20px;">
                                    <div class="dlab-media dlab-img-overlay5"> <a href="#"
                                            title="@lang('ice-laser-hair-removal.lazer-epilasyon')"><img
                                                src="/images/sart/img_lazer/lazer-temiz-foto2.jpeg"
                                                alt="@lang('ice-laser-hair-removal.lazer-epilasyon')"></a> </div>
                                    <div class="dlab-info p-a30 p-t60 border-1 bg-white text-center"
                                        style="height: 250px;">
                                        <div class="icon-bx-sm radius bg-white m-b20"> <a href="#"
                                                class="icon-cell" title="@lang('ice-laser-hair-removal.lazer-epilasyon')"><i
                                                    class="flaticon-woman"></i></a> </div>
                                        <h6 class="dlab-title m-t0"><a href="#" title="@lang('ice-laser-hair-removal.lazer-epilasyon')">@lang('ice-laser-hair-removal.lazer_slide1_title')</a></h6>
                                        <p class="m-b15">@lang('ice-laser-hair-removal.lazer_slide1_cont')</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="dlab-box service-iconbox" style="margin-right: 20px;">
                                    <div class="dlab-media dlab-img-overlay5"> <a href="#"
                                            title="@lang('ice-laser-hair-removal.lazer-epilasyon')"><img
                                                src="/images/sart/img_lazer/koltuklazer.jpg"
                                                alt="@lang('ice-laser-hair-removal.lazer-epilasyon')"></a> </div>
                                    <div class="dlab-info p-a30 p-t60 border-1 bg-white text-center"
                                        style="height: 250px;">
                                        <div class="icon-bx-sm radius bg-white m-b20"> <a href="#"
                                                class="icon-cell" title="@lang('ice-laser-hair-removal.lazer-epilasyon')"><i
                                                    class="flaticon-mortar"></i></a> </div>
                                        <h6 class="dlab-title m-t0"><a href="#" title="@lang('ice-laser-hair-removal.lazer-epilasyon')">
                                            @lang('ice-laser-hair-removal.lazer_slide2_title')</a></h6>
                                        <p class="m-b15">@lang('ice-laser-hair-removal.lazer_slide2_cont')</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="dlab-box service-iconbox" style="margin-right: 20px;">
                                    <div class="dlab-media dlab-img-overlay5"> <a href="#"
                                            title="@lang('ice-laser-hair-removal.lazer-epilasyon')"><img src="/images/sart/img_lazer/yuzlazer.jpg"
                                                style="height: 275px;" alt="@lang('ice-laser-hair-removal.lazer-epilasyon')"></a> </div>
                                    <div class="dlab-info p-a30 p-t60 border-1 bg-white text-center"
                                        style="height: 250px;">
                                        <div class="icon-bx-sm radius bg-white m-b20"> <a href="#"
                                                class="icon-cell" title="@lang('ice-laser-hair-removal.lazer-epilasyon')"><i
                                                    class="flaticon-candle"></i></a> </div>
                                        <h6 class="dlab-title m-t0"><a href="#"
                                                title="@lang('ice-laser-hair-removal.lazer-epilasyon')">@lang('ice-laser-hair-removal.lazer_slide3_title')</a></h6>
                                        <p class="m-b15">@lang('ice-laser-hair-removal.lazer_slide3_cont')</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>
                        <h2 style="font-size: 1em;">@lang('ice-laser-hair-removal.lazer_subtitle1')</h2>
                        </p>
                        <p class="m-b20">@lang('ice-laser-hair-removal.lazer_subtitle1_cont')
                        </p>
                        {{-- Soru Cevaplar --}}
                        <div class="m-tb20">
                            <div class="accordion no-gap" id="accordion1">
                                <div class="panel">
                                    <div class="acod-head">
                                        <h2 style="font-size: 1em;" class="acod-title">
                                            <a href="#" data-toggle="collapse" data-target="#faq1"
                                                class="" aria-expanded="true">
                                                @lang('ice-laser-hair-removal.lazer_context_question1')
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="faq1" class="acod-body collapse show" data-parent="#accordion1"
                                        style="">
                                        <div class="acod-content">@lang('ice-laser-hair-removal.lazer_context_answer1')</div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="acod-head">
                                        <h2 style="font-size: 1em;" class="acod-title">
                                            <a href="#" data-toggle="collapse" data-target="#faq2"
                                                class="collapsed" aria-expanded="false">
                                                @lang('ice-laser-hair-removal.lazer_context_question2')</a>
                                        </h2>
                                    </div>
                                    <div id="faq2" class="acod-body collapse" data-parent="#accordion1"
                                        style="">
                                        <div class="acod-content">@lang('ice-laser-hair-removal.lazer_context_answer2')</div>
                                    </div>
                                </div>

                                <div class="panel">
                                    <div class="acod-head">
                                        <h2 style="font-size: 1em;" class="acod-title">
                                            <a href="#" data-toggle="collapse" data-target="#faq3"
                                                class="collapsed" aria-expanded="false">
                                                @lang('ice-laser-hair-removal.lazer_context_question3')</a>
                                        </h2>
                                    </div>
                                    <div id="faq3" class="acod-body collapse" data-parent="#accordion1"
                                        style="">
                                        <div class="acod-content">@lang('ice-laser-hair-removal.lazer_context_answer3')</div>
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
