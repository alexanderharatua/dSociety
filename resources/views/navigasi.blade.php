@extends('index');
@section('isi');

<style>
       .overflow-auto {
         width: 250px;
         height: 100px;
         overflow: auto;
       }

       .card-block {
              height: 40px;
              width: 260px;
              background-color: rgb(235, 80, 80);
              border: none;
              background-position: center;
       }
       </style>
<section id="page-content" class="sidebar-left">
        <div class="container">
              <div class="row">
                     <!-- kanan -->
                     <div class="sidebar col-lg-3" style="border: 2px solid black; background:rgb(197, 245, 252);">
                            <div style="width: 224px;
                            height: 283px;
                            background: rgba(75,75,75,1);"></div>
                            <br>
                            <div style="width: 224px;
                            height: 283px;
                            background: rgba(75,75,75,1);"></div>
              </div>


        <!-- tengah -->
        <div class="content col-lg-6" style="border: 2px solid black; background:rgb(219, 242, 255); ">
                <div class="row" style="padding:15px">
                        <div class="content col-lg-12" style="background:rgb(255, 255, 255)">
                            <img src="{{asset('plugins/orang.png')}}" style="width:65px; position:right" alt="icon orang">
                           <p style="font-size:18px; color:black">Halo, 
                                   <?php
                                     echo Auth::user()->name;
                                   ?> 
                             </p>  
                            <p style="font-size:12px">
                                   Selamat datang di <a href="#" style="color:red">dSociety Powered by Semud.id</a> 
                                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mattis massa sed ornare facilisi ut id arcu. 
                                   Facilisis ornare mi magna nulla a. Nibh vel, volutpat arcu nisl habitant tempus, orci. 
                                   Lacus morbi risus velit vel arcu ac malesuada quam. Arcu at viverra lorem vestibulum, lobortis magna et diam. 
                                   Risus ornare cras lacinia tempor.
                            </p>
                            <button type="button" class="btn btn-danger">Baca selengkapnya</button>
                        </div>
                </div>

               <div class="row" style="padding:15px">
                            <div class="content col-lg-12" style="background:rgb(255, 255, 255); padding:15px">
                                   <div class="row">
                                          <div class="col-sm">
                                                 <div class="row">
                                                        <div class="col-md-4">
                                                               <img src="{{asset('plugins/icon-people.png')}}" style="width:45px;">
                                                        </div>
                                                        <div class="col-md-8">
                                                               <h5>Kehadiran</h5>
                                                               <p> 18</p>
                                                        </div>
                                                 </div>
                                                 
                                         </div>
                                         <div class="col-sm">
                                          <div class="row">
                                                 <div class="col-md-4">
                                                        <img src="{{asset('plugins/icon-note.png')}}" style="width:40px">
                                                 </div>
                                                 <div class="col-md-8">
                                                        <h5> Latihan</h5>
                                                        <p> 3</p>
                                                 </div>
                                          </div>        
                                         </div>
                                         <div class="col-sm">
                                                 <div class="row">
                                                        <div class="col-md-4">
                                                               <img src="{{asset('plugins/icon-book.png')}}" style="width:25px">
                                                        </div>
                                                        <div class="col-md-8">
                                                               <h5> Try Out</h5>
                                                               <p> 2</p>
                                                        </div>
                                                 </div>               
                                         </div>
                                         <div class="col-sm">
                                                 <div class="row">
                                                        <div class="col-md-4">
                                                               <img src="{{asset('plugins/icon-circle.png')}}" style="width:25px">
                                                        </div>
                                                        <div class="col-md-8">
                                                               <h5> Rank</h5>
                                                               <p> 1</p>
                                                        </div>
                                                 </div>                                      
                                         </div>
                                   </div>
                            </div>
                      </div>

                      <!--bawah -->

              <div class="row" style="padding: 15px">
                     <div class="content col-lg-12" style="background:rgb(188, 203, 231); padding:15px">
                            <div class="row" style="padding: 10px">
                                   <div class="col-sm">
                                          <div class="row">
                                                 <div class="overflow-auto" style="border: 2px solid black">
                                                       
                                                        <div class="progress">
                                                               <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                                             </div>
                                                             <div class="progress">
                                                               <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                                             </div>
                                                             <div class="progress">
                                                               <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                                             </div>
                                                             <div class="progress">
                                                               <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                                             </div>
                                                             <div class="progress">
                                                               <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                                             </div>
                                                             <div class="progress">
                                                               <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                                             </div>
                                                             <div class="progress">
                                                               <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                                             </div>
                                                             <div class="progress">
                                                               <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                                             </div>
                                                             <div class="progress">
                                                               <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                                             </div>
                                                             <div class="progress">
                                                               <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                                             </div>
                                                             <div class="progress">
                                                               <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                                             </div>      
                                                 </div>
                                          </div>
                                   </div>
                                   <div class="col-sm">
                                          <div class="row">
                                                 <div class="overflow-auto" style="border: 2px solid black">
                                                        <button type="button" class="btn btn-danger btn-block"></button>
                                                        <button type="button" class="btn btn-info btn-block"></button>
                                                        <button type="button" class="btn btn-info btn-block"></button>
                                                 </div>
                                          </div>
                                   </div>
                            </div>
                     </div>
              </div>
                   
       </div>
        
        <!-- kiri -->
        <div class="sidebar col-lg-3" style="border: 2px solid black">
              <br>
                     <div class="col-sm">
                            <a href="#" class="nav-link">
                                   <p>
                                   <i class="fa fa-address-book" aria-hidden="true"></i>
                                     Dashboard
                                   </p>
                            </a>
                    </div>
                    <br>
                    <div class="col-sm">
                     <a href="#" class="nav-link">
                            <p>
                            <i class="fa fa-address-card" aria-hidden="true"></i>
                              Latihan
                            </p>
                     </a>
                    </div>
                    <br>
                    <div class="col-sm">
                     <a href="#" class="nav-link">
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
                    <br>
                    <div class="col-sm" style="margin-top: 200px">
                     <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                this.closest('form').submit();">
                                <p>
                                   <i class="nav-icon fas fa-sign-out-alt" aria-hidden="true"></i>
                                     Logout
                            </p>
                        </a>
                     </form>
                    </div>
        </div>
        </div>
        </section>
        
@endsection