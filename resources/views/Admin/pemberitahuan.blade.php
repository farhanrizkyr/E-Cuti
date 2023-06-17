@extends('master.tampilan')
@section('title','Pemberitahuan')
@section('page','Halaman Pemberitahuan')
@section('content')

<div class="container-fluid">
	<button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal">
 <i class="fas fa-plus"></i> Tambah Pemberitahuan
</button>
	<div class="card" style="padding:22px">
	     <div class="table-responsive">
	     	<table id="myTable" class="display" width="100%" cellspacing="0">
	     	<thead>
	<tr>
		<th>No</th>
		<th>Judul</th>
		<th>Body</th>
		<th>Upload</th>
		<th>Aksi</th>
	</tr>
	</thead>

	<tbody>
		<?php $no=1; ?>
		@foreach($datas as $data)
		<?php $body=substr($data->body,0,100) ?>
		<tr>
			<th>{{$no++;}}</th>
			<td>{{$data->title}}</td>
			<td><a href="/pemberitahuan/{{$data->slug}}">{!!$body!!}</a></td>
				<td>{{$data->created_at->isoFormat('dddd,D MMMM Y')}}</td>
			<td>
				<a href="/pemberitahuan/edit/{{$data->slug}}" class="btn btn-secondary btn-sm"><i class="fas fa-edit"></i> Edit</a>
				<form method="post" action="/pemberitahuan/hapus/{{$data->id}}" class="d-inline">
					@csrf
					@method('delete')
					<button onclick="return confirm('Yakin Ingin Menghapus?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>

</table>
	     </div>






	</div>
</div>
<!-- Modal -->


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <form method="post" action="">
       	@csrf
      <div class="modal-body">
     <div class="grup">
     	<label>Judul Pemberitahuan</label>
     	<input type="text" name="title" class="form-control @error('title')is-invalid  @enderror">
     	@error('title')
     	<p class="text-danger">{{$message}}</p>
     	@enderror
     </div>
    <div class="grup">
     	<label>Isi Pemberitahuan</label>
     	<textarea name="body" id="editor1"></textarea>
     	@error('body')
     	<p class="text-danger">{{$message}}</p>
     	@enderror
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





@endsection