@extends('master.tampilan')
@section('title','Edit  User')
@section('page','Halaman Edit User')
@section('content')
<div class="card" style="padding:22px;">
	<form method="post" action="/proses-ubah/pengaturan/staff/{{Auth::user()->id}}">
    @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="text" name="name" value="{{Auth::user()->name}}" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">E mail</label>
      <input type="text" name="email" value="{{Auth::user()->email}}" class="form-control" id="inputPassword4">
    </div>
  </div>

   <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Username</label>
      <input type="text" name="username" value="{{Auth::user()->username}}" class="form-control" id="inputEmail4">
    </div>
  
  </div>
 
 <button class="btn btn-primary"><i class="fas fa-save"></i> Update</button>
</form>
</div>

@endsection