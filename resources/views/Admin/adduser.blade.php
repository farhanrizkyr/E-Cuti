@extends('master.tampilan')
@section('title','Tambah User')
@section('page','Halaman Tambah User')
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
			<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#exampleModal">
 <i class="fas fa-user-plus"></i> Tambah User
</button>

	<div class="card" style="padding:22px">
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form method="post" action="">
       	@csrf
       	<div class="grup">
       		<label>Nama</label>
       		<input type="text" name="name" class="form-control @error('name')is-invalid @enderror" value="{{old('name')}}">
       		@error('name')
       		<p class="text-danger">{{$message}}</p>
       		@enderror
       	</div>

       	  	<div class="grup">
       		<label>Username</label>
       		<input type="text" name="username" class="form-control @error('username')is-invalid @enderror" value="{{old('username')}}">
       		@error('username')
       		<p class="text-danger">{{$message}}</p>
       		@enderror
       	</div>

       	  	<div class="grup">
       		<label>E-Mail</label>
       		<input type="text" name="email" class="form-control @error('email')is-invalid @enderror" value="{{old('email')}}">
       		@error('email')
       		<p class="text-danger">{{$message}}</p>
       		@enderror
       	</div>
        	<div class="grup">
       		<label>Role</label>
       		<select name="role" class="form-control">
       			<option value="">----Pilih-----</option>
       			<option value="admin">Admin</option>
       			<option value="staff">Staff</option>
       			<option value="pegawai">Pegawai</option>
       		</select>
       		@error('role')
       		<p class="text-danger">{{$message}}</p>
       		@enderror
       	</div>

       		<div class="grup">
       		<label>Password</label>
       		<input type="password" name="password" class="form-control @error('password')is-invalid @enderror" value="{{old('password')}}">
       		@error('password')
       		<p class="text-danger">{{$message}}</p>
       		@enderror
       	</div>

       	<div class="grup">
       		<label>Password Confirmation</label>
       		<input type="password" name="password_confirmation" class="form-control @error('password')is-invalid @enderror" value="{{old('password_confirmation')}}">
       		
       	</div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save changes</button>
         </form>
      </div>
    </div>
  </div>
</div>



<div class="table-responsive">
	<table class="table" id="myTable">
	<thead>
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>E-Mail</th>
			<th>Username</th>
			<th>Role</th>
			<th>Aksi</th>
		</tr>
	</thead>

	<tbody>
		<?php $no=1; ?>
			@foreach($users as $user)
		<tr>
			<th>{{$no++;}}</th>
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
			<td>{{$user->username}}</td>
			<td>
				@if($user->role=='admin')
				<span class="badge badge-primary">Adminstrator</span>
				@endif

				@if($user->role=='staff')
				<span class="badge badge-warning">Staff</span>
				@endif

				@if($user->role=='pegawai')
				<span class="badge " style="background:lawngreen; color:white;">Pegawai</span>
				@endif
			</td>
			<td>
				<form method="post" action="/register-akun/hapus-akun/{{$user->id}}">
					@csrf
					@method('delete')
					<button onclick="return confirm('Yakin Ingin Menghapus?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
				</form>
			</td>

			@endforeach
		</tr>
	</tbody>
</table>
</div>

	</div>
</div>

@endsection