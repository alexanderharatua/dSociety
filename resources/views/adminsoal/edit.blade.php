@extends('layouts.adminmaster')

@section('content')

        <form action="/admin/soal/{{$soals->id}}" method="POST">
            @csrf
            @method('PUT')
                <div class="form-group">
                <label for="name">No:</label>
                <input type="text" class="form-control" placeholder="Input No" name="no" id="no" value="{{$soals->no}}">
                </div>
                <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" class="form-control" placeholder="Waktu" name="waktu" id="waktu" value="{{$soals->waktu}}">
                </div>
                <div class="form-group">
                    <label for="price">Kegiatan:</label>
                <input type="text" class="form-control" placeholder="Kegiatan" name="kegiatan" id="kegiatan" value="{{$soals->kegiatan}}">
                    </div>
                <button type="submit" class="btn btn-default">Update</button>
            </form>

@endsection