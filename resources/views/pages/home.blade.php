{{-- Ana Sayfa --}}
@extends('layout.master')
@section('content')
@php
    $currentLang = app()->getLocale();

@endphp
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- Main Slider -->
        <div class="rev-slider">
            <div id="rev_slider_265_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container errow-style-1"
                data-alias="" data-source="gallery"
                style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                <!-- START REVOLUTION SLIDER 5.4.6.3 fullwidth mode -->
                <div id="rev_slider_265_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.6.3">
                    <ul> <!-- SLIDE  -->
                        <li data-index="rs-100" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                            data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                            data-thumb="/images/sart/sac_kuafor.webp" data-rotate="0" data-saveperformance="off"
                            data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5=""
                            data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="/images/sart/sac_kuafor.webp" alt="sart" data-bgposition="center center"
                                data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                            <div class="tp-caption tp-shape tp-shapewrapper bg-primary tp-resizeme" id="slide-100-layer-1"
                                data-x="['left','left','center','center']" data-hoffset="['30','30','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-1','-1','0','0']"
                                data-width="100" data-height="5" data-visibility="['on','on','off','off']"
                                data-whitespace="nowrap" data-type="shape" data-responsive_offset="off"
                                data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 15;border-color:rgba(0, 0, 0, 0.50);border-width:0px; border-radius:2px;">
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption tp-resizeme text-primary" id="slide-100-layer-2"
                                data-x="['left','left','center','center']" data-hoffset="['30','30','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-80','-80','-70','-60']"
                                data-fontsize="['65','48','42','36']" data-lineheight="['80','60','60','40']"
                                data-width="none" data-height="none" data-type="text" data-responsive_offset="off"
                                data-frames='[{"delay":"+500","split":"chars","splitdelay":0.05000000000000000277555756156289135105907917022705078125,"speed":2000,"split_direction":"forward","frame":"0","from":"opacity:0;","color":"#000000","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":2000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 7; white-space: nowrap; font-size: 65px; line-height: 80px; font-weight: 600; letter-spacing: 0px; font-family:Poppins;">
                                <span class="notranslate">S ART Beauty Center</span>
                            </div>
                            <div class="tp-caption tp-resizeme text-primary" id="slide-100-layer-3"
                                data-x="['left','left','center','center']" data-hoffset="['50','50','-50','-50']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-1','-1','-30','-30']"
                                data-fontsize="['65','48','42','36']" data-lineheight="['80','60','60','40']"
                                data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on"
                                data-frames='[{"delay":"+500","split":"chars","splitdelay":0.05000000000000000277555756156289135105907917022705078125,"speed":2000,"split_direction":"forward","frame":"0","from":"opacity:0;","color":"#000000","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":2000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[110,110,110,110]"
                                style="z-index: 7; white-space: nowrap; font-size: 65px; line-height: 80px; font-weight: 600; letter-spacing: 0px; font-family:Poppins;">
                                Güzellik ve Kuaför Salonu</div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption tp-resizeme" id="slide-100-layer-4"
                                data-x="['left','left','left','left']" data-hoffset="['30','30','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['100','100','-295','-295']"
                                data-width="[700,700,700,700]" data-height="['auto']"
                                data-visibility="['on','on','off','off']" data-type="text" data-responsive_offset="on"
                                data-frames='[{"delay":"+1990","speed":2000,"frame":"0","from":"opacity:0;","color":"#d9a86d","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 6; font-size: 18px; line-height: 28px; font-weight: 500; color: #fff; white-space: inherit; font-family:Poppins;">
                                Güzellik alanlarında uzman kadromuz ile hayallerinizdeki görünüme kavuşun.
                            </div>
                            <!-- LAYER NR. 6 -->
                            <div class="tp-caption tp-resizeme" id="slide-100-layer-5"
                                data-x="['left','left','center','center']" data-hoffset="['30','30','-85','-70']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['200','200','50','50']"
                                data-width="['auto']" data-height="['auto']" data-type="button" data-actions=''
                                data-responsive_offset="on"
                                data-frames='[{"delay":2000,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0]"
                                data-paddingright="[0]" data-paddingbottom="[0]" data-paddingleft="[0]"
                                style="z-index: 10; white-space: nowrap; font-size: 16px; line-height: 30px; font-weight: 600; font-family:Montserrat;border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">
                                <a href="{{ route('pages.contact') }}" class="site-button button-md"
                                    title="S Art Beauty Center İletişim" target="_self">S Art Beauty Center
                                    İletişim</a>
                            </div>

                            <div class="tp-caption tp-resizeme" id="slide-100-layer-6"
                                data-x="['left','left','center','center']" data-hoffset="['210','210','90','95']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['200','200','50','50']"
                                data-width="['auto']" data-height="['auto']" data-type="button" data-actions=''
                                data-responsive_offset="on"
                                data-frames='[{"delay":2500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0]"
                                data-paddingright="[0]" data-paddingbottom="[0]" data-paddingleft="[0]"
                                style="z-index: 11; white-space: nowrap; font-size: 16px; line-height: 30px; font-weight: 600; font-family:Montserrat;border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">
                                <a href="{{ route('route',['/']) }}" class="site-button-secondry button-md"
                                    title="S Art Beauty Center Hakkında" target="_self">Hakkımızda</a>
                            </div>
                        </li>
                        <li data-index="rs-200" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                            data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                            data-masterspeed="300" data-thumb="images/sart/nail_art.webp" data-rotate="0"
                            data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3=""
                            data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                            data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="/images/sart/nail_art.webp" alt="index_slide_2_img_title"
                                data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                class="rev-slidebg" data-no-retina>
                            <div class="tp-caption tp-shape  tp-shapewrapper bg-primary tp-resizeme"
                                id="slide-200-layer-1" data-x="['left','left','center','center']"
                                data-hoffset="['30','30','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['-1','-1','0','0']" data-width="100" data-height="5"
                                data-visibility="['on','on','off','off']" data-whitespace="nowrap" data-type="shape"
                                data-responsive_offset="off"
                                data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 15;border-color:rgba(0, 0, 0, 0.50);border-width:0px; border-radius:2px;">
                            </div>
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption tp-resizeme text-primary" id="slide-200-layer-2"
                                data-x="['left','left','center','center']" data-hoffset="['30','30','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-80','-80','-70','-60']"
                                data-fontsize="['65','48','42','36']" data-lineheight="['80','60','60','40']"
                                data-width="none" data-height="none" data-type="text" data-responsive_offset="off"
                                data-frames='[{"delay":"+500","split":"chars","splitdelay":0.05000000000000000277555756156289135105907917022705078125,"speed":2000,"split_direction":"forward","frame":"0","from":"opacity:0;","color":"#000000","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":2000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 7; white-space: nowrap; font-size: 65px; line-height: 80px; font-weight: 600; letter-spacing: 0px; font-family:Poppins;">
                                Tırnaklarda Yeni Trend:</div>
                            <div class="tp-caption tp-resizeme text-primary" id="slide-200-layer-3"
                                data-x="['left','left','center','center']" data-hoffset="['50','50','-50','-50']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-1','-1','-30','-30']"
                                data-fontsize="['65','48','42','36']" data-lineheight="['80','60','60','40']"
                                data-width="['auto']" data-height="['auto']" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"delay":"+500","split":"chars","splitdelay":0.05000000000000000277555756156289135105907917022705078125,"speed":2000,"split_direction":"forward","frame":"0","from":"opacity:0;","color":"#000000","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":2000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[110,110,110,110]"
                                style="z-index: 7; white-space: nowrap; font-size: 65px; line-height: 80px; font-weight: 600; letter-spacing: 0px; font-family:Poppins;">
                                Nail Art Zamanı!</div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption   tp-resizeme" id="slide-200-layer-4"
                                data-x="['left','left','left','left']" data-hoffset="['30','30','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['100','100','-295','-295']"
                                data-width="[700,700,700,700]" data-height="['auto']"
                                data-visibility="['on','on','off','off']" data-type="text" data-responsive_offset="on"
                                data-frames='[{"delay":"+1990","speed":2000,"frame":"0","from":"opacity:0;","color":"#d9a86d","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 6; font-size: 18px; line-height: 28px; font-weight: 500; color: #fff; white-space: inherit; font-family:Poppins;">
                                Nail art ile sen de göz alıcı ve bakımlı tırnaklara sahip olabilirsin.
                            </div>
                            <!-- LAYER NR. 6 -->
                            <div class="tp-caption tp-resizeme" id="slide-200-layer-5"
                                data-x="['left','left','center','center']" data-hoffset="['30','30','-85','-70']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['200','200','50','50']"
                                data-width="['auto']" data-height="['auto']" data-type="button" data-actions=''
                                data-responsive_offset="on"
                                data-frames='[{"delay":2000,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0]"
                                data-paddingright="[0]" data-paddingbottom="[0]" data-paddingleft="[0]"
                                style="z-index: 10; white-space: nowrap; font-size: 16px; line-height: 30px; font-weight: 600; font-family:Montserrat;border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">
                                <a href="{{ route('pages.services') }}" class="site-button button-md"
                                    title="S Art Beauty Center Hizmetleri" target="_self">Hizmetlerimiz</a>
                            </div>
                            <div class="tp-caption tp-resizeme" id="slide-200-layer-6"
                                data-x="['left','left','center','center']" data-hoffset="['210','210','90','95']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['200','200','50','50']"
                                data-width="['auto']" data-height="['auto']" data-type="button" data-actions=''
                                data-responsive_offset="on"
                                data-frames='[{"delay":2500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0]"
                                data-paddingright="[0]" data-paddingbottom="[0]" data-paddingleft="[0]"
                                style="z-index: 11; white-space: nowrap; font-size: 16px; line-height: 30px; font-weight: 600; font-family:Montserrat;border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">
                                <a href="https://api.whatsapp.com/send?phone=905335085191"
                                    class="site-button-secondry button-md" title="Whatsap Hattımız" target="_blank"
                                    rel="nofollow">Whatsapp</a>
                            </div>
                        </li>
                        <li data-index="rs-300" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                            data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                            data-masterspeed="300" data-thumb="images/sart/kirpik_lifting.webp" data-rotate="0"
                            data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3=""
                            data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                            data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="/images/sart/kirpik_lifting.webp" alt="eyelash_lifting"
                                data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                class="rev-slidebg" data-no-retina>
                            <div class="tp-caption tp-shape  tp-shapewrapper bg-primary tp-resizeme"
                                id="slide-300-layer-1" data-x="['left','left','center','center']"
                                data-hoffset="['30','30','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['-1','-1','0','0']" data-width="100" data-height="5"
                                data-visibility="['on','on','off','off']" data-whitespace="nowrap" data-type="shape"
                                data-responsive_offset="off"
                                data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 15;border-color:rgba(0, 0, 0, 0.50);border-width:0px; border-radius:2px;">
                            </div>
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption tp-resizeme text-primary" id="slide-300-layer-2"
                                data-x="['left','left','center','center']" data-hoffset="['30','30','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-80','-80','-70','-60']"
                                data-fontsize="['65','48','42','36']" data-lineheight="['80','60','60','40']"
                                data-width="none" data-height="none" data-type="text" data-responsive_offset="off"
                                data-frames='[{"delay":"+500","split":"chars","splitdelay":0.05000000000000000277555756156289135105907917022705078125,"speed":2000,"split_direction":"forward","frame":"0","from":"opacity:0;","color":"#000000","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":2000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 7; white-space: nowrap; font-size: 65px; line-height: 80px; font-weight: 600; letter-spacing: 0px; font-family:Poppins;">
                                "index_slide_3_1"</div>
                            <div class="tp-caption tp-resizeme text-primary" id="slide-300-layer-3"
                                data-x="['left','left','center','center']" data-hoffset="['50','50','-50','-50']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-1','-1','-30','-30']"
                                data-fontsize="['65','48','42','36']" data-lineheight="['80','60','60','40']"
                                data-width="['auto']" data-height="['auto']" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"delay":"+500","split":"chars","splitdelay":0.05000000000000000277555756156289135105907917022705078125,"speed":2000,"split_direction":"forward","frame":"0","from":"opacity:0;","color":"#000000","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":2000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[110,110,110,110]"
                                style="z-index: 7; white-space: nowrap; font-size: 65px; line-height: 80px; font-weight: 600; letter-spacing: 0px; font-family:Poppins;">
                                Kirpik Lifting ile Tanışın!</div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption   tp-resizeme" id="slide-300-layer-4"
                                data-x="['left','left','left','left']" data-hoffset="['30','30','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['100','100','-295','-295']"
                                data-width="[700,700,700,700]" data-height="['auto']"
                                data-visibility="['on','on','off','off']" data-type="text" data-responsive_offset="on"
                                data-frames='[{"delay":"+1990","speed":2000,"frame":"0","from":"opacity:0;","color":"#d9a86d","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 6; font-size: 18px; line-height: 28px; font-weight: 500; color: #fff; white-space: inherit; font-family:Poppins;">
                                Kirpik lifting ile doğal ve hacimli bir görünüm elde edin.
                            </div>
                            <!-- LAYER NR. 6 -->
                            <div class="tp-caption tp-resizeme" id="slide-300-layer-5"
                                data-x="['left','left','center','center']" data-hoffset="['30','30','-85','-70']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['200','200','50','50']"
                                data-width="['auto']" data-height="['auto']" data-type="button" data-actions=''
                                data-responsive_offset="on"
                                data-frames='[{"delay":2000,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0]"
                                data-paddingright="[0]" data-paddingbottom="[0]" data-paddingleft="[0]"
                                style="z-index: 10; white-space: nowrap; font-size: 16px; line-height: 30px; font-weight: 600; font-family:Montserrat;border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">
                                <a href="https://goo.gl/maps/MLkCjkQovNnJvqrw6" class="site-button button-md"
                                    title="S Art Beauty Center Nerede?" target="_blank" rel="nofollow">S Art
                                    Beauty Center Nerede?</a>
                            </div>
                            <div class="tp-caption tp-resizeme" id="slide-300-layer-6"
                                data-x="['left','left','center','center']" data-hoffset="['210','210','90','95']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['200','200','50','50']"
                                data-width="['auto']" data-height="['auto']" data-type="button" data-actions=''
                                data-responsive_offset="on"
                                data-frames='[{"delay":2500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0]"
                                data-paddingright="[0]" data-paddingbottom="[0]" data-paddingleft="[0]"
                                style="z-index: 11; white-space: nowrap; font-size: 16px; line-height: 30px; font-weight: 600; font-family:Montserrat;border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">
                                <a href="https://www.instagram.com/s.art.beauty" class="site-button-secondry button-md"
                                    title="S Art Beauty Center Instagram Hesabı" target="_blank"
                                    rel="nofollow">İnstagram</a>
                            </div>
                        </li>
                    </ul>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                </div>
            </div>
        </div>
        <!-- Main Slider -->
        <!-- About Us -->
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
                                    <a href="{{ route('pages.eyelashlifting') }}" class="text-primary"
                                        title="Kirpik Lifting" target="_self">Kirpik
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
                                    <a href="{{ route('pages.eyebrowlamination') }}" class="text-primary"
                                        title="Kaş Laminasyon" target="_self">Kaş
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
                                    <a href="{{ route('pages.lipcoloring') }}" class="text-primary"
                                        title="Dudak Renklendirme" target="_self">Dudak Renklendirme</a>
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
                                    <a href="{{ route('pages.prostheticnails') }}" class="text-primary"
                                        title="Protez Tırnak Tasarımı" target="_self">Protez Tırnak Tasarımı</a>
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
                                    <a href="{{ route('pages.eyelashextensions') }}" class="text-primary"
                                        title="İpek Kirpik" target="_self">İpek
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
                                    <a href="{{ route('pages.haircut') }}" class="text-primary" title="Saç Kesim"
                                        target="_self">Saç
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
                                    <a href="{{ route('pages.nailart') }}" class="text-primary" title="Tırnak Tasarımı"
                                        target="_self">Tırnak
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
                                    <a href="{{ route('pages.hairextension') }}" class="text-primary" title="Kaynak Saç"
                                        target="_self">Kaynak
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
                                    <a href="{{ route('pages.gelpolish') }}" class="text-primary" title="Kalıcı Oje"
                                        target="_self">Kalıcı
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
                                    <a href="{{ route('pages.hairdye') }}" class="text-primary" title="Saç Boyama"
                                        target="_self">Saç
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
                                    <a href="{{ route('pages.shugaring') }}" class="text-primary" title="Şeker Ağda"
                                        target="_self">Şeker
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
                        title="S Art Beauty Center Neler Yapar?" target="_self">Tüm Hizmetlerimize Bakın</a>
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
    </div>
    <!-- Content END-->
@endsection
