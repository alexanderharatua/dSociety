<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" /> <meta name="author" content="INSPIRO" />
<meta name="description" content="Themeforest Template Polo, html template">
<link rel="icon" type="image/png" href="images/favicon.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title>SEMUD - SEKOLAH MUDAH</title>

<link href="{{ asset('css/plugins.css')}}" rel="stylesheet">
<link href="{{ asset('css/style.css')}}" rel="stylesheet">

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>

<link href="//fonts.googleapis.com/css?family=Montserrat:400%2C700%7CAbril+Fatface:400%7CYellowtail:400" rel="stylesheet" property="stylesheet" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/pe-icon-7-stroke.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/font-awesome.css')}}"> 
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/settings.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/layers.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/navigation.css')}}">
<link rel='stylesheet' href="{{ asset('plugins/revolution.addon.beforeafter.css')}}" type='text/css' media='all' />

<script type="text/javascript" src="{{ asset('plugins/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/jquery.themepunch.revolution.min.js')}}"></script>

<link rel='stylesheet' href="{{ asset('plugins/revolution.addon.particles.css')}}?ver=1.0.3" type='text/css' media='all' />
<script type='text/javascript' src="{{ asset('plugins/revolution.addon.particles.min.js')}}?ver=1.0.3"></script>

<script type="text/javascript" src="{{ asset('plugins/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('plugins/revolution.extension.video.min.js')}}"></script>

@yield('css')
<script type="text/javascript">
        function setREVStartSize(e) {
            try {
                var i = jQuery(window).width(),
                    t = 9999,
                    r = 0,
                    n = 0,
                    l = 0,
                    f = 0,
                    s = 0,
                    h = 0;
                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function (e, f) {
                        f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                    }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                    var u = (e.c.width(), jQuery(window).height());
                    if (void 0 != e.fullScreenOffsetContainer) {
                        var c = e.fullScreenOffsetContainer.split(",");
                        if (c) jQuery.each(c, function (e, i) {
                            u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                        }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                    }
                    f = u
                } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                e.c.closest(".rev_slider_wrapper").css({
                    height: f
                })
            } catch (d) {
                console.log("Failure at Presize of Slider:" + d)
            }
        };
    </script>
</head>
<body>


        <div class="modal fade" id="login" tabindex="4" role="modal" aria-labelledby="modal-label-2" aria-hidden="true">

        <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 id="modal-label-2" class="modal-title">Masuk ke akun Mu!</h4>
                            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="icon-user"></i></span>
                                                </div>
                                                <input type="text" class="form-control" name="email" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" required="required">
                                        </div>
                                        <div class="input-group mb-3 show-hide-password">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-key"></i></span>
                                            </div>
                                            <input class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" type="text">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="icon-eye" aria-hidden="true" style="cursor: pointer;"></i></span>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-outline btn-dark btn-rounded" style="width:100%;border-color: black !important;">Masuk</button>
                
                                    </div>
                                    <center>
                                    Belum punya akun? <a href="" data-target="#modal-3" data-toggle="modal" href="#">Buat yuk</a>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <a href="{{ route('social.auth', 'facebook') }}">
                                <button type="button" class="btn btn-outline btn-dark btn-rounded" style="width:100%;border-color: black !important;"><i class="fab fa-facebook-f"></i> 
                                        <span style="padding-left:5%">
                                            Lanjutkan dengan Facebook
                                        </span>
                                </button>
                        </a>

                        <a href="{{ route('social.auth', 'google') }}">          
                                <button type="button" class="btn btn-outline btn-dark btn-rounded" style="width:100%;border-color: black !important;"><i class="fab fa-google-plus-g"></i>
                                        <span style="padding-left:5%">
                                                Lanjutkan dengan Google
                                        </span>    
                                </button>
                            </a>        
                        </div>
                    </div>      
                </div>
        </form>
  </div>

         <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="modal fade" id="modal-3" tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="true">
                <div class="modal-dialog ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 id="modal-label-3" class="modal-title">Buat akun semud</h4>
                            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                        </div>
                        <div class="modal-body">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="address">Nama Lengkap</label>
                                        <input type="text" class="form-control" name="name" placeholder="" required="required">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="address2">No Handphone</label>
                                        <input type="text" class="form-control" name="no_hp" placeholder="" required="required">
                                    </div>
                                    <div class="form-group col-md-12">
                                            <label for="address2">Email</label>
                                            <input type="text" class="form-control" name="email" placeholder="" required="required">
                                    </div>
                                    <div class="form-group col-md-6">
                                            <label for="address">Sandi</label>
                                            <input type="password" class="form-control" name="password" placeholder="" required="required">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="address2">Konfirmasi Sandi</label>
                                        <input type="password" class="form-control" name="password_confirmation" placeholder="" required="required">
                                    </div>
                                </div>
                                <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="reminders" id="reminders" class="custom-control-input" value="1" required="required">
                                        <label class="custom-control-label" for="reminders">
                                            by creating an account you agree to semud's conditions of use and privacy notice
                                        </label>
                                </div>
                                <button type="submit" class="btn btn-outline btn-dark btn-rounded" style="width:100%;border-color: black !important;">Buat akun</button>
                
                        </div>
                        <div class="modal-footer">       
                             <button type="button" class="btn btn-outline btn-dark btn-rounded" style="width:100%;border-color: black !important;"><i class="fab fa-facebook-f"></i> 
                                <a href="{{ route('social.auth', 'facebook') }}">
                                    <span style="padding-left:5% color:black">
                                        Lanjutkan dengan Facebook
                                    </span>
                                </a>
                            </button> 

                            <button type="button" class="btn btn-outline btn-dark btn-rounded" style="width:100%;border-color: black !important;"><i class="fab fa-google-plus-g"></i>
                               <a href="{{ route('social.auth', 'google') }}">   
                                 <span style="padding-left:5%">
                                            Lanjutkan dengan Google
                                    </span>    
                                </a>    
                            </button>     
                        </div>
                    </div>
                </div>
            </div>
        </form>
                    
<div class="body-inner">

<header id="header" data-fullwidth="true" data-transparent="true" class="">
<div class="header-inner">
<div class="container">

<div id="logo">
<a href="/">
<span class="logo-default"><img src="{{asset('plugins/Logo.png')}}" style="width:85px"></span>
<span class="logo-dark"><img src="{{asset('plugins/Logo.png')}}" style="width:85px"></span>
</a>
</div>

<div class="header-extras">
<ul>
<li>
<div class="p-dropdown">
<a href="#"><i class="fas fa-user-circle "></i></a>
<ul class="p-dropdown-content">
    <li><a href="{{ route('login') }}">MASUK</a></li>
    <li><a href="{{ route('register') }}">DAFTAR</a></li>
    <!-- <form method="POST" action="{{ route('logout') }}">  // ini kalau mau buat menu logout
        @csrf
         <li><a href="{{ route('logout') }}"
             onclick="event.preventDefault();
                this.closest('form').submit();">
                LOGOUT
        </a></li>
     </form> -->
</ul>
</div>
</li>
</ul>
</div>


<div id="mainMenu-trigger">
<a class="lines-button x"><span class="lines"></span></a>
</div>


<div id="mainMenu">
<div class="container" >
<nav  >
    <ul >
        
       
        <li class="dropdown mega-menu-item"><a href="#">Produk</a>
            <ul class="dropdown-menu">
                <li class="mega-menu-content">
                    <div class="row">
                            <div class="col-lg-1 p-l-0">
                                </div>
                        <div class="col-lg-7-5 p-l-0">
                            <center>
                                <h4 style="color:rgb(255, 69, 70)">dSosety <small>siswa nusantara</small></h4>
                                <h2 class="text-lg text-theme lh80 m-b-30">70%</h2>
                                <p class="m-b-0">Sistem Pembelajaran lebih efisien</p>
                                <a class="btn btn-shadow btn-rounded btn-block m-t-10">Gabung Sekarang!!</a><small class="t300">
                                <p class="text-center m-0"><em>* Limited time Offer</em></p>
                                </small>
                            </center>
                        </div>
                        <div class="col-lg-1 p-l-0">
                            </div>
                        <div class="col-lg-7-5 p-l-0">
                                <center>
                                <h4 style="color:rgb(255, 69, 70)">Gena-Geni <small>siswa nusantara</small></h4>
                                <h2 class="text-lg text-theme lh80 m-b-30">70%</h2>
                                <p class="m-b-0">Sistem Pembelajaran lebih efisien</p><a class="btn btn-shadow btn-rounded btn-block m-t-10">Gabung Sekarang!!</a><small class="t300">
                                <p class="text-center m-0"><em>* Limited time Offer</em></p>
                                </small>
                                </center>
                        </div>
                        <div class="col-lg-1 p-l-0">
                            </div>
                        <div class="col-lg-7-5 p-l-0">
                                <center>
                                <h4 style="color:rgb(255, 69, 70)">Sekolahku</h4>
                                <h2 class="text-lg text-theme lh80 m-b-30">70%</h2>
                                <p class="m-b-0">Sistem Pembelajaran lebih efisien</p><a class="btn btn-shadow btn-rounded btn-block m-t-10">Gabung Sekarang!!</a><small class="t300">
                                <p class="text-center m-0"><em>* Limited time Offer</em></p>
                                </small>
                                </center>
                        </div>
                        <div class="col-lg-1 p-l-0">
                            </div>
                    </div>
                </li>
            </ul>
        </li>
        <li><a style="font-family: Poppins" style="font-family: Poppins" href="/sekolah">SeCara</a>
        <li><a style="font-family: Poppins" href="index.html">Tentang Semud</a></li>
        <li><a style="font-family: Poppins" href="#">Bantuan</a>
        </li>
    </ul>
</nav>
</div>
</div>

</div>
</div>
</header>

@yield('isi')

<footer id="footer">
   
                        <div class="copyright-content">
                            <div class="container">
                                <div class="copyright-text text-center">&copy; 2020 SEMUD - SEKOLAH MUDAH.
                                    All Rights Reserved.</div>
                                </div>
                            </div>
</footer>



<a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/functions.js')}}"></script>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('plugins/popper.min.js')}}"></script>
@yield('script')
</body>
</html>