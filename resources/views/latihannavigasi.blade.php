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
<section id="page-content" class="sidebar-left" style="background:rgb(197, 245, 252);">
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
                    <div class="col-sm" style="margin-top: 300px">
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

        <!-- tengah -->
        <div class="content col-lg-6" style="border: 2px;">
                <div class="row" style="padding:15px; overflow-x: hidden;
                overflow-y: scroll; height:750px;">
                    <div class="container">
                        <div class="card-group">
                            <div class="card text-center" style="margin: 5px">
                                <div class="card-body">
                                    <div> <a href="#" class="btn btn-danger" style="width:100%">Latihan-1</a></div>
                                  <p class="card-text">
                                        Soal 100 <br> Waktu 120 Menit
                                  </p>
                                  <a href="#" class="btn btn-danger">Mulai</a>
                                </div>
                              </div>
                              <div class="card text-center"  style="margin: 5px">
                                <div class="card-body">
                                    <div> <a href="#" class="btn btn-danger" style="width:100%">Latihan-2</a></div>
                                  <p class="card-text">
                                        Soal 100 <br> Waktu 120 Menit
                                  </p>
                                  <a href="#" class="btn btn-danger">Mulai</a>
                                </div>
                              </div>
                              <div class="card text-center"  style="margin: 5px">
                                <div class="card-body">
                                    <div> <a href="#" class="btn btn-danger" style="width:100%">Latihan 1</a></div>
                                  <p class="card-text">
                                        Soal 100 <br> Waktu 120 Menit
                                  </p>
                                  <a href="#" class="btn btn-danger">Mulai</a>
                                </div>
                              </div>
                              <div class="card text-center"  style="margin: 5px">
                                <div class="card-body">
                                    <div> <a href="#" class="btn btn-danger" style="width:100%">Latihan 1</a></div>
                                  <p class="card-text">
                                        Soal 100 <br> Waktu 120 Menit
                                  </p>
                                  <a href="#" class="btn btn-danger">Mulai</a>
                                </div>
                              </div>
                              <br>
                        </div>
                        <!--spasi antar card -->
                        <div class="card-group">
                            <div class="card text-center"  style="margin: 5px">
                                <div class="card-body">
                                    <div> <a href="#" class="btn btn-danger" style="width:100%">Latihan 1</a></div>
                                  <p class="card-text">
                                        Soal 100 <br> Waktu 120 Menit
                                  </p>
                                  <a href="#" class="btn btn-danger">Mulai</a>
                                </div>
                              </div>
                              <div class="card text-center"  style="margin: 5px">
                                <div class="card-body">
                                    <div> <a href="#" class="btn btn-danger" style="width:100%">Latihan 1</a></div>
                                  <p class="card-text">
                                        Soal 100 <br> Waktu 120 Menit
                                  </p>
                                  <a href="#" class="btn btn-danger">Mulai</a>
                                </div>
                              </div>
                              <div class="card text-center"  style="margin: 5px">
                                <div class="card-body">
                                    <div> <a href="#" class="btn btn-danger" style="width:100%">Latihan 1</a></div>
                                  <p class="card-text">
                                        Soal 100 <br> Waktu 120 Menit
                                  </p>
                                  <a href="#" class="btn btn-danger">Mulai</a>
                                </div>
                              </div>
                              <div class="card text-center"  style="margin: 5px">
                                <div class="card-body">
                                    <div> <a href="#" class="btn btn-danger" style="width:100%">Latihan 1</a></div>
                                  <p class="card-text">
                                        Soal 100 <br> Waktu 120 Menit
                                  </p>
                                  <a href="#" class="btn btn-danger">Mulai</a>
                                </div>
                              </div>
                              <br>
                        </div>
                        <!--spasi antar card -->
                        <div class="card-group">
                            <div class="card text-center"  style="margin: 5px">
                                <div class="card-body">
                                    <div> <a href="#" class="btn btn-danger" style="width:100%">Latihan 1</a></div>
                                  <p class="card-text">
                                        Soal 100 <br> Waktu 120 Menit
                                  </p>
                                  <a href="#" class="btn btn-danger">Mulai</a>
                                </div>
                              </div>
                              <div class="card text-center"  style="margin: 5px">
                                <div class="card-body">
                                    <div> <a href="#" class="btn btn-danger" style="width:100%">Latihan 1</a></div>
                                  <p class="card-text">
                                        Soal 100 <br> Waktu 120 Menit
                                  </p>
                                  <a href="#" class="btn btn-danger">Mulai</a>
                                </div>
                              </div>
                              <div class="card text-center"  style="margin: 5px">
                                <div class="card-body">
                                    <div> <a href="#" class="btn btn-danger" style="width:100%">Latihan 1</a></div>
                                  <p class="card-text">
                                        Soal 100 <br> Waktu 120 Menit
                                  </p>
                                  <a href="#" class="btn btn-danger">Mulai</a>
                                </div>
                              </div>
                              <div class="card text-center"  style="margin: 5px">
                                <div class="card-body">
                                    <div> <a href="#" class="btn btn-danger" style="width:100%">Latihan 1</a></div>
                                  <p class="card-text">
                                        Soal 100 <br> Waktu 120 Menit
                                  </p>
                                  <a href="#" class="btn btn-danger">Mulai</a>
                                </div>
                              </div>
                              <br>
                        </div>

                        <!--spasi antar card -->
                        <div class="card-group">
                            <div class="card text-center"  style="margin: 5px">
                                <div class="card-body">
                                    <div> <a href="#" class="btn btn-danger" style="width:100%">Latihan 1</a></div>
                                  <p class="card-text">
                                        Soal 100 <br> Waktu 120 Menit
                                  </p>
                                  <a href="#" class="btn btn-danger">Mulai</a>
                                </div>
                              </div>
                              <div class="card text-center"  style="margin: 5px">
                                <div class="card-body">
                                    <div> <a href="#" class="btn btn-danger" style="width:100%">Latihan 1</a></div>
                                  <p class="card-text">
                                        Soal 100 <br> Waktu 120 Menit
                                  </p>
                                  <a href="#" class="btn btn-danger">Mulai</a>
                                </div>
                              </div>
                              <div class="card text-center"  style="margin: 5px">
                                <div class="card-body">
                                    <div> <a href="#" class="btn btn-danger" style="width:100%">Latihan 1</a></div>
                                  <p class="card-text">
                                        Soal 100 <br> Waktu 120 Menit
                                  </p>
                                  <a href="#" class="btn btn-danger">Mulai</a>
                                </div>
                              </div>
                              <div class="card text-center"  style="margin: 5px">
                                <div class="card-body">
                                    <div> <a href="#" class="btn btn-danger" style="width:100%">Latihan 1</a></div>
                                  <p class="card-text">
                                        Soal 100 <br> Waktu 120 Menit
                                  </p>
                                  <a href="#" class="btn btn-danger">Mulai</a>
                                </div>
                              </div>
                              <br>
                        </div>

                                                <!--spasi antar card -->
                        <div class="card-group">
                            <div class="card text-center"  style="margin: 5px">
                                <div class="card-body">
                                    <div> <a href="#" class="btn btn-danger" style="width:100%">Latihan 1</a></div>
                                  <p class="card-text">
                                        Soal 100 <br> Waktu 120 Menit
                                  </p>
                                  <a href="#" class="btn btn-danger">Mulai</a>
                                </div>
                              </div>
                              <div class="card text-center"  style="margin: 5px">
                                <div class="card-body">
                                    <div> <a href="#" class="btn btn-danger" style="width:100%">Latihan 1</a></div>
                                  <p class="card-text">
                                        Soal 100 <br> Waktu 120 Menit
                                  </p>
                                  <a href="#" class="btn btn-danger">Mulai</a>
                                </div>
                              </div>
                              <div class="card text-center"  style="margin: 5px">
                                <div class="card-body">
                                    <div> <a href="#" class="btn btn-danger" style="width:100%">Latihan 1</a></div>
                                  <p class="card-text">
                                        Soal 100 <br> Waktu 120 Menit
                                  </p>
                                  <a href="#" class="btn btn-danger">Mulai</a>
                                </div>
                              </div>
                              <div class="card text-center"  style="margin: 5px">
                                <div class="card-body">
                                    <div> <a href="#" class="btn btn-danger" style="width:100%">Latihan 1</a></div>
                                  <p class="card-text">
                                        Soal 100 <br> Waktu 120 Menit
                                  </p>
                                  <a href="#" class="btn btn-danger">Mulai</a>
                                </div>
                              </div>
                              <br>
                        </div>

                    </div>
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