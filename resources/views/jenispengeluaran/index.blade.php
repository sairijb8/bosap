@extends('adminlte::page')
@section('plugins.Datatables', true)
@section('title', 'Dashboard')

@section('content_header')
    <h1>Daftar BKU</h1>
@stop

@section('content')
<div class="row">
    <a href="" class="btn btn-primary">Tambah Data</a>
</div>
<div class="row">
    <div class="col-12">
    <p>Daftar BKU</p>

   <table class="table table-bordered data-table">
       <thead>
           <tr>
               <th width="50px">No</th>
               <th width="200px">Kode Jenis Pengeluaran</th>
               <th width="400px">Jenis Pengeluaran</th>
               <th width="50px">Pajak</th>
               <th width="50px">Action</th>
           </tr>
       </thead>
       <tbody>
       </tbody>
   </table>

</div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@stop

@section('js')
<script type="text/javascript">

$(function () {
var table = $('.data-table').DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{ route('jenispengeluaran.index') }}",
      columns: [
          {data: 'DT_RowIndex', name: 'DT_RowIndex'},
          {data: 'kode', name: 'kode'},
          {data: 'jenis', name: 'jenis'},
          {data: 'pajak', name: 'pajak'},
          {data: 'action', name: 'action', orderable: false, searchable: false},
      ]
  });
});

</script>
@stop
