@extends('master')
@section('content')
<section class="header-main shadow">
	<div class="container">
<div class="row align-items-center">
	<div class="col-lg-3 col-sm-4">
	<div class="brand-wrap">
		<img width="70" height="70" class="logo" src="asset/img/logo/dog.png">
		
	</div> <!-- brand-wrap.// -->
	</div>
	<div class="col-lg-6 col-sm-8">
			<form action="#" class="search-wrap">
				<div class="input-group w-100">
				    <input type="text" class="form-control" style="width:40%;" placeholder="Search">
				    <select class="custom-select"  name="category_name">
							<option value="">Semua Hewan</option><option value="codex">Anjing</option>
							<option value="comments">Kucing</option>
					</select>
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
				<form class="pb-3">
				<div class="input-group">
				  <input class="form-control" placeholder="Search" type="text">
				  <div class="input-group-append">
				    <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
				  </div>
				</div>
				</form>

				<ul class="list-unstyled list-lg">
					<li><a href="#">Pitbull <span class="float-right badge badge-light round">142</span> </a></li>
					<li><a href="#">Siberian Husky  <span class="float-right badge badge-light round">3</span>  </a></li>
					<li><a href="#">Kucing Persia <span class="float-right badge badge-light round">32</span>  </a></li>
					<li><a href="#">Kucing Anggora <span class="float-right badge badge-light round">12</span>  </a></li>
				</ul>  
			</div> <!-- card-body.// -->
		</div> <!-- collapse .// -->
	</article> <!-- card-group-item.// -->
	<article class="card-group-item">
		<header class="card-header">
			<a href="#" data-toggle="collapse" data-target="#collapse33">
				<i class="icon-action fa fa-chevron-down"></i>
				<h6 class="title">Berdasarkan Harga Tiket </h6>
			</a>
		</header>
		<div class="filter-content collapse show" id="collapse33">
			<div class="card-body">
				<input type="range" class="custom-range" min="0" max="100" name="">
				<div class="form-row">
				<div class="form-group col-md-6">
				  <label>Min</label>
				  <input class="form-control" placeholder="rp.0" type="number">
				</div>
				<div class="form-group text-right col-md-6">
				  <label>Max</label>
				  <input class="form-control" placeholder="5.000.0000" type="number">
				</div>
				</div> <!-- form-row.// -->
				<button class="btn btn-block btn-outline-primary">Cari</button>
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
				<label class="form-check">
				  <input class="form-check-input" value="" type="checkbox">
				  <span class="form-check-label">
				  	<span class="float-right badge badge-light round">5</span>
				    Jakarta Timur
				  </span>
				</label>  <!-- form-check.// -->
				<label class="form-check">
				  <input class="form-check-input" value="" type="checkbox">
				  <span class="form-check-label">
				  	<span class="float-right badge badge-light round">13</span>
				    Jakarta Barat
				  </span>
				</label> <!-- form-check.// -->
				<label class="form-check">
				  <input class="form-check-input" value="" type="checkbox">
				  <span class="form-check-label">
				  	<span class="float-right badge badge-light round">12</span>
				    Jakarta Utara
				  </span>
				</label>  <!-- form-check.// -->
				<label class="form-check">
				  <input class="form-check-input" value="" type="checkbox">
				  <span class="form-check-label">
				  	<span class="float-right badge badge-light round">32</span>
				    Jakarta Selatan
				  </span>
				</label>  <!-- form-check.// -->
				<label class="form-check">
				  <input class="form-check-input" value="" type="checkbox">
				  <span class="form-check-label">
				  	<span class="float-right badge badge-light round">12</span>
				    Jakarta Pusat
				  </span>
				</label>  <!-- form-check.// -->
			</form>
			</div> <!-- card-body.// -->
		</div> <!-- collapse .// -->
	</article> <!-- card-group-item.// -->
</div> <!-- card.// -->


	</aside> <!-- col.// -->
	<main class="col-sm-9">


<article class="card card-product">
	<div class="card-body">
	<div class="row">
		<aside class="col-sm-3">
			<div class="img-wrap"><img src="asset/img/event/siberianhusky.jpg"></div>
		</aside> <!-- col.// -->
		<article class="col-sm-6">
				<h4 class="title"> Acara perkumpulan pecinta anjing Siberian Husky  </h4>
				<div class="rating-wrap  mb-2">
					<div class="label-rating">132 comment</div>
					<div class="label-rating">154 orders </div>
				</div> <!-- rating-wrap.// -->
				<p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Ut wisi enim ad minim veniam </p>
				<dl class="dlist-align">
				  <dt>Jenis</dt>
				  <dd>Siberian Husky</dd>
				</dl>  <!-- item-property-hor .// -->
				<dl class="dlist-align">
				  <dt>Lokasi</dt>
				  <a href="">  <dd>jl Kemang Timur no.22,Jakarta Selatan</dd></a>
				
				</dl>  <!-- item-property-hor .// -->
				<dl class="dlist-align">
				  <dt>Waktu</dt>
				  <dd>14.00-Selesai</dd>
				</dl>  <!-- item-property-hor .// -->
			
		</article> <!-- col.// -->
		<aside class="col-sm-3 border-left">
			<div class="action-wrap">
				<div class="price-wrap h4">
					<span class="price"> Rp.962.000 </span>	
					<del class="price-old"> Rp.1.320.000</del>
				</div> <!-- info-price-detail // -->
				<p class="text-success">Canine Bowl </p>
				<p class="text-success">T shirt for owner</p>
				<p class="text-success">3 Interactive Ball Thrower for Dogs</p>
				<p>For more click Details >></p>
				
				<br>
				<p>
					<a href="#" class="btn btn-primary"> Buy now </a>
					<a href="#" class="btn btn-secondary"> Details  </a>
				</p>
			</div> <!-- action-wrap.// -->
		</aside> <!-- col.// -->
	</div> <!-- row.// -->
	</div> <!-- card-body .// -->
</article> <!-- card product .// -->

<article class="card card-product">
	<div class="card-body">
	<div class="row">
		<aside class="col-sm-3">
			<div class="img-wrap"><img src="asset/img/event/anjing.jpg"></div>
		</aside> <!-- col.// -->
		<article class="col-sm-6">
				<h4 class="title"> Acara Perkumpulan Pecinta Anjing </h4>
				<div class="rating-wrap mb-2">
					<div class="label-rating">121 cooment</div>
					<div class="label-rating">54 orders </div>
				</div> <!-- rating-wrap.// -->
				<p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Ut wisi enim ad minim veniam </p>

				<dl class="dlist-align">
				  <dt>Jenis</dt>
				  <dd>Semua Anjing</dd>
				</dl>  <!-- item-property-hor .// -->

				<dl class="dlist-align">
				  <dt>Lokasi</dt>
				  <a href=""><dd>Taman Puspa ,jl Merdeka no2 Jakarta Utara</dd></a>  
				</dl>  <!-- item-property-hor .// -->
		
				<dl class="dlist-align">
				  <dt>Waktu</dt>
				  <dd>13.00-18.00</dd>
				</dl>  <!-- item-property-hor .// -->
		</article> <!-- col.// -->
		<aside class="col-sm-3 border-left">
			<div class="action-wrap">
				<div class="price-wrap h4">
					<span class="price"> Free </span>	
					
				</div> <!-- info-price-detail // -->
				
				<br>
				<p>
					<a href="#" class="btn btn-primary"> Buy now </a>
					<a href="#" class="btn btn-secondary"> Details  </a>
				</p>
			
			</div> <!-- action-wrap.// -->
		</aside> <!-- col.// -->
	</div> <!-- row.// -->
	</div> <!-- card-body .// -->
</article> <!-- card product .// -->

	</main> <!-- col.// -->
</div>

</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->

<!-- ========================= SECTION  ========================= -->
<section class="section-name bg-white padding-y">
<div class="container">
<h4>Another section if needed</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div><!-- container // -->
</section>
<!-- ========================= SECTION  END// ========================= -->
@endsection