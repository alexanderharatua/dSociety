@extends('layouts.adminmaster')
@section('content')
<a href="/admin/pengumuman/announcements/create" class="btn btn-primary mb-2">Tambahkan Pengumuman Baru</a>
<table id="example1" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Waktu</th>
        <th>Kegiatan</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        {{-- @foreach ($announcements as $announcement) --}}
            <tr>
                <td>Loading...</td>
                <td>Loading...</td>
                <td>Loading...</td>
                <td>Loading...</td>
             </tr>
    </tbody>
  </table>
  
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables -->
<script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script>
   var table = $("#example1").DataTable({

        pageLength: 25,
        processing: true,
        serverSide: true,
        ajax: "/admin/pengumuman/annc",
        columns: [
            {"data":"no"},
            {"data":"waktu"},
            {"data":"kegiatan"},
            {
                            "data": 'action',
                            "name": 'action'
                          }
       ],
    });

</script>
@endsection