@extends('index')
@section('isi')
    
<section id="slider">
        
           
        <div id="start_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="fullsite-block-1" data-source="gallery" 
        style="background: rgba(196,196,196,1);padding:0px;">
        
            <div id="start" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.3.3">
            
                <ul>
        
                        <li data-index="rs-3130" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="500" data-rotate="0" data-saveperformance="off" data-title="Intro" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        
                            <img src="plugins/slider-revolution/assets/images/transparent.png" data-bgcolor="rgba(196,196,196,1);" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                            
                                <div class="tp-caption   tp-resizeme" id="slide-3130-layer-10" data-x="['left','left','left','left']" 
                                data-hoffset="['583','583','400','344']" data-y="['top','top','top','top']" data-voffset="['134','171','174','144']"
                                 data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on" 
                                 data-frames='[{"from":"y:-100px;rX:0deg;rY:0deg;rZ:0deg;opacity:0;","speed":3000,"to":"o:1","delay":1000,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' 
                                 data-textAlign="['center','center','center','center']"  data-paddingtop="[0,0,0,0]" 
                                 data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8;border-width:0px;">
                                    <div style="width: 456px;
                                    height: 507px;
                                    background-image: url('{{asset('plugins/atas.png')}}');
                                    opacity: 1;
                                    position: absolute;
                                    border-top-left-radius: 5px;
                                    border-top-right-rkmadius: 5px;
                                    border-bottom-left-radius: 5px;
                                    border-bottom-right-radius: 5px;
                                    border-radius:25px;
                                    overflow: hidden;"></div>
                                </div>
                                <div class="tp-caption FullSiteBlock-Title   tp-resizeme" id="slide-3130-layer-3" 
                                data-x="['left','left','left','left']" data-hoffset="['50','50','30','20']" 
                                data-y="['top','top','top','top']" data-voffset="['230','200','150','150']" 
                                data-fontsize="['55','50','40','30']" data-lineheight="['65','60','50','40']" 
                                data-width="['500','500','350','200']" data-height="none" data-whitespace="normal" 
                                data-type="text" data-responsive_offset="on" 
                                data-frames='[{"from":"y:50px;opacity:0;","speed":2500,"to":"o:1;","delay":250,"ease":"Power4.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" 
                                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" 
                                style="z-index: 11; min-width: 500px; max-width: 500px; white-space: normal; color: rgba(255,70,70,1); ">
                                <span style=" font-family: Poppins;color:black">
                                    Siapa bilang bimbingan belajar itu kaku?
                                </span>
                                </div>

                                <div class="tp-caption FullSiteBlock-SubTitle   tp-resizeme " id="slide-3130-layer-4" 
                                data-x="['left','left','left','left']" data-hoffset="['50','50','30','20']" data-y="['top','top','top','top']" 
                                data-voffset="['440','345','327','300']" data-fontsize="['27','25','20','17']" data-lineheight="['44','34','30','24']" 
                                data-width="['500','500','350','200']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" 
                                data-frames='[{"from":"y:30px;opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]' 
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" 
                                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" 
                                style="z-index: 12; min-width: 500px; max-width: 500px; white-space: normal; color: rgba(119, 119, 119, 1.00);">
                                <span style=" font-family: Poppins;">
                                    <b>Temukan Teman, Cara Belajar, dan Mimpimu disini </b>
                                </span>
                                </div>
                                <?php 
                                        if (Auth::check()) {
                                
                                ?>
                                 <a href="soal" class="tp-caption FullSiteBlock-Link   tp-resizeme  tp-rs-menulink" href="#about" target="_self" 
                                id="slide-3130-layer-5" data-x="['left','left','left','left']"
                                data-hoffset="['50','150','150','20']" data-y="['top','top','top','top']"
                                data-voffset="['590','445','411','400']" data-fontsize="['20','20','17','15']"
                                data-lineheight="['24','24','26','26']" data-width="['170','130','115','110']" 
                                data-height="none" data-whitespace="['nowrap','normal','normal','normal']" data-type="text" data-actions='' 
                                data-responsive_offset="on" 
                                data-frames='[{"from":"y:10px;opacity:0;","speed":1500,"to":"o:1;","delay":750,"ease":"Power4.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(51, 51, 51, 1.00);"}]' 
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" 
                                data-paddingleft="[0,0,0,0]" style="z-index: 13; min-width: 130px; max-width: 130px; white-space: nowrap; font-size: 20px;cursor:pointer;">
                               
                                <div  style="float:left;padding:20px; border-top-left-radius: 15px;
                                border-top-right-radius: 15px;
                                border-bottom-left-radius: 15px;
                                border-bottom-right-radius: 15px; background: black; border:none; color:white;font-family: Poppins;">Dashboard</div>
                                </a>
                                <?php } ?>
                                <?php 
                                        if (!Auth::check()) {
                                
                                ?>
                                <a data-target="#modal-3" data-toggle="modal" href="#" class="tp-caption FullSiteBlock-Link   tp-resizeme  tp-rs-menulink" href="#about" target="_self" 
                                id="slide-3130-layer-5" data-x="['left','left','left','left']"
                                data-hoffset="['50','150','150','20']" data-y="['top','top','top','top']"
                                data-voffset="['590','445','411','400']" data-fontsize="['20','20','17','15']"
                                data-lineheight="['24','24','26','26']" data-width="['170','130','115','110']" 
                                data-height="none" data-whitespace="['nowrap','normal','normal','normal']" data-type="text" data-actions='' 
                                data-responsive_offset="on" 
                                data-frames='[{"from":"y:10px;opacity:0;","speed":1500,"to":"o:1;","delay":750,"ease":"Power4.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(51, 51, 51, 1.00);"}]' 
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" 
                                data-paddingleft="[0,0,0,0]" style="z-index: 13; min-width: 130px; max-width: 130px; white-space: nowrap; font-size: 20px;cursor:pointer;">
                               
                               
                                <div  style="float:left;padding:20px; border-top-left-radius: 15px;
                                border-top-right-radius: 15px;
                                border-bottom-left-radius: 15px;
                                border-bottom-right-radius: 15px; background: black; border:none; color:white;font-family: Poppins;">Daftar Sekarang</div>
                                <?php } ?>
                                </a>
                                <?php 
                                        if (!(Auth::check())) {
                                
                                ?>
                                <a data-target="#login" data-toggle="modal" href="#" class="tp-caption FullSiteBlock-Link   tp-resizeme  tp-rs-menulink " href="#about" target="_self" 
                                id="slide-3130-layer-5" data-x="['left','left','left','left']"
                                data-hoffset="['270','0','30','20']" data-y="['top','top','top','top']"
                                data-voffset="['590','445','411','500']" data-fontsize="['20','20','17','15']"
                                data-lineheight="['24','24','26','26']" data-width="['170','130','115','110']" 
                                data-height="none" data-whitespace="['nowrap','normal','normal','normal']" data-type="text" data-actions='' 
                                data-responsive_offset="on" 
                                data-frames='[{"from":"y:10px;opacity:0;","speed":1500,"to":"o:1;","delay":750,"ease":"Power4.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(51, 51, 51, 1.00);"}]' 
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" 
                                data-paddingleft="[0,0,0,0]" style="z-index: 13; min-width: 130px; max-width: 130px; white-space: nowrap; font-size: 20px;cursor:pointer;">
                             
                                <div  style="float:left;padding:20px; border-top-left-radius: 15px;
                                border-top-right-radius: 15px;
                                border-bottom-left-radius: 15px;
                                border-bottom-right-radius: 15px; border-style: solid;
                                border-color: black; color:black;font-family: Poppins;">Masuk</div>
                                </a>
                                 <?php } ?>
                        </li>
                </ul>
            </div>
        </div>
        
    <div id="about_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="fullsite-block-2-about159" data-source="gallery" 
        style="background-color:white;padding:0px;">
       
        <div id="about" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                <ul>

                        <li data-index="rs-3127" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="500" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1000" data-fsslotamount="7" data-saveperformance="off" data-title="About" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        
                        <img src="plugins/slider-revolution/assets/images/dummy.png" data-bgcolor="" alt="" data-lazyload="plugins/slider-revolution/assets/images/transparent.png" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                        
                        
                        <div class="tp-caption   tp-resizeme" id="slide-3127-layer-22" 
                        data-x="['center','center','center','center']" 
                        data-hoffset="['-300','2000','-2000','-2000']" 
                        data-y="['top','top','top','top']" data-voffset="['100','100','30','10']" 
                        data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on" 
                        data-frames='[{"from":"y:50px;opacity:0;","speed":2500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":500,"to":"y:-10px;opacity:0;","ease":"Power4.easeOut"}]' 
                        data-textAlign="['center','left','left','left']" data-paddingtop="[145,0,0,0]" data-paddingright="[0,0,0,0]" 
                        data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;border-width:0px;     width: 383px;
                        height: 290px;
                        background: url('{{asset('plugins/img/sekolah1.jpeg')}}');
                        opacity: 1;
                        position: absolute;
                        border-top-left-radius: 5px;
                        border-top-right-radius: 5px;
                        border-bottom-left-radius: 5px;
                        border-bottom-right-radius: 5px;
                        overflow: hidden;
                    ">
                            <h1>UTBK INTENSIF</h1>
                            
                        </div>
                        <div class="tp-caption   tp-resizeme" id="slide-3127-layer-22" 
                        data-x="['center','center','center','center']" 
                        data-hoffset="['300','2000','-2000','-0']" 
                        data-y="['top','top','top','top']" data-voffset="['100','100','100','1000']" 
                        data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on" 
                        data-frames='[{"from":"y:50px;opacity:0;","speed":2500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":500,"to":"y:-10px;opacity:0;","ease":"Power4.easeOut"}]' 
                        data-textAlign="['CENTER','left','left','left']" data-paddingtop="[145,0,0,0]" data-paddingright="[0,0,0,0]" 
                        data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;border-width:0px;     width: 383px;
                        height: 290px;
                        background: url('{{asset('plugins/img/sekolah2.jpeg')}}');
                        opacity: 1;
                        position: absolute;
                        top: 0px;
                        left: 0px;
                        border-top-left-radius: 5px;
                        border-top-right-radius: 5px;
                        border-bottom-left-radius: 5px;
                        border-bottom-right-radius: 5px;
                        overflow: hidden;
                    ">
                        <h1>REGULAR</h1>
                        </div>
                    
                    <div class="tp-caption     tp-resizeme " id="slide-3127-layer-3" 
                    data-x="['center','center','center','center']" data-hoffset="['320','320','220','-50']" data-y="['top','top','top','top']" 
                    data-voffset="['450','280','230','20']" data-fontsize="['45','45','40','30']" data-lineheight="['35','55','50','30']" 
                    data-width="['500','500','350','-10']" data-height="none" data-whitespace="normal" data-type="text" 
                    data-responsive_offset="on" 
                    data-frames='[{"from":"y:50px;opacity:0;","speed":2500,"to":"o:1;","delay":250,"ease":"Power4.easeOut"},{"delay":"wait","speed":500,"to":"y:10px;opacity:0;","ease":"Power4.easeOut"}]' 
                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,70]" 
                    data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,150]" 
                    style="font-family: Poppins;z-index: 7; min-width: 500px; max-width: 500px; white-space: normal; 
                  ">
                    <font style="font-size: 19px !important">
                        Kelas Reguler adalah Program untuk para siswa kelas 10 dan 11 SMA/MAN yang ingin mendalami pelajaran untuk meningkatkan nilai di sekolah <br>
                       <br>
                        <a href="">
                            <div style="float: left;
                            padding: 25px; border-radius: 15px; 
                            background: black; 
                            border: 0px none; color: white; transition: none 0s ease 0s; 
                            text-align: left; line-height: 9px; margin: 0px; letter-spacing: 0px; 
                            font-weight: 300; font-size: 24px;">Lihat Detail!</div></a>
                    </font>
                    </div>
                    <div class="tp-caption     tp-resizeme " id="slide-3127-layer-3" 
                    data-x="['center','center','center','center']" data-hoffset="['-285','-285','-200','-50']" data-y="['top','top','top','top']" 
                    data-voffset="['450','280','230','350']" data-fontsize="['45','45','40','30']" data-lineheight="['35','55','50','30']" 
                    data-width="['500','500','350','-10']" data-height="none" data-whitespace="normal" data-type="text" 
                    data-responsive_offset="on" 
                    data-frames='[{"from":"y:50px;opacity:0;","speed":2500,"to":"o:1;","delay":250,"ease":"Power4.easeOut"},{"delay":"wait","speed":500,"to":"y:10px;opacity:0;","ease":"Power4.easeOut"}]' 
                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,70]" 
                    data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,150]" 
                    style="font-family: Poppins;z-index: 7; min-width: 500px; max-width: 500px; white-space: normal; 
                  ">
                    <font style="font-size: 19px !important">
                        UTBK Intensif adalah Program untuk alumni dan kelas 12 SMA/Sederajat yang akan melakukan persiapan ujian UTBK secara intensif setiap hari. <br>
                        <br>
                        <a href="">
                            <div style="float: left; 
                            padding: 25px; border-radius: 15px; 
                            background: black; 
                            border: 0px none; color: white; transition: none 0s ease 0s; 
                            text-align: left; line-height: 9px; margin: 0px; letter-spacing: 0px; 
                            font-weight: 300; font-size: 24px;">Lihat Detail!</div></a>
                    </font>
                    </div>
                       </li>
                        
                        </ul>
           
        </div>
    </div>
    <div id="about_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="fullsite-block-2-about159" data-source="gallery" 
        style="background-color:#e2e7eb;padding:0px;">
   
        <div id="next" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                <ul>

                        <li data-index="rs-3127" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="500" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1000" data-fsslotamount="7" data-saveperformance="off" data-title="About" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        
                        <img src="plugins/slider-revolution/assets/images/dummy.png" data-bgcolor="#e2e7eb" alt="" data-lazyload="plugins/slider-revolution/assets/images/transparent.png" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                        
                        
                    <div class="tp-caption FullSiteBlock-Title   tp-resizeme " id="slide-3127-layer-3" 
                        data-x="['center','center','center','center']" data-hoffset="['290','-10000','-10000','100000']" data-y="['top','top','top','top']" 
                        data-voffset="['50','149','120','100']" data-fontsize="['45','45','40','30']" data-lineheight="['55','55','50','40']" 
                        data-width="['500','500','350','200']" data-height="none" data-whitespace="normal" data-type="text" 
                        data-responsive_offset="on" 
                        data-frames='[{"from":"y:50px;opacity:0;","speed":2500,"to":"o:1;","delay":250,"ease":"Power4.easeOut"},{"delay":"wait","speed":500,"to":"y:10px;opacity:0;","ease":"Power4.easeOut"}]' 
                        data-textAlign="['left','left','left','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" 
                        data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" 
                        style="font-family: Poppins;z-index: 7; min-width: 500px; color:white;max-width: 500px; white-space: normal; font-size: 45px; line-height: 55px;">
                        
                        <div style="width: 452px;
                        height: 224px;
                        background: rgba(25,118,210,1);
                        opacity: 1;
                        border-top-left-radius: 10px;
                        border-top-right-radius: 10px;
                        border-bottom-left-radius: 10px;
                        border-bottom-right-radius: 10px;
                        overflow: hidden;">
                    </div>
                    </div>
                        
                    <div class="tp-caption FullSiteBlock-Title   tp-resizeme " id="slide-3127-layer-3" 
                        data-x="['center','center','center','center']" data-hoffset="['-330','-10000','-10000','100000']" data-y="['top','top','top','top']" 
                        data-voffset="['50','149','120','100']" data-fontsize="['45','45','40','30']" data-lineheight="['55','55','50','40']" 
                        data-width="['500','500','350','200']" data-height="none" data-whitespace="normal" data-type="text" 
                        data-responsive_offset="on" 
                        data-frames='[{"from":"y:50px;opacity:0;","speed":2500,"to":"o:1;","delay":250,"ease":"Power4.easeOut"},{"delay":"wait","speed":500,"to":"y:10px;opacity:0;","ease":"Power4.easeOut"}]' 
                        data-textAlign="['left','left','left','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" 
                        data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="font-family: Poppins;z-index: 7; min-width: 500px; max-width: 500px; white-space: normal; font-size: 45px; line-height: 55px;">
                        
                        <div style="width: 452px;
                        height: 224px;
                        background: rgba(255,69,70,1);
                        opacity: 1;
                        border-top-left-radius: 10px;
                        border-top-right-radius: 10px;
                        border-bottom-left-radius: 10px;
                        border-bottom-right-radius: 10px;
                        overflow: hidden;">
                    </div>
                    </div>
                    <div class="tp-caption FullSiteBlock-Title   tp-resizeme " id="slide-3127-layer-3" 
                        data-x="['center','center','center','center']" data-hoffset="['-330','-10000','-10000','10000']" data-y="['top','top','top','top']" 
                        data-voffset="['400','149','120','100']" data-fontsize="['45','45','40','30']" data-lineheight="['55','55','50','40']" 
                        data-width="['500','500','350','200']" data-height="none" data-whitespace="normal" data-type="text" 
                        data-responsive_offset="on" 
                        data-frames='[{"from":"y:50px;opacity:0;","speed":2500,"to":"o:1;","delay":250,"ease":"Power4.easeOut"},{"delay":"wait","speed":500,"to":"y:10px;opacity:0;","ease":"Power4.easeOut"}]' 
                        data-textAlign="['left','left','left','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" 
                        data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="font-family: Poppins;z-index: 7; min-width: 500px; max-width: 500px; white-space: normal; font-size: 45px; line-height: 55px;">
                        
                        <div style="width: 452px;
                        height: 224px;
                        background: rgba(76,175,80,1);
                        opacity: 1;
                        border-top-left-radius: 10px;
                        border-top-right-radius: 10px;
                        border-bottom-left-radius: 10px;
                        border-bottom-right-radius: 10px;
                        overflow: hidden;"></div>
                    </div>
                    <div class="tp-caption FullSiteBlock-Title   tp-resizeme " id="slide-3127-layer-3" 
                        data-x="['center','center','center','center']" data-hoffset="['290','-10000','-10000','10000']" data-y="['top','top','top','top']" 
                        data-voffset="['400','149','120','100']" data-fontsize="['45','45','40','30']" data-lineheight="['55','55','50','40']" 
                        data-width="['500','500','350','200']" data-height="none" data-whitespace="normal" data-type="text" 
                        data-responsive_offset="on" 
                        data-frames='[{"from":"y:50px;opacity:0;","speed":2500,"to":"o:1;","delay":250,"ease":"Power4.easeOut"},{"delay":"wait","speed":500,"to":"y:10px;opacity:0;","ease":"Power4.easeOut"}]' 
                        data-textAlign="['left','left','left','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" 
                        data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="font-family: Poppins;z-index: 7; min-width: 500px; max-width: 500px; white-space: normal; font-size: 45px; line-height: 55px;">
                        
                        <div style="width: 452px;
                        height: 224px;
                        background: rgba(255,191,0,1);
                        opacity: 1;
                        border-top-left-radius: 10px;
                        border-top-right-radius: 10px;
                        border-bottom-left-radius: 10px;
                        border-bottom-right-radius: 10px;
                        overflow: hidden;"></div>
                    </div>

                    <div class="tp-caption FullSiteBlock-Title   tp-resizeme " id="slide-3127-layer-3" 
                        data-x="['center','center','center','left']" data-hoffset="['320','-320','-100','250']" data-y="['top','top','top','top']" 
                        data-voffset="['100','200','10','0']" data-fontsize="['45','45','25','20']" data-lineheight="['55','55','25','20']" 
                        data-width="['500','500','350','200']" data-height="none" data-whitespace="normal" data-type="text" 
                        data-responsive_offset="on" 
                        data-frames='[{"from":"y:50px;opacity:0;","speed":2500,"to":"o:1;","delay":250,"ease":"Power4.easeOut"},{"delay":"wait","speed":500,"to":"y:10px;opacity:0;","ease":"Power4.easeOut"}]' 
                        data-textAlign="['center','left','left','right']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" 
                        data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" 
                        style="font-family: Poppins;z-index: 7; min-width: 500px; color:black;max-width: 500px; white-space: normal; font-size: 45px; line-height: 55px;">
                        <font style="colot:black">
                        Try Out Ujian <br>
                        <span style="font-size: 18px">
                                Bank soal yang banyak dan akurat tentunya membantu kamu untuk lulus di kampus terbaik. 
                        </span>
                        </font>
                    </div>
                    <div class="tp-caption FullSiteBlock-Title   tp-resizeme " id="slide-3127-layer-3" 
                        data-x="['center','center','center','left']" data-hoffset="['-300','-320','-100','50']" data-y="['top','top','top','top']" 
                        data-voffset="['100','500','200','150']" data-fontsize="['45','45','25','20']" data-lineheight="['55','55','25','20']" 
                        data-width="['500','500','350','200']" data-height="none" data-whitespace="normal" data-type="text" 
                        data-responsive_offset="on" 
                        data-frames='[{"from":"y:50px;opacity:0;","speed":2500,"to":"o:1;","delay":250,"ease":"Power4.easeOut"},{"delay":"wait","speed":500,"to":"y:10px;opacity:0;","ease":"Power4.easeOut"}]' 
                        data-textAlign="['center','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" 
                        data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" 
                        style="font-family: Poppins;z-index: 7; min-width: 500px; color:black;max-width: 500px; white-space: normal; font-size: 45px; line-height: 55px;">
                        
                        Private Online <br>
                        <span style="font-size: 18px">
                                Pembelajaran online secara live akan membuat kamu lebih mudah dan hemat uang.  
                        </span>
                    </div>
                    <div class="tp-caption FullSiteBlock-Title   tp-resizeme " id="slide-3127-layer-3" 
                        data-x="['center','center','center','left']" data-hoffset="['-300','320','-100','250']" data-y="['top','top','top','top']" 
                        data-voffset="['420','200','400','300']" data-fontsize="['45','45','25','20']" data-lineheight="['55','55','25','20']" 
                        data-width="['500','500','350','200']" data-height="none" data-whitespace="normal" data-type="text" 
                        data-responsive_offset="on" 
                        data-frames='[{"from":"y:50px;opacity:0;","speed":2500,"to":"o:1;","delay":250,"ease":"Power4.easeOut"},{"delay":"wait","speed":500,"to":"y:10px;opacity:0;","ease":"Power4.easeOut"}]' 
                        data-textAlign="['center','left','left','right']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" 
                        data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" 
                        style="font-family: Poppins;z-index: 7; min-width: 500px; color:blcak;max-width: 500px; white-space: normal; font-size: 45px; line-height: 55px;">
                        
                        Modul Belajar <br>
                        <span style="font-size: 18px">
                                Rangkuman yang sudah disusun se-efektif dan efisien mungkin guna memudahkan siswa-siswa mengerti dan mengingat.  
                        </span>
                    </div>
                    <div class="tp-caption FullSiteBlock-Title   tp-resizeme " id="slide-3127-layer-3" 
                        data-x="['center','center','center','left']" data-hoffset="['320','320','-100','50']" data-y="['top','top','top','top']" 
                        data-voffset="['420','500','600','500']" data-fontsize="['45','45','25','20']" data-lineheight="['40','55','25','20']" 
                        data-width="['500','500','350','200']" data-height="none" data-whitespace="normal" data-type="text" 
                        data-responsive_offset="on" 
                        data-frames='[{"from":"y:50px;opacity:0;","speed":2500,"to":"o:1;","delay":250,"ease":"Power4.easeOut"},{"delay":"wait","speed":500,"to":"y:10px;opacity:0;","ease":"Power4.easeOut"}]' 
                        data-textAlign="['center','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" 
                        data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" 
                        style="font-family: Poppins;z-index: 7; min-width: 500px; color:black;max-width: 500px; white-space: normal; font-size: 45px; line-height: 55px;">
                        
                        Staf Pengajar dari Universitas Ternama <br>
                        <span style="font-size: 18px">
                                Merupakan lulusan universitas ternama dan sudah memiliki jam terbang yang banyak di dunia pengajaran.  
                        </span>
                    </div>
                    </li>
                        
                </ul>
        
        </div>
        
    </div>
   
    <div class="d-md-block d-none" style="width: 100%;
        height: 370px;
        background: rgba(255,69,70,1);
        opacity: 1;
        top: 0px;
        left: 0px;
        overflow: hidden
        padding-top:40%">
       
        <div  style="width: 700px;
        line-height:40px;
        color: rgba(255,255,255,1);
        font-family: Poppins;
        font-size: 46px;
        padding-top:10%;
        opacity: 1;
        text-align: left;">Our Story begins Here
        Let's Build the Future</div>
        
    </div>
       <div style="width: 100%;
        height: 370px;
        background: rgba(255,191,0,1);
        opacity: 1;
        top: 0px;
        left: 0px;
        overflow: hidden
        padding-top:40%">
       
        <div style="width: 100%;
        line-height:43px;
        color: rgba(255,255,255,1);
        font-family: Poppins;
        font-size: 200%;
        padding-top:8%;
        opacity: 1;
        text-align: center;
        color:black">Sekolah Mudah merupakan sebuah inovasi pendidikan yang berfokus pada Efektivitas dan Efisiensi dalam perkembangan pendidikan siswa. Sekolah Mudah sendiri sudah beroperasi sejak 17 September 2019. </div>
    </div>
    </section>
    
<script type="text/javascript">
    var tpj = jQuery;
    tpj(document).ready(function () {
        tpj("#about").show().revolution({
            sliderType: "hero",
            jsFileLocation: "plugins/slider-revolution/js/",
            sliderLayout: "fullscreen",
            dottedOverlay: "none",
            delay: 9000,
            navigation: {},
            responsiveLevels: [1240, 1024, 778, 480],
            visibilityLevels: [1240, 1024, 778, 480],
            gridwidth: [1240, 1024, 778, 480],
            gridheight: [800, 768, 700, 700],
            lazyType: "none",
            parallax: {
                type: "scroll",
                origo: "slidercenter",
                speed: 300,
                levels: [15, 16, 17, 18, 19, 20, -10, -20, -30, -40, -50, -60, 15, 10, 100, 55],
                type: "scroll",
            },
            shadow: 0,
            spinner: "off",
            autoHeight: "off",
            fullScreenAutoWidth: "off",
            fullScreenAlignForce: "off",
            fullScreenOffsetContainer: "",
            fullScreenOffset: "",
            disableProgressBar: "on",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
                simplifyAll: "off",
                disableFocusListener: false,
            }
        });
        tpj("#next").show().revolution({
            sliderType: "hero",
            jsFileLocation: "plugins/slider-revolution/js/",
            sliderLayout: "fullscreen",
            dottedOverlay: "none",
            delay: 9000,
            navigation: {},
            responsiveLevels: [1240, 1024, 778, 480],
            visibilityLevels: [1240, 1024, 778, 480],
            gridwidth: [1240, 1024, 778, 480],
            gridheight: [800, 768, 700, 700],
            lazyType: "none",
            parallax: {
                type: "scroll",
                origo: "slidercenter",
                speed: 300,
                levels: [15, 16, 17, 18, 19, 20, -10, -20, -30, -40, -50, -60, 15, 10, 100, 55],
                type: "scroll",
            },
            shadow: 0,
            spinner: "off",
            autoHeight: "off",
            fullScreenAutoWidth: "off",
            fullScreenAlignForce: "off",
            fullScreenOffsetContainer: "",
            fullScreenOffset: "",
            disableProgressBar: "on",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
                simplifyAll: "off",
                disableFocusListener: false,
            }
        });
        tpj("#lima").show().revolution({
            sliderType: "hero",
            jsFileLocation: "plugins/slider-revolution/js/",
            sliderLayout: "fullscreen",
            dottedOverlay: "none",
            delay: 9000,
            navigation: {},
            responsiveLevels: [1240, 1024, 778, 480],
            visibilityLevels: [1240, 1024, 778, 480],
            gridwidth: [1240, 1024, 778, 480],
            gridheight: [800, 768, 700, 700],
            lazyType: "none",
            parallax: {
                type: "scroll",
                origo: "slidercenter",
                speed: 300,
                levels: [15, 16, 17, 18, 19, 20, -10, -20, -30, -40, -50, -60, 15, 10, 100, 55],
                type: "scroll",
            },
            shadow: 0,
            spinner: "off",
            autoHeight: "off",
            fullScreenAutoWidth: "off",
            fullScreenAlignForce: "off",
            fullScreenOffsetContainer: "",
            fullScreenOffset: "",
            disableProgressBar: "on",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
                simplifyAll: "off",
                disableFocusListener: false,
            }
        });
        tpj("#empat").show().revolution({
                        sliderType: "standard",
                        jsFileLocation: "plugins/slider-revolution/js/",
                        sliderLayout: "fullscreen",
                        dottedOverlay: "none",
                        delay: 9000,
                        navigation: {
                            onHoverStop: "off",
                        },
                        viewPort: {
                            enable: true,
                            outof: "wait",
                            visible_area: "50%",
                            presize: false
                        },
                        responsiveLevels: [1240, 1024, 778, 480],
                        visibilityLevels: [1240, 1024, 778, 480],
                        gridwidth: [1240, 1024, 778, 480],
                        gridheight: [800, 768, 700, 700],
                        lazyType: "single",
                        parallax: {
                            type: "scroll",
                            origo: "slidercenter",
                            speed: 300,
                            levels: [15, 16, 17, 18, 19, 20, -10, -20, -30, -40, -50, -60, 25, 30, 100, 55],
                            type: "scroll",
                        },
                        shadow: 0,
                        spinner: "off",
                        stopLoop: "on",
                        stopAfterLoops: 0,
                        stopAtSlide: 1,
                        shuffle: "off",
                        autoHeight: "off",
                        fullScreenAutoWidth: "off",
                        fullScreenAlignForce: "off",
                        fullScreenOffsetContainer: "",
                        fullScreenOffset: "",
                        disableProgressBar: "on",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: false,
                        }
                    });
                    tpj("#start").show().revolution({
                        sliderType: "standard",
                        jsFileLocation: "plugins/slider-revolution/js/",
                        sliderLayout: "fullscreen",
                        dottedOverlay: "none",
                        delay: 9000,
                        navigation: {
                            onHoverStop: "off",
                        },
                        viewPort: {
                            enable: true,
                            outof: "wait",
                            visible_area: "50%",
                            presize: false
                        },
                        responsiveLevels: [1240, 1024, 778, 480],
                        visibilityLevels: [1240, 1024, 778, 480],
                        gridwidth: [1240, 1024, 778, 480],
                        gridheight: [800, 768, 700, 700],
                        lazyType: "single",
                        parallax: {
                            type: "scroll",
                            origo: "slidercenter",
                            speed: 300,
                            levels: [15, 16, 17, 18, 19, 20, -10, -20, -30, -40, -50, -60, 25, 30, 100, 55],
                            type: "scroll",
                        },
                        shadow: 0,
                        spinner: "off",
                        stopLoop: "on",
                        stopAfterLoops: 0,
                        stopAtSlide: 1,
                        shuffle: "off",
                        autoHeight: "off",
                        fullScreenAutoWidth: "off",
                        fullScreenAlignForce: "off",
                        fullScreenOffsetContainer: "",
                        fullScreenOffset: "",
                        disableProgressBar: "on",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: false,
                        }
                    });
    }); /*ready*/
</script>

@endsection