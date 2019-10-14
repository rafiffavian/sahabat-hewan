@extends('master')
@section('content')
<section class="header-main shadow">
	<div class="container">
<div class="row align-items-center">
	<div class="col-lg-3 col-sm-4">
	<div class="brand-wrap">
		<img width="70" height="70" class="logo" src="asset/img/logo/sahabathewan1.png">
		
	</div> <!-- brand-wrap.// -->
	</div>
	<div class="col-lg-6 col-sm-8">
			<form method="get" class="search-wrap">
				<div class="input-group w-100">
				    <input type="text" name="search" class="form-control" style="width:40%;" placeholder="Search test">
				    <div class="input-group-append">
				      <button class="btn btn-primary" type="submit">
				        <i class="fa fa-search"></i>
				      </button>
				    </div>
			    </div>
			</form> <!-- search-wrap .end// -->
	</div> <!-- col.// -->
	<div class="col-lg-3 col-sm-12">
			<a href="#" class="widget-header float-md-right">
				<div class="icontext">
					
					</div>
				</div>
			</a>
	</div> <!-- col.// -->
</div> <!-- row.// -->
	</div> <!-- container.// -->
</section> <!-- header-main .// -->
</header> <!-- section-header.// -->



<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content bg padding-y">
<div class="container">

<div class="row">
	<aside class="col-sm-3">

<div class="card card-filter">
	<article class="card-group-item">
		<header class="card-header">
			<a class="" aria-expanded="true" href="#" data-toggle="collapse" data-target="#collapse22">
				<i class="icon-action fa fa-chevron-down"></i>
				<h6 class="title">Berdasarkan Jenis Hewan</h6>
			</a>
		</header>
		<div style="" class="filter-content collapse show" id="collapse22">
			<div class="card-body">
				

				<ul class="list-unstyled list-lg">
					<li><a href="?hewan=1">Anjing <span class="float-right badge badge-light round">{{$anjing->count()}}</span> </a></li>
					<li><a href="?hewan=2">Kucing  <span class="float-right badge badge-light round">{{$kucing->count()}}</span>  </a></li>
					<li><a href="?hewan=3">Semua Hewan <span class="float-right badge badge-light round">{{$semua->count()}}</span>  </a></li>
					<li><a href="{{route('userevent.index')}}">Total  <span class="float-right badge badge-light round">{{$all->count()}}</span>  </a></li>
					
				</ul>  
			</div> <!-- card-body.// -->
		</div> <!-- collapse .// -->
	</article> <!-- card-group-item.// -->
	
	<article class="card-group-item">
		<header class="card-header">
			<a href="#" data-toggle="collapse" data-target="#collapse44">
				<i class="icon-action fa fa-chevron-down"></i>
				<h6 class="title">Berdasarkan Lokasi </h6>
			</a>
		</header>
		<div class="filter-content collapse show" id="collapse44">
			<div class="card-body">
			<form>
			<ul class="list-unstyled list-lg">
					@foreach($lokasi as $l => $ll)
						<li><a href="?lokasi={{$l}}">{{ $ll[0] }} <span class="float-right badge badge-light round">{{ count($ll) }}</span> </a></li>
					@endforeach
				</ul>
			</form>
			</div> <!-- card-body.// -->
		</div> <!-- collapse .// -->
	</article> <!-- card-group-item.// -->
</div> <!-- card.// -->


	</aside> <!-- col.// -->
	<main class="col-sm-9">
@php
	$jumlah_event = $event->count();
	if ($jumlah_event < 1){
		echo "Data Kosong";
	}
@endphp
@foreach($event as $events)
	<article class="card card-product">
		<div class="card-body">
		<div class="row">
			<aside class="col-sm-3">
				<div class="img-wrap"><img src="{{ url('/') }}/eventimage/{{$events->image}}"></div>
			</aside> <!-- col.// -->
			<article class="col-sm-6">
					<h4 class="title"> {{$events->name}}  </h4>
					<div class="rating-wrap  mb-2">
						<div class="label-rating">132 comment</div>
						<div class="label-rating">154 orders </div>
					</div> <!-- rating-wrap.// -->
					<p> {{$events->description}}. </p>
					<dl class="dlist-align">
					<dt>Jenis</dt>
					<dd>Siberian Husky</dd>
					</dl>  <!-- item-property-hor .// -->
					<dl class="dlist-align">
					<dt>Lokasi</dt>
					<a target="_blank" href="{{$events->url_lokasi}}"><dd>{{$events->location}},&nbsp;{{$events->mywilayah->name}}</dd></a>
					
					</dl>  <!-- item-property-hor .// -->
					<dl class="dlist-align">
					<dt>Waktu</dt>
					<dd>{{$events->time}}&nbsp;-&nbsp;{{$events->time_finish}}</dd>
					</dl>  <!-- item-property-hor .// -->
					<dl class="dlist-align">
					<dt>Kontak</dt>
					<dd>Instagram:</dd>
					@if($events->instagram !=null)
					<dd>{{$events->instagram}}</dd><br>
					@else
					<dd>Data Kosong</dd><br>
					@endif
					<dd>Line:</dd>
					<dd>{{$events->line}}</dd><br>
					<dd>Whatsapp:</dd>
					<dd>{{$events->whatsapp}}</dd>
					</dl>  <!-- item-property-hor .// -->
				
			</article> <!-- col.// -->
			<aside class="col-sm-3 border-left">
				<div class="action-wrap">
					<div class="price-wrap h4">
						<span class="price"> {{$events->price}} </span>	
					</div> <!-- info-price-detail // -->
					
					
				</div> <!-- action-wrap.// -->
			</aside> <!-- col.// -->
		</div> <!-- row.// -->
		</div> <!-- card-body .// -->
	</article> <!-- card product .// -->
@endforeach



	</main> <!-- col.// -->
</div>

</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->

<!-- ========================= SECTION  ========================= -->

<!-- ========================= SECTION  END// ========================= -->
@endsection