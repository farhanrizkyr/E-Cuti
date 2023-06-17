@extends('master.tampilan')
@section('title','Pengajuan Cuti')
@section('page','Halaman Pengsjuan Cuti')
@section('content')

<div class="container-fluid">
@if(Session::get('pesan'))
	<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Berhasil !</strong> {{Session::get('pesan')}}.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@endif

	<br><br>
	<a href="/pegawai/buat-pengajuan-cuti" class="btn btn-primary btn-sm mb-3"><i class="fas fa-plus"></i> Buat Pengajuan Cuti</a>
	<div class="card" style="padding:22px">
		
	<div class="table-responsive">
		<table class="table" id="myTable">
		<thead>
			<tr>
				<th>No</th>
				<th>Judul</th>
				<th>Tanggal Cuti Awal</th>
				<th>Tanggal Cuti Akhir</th>
				<th>Status</th>
				<th>Alasan Cuti</th>
				<th>Tanggapan Staff</th>
				<th>Tanggal Buat</th>
				<th>Aksi</th>
			</tr>
		</thead>

		<tbody>
			<?php $no=1; ?>
			@foreach($datas as $data)
			<tr>
				<th>{{$no++;}}</th>
				<td>{{$data->title}}</td>
				
				<td>{{$data->cuti_awal}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>


	</div>
</div>

@endsection