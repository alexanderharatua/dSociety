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
                     
                <div class="sidebar col-lg-3" style="border: 2px;background:white">
                    <br>
                     <div class="col-sm">
                            <a href="/soal" class="nav-link">
                                   <p>
                                   <i class="fa fa-address-book" aria-hidden="true"></i>
                                     Dashboard
                                   </p>
                            </a>
                    </div>
                    <br>
                    <div class="col-sm">
                     <a href="/latihan" class="nav-link">
                        <p>
                          <i class="fa fa-address-card" aria-hidden="true" style="color: #FF4546;"></i>
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
                    <br>
                  
        </div>

        <!-- tengah -->
        <div class="content col-lg-6" style="border: 2px;">
                <div class="row">
                    <div class="container">
                      <br>
                        <div class="card-group">
                            <div class="card text-center" style="margin: 5px; border:2px solid black;  border-radius: 15px">
                                <div class="card-body">
                                    <div> <a href="#" class="btn " style="width:100%;font-size:9px;background: rgba(255,69,70,0.800000011920929)">Latihan 1</a></div>
                                  <p class="card-text">
                                        Soal 100 <br> Waktu 120 Menit
                                  </p>
                                  <a href="#" class="btn" style="background: rgba(255,69,70,0.800000011920929);">Mulai</a>
                                </div>
                              </div>
                              <div class="card text-center"  style="margin: 5px;  border:2px solid black; border-radius: 15px">
                                <div class="card-body">
                                    <div> <a href="#" class="btn " style="width:100%;font-size:9px;background: rgba(255,69,70,0.800000011920929)">Latihan 2</a></div>
                                  <p class="card-text">
                                        Soal 100 <br> Waktu 120 Menit
                                  </p>
                                  <a href="#" class="btn " style="background: rgba(255,69,70,0.800000011920929);">Mulai</a>
                                </div>
                              </div>
                              <div class="card text-center"  style="margin: 5px;  border:2px solid black; border-radius: 15px">
                                <div class="card-body">
                                    <div> <a href="#" class="btn " style="width:100%;font-size:9px;background: rgba(255,69,70,0.800000011920929)">Latihan 3</a></div>
                                  <p class="card-text">
                                        Soal 100 <br> Waktu 120 Menit
                                  </p>
                                  <a href="#" class="btn " style="background: rgba(255,69,70,0.800000011920929);">Mulai</a>
                                </div>
                              </div>
                              <div class="card text-center"  style="margin: 5px;  border:2px solid black; border-radius: 15px">
                                <div class="card-body">
                                    <div> <a href="#" class="btn " style="width:100%;font-size:9px;background: rgba(255,69,70,0.800000011920929)">Latihan 1</a></div>
                                  <p class="card-text">
                                        Soal 100 <br> Waktu 120 Menit
                                  </p>
                                  <a href="#" class="btn " style="background: rgba(255,69,70,0.800000011920929);">Mulai</a>
                                </div>
                              </div>
                              <br>
                        </div>
                        <!--spasi antar card -->
                        <div class="card-group">
                            <div class="card text-center"  style="margin: 5px;  border:2px solid black; border-radius: 15px">
                                <div class="card-body">
                                    <div> <a href="#" class="btn " style="width:100%;font-size:9px;background: rgba(255,69,70,0.800000011920929)">Latihan 1</a></div>
                                  <p class="card-text">
                                        Soal 100 <br> Waktu 120 Menit
                                  </p>
                                  <a href="#" class="btn " style="background: rgba(255,69,70,0.800000011920929);">Mulai</a>
                                </div>
                              </div>
                              <div class="card text-center"  style="margin: 5px;  border:2px solid black; border-radius: 15px">
                                <div class="card-body">
                                    <div> <a href="#" class="btn " style="width:100%;font-size:9px;background: rgba(255,69,70,0.800000011920929)">Latihan 1</a></div>
                                  <p class="card-text">
                                        Soal 100 <br> Waktu 120 Menit
                                  </p>
                                  <a href="#" class="btn " style="background: rgba(255,69,70,0.800000011920929);">Mulai</a>
                                </div>
                              </div>
                              <div class="card text-center"  style="margin: 5px;  border:2px solid black; border-radius: 15px">
                                <div class="card-body">
                                    <div> <a href="#" class="btn " style="width:100%;font-size:9px;background: rgba(255,69,70,0.800000011920929)">Latihan 1</a></div>
                                  <p class="card-text">
                                        Soal 100 <br> Waktu 120 Menit
                                  </p>
                                  <a href="#" class="btn " style="background: rgba(255,69,70,0.800000011920929);">Mulai</a>
                                </div>
                              </div>
                              <div class="card text-center"  style="margin: 5px;  border:2px solid black; border-radius: 15px">
                                <div class="card-body">
                                    <div> <a href="#" class="btn " style="width:100%;font-size:9px;background: rgba(255,69,70,0.800000011920929)">Latihan 1</a></div>
                                  <p class="card-text">
                                        Soal 100 <br> Waktu 120 Menit
                                  </p>
                                  <a href="#" class="btn " style="background: rgba(255,69,70,0.800000011920929);">Mulai</a>
                                </div>
                              </div>
                              <br>
                        </div>
                        <!--spasi antar card -->
                        <div class="card-group">
                            <div class="card text-center"  style="margin: 5px;  border:2px solid black; border-radius: 15px">
                                <div class="card-body">
                                    <div> <a href="#" class="btn " style="width:100%;font-size:9px;background: rgba(255,69,70,0.800000011920929)">Latihan 1</a></div>
                                  <p class="card-text">
                                        Soal 100 <br> Waktu 120 Menit
                                  </p>
                                  <a href="#" class="btn " style="background: rgba(255,69,70,0.800000011920929);">Mulai</a>
                                </div>
                              </div>
                              <div class="card text-center"  style="margin: 5px;  border:2px solid black; border-radius: 15px">
                                <div class="card-body">
                                    <div> <a href="#" class="btn " style="width:100%;font-size:9px;background: rgba(255,69,70,0.800000011920929)">Latihan 1</a></div>
                                  <p class="card-text">
                                        Soal 100 <br> Waktu 120 Menit
                                  </p>
                                  <a href="#" class="btn " style="background: rgba(255,69,70,0.800000011920929);">Mulai</a>
                                </div>
                              </div>
                              <div class="card text-center"  style="margin: 5px;  border:2px solid black; border-radius: 15px">
                                <div class="card-body">
                                    <div> <a href="#" class="btn " style="width:100%;font-size:9px;background: rgba(255,69,70,0.800000011920929)">Latihan 1</a></div>
                                  <p class="card-text">
                                        Soal 100 <br> Waktu 120 Menit
                                  </p>
                                  <a href="#" class="btn " style="background: rgba(255,69,70,0.800000011920929);">Mulai</a>
                                </div>
                              </div>
                              <div class="card text-center"  style="margin: 5px;  border:2px solid black; border-radius: 15px">
                                <div class="card-body">
                                    <div> <a href="#" class="btn " style="width:100%;font-size:9px;background: rgba(255,69,70,0.800000011920929)">Latihan 1</a></div>
                                  <p class="card-text">
                                        Soal 100 <br> Waktu 120 Menit
                                  </p>
                                  <a href="#" class="btn " style="background: rgba(255,69,70,0.800000011920929);">Mulai</a>
                                </div>
                              </div>
                              <br>
                        </div>

                        
                    </div>
                    
                </div>   
                <div style="padding-left:22%">
                  <br>
                    <ul class="pagination pagination-lg">
                        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item active"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                </div>
       </div>
        
        <!-- kiri -->
        <div class="sidebar col-lg-3" style="border: 2px; ">
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