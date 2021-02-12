@extends('index')
@section('isi')

<style>
       .overflow-auto {
        overflow-y: scroll;
         overflow-x: hidden;
       }
       .card{
              height: 50%;
              width: 70%
              text-align: center;
       }
       </style>
<section id="page-content" class="sidebar-left" style="background:linear-gradient(to right, rgba(38, 166, 157, 0.2) 0%, rgba(255, 255, 255, 0) 100%)">
        <div class="">
              <div class="row">
                     <!-- kanan -->
                     
                <div class="sidebar col-lg-3 d-lg-block d-none " style="border: 2px;background:white">
                    <br>
                     <div class="col-sm">
                            <a href="/soal" class="nav-link">
                                   <p>
                                   <i class="fa fa-address-book" aria-hidden="true" style="color: #FF4546;"></i>
                                     Dashboard
                                   </p>
                            </a>
                    </div>
                    <br>
                    <div class="col-sm">
                     <a href="/latihan" class="nav-link">
                            <p>
                            <i class="fa fa-address-card" aria-hidden="true"></i>
                              Latihan
                            </p>
                     </a>
                    </div>
                    <br>
                    <div class="col-sm">
                     <a href="/tryout" class="nav-link">
                            <p>
                            <i class="fa fa-star" aria-hidden="true"></i>
                              Try Out
                            </p>
                     </a>           
                    </div>
                    <br>
                    <div class="col-sm">
                     <a href="#" class="nav-link">
                            <p>
                            <i class="fa fa-tags" aria-hidden="true"></i>
                              Peringkat
                            </p>
                     </a>
                    </div>
                    
        </div>

        <!-- tengah -->
        <div class="content col-lg-6" style="border: 2px; ">
                <div class="row" style="padding:15px">
                        <div class="content col-lg-12 " style="padding-top:20px; padding-bottom:20px">
                                <div class="d-xl-none " style="background-color: white;opacity: 1;
                                position: absolute;
                                top: ;
                                left: 0px;
                                overflow: hidden;
                                padding:5%;
                               "> 
                                <p style="font-size:18px; color:black">Halo, 
                                        <?php
                                        if (Auth::check()) {
                                          echo Auth::user()->name;
                                        }
                                        else {
                                         header('Location: /home');
                                         exit;
                                        }
                                        ?> 
                                  </p>  
                                 <p style="font-size:12px">
                                        Selamat datang di <a href="#" style="color:red">dSociety Powered by Semud.id</a> 
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mattis massa sed ornare facilisi ut id arcu. 
                                        Facilisis ornare mi magna nulla a. Nibh vel, volutpat arcu nisl habitant tempus, orci. 
                                        Lacus morbi risus velit vel arcu ac malesuada quam. Arcu at viverra lorem vestibulum, lobortis magna et diam. 
                                        Risus ornare cras lacinia tempor.
                                 </p>
                                 <button type="button" style="background:rgba(255,69,70,0.800000011920929); border:none" class="btn btn-danger">Baca selengkapnya</button>
                                </div>   
                        <div class="d-none d-xl-block" style="width:550px;background-color: white;opacity: 1;
                           position: absolute;
                           top: ;
                           left: 0px;
                           overflow: hidden;
                           padding:5%"> 
                           <p style="font-size:18px; color:black">Halo, 
                                   <?php
                                   if (Auth::check()) {
                                     echo Auth::user()->name;
                                   }
                                   else {
                                    header('Location: /home');
                                    exit;
                                   }
                                   ?> 
                             </p>  
                            <p style="font-size:12px">
                                   Selamat datang di <a href="#" style="color:red">dSociety Powered by Semud.id</a> 
                                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mattis massa sed ornare facilisi ut id arcu. 
                                   Facilisis ornare mi magna nulla a. Nibh vel, volutpat arcu nisl habitant tempus, orci. 
                                   Lacus morbi risus velit vel arcu ac malesuada quam. Arcu at viverra lorem vestibulum, lobortis magna et diam. 
                                   Risus ornare cras lacinia tempor.
                            </p>
                            <button type="button" style="background:rgba(255,69,70,0.800000011920929); border:none" class="btn btn-danger">Baca selengkapnya</button>
                           </div>
                           <div  style="
                          
                           opacity: 1;
                           position: absolute;
                          top:-5px;
                           left: 520px;
                           overflow: hidden;">
                           <img class="d-none d-xl-block" src="{{asset('plugins/orang.png')}}" style=" width: 124px;
                           height: 229px;" alt="icon orang">
                           </div>
                        </div>
                </div>
                <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>
                     <div class="row" style="padding:15px">
                            <p style="margin-bottom: 2px">Aktivitas</p>
                            <div class="content col-lg-12" style="background:rgb(255, 255, 255); padding:15px">
                                  <div class="row" style="padding-left:10px">
                                          <div class="col-lg-3 col-6">
                                                 <div class="row">
                                                        <div class="col-md-4 col-sm-4" style="border:2px solid rgba(255,69,70,0.800000011920929);">
                                                               <center><img class="d-md-block d-none" src="{{asset('plugins/icon-people.png')}}" style="width:100%;padding-top:50%"></center>
                                                               <center><img class="d-md-none d-block" src="{{asset('plugins/icon-people.png')}}" style="width:100%;padding-top:0%"></center>
                                                        </div>
                                                        <div class="col-md-8 col-sm-8">
                                                               <h5 style="color:rgba(255,69,70,0.800000011920929);">Kehadiran</h5>
                                                                18
                                                        </div>
                                                 </div>
                                                 
                                         </div>
                                         <div class="col-lg-3 col-6">
                                          <div class="row">
                                                 <div class="col-md-4 col-sm-4 "  style="border:2px solid rgba(25,118,210,1);">
                                                        <img class="d-md-block d-none" src="{{asset('plugins/icon-note.png')}}" style="width:100%;padding-top:50%">
                                                        <img class="d-md-none d-block" src="{{asset('plugins/icon-note.png')}}" style="width:100%;padding-top:0%">
                                                 </div>
                                                 <div class="col-md-8 col-sm-8">
                                                        <h5 style="color:rgba(25,118,210,1)"> Latihan</h5>
                                                        3
                                                 </div>
                                          </div>        
                                         </div>
                                         <div class="col-lg-3 col-6">
                                                 <div class="row">
                                                        <div class="col-md-4 col-sm-4 "  style="border:2px solid rgba(76,175,80,0.800000011920929);">
                                                               <img class="d-md-block d-none" src="{{asset('plugins/icon-book.png')}}" style="width:100%;padding-top:50%">
                                                               <img class="d-md-none d-block" src="{{asset('plugins/icon-book.png')}}" style="width:100%;padding-top:0%">
                                                        </div>
                                                        <div class="col-md-8 col-sm-8">
                                                               <h5 style="color:rgba(76,175,80,0.800000011920929)"> Try Out</h5>
                                                               2
                                                        </div>
                                                 </div>               
                                         </div>
                                         <div class="col-lg-3 col-6">
                                                 <div class="row">
                                                        <div class="col-md-4 col-sm-4 "  style="border:2px solid rgba(255,191,0,1);padding-bottom:15px">
                                                               <img class="d-md-block d-none" src="{{asset('plugins/icon-circle.png')}}"  style="width:100%;padding-top:50%">
                                                               <img class="d-md-none d-block" src="{{asset('plugins/icon-circle.png')}}"  style="width:100%;padding-top:0%">
                                                        </div>
                                                        <div class="col-md-8 col-sm-8 ">
                                                               <h5 style="color: rgba(255,191,0,1)"> Peringkat</h5>
                                                               1
                                                        </div>
                                                 </div>                                      
                                         </div>
                                   </div>
                            </div>
                     </div>

                      <!--bawah -->

              <div class="row" style="padding: 15px">
                     <div class=" col-lg-6" style="background:white; overflow-x: hidden;
                     overflow-y: scroll;">
                           
                                                 <div class="" style=" height: 300px">
                                                        <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="p-progress-bar-container title-up small extra-small">
                                                                        <div class="p-progress-bar progress-animated" data-percent="100" data-delay="100" data-type="%" style="width: 100%;">
                                                                            <div class="progress-title">Matematika</div>
                                                                            <span class="progress-type">%</span>
                                                                            <span class="progress-number animated fadeIn">100</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="p-progress-bar-container title-up small extra-small">
                                                                        <div class="p-progress-bar progress-animated" data-percent="94" data-delay="200" data-type="%" style="width: 94%;">
                                                                            <div class="progress-title">Fisika</div>
                                                                            <span class="progress-type">%</span><span class="progress-number animated fadeIn">94</span>\
                                                                        </div>
                                                                    </div>
                                                                    <div class="p-progress-bar-container title-up small extra-small">
                                                                            <div class="p-progress-bar progress-animated" data-percent="94" data-delay="200" data-type="%" style="width: 94%;">
                                                                                <div class="progress-title">Fisika</div>
                                                                                <span class="progress-type">%</span><span class="progress-number animated fadeIn">94</span>\
                                                                            </div>
                                                                    </div>
                                                                    <div class="p-progress-bar-container title-up small extra-small">
                                                                            <div class="p-progress-bar progress-animated" data-percent="100" data-delay="100" data-type="%" style="width: 100%;">
                                                                                <div class="progress-title">Matematika</div>
                                                                                <span class="progress-type">%</span>
                                                                                <span class="progress-number animated fadeIn">100</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="p-progress-bar-container title-up small extra-small">
                                                                            <div class="p-progress-bar progress-animated" data-percent="94" data-delay="200" data-type="%" style="width: 94%;">
                                                                                <div class="progress-title">Fisika</div>
                                                                                <span class="progress-type">%</span><span class="progress-number animated fadeIn">94</span>\
                                                                            </div>
                                                                        </div>
                                                                        <div class="p-progress-bar-container title-up small extra-small">
                                                                                <div class="p-progress-bar progress-animated" data-percent="94" data-delay="200" data-type="%" style="width: 94%;">
                                                                                    <div class="progress-title">Fisika</div>
                                                                                    <span class="progress-type">%</span><span class="progress-number animated fadeIn">94</span>\
                                                                                </div>
                                                                        </div>
                                                                        <div class="p-progress-bar-container title-up small extra-small">
                                                                                <div class="p-progress-bar progress-animated" data-percent="100" data-delay="100" data-type="%" style="width: 100%;">
                                                                                    <div class="progress-title">Matematika</div>
                                                                                    <span class="progress-type">%</span>
                                                                                    <span class="progress-number animated fadeIn">100</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="p-progress-bar-container title-up small extra-small">
                                                                                <div class="p-progress-bar progress-animated" data-percent="94" data-delay="200" data-type="%" style="width: 94%;">
                                                                                    <div class="progress-title">Fisika</div>
                                                                                    <span class="progress-type">%</span><span class="progress-number animated fadeIn">94</span>\
                                                                                </div>
                                                                            </div>
                                                                            <div class="p-progress-bar-container title-up small extra-small">
                                                                                    <div class="p-progress-bar progress-animated" data-percent="94" data-delay="200" data-type="%" style="width: 94%;">
                                                                                        <div class="progress-title">Fisika</div>
                                                                                        <span class="progress-type">%</span><span class="progress-number animated fadeIn">94</span>\
                                                                                    </div>
                                                                            </div>
                                                                </div>
                                                        </div>
                                                 </div>
                                  
                     </div>
                     <div class="col-lg-6"  style="background:white; overflow-x: hidden;
                     overflow-y: scroll;height:300px;">
                                        <br>
                                        <button type="button" class="btn"  style="background:rgba(255,69,70,0.800000011920929);width:95%">
                                        Matematika <span class="badge badge-light">Senin/31-12-2021</span>
                                        </button>
                                        <button type="button" class="btn" style="background:rgba(255,69,70,0.800000011920929);width:95%" >
                                            Matematika <span class="badge badge-light">Senin/31-12-2021</span>
                                        </button>
                                        <button type="button" class="btn" style="background:rgba(255,69,70,0.800000011920929);width:95%" >
                                            Matematika <span class="badge badge-light">Senin/31-12-2021</span>
                                        </button>
                                        <button type="button" class="btn" style="background:rgba(255,69,70,0.800000011920929);width:95%" >
                                            Matematika <span class="badge badge-light">Senin/31-12-2021</span>
                                        </button>
                    </div>
              </div>
                   
       </div>
        
        <!-- kiri -->
        <div class="sidebar col-lg-3  d-lg-block d-none" style="border: 2px; ">
                <div style="width: 324px;
                height: 383px;
                background: rgba(75,75,75,1);"></div>
                <br>
                <div style="width: 324px;
                height: 383px;
                background: rgba(75,75,75,1);"></div>
        </div>
        
        </div>
</section>
        
@endsection