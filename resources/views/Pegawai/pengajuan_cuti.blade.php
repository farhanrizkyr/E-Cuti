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
  			    <td>{{$data->cuti_awal->isoformat('dddd, DD MMMM Y ')}}</td>
  			   <td>{{$data->cuti_akhir->isoformat('dddd, D MMMM Y ')}}</td>
  			    <td>
  			    @if($data->status=='belum_diterima')
  			   <span class="badge badge-warning">Belum DiProsess</span>
  			    @endif

  			     @if($data->status=='tolak')
  			   <span class="badge badge-danger">DiTolak</span>
  			    @endif
  			</td>
  				<td>{!!$data->alasan!!}</td>
  				<td>{{$data->catatan}}</td>
  				<td>{{$data->created_at->isoformat('dddd, D MMMM Y ')}}</td>
  				<td>
  					@if($data->status=='belum_diterima')
  					<form method="post" action="/pegawai-pengajuan-cuti/hapus/{{$data->id}}" class="d-inline">
  						@csrf
  						@method('delete')
  						<button onclick="return confirm('Yakin Ingin Menghapus?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
  					</form>

  					<a href="/pegawai-pengajuan-cuti/edit-cuti/{{$data->id}}" class="btn btn-outline-warning"><i class="fas fa-edit"></i> Edit</a>
  					@endif
  				</td>

			</tr>
			@endforeach
		</tbody>
	</table>
	</div>


	</div>
</div>

@endsection