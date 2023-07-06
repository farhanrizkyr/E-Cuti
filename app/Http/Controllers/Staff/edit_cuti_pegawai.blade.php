@extends('master.tampilan')
@section('title','List Pengajuan Cuti')
@section('page','Halaman List Pengajuan Cuti')
@section('content')

<div class="container-fluid">

	<div class="card" style="padding:22px">
		
	<div class="table-responsive">
		<table class="table" id="myTable">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Pegawai</th>
				<th>Judul</th>
				<th>Tanggal Cuti Awal</th>
				<th>Tanggal Cuti Akhir</th>
				<th>Status</th>
				<th>Alasan Cuti</th>
				<th>Tanggapan Staff</th>
				<th>Tanggal Pengajuan</th>
				<th>Aksi</th>
			</tr>
		</thead>

		<tbody>
			<?php $no=1; ?>
			@foreach($lists as $data)
			<tr>
				<th>{{$no++;}}</th>
				<td>{{$data->user->name}}</td>
				<td>{{$data->title}}</td>
  			    <td>{{$data->cuti_awal->isoformat('dddd, DD MMMM Y ')}}</td>
  			   <td>{{$data->cuti_akhir->isoformat('dddd, D MMMM Y ')}}</td>
  			    <td>
  			    @if($data->status=='belum_diterima')
  			   <span class="badge badge-warning">Belum DiProsess</span>
  			    @endif
  			</td>
  				<td>{!!$data->alasan!!}</td>
  				<td>{{$data->catatan}}</td>
  				<td>{{$data->created_at->isoformat('dddd, D MMMM Y ')}}</td>
  				<td>	

  					<a href="/staff/list-cuti-pegawai/jawab-pengajuan-cuti/{{$data->id}}" class="btn btn-outline-warning"><i class="fas fa-edit"></i> Jawab Pengajuan</a>
  					
  				</td>

			</tr>
			@endforeach
		</tbody>
	</table>
	</div>


	</div>
</div>

@endsection