@extends('index')
@section('isi')
<section id="page-content" class="sidebar-both">
        <div class="container">
                <div class="row">
                
                        <div class="sidebar col-lg-3">
                        
                        
                                <div class="widget clearfix widget-categories">
                                        <h4 class="widget-title">Mata Pelajaran :</h4>
                                        <ul class="list list-arrow-icons">
                                                <li> <a class="btn btn-outline" style="color:black"><i class="fa fa-download"></i> Kimia</a> </li>
                                                <li> <a class="btn btn-outline" style="color:black"><i class="fa fa-download"></i> Fisika</a> </li>
                                                <li> <a class="btn btn-outline" style="color:black"><i class="fa fa-download"></i> Matematika IPA</a> </li>
                                                <li> <a class="btn btn-outline" style="color:black"><i class="fa fa-download"></i> Matematika Dasar</a> </li>
                                                <li> <a class="btn btn-outline" style="color:black"><i class="fa fa-download"></i> Biologi</a> </li>
                                                <li> <a class="btn btn-outline" style="color:black"><i class="fa fa-download"></i> Bahasa Indonesia</a> </li>
                                                <li> <a class="btn btn-outline" style="color:black"><i class="fa fa-download"></i> Bahasa Inggris</a> </li>
                                                <li> <a class="btn btn-outline" style="color:black"><i class="fa fa-download"></i> (TPA) Test Potensi Akademik</a> </li>
                                        </ul>
                                </div>
                                
                        
                        </div>
                        
                        
                        <div class="content col-lg-6">
                        
                                <div id="blog" class="single-post">
                        
                                        <div class="post-item">
                                                <div class="post-item-wrap">
                
                                                        <div class="post-item-description">
                                                                <p>Krenasi terjadi bila sel berada di lingkungan atau larutan…</p>
                                                        </div>
                                                        <div class="post-navigation">
                                                                <a href="blog-single-slider.html" class="post-prev">
                                                                        <div class="post-prev-title"><span>Soal Sebelumnya</span>
                                                                        Lanjut
                                                                        </div>
                                                                </a>
                                                                <a href="blog-masonry-3.html" class="post-all">
                                                                        <i class="icon-send"> </i>
                                                               </a>
                                                                <a href="blog-single-video.html" class="post-next">
                                                                        <div class="post-next-title"><span>Soal berikutnya</span>
                                                                                Kembali
                                                                        </div>
                                                                </a>
                                                        </div>
                        
                                                                        
                                                </div>
                                        </div>
                                </div>
                        </div>
                        
                        <div class="sidebar col-lg-3">
                                        <table class="table table-bordered">
                                                        <tbody>
                                                                <?php

                                                                for ($i = 1 ; $i<=100 ;++$i)
                                                                {
                                                                        ?>
                                                        <tr>
                                                                
                                                        <td>
                                                                        <center><?php echo $i++ ?></center>
                                                        </td>
                                                        <td><center><?php echo $i++ ?></center></td>
                                                        <td><center><?php echo $i++ ?></center></td>
                                                        <td><center><?php echo $i ?></center></td>
                                                                
                                                        </tr>
                                                        <?php
                                                                }
                                                        ?>
                                                        </tbody>
                                                        </table>
                        </div>
                </div>
                        
        </div>
        </section>
@endsection