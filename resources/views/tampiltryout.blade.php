@extends('index')
@section('isi')

    <style>
     
        .p1 a{
        width: 40px;
        height: 40px;
        line-height: 40px;
        padding: 0;
        text-align: center;
        }

        .p1 a.is-active{
        background-color: #79D70F;
        border-radius: 100%;
        color: #fff;
        }
    </style>

    
    <br>
    <!-- halaman -->
    <div class="row pricing-table" style="margin-top:50px;">
                <div class="col-lg-8" >
                        <div class="plan featured" style="padding:15px">
                            <br>
                                <div class="container">
                                        <div>
                                            <button type="button" class="btn btn-light btn-lg" style=
                                            "background: rgb(216, 216, 216); border-radius: 40px;
                                            border:none;">Try Out - 5</button>
                                        </div>
                                    </div>
                                <div class="plan-header">
                                    <h4>Gerakan suatu benda dimana setiap titik pada benda tersebut mempunyai jarak yang tetap terhadap suatu sumbu tertentu, merupakan pengertian dari?</h4>
                                    
                                </div>
                                <div class="row">
                               
                                    <div class="col-6">
                                        <a href="#" class="btn" style="width:100%">A. Gerak Translasi </a>
                                    </div>
                                    <div class="col-6">
                                            <a href="#" class="btn" style="width:100%">B. Gerak Rotasi</a>
                                        </div>
                                       
                                    <div class="col-6">
                                            <br>
                                            <a href="#" class="btn" style="width:100%">C. Perpindahan </a>
                                        </div>
                                    <div class="col-6">
                                            <br>
                                            <a href="#" class="btn" style="width:100%">D. Kelajuan</a>
                                        </div>
                                        <div class="col-6">
                                                <br>
                                                <a class="btn " style="margin-left: 89%"> <i class="icon-chevron-left"></i></a>
                                                
                                            </div>
                                            <div class="col-6">
                                                    <br>
                                                    <a class="btn " style="margin-left: o%"> <i class="icon-chevron-right"></i></a>
                                                </div>
                                    </div>
                                    <br>
                        </div>
                </div>
    <!-- soal -->
            <div class="col-lg-4">
                    <div class="plan featured">
                            <div class="plan-header">
                                    <div>
                                            <button type="button" class="btn btn-light btn-lg" style=
                                            "background: rgb(216, 216, 216); border-radius: 40px;
                                            border:none;">01.54</button>
                                        </div>
                                        <br>
                                        <div style="overflow-y: auto;overflow-x: hidden; height:250px;border-top:2px solid; border-bottom   :2px solid;padding:20px">
                                            <div class="row">
                                        <?php 
                                            for ($i=1;$i<=180;$i++)
                                            {
                                                echo "
                                                <div class='col-4'>
                                                    <a class='btn btn-light' style='width:100%'><font style='font-size: 20%x'>$i</font></a>
                                                </div>
                                                ";
                                            }

                                        ?>
                                            </div>
                                            </div>
                                            <br>
                                            <button type="button" class="btn btn-rounded btn-reveal btn-dark"><span style="color:white">Submit</span><i class="icon-chevron-right"></i></button>
                                       
                           
                            
                            </div>
                            </div>
                           
                            </div>
                            
                            {{-- <br><br>
                            <?php 
                                // for ($i=1;$i<=180;$i++)
                                // {
                                //     if($i<10)
                                //     {
                                //         echo " <button class='btn btn-xs' data-width='175' href='#' style='width: 38px;padding top:15px'> 
                                //         0$i
                                //         </button>";
                                //     }
                                //     else
                                //     {
                                //     echo " <button class='btn btn-xs' data-width='175' href='#' style='width: 38px;padding top:15px'> 
                                //         $i
                                //         </button>";
                                //     }
                                    
                                // }

                            ?>
                           <br>
                           <br>
                           <center>
                           <button type="button" class="btn btn-light btn-creative btn-icon-holder btn-shadow btn-light-hover" style="width:90%;background: rgba(255,69,70,0.800000011920929);">
                               Submit<i class="icon-chevron-right"></i></button>
                           </center>
                           <br><br> --}}
            </div>
        </div>
@endsection