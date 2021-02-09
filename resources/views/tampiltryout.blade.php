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

    <div class="container">
        <div>
            <button type="button" class="btn btn-light btn-lg" style=
            "background: rgb(216, 216, 216); border-radius: 40px;
            border:none;">Try Out - 5</button>
        </div>
    </div>
    <br>
    <!-- halaman -->
    <div>
        <div class="container".
        style="border: none; background: rgb(216, 216, 216); border-radius: 75px;
        width: 1128px;
        height: 118px;
        margin-left: 156px;
        top: 5px;">
        
        <div class="pagination p1" style="border: none;
                left: 22.64%;
                right: 75.9%;
                margin-top: 5px;
                bottom: 77.89%;">
                <br><br>
                <ul class="pagination justify-content-left" style="margin-top: 38px">
                    <a href="#"><li><</li></a>
                    <a class="is-active" href="#"><li>10 </li></a>
                    <a  class="is-active" href="#"><li>11 </li></a>
                    <a  class="is-active" href="#"><li>12 </li></a>
                    <a  class="is-active" href="#"><li>13 </li></a>
                    <a  class="is-active" href="#"><li>14 </li></a>
                    <a href="#"><li>15 </li></a>
                    <a href="#"><li>16 </li></a>
                    <a href="#"><li>17 </li></a>
                    <a href="#"><li>18 </li></a>
                    <a href="#"><li>></li></a>
                </ul>
                <div>
                    <h5 style="margin-left: 290px; margin-top:10px">Waktu</h5>
                    <h2 style="margin-top: 10px; margin-left: 250px;">17 : 09 : 19</h2>
                </div>
                
        </div> 
       
    </div>
    </div>

    <!-- soal -->
    <br>
    <div class="container" style="border: none; 
            width: 1128px;
            height: 372px;
            margin-left: 156px;
            top: 55px;
            background: rgb(216, 216, 216);
            border-radius: 75px;">

            
    </div>

@endsection