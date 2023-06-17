@extends('master.tampilan')
@section('title','Edit')
@section('page','Halaman Edit')
@section('content')

<div class="container-fluid">
	<div class="card" style="padding:22px">
		
		<form method="post" action="/pemberitahuan/proses_edit/{{$data->id}}">
			@csrf

			<div class="grup">
     	<label>Judul Pemberitahuan</label>
     	<input type="text" name="title" value="{{$data->title}}" class="form-control @error('title')is-invalid  @enderror">
     	@error('title')
     	<p class="text-danger">{{$message}}</p>
     	@enderror
     </div>
    <div class="grup">
     	<label>Isi Pemberitahuan</label>
     	<textarea name="body" id="editor1">{{$data->body}}</textarea>
     	@error('body')
     	<p class="text-danger">{{$message}}</p>
     	@enderror
     </div>

     <button class="btn btn-primary mt-3">Save</button>
		</form>


	</div>
</div>

@endsection