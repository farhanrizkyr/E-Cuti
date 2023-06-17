@extends('master.tampilan')
@section('title','Buat Pengajuan Cuti')
@section('page','Halaman Dashboard')
@section('content')

<div class="container-fluid">
	<div class="card" style="padding:22px">
		
		<form method="post" action="">
			@csrf
			<div class="grup">
			<label>Judul Pengajuan Cuti</label>
		    <input type="text" name="title" class="form-control @error('title')is-invalid  @enderror">
		    @error('title')
		    <p class="text-danger">{{$message}}</p>
		    @enderror
			</div>

				<div class="grup">
			<label>Tanggal Cuti Awal</label>
		    <input type="date" name="cuti_awal" class="form-control @error('cuti_awal')is-invalid  @enderror">
		    @error('cuti_awal')
		    <p class="text-danger">{{$message}}</p>
		    @enderror
			</div>

				<div class="grup">
			<label>Tanggal Cuti Akhir</label>
		    <input type="date" name="cuti_akhir" class="form-control @error('cuti_akhir')is-invalid  @enderror">
		    @error('cuti_akhir')
		    <p class="text-danger">{{$message}}</p>
		    @enderror
			</div>

				<div class="grup">
			<label>Alasan</label>
		   <textarea name="alasan" id="editor1"></textarea>
		     @error('alasan')
		    <p class="text-danger">{{$message}}</p>
		    @enderror
			</div>

		<button class="btn btn-primary mt-3" class="form-control"><i class="fas fa-save"></i> Simpan</button>
		</form>

	</div>
</div>

@endsection