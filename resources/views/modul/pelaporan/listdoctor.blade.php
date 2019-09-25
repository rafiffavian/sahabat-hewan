@extends('master')
@section('content')

<section class="section-content bg padding-y">
<div class="container">

<div class="row">

	<p style="margin-left:350px;" class="text-muted">Dibawah ini merupakan lokasi dokter terdekat dari posisi anda sekarang.</p><br><br><br>
@php
    $exist_doctor = [];
@endphp
@foreach($doctor_kelurahan as $kelurahan)
    @php
        array_push($exist_doctor, $kelurahan->id);
    @endphp
    dokter paling dekat se-kelurahan <br><br>
	<article class="card card-product">
		<div class="card-body">
		<div class="row">
			<aside class="col-sm-3">
				<div class="img-wrap"><img src="asset/img/fotokomunitas/komunitassemua.jpg"></div>
			</aside> <!-- col.// -->
			<article class="col-sm-6">
					<h4 class="title"> {{$kelurahan->name}} </h4>
					<dl class="dlist-align">
					<dt>No Telpon</dt>
					<dd>{{$kelurahan->no_tlp}}</dd>
					</dl>  <!-- item-property-hor .// -->
					
					<dl class="dlist-align">
					<dt>Alamat</dt>
					<dd><b>Petunjuk Jalan:</b></dd>
					<dd><a target="_blank" href="{{$kelurahan->url}}">Klik Me!</a></dd><br>
					<dd><b>Kelurahan:</b></dd>
					<dd>{{$kelurahan->kelurahan}}</dd>
					<dd><b>Kecamatan:</b></dd>
					<dd>{{$kelurahan->kecamatan}}</dd>
					<dd><b>Kota:</b></dd>
					<dd>{{$kelurahan->kota}}</dd>
					</dl>  <!-- item-property-hor .// -->
				
					
				
			</article> <!-- col.// -->
		
		</div> <!-- row.// -->
		</div> <!-- card-body .// -->
	</article> <!-- card product .// -->
@endforeach
@foreach($doctor_kecamatan as $kecamatan)
    @if (!in_array($kecamatan->id, $exist_doctor))
    @php
        array_push($exist_doctor, $kecamatan->id);
    @endphp
    dokter paling dekat se-kecamatan <br>
    <article class="card card-product">
		<div class="card-body">
		<div class="row">
			<aside class="col-sm-3">
				<div class="img-wrap"><img src="asset/img/fotokomunitas/komunitassemua.jpg"></div>
			</aside> <!-- col.// -->
			<article class="col-sm-6">
					<h4 class="title"> {{$kecamatan->name}} </h4>
			
					<dl class="dlist-align">
					<dt>No Telpon</dt>
					<dd>{{$kecamatan->no_tlp}}</dd>
					</dl>  <!-- item-property-hor .// -->
					
					<dl class="dlist-align">
					<dt>Alamat</dt>
					<dd><b>Petunjuk Jalan:</b></dd>
					<dd><a target="_blank" href="{{$kecamatan->url}}">Klik Me!</a></dd><br>
					<dd><b>Kelurahan:</b></dd>
					<dd>{{$kecamatan->kelurahan}}</dd>
					<dd>{{$kecamatan->kelurahan}}</dd><br>
					<dd><b>Kecamatan:</b></dd>
					<dd>{{$kecamatan->kecamatan}}</dd>
					<dd><b>Kota:</b></dd>
					<dd>{{$kecamatan->kota}}</dd>
					</dl>  <!-- item-property-hor .// -->
				
					
				
			</article> <!-- col.// -->
		
		</div> <!-- row.// -->
		</div> <!-- card-body .// -->
	</article> <!-- card product .// -->
    @endif
	
@endforeach
@foreach($doctor_kota as $kota)
@if (!in_array($kota->id, $exist_doctor))
    @php
        array_push($exist_doctor, $kota->id);
    @endphp
	dokter paling dekat se-kota <br>
    <article class="card card-product">
		<div class="card-body">
		<div class="row">
			<aside class="col-sm-3">
				<div class="img-wrap"><img src="asset/img/fotokomunitas/komunitassemua.jpg"></div>
			</aside> <!-- col.// -->
			<article class="col-sm-6">
					<h4 class="title"> {{$kota->name}} </h4>
					<dl class="dlist-align">
					<dt>No Telpon</dt>
					<dd>{{$kota->no_tlp}}</dd>
					</dl>  <!-- item-property-hor .// -->
					
					<dl class="dlist-align">
					<dt>Alamat</dt>
					<dd><b>Petunjuk Jalan:</b></dd>
					<dd><a target="_blank" href="{{$kota->url}}">Klik Me!</a></dd><br>
					<dd><b>Kelurahan:</b></dd>
					<dd>{{$kota->kelurahan}}</dd>
					<dd><b>Kecamatan:</b></dd>
					<dd>{{$kota->kecamatan}}</dd>
					<dd><b>Kota:</b></dd>
					<dd>{{$kota->kota}}</dd>
					</dl>  <!-- item-property-hor .// -->
					
				
					
				
			</article> <!-- col.// -->
		
		</div> <!-- row.// -->
		</div> <!-- card-body .// -->
	</article> <!-- card product .// -->
    @endif
@endforeach



	</main> <!-- col.// -->
</div>

</div> <!-- container .//  -->
</section>


@endsection