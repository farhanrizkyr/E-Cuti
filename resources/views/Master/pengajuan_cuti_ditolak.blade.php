@extends('master.tampilan')
@section('title','List Pengajuan Cuti Diterima')
@section('page','List Halaman Pengsjuan Cuti DiTerima')
@section('content')

<div class="container-fluid">

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
			</tr>
		</thead>

		<tbody>
			<?php $no=1; ?>
			@foreach($datas as $data)
			<tr>
				<th>{{$no++;}}</th>
				<td>{{$data->title}}</td>
  			    <td>{{$data->cuti_awal->isoformat('D, dddd MMMM Y ')}}</td>
  			   <td>{{$data->cuti_akhir->isoformat('D, dddd MMMM Y ')}}</td>
  			    <td>
  			    @if($data->status=='diterima')
  			   <span class="badge badge-success">DiTerima</span>
  			    @endif
  			</td>
  				<td>{!!$data->alasan!!}</td>
  				<td>{{$data->catatan}}</td>
  				<td>{{$data->created_at->isoformat('D, dddd MMMM Y ')}}</td>
  				

			</tr>
			@endforeach
		</tbody>
	</table>
	</div>


	</div>
</div>

@endsection