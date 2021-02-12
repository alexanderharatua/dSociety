@extends('layouts.adminmaster')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard Admin') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/admin/pengumuman/announcements"> 
                        <button class="btn btn-info btn-sm"><i class="fas fa-eye"></i> Pengumuman</button>
                      </a>

                      <a href="/admin/unduh/downloads"> 
                        <button class="btn btn-success btn-sm"><i class="fas fa-eye"></i> Download</button>
                      </a>

                      <a href="/admin/berita/news"> 
                        <button class="btn btn-success btn-sm"><i class="fas fa-eye"></i> Beritaaa</button>
                      </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
