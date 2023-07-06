@extends('master.tampilan')
@section('title','Approvel Pengajuan Cuti')
@section('page','Halaman Approvel Pengajuan Cuti')
@section('content')

<div class="container-fluid">

	<div class="card" style="padding:22px">
		
	<form method="post" action="/staff/list-cuti-pegawai/proses-jawab-pengajuan-cuti/{{$data->id}}" >
		@csrf
		<div class="grup">
			<label>Nama Pegawai</label>
			<input type="text" name="user_id" class="form-control" readonly value="{{$data->user->name}}">
		</div>

		<div class="grup">
			<label>Cuti Awal</label>
			<input type="text" name="cuti_awal" class="form-control" readonly value="{{$data->cuti_awal}}">
		</div>

		<div class="grup">
			<label>Cuti Akhir</label>
			<input type="text" name="cuti_akhir" class="form-control" readonly value="{{$data->cuti_akhir}}">
		</div>

		<div class="grup">
			<label>Status Pengajuan Cuti</label>
			<select name="status" class="form-control">
				<option value="belum_diterima">Belum DiProsess</option>
				<option value="tolak">DiTolak</option>
				<option value="diterima">DiTerima</option>
			</select>
			
		</div>

			<div class="grup">
			<label>Alasan Pegawai</label>
			<textarea  id="editor1" readonly>{{$data->alasan}}</textarea>
		</div>

		<div class="grup">
			<label>Catatan Anda </label>
			<textarea name="catatan" id="editor2">{{$data->catatan}}</textarea>
			@error('catatan')
			<p class="text-danger">{{$message}}</p>
			@enderror
		</div>

		<button class="btn btn-primary mt-3"><i class="fas fa-save"></i> Save</button>
	</form>



	</div>
</div>

@endsection