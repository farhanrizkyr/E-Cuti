@extends('master.tampilan')
@section('title')
{{$data->title}}
@endsection
@section('page','Halaman More')
@section('content')
<div class="card" style="padding:22px;">
	<a href="/pemberitahuan" class="mt-3"><i class="fas fa-arrow-left"></i> Kembali</a>
	<div class="container">
		{!!$data->body!!}
	</div>
</div>


@endsection