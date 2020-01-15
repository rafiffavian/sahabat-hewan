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
			<form action="#" class="search-wrap">
				<div class="input-group w-100">
				    <input type="text" name="search" class="form-control" style="width:40%;" placeholder="Search">
				    <div class="input-group-append">
				      <button class="btn btn-primary" type="submit">
				        <i class="fas fa-search"></i>
				      </button>
				    </div>
			    </div>
			</form> <!-- search-wrap .end// -->
		
	</div> <!-- col.// -->
	<div class="col-lg-3 col-md-12">
		
	</div> <!-- col.// -->
</div> <!-- row.// -->
	</div> <!-- container.// -->
</section>


<section class="section-content bg padding-y">
<div class="container">

<div class="row">
	<aside class="col-sm-3">

<div class="card card-filter">
<article class="card-group-item">
		<header class="card-header">
			<a class="" >
				<h6 class="title">Komunitas of the Month  <img width="15%" height="auto" src="asset/img/fotokomunitas/piala2.png" alt=""></h6>
				
			</a>
		</header>
		<div >
			<div class="card-body">
				
				<ul class="list-unstyled list-lg">
					<li> <img width="10%" height="auto" src="asset/img/fotokomunitas/emas.png" alt=""><a class="ml-3" href="/detailkomunitas">Djaboers Cat <span class="float-right badge badge-light round">42</span> </a></li>
					<li><img width="10%" height="auto" src="asset/img/fotokomunitas/perak.png" alt=""> <a class="ml-3" href="#">Anggora Bekasi  <span class="float-right badge badge-light round">30</span>  </a></li>
					<li><img width="10%" height="auto" src="asset/img/fotokomunitas/perunggu.png" alt=""> <a class="ml-3" href="#">Rottweiler Depok <span class="float-right badge badge-light round">12</span>  </a></li>
				</ul>  
			</div> <!-- card-body.// -->
		</div> <!-- collapse .// -->
	</article> <!-- card-group-item.// -->

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
					<li><a href="{{route('komunitas.index')}}">Total  <span class="float-right badge badge-light round">{{$all->count()}}</span>  </a></li>
					
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

	<p class="text-muted">Dibawah ini merupakan daftar komunitas yang bekerja sama dengan aplikasi ini untuk menyelamatkan dan melindungi hewan.</p><br>
	@php
	$jumlah_comunity = $comunity->count();
	if ($jumlah_comunity < 1){
		echo "<h1>Data Kosong</h1><br>";
	}
@endphp
@foreach($comunity as $comunities)
	<article class="card card-product">
		<div class="card-body">
		<div class="row">
			<aside class="col-sm-3">
				<div class="img-wrap"><img src="{{ url('comunityimage/' . $comunities->image) }}"></div>
			</aside> <!-- col.// -->
			<article class="col-sm-6">
					<h4 class="title"> {{$comunities->name}} </h4>
					<div class="rating-wrap  mb-2">
					
					</div> <!-- rating-wrap.// -->
					<p> {{$comunities->description}}. </p>
					<dl class="dlist-align">
					<dt>Lokasi</dt>
					<dd><a target="_blank" href="{{$comunities->url_lokasi}}">{{$comunities->location}},&nbsp;{{$comunities->mywilayah->name}}</a></dd>
					</dl>  <!-- item-property-hor .// -->
					<dl class="dlist-align">
					<dt>Sosial Media</dt>
					<dd>Instagram:</dd>
					<dd>{{$comunities->instagram}}</dd><br>
					<dd>Whatsapp:</dd>
					<dd>{{$comunities->whatsapp}}</dd><br>
					<dd>Line:</dd>
					<dd>{{$comunities->Line}}</dd><br>
					</dl>  <!-- item-property-hor .// -->
					<dl class="dlist-align">
					<dt>Komunitas</dt>
					<dd>{{$comunities->myhewan->name}}</dd>
					</dl>  <!-- item-property-hor .// -->
					
				
			</article> <!-- col.// -->
		
		</div> <!-- row.// -->
		</div> <!-- card-body .// -->
	</article> <!-- card product .// -->
@endforeach

<p style="text-muted">Kami terbuka bagi siapa saja yang memiliki komunitas yang ingin mendaftarkan komunitasnya untuk bekerja sama dengan aplikasi ini </p><br>
<center><a href="{{route('komunitas.create')}}" style="width:200px; height:50px;" class="btn btn-primary">DAFTAR</a><br><br></center>

	</main> <!-- col.// -->
</div>

</div> <!-- container .//  -->
</section>


@endsection