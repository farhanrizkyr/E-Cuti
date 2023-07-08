@extends('master.tampilan')
@section('title','Pengaturan  User')
@section('page','Halaman Pengaturan User')
@section('content')
<div class="card" style="padding:22px;">
  @if(Session::get('pesan'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Berhasil !</strong> {{Session::get('pesan')}}.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@endif
  <br><br>
	<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="email" disabled value="{{Auth::user()->name}}" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">EMail</label>
      <input type="text" disabled value="{{Auth::user()->email}}" class="form-control" id="inputPassword4">
    </div>
  </div>

   <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Username</label>
      <input type="email" disabled value="{{Auth::user()->username}}" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">ID Pengguna</label>
      <input type="text" disabled value="{{Auth::user()->id}}" class="form-control" id="inputPassword4">
    </div>
  </div>
 
  <a href="/staff-pengaturan/{{Auth::user()->username}}" class="btn btn-primary"><i class="fas fa-user-edit"></i> Edit</a>
</form>
</div>

@endsection