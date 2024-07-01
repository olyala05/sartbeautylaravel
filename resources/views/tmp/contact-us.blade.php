{{-- İletişim Sayfası --}}
<!-- Content -->
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr dlab-bnr-inr  bg-pt iletisim-position bg-primary">
        <div class="pattern-layer" style="background-image:url(/images/sart/contact_us.png);">
            <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">@lang('contact.contact_us')</h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="{{ route('route',['/']) }}" title="@lang('contact.home')">@lang('contact.home')</a></li>
                        <li>@lang('contact.contact_us')</li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
        </div>

    </div>
    <!-- inner page banner END -->
    <!-- contact area --> <!--sart -->
    <div class="section-full content-inner bg-white contact-style-1">
        <div class="container">
            <div class="row">
                <!-- right part start -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="p-a30 border m-b30 contact-area border-1 align-self-stretch ">
                        <h4 class="m-b10">@lang('contact.contact_us_section1_title')</h4>
                        <p>@lang('contact.contact_us_section1_cont')</p>
                        <ul class="no-margin">
                            <li class="icon-bx-wraper left m-b30">
                                <div class="icon-bx-xs border-1"> <span class="icon-cell text-primary"><i
                                            class="ti-location-pin"></i></span>
                                </div>
                                <div class="icon-content">
                                    <h6 class="text-uppercase m-tb0 dlab-tilte">
                                        @lang('contact.contact_us_section1_subtitle1')</h6>
                                    <p>@lang('contact.contact_us_section1_subtitle1_cont')</p>
                                </div>
                            </li>
                            <li class="icon-bx-wraper left  m-b30">
                                <div class="icon-bx-xs border-1"> <span class="icon-cell text-primary"><i
                                            class="ti-email"></i></span>
                                </div>
                                <div class="icon-content">
                                    <h6 class="text-uppercase m-tb0 dlab-tilte">
                                        @lang('contact.contact_us_section1_subtitle2')</h6>
                                    <p>@lang('contact.contact_us_section1_subtitle2_cont')</p>
                                </div>
                            </li>
                            <li class="icon-bx-wraper left">
                                <div class="icon-bx-xs border-1"> <span class="icon-cell text-primary"><i
                                            class="ti-mobile"></i></span> </div>
                                <div class="icon-content">
                                    <h6 class="text-uppercase m-tb0 dlab-tilte">
                                        @lang('contact.contact_us_section1_subtitle3')</h6>
                                    <p>@lang('contact.contact_us_section1_subtitle3_cont')</p>
                                </div>
                            </li>
                        </ul>
                        <div class="m-t20">
                            <ul class="dlab-social-icon dlab-social-icon-lg">
                                <li>
                                    <a target="_blank" href="{{ settings('social-media')->facebook->href ?? '#' }}"
                                        class="fa fa-facebook bg-primary" rel="nofollow"
                                        title="{{ settings('social-media')->facebook->alt ?? '#' }}">
                                    </a>
                                </li>

                                <li>
                                    <a target="_blank" href="{{ settings('social-media')->whatsapp->href ?? '#' }}"
                                        class="fa fa-whatsapp bg-primary" rel="nofollow"
                                        title="{{ settings('social-media')->whatsapp->alt ?? '#' }}">
                                    </a>
                                </li>

                                <li>
                                    <a target="_blank" href="{{ settings('social-media')->instagram->href ?? '#' }}"
                                        class="fa fa-instagram bg-primary" rel="nofollow"
                                        title="{{ settings('social-media')->instagram->alt ?? '#' }}">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- right part END -->
                <!-- Left part start -->
                <div class="col-lg-4 col-md-6 m-b30">
                    <div class="p-a30 bg-gray clearfix">
                        <h4>@lang('contact.contact_us_section2_title')</h4>
                        <div class="dzFormMsg"></div>
                        <form method="post" class="dzForm" action="script/contact_smtp.php">
                            <input type="hidden" value="Contact" name="dzToDo">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="dzName" type="text" required class="form-control"
                                                placeholder="@lang('contact.contact_us_section2_subtitle1')">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="dzEmail" type="email" class="form-control" required
                                                placeholder="@lang('contact.contact_us_section2_subtitle2')">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <textarea name="dzMessage" rows="4" class="form-control" required placeholder="@lang('contact.contact_us_section2_subtitle3')"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="g-recaptcha"
                                                data-sitekey="6LdMTxYdAAAAAFQv3iXGaleXZeYHSEhr2Gh8n5Bq"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button name="submit" type="submit" value="Submit"
                                        class="site-button "><span>@lang('contact.contact_us_section2_subtitle4')</span> </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Left part END -->
                <div class="col-lg-4 col-md-12 d-flex m-b30">
                    <iframe src="{{ settings('map')->map_iframe ?? '#' }}" frameborder="0" width="100%"
                        height="600" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        title="{{ settings('map')->map_title ?? 'S ART Beuty Center Google Map' }}">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area  END -->
</div>
<!-- Content END-->
