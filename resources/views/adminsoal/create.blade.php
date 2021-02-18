@extends('layouts.adminmaster')

@section('page_title')
    Sekolah Mudah
@endsection

@section('content')
  
<form action="/admin/soal" method="POST">
    @csrf
        <div class="form-group">
        <label for="name">No:</label>
        <input type="text" class="form-control" placeholder="Masukkan Nomor Pengumuman" name="no" id="no">
        </div>
        <div class="form-group">
        <label for="description">Waktu:</label>
        <input type="date" class="form-control" placeholder="Waktu" name="waktu" id="waktu">
        </div>
        <div class="form-group">
            <label for="price">Kegiatan:</label>
            <input type="text" class="form-control" placeholder="Kegiatan" name="kegiatan" id="kegiatan">
            </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>

@endsection