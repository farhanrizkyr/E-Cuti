@extends('master.tampilan')
@section('title','Announcement')
@section('page','Halaman Announcement')
@section('content')
<div class="container">

<div class="row">
	@foreach($datas as $data)
	<?php $body=substr($data->body,0,80) ?>
<div class="col mt-4">
	<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$data->title}}</h5>
    <p class="card-text">{!!$body!!}</p>
    <a href="/announcement/{{$data->slug}}" class="btn btn-primary"><i class="fas fa-arrow-right"></i> Lanjutkan</a>
  </div>
</div>


</div>	
@endforeach


</div>
<div class="mt-5">
  {{$datas->links()}}
</div>

</div>


@endsection