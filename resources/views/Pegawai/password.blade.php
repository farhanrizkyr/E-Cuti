@extends('master.tampilan')
@section('title','Ganti Password')
@section('page','Halaman Ganti Password')
@section('content')
<div class="card" style="padding:10px;">
	<form method="post" action="">
		@csrf

		<div class="grup">
			<label>Password Lama</label>
			<input type="password" name="password" class="form-control">
			@error('password')
			<p class="text-danger">{{$message}}</p>
			@enderror
		</div>
			<div class="grup">
			<label>Password Baru</label>
			<input type="password" name="new_password" class="form-control">
			@error('new_password')
			<p class="text-danger">{{$message}}</p>
			@enderror
		</div>
		<div class="grup">

			<label>Password Lama</label>
			<input type="password" name="confirm_password" class="form-control">
			@error('confirm_password')
			<p class="text-danger">{{$message}}</p>
			@enderror
		</div>

		<button class="btn btn-primary mt-3"><i class="fas fa-save"></i> Update</button>
	</form>
</div>



@endsection