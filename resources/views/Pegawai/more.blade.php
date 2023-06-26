@extends('master.tampilan')
@section('title')
{{$data->title}}
@endsection
@section('page','Halaman More')
@section('content')
<div class="card" style="padding:22px;">
	<div class="time">
		<i class="fas fa-clock"></i> {{$data->created_at->isoformat('dddd, D MMMM Y ')}}
	</div>
	<a href="/pegawai-announcement" class="mt-3"><i class="fas fa-arrow-left"></i> Kembali</a>
	<div class="container">
		{!!$data->body!!}
	</div>
</div>


@endsection