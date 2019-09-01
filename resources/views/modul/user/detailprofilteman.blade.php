@extends('master')
@section('content')
<!-- Required Resources -->

<div class="container py-4 my-2">
    <div class="row">
        <div class="col-md-4 pr-md-5">
            <img class="w-100 rounded border" src="asset/img/user/rafif.PNG" />
            <div class="pt-4 mt-2">
                <section class="mb-4 pb-1">
                   
                    <div class="work-experience pt-2">
                          <div class="section">
                        <h3>@Rafffvn</h3>
                       <button class="btn btn-outline-info btn-success"><span class="fa fa-user"></span> 332 <b>Following </b></button>&
                      <button class="btn btn-outline-info btn-success"><span class="fa fa-user"></span> 114 <b>Followers</b> </button>
                       
                    </div>
                       
                    </div>    
                </section>
                <section class="mb-5 mb-md-0">
                    <h3 class="h6 font-weight-light text-secondary text-uppercase">Tertarik pada</h3>
                    <div class="skills pt-1 row">
                        <div class="col-4 mb-2">
                            <div class="chart" data-percent="95" data-scale-color="#fff"><span class="badge badge-pill badge-success">Kucing Anggora</span></div>
                        </div>
                        <div class="col-4 mb-2">
                            <div class="chart" data-percent="85" data-scale-color="#fff"><span class="badge badge-pill badge-success">Kucing Persia</span></div>
                        </div>
                        <div class="col-4 mb-2">
                            <div class="chart" data-percent="90" data-scale-color="#fff"><span class="badge badge-pill badge-success">Kucing Singapura</span></div>
                        </div>
                       
                    </div>
                </section>
            </div>
        </div>
        <div class="col-md-8">
            <div class="d-flex align-items-center">
                <h2 class="font-weight-bold m-0">
                    Rafif Favian
                </h2>
                <address class="m-0 pt-2 pl-0 pl-md-4 font-weight-light text-secondary">
                    <i class="fa fa-map-marker"></i>
                    Jakarta Timur, ID
                </address>
            </div>
            <p class="h5 text-primary mt-2 d-block font-weight-light">
              
            </p>
            <p class="lead mt-4">Pecinta Kucing Anggora. Teknik Informatika UG 16 . Sedang mencari kucing lucu untuk dipelihara siapapun bisa contact saya. Work Hard Pray Hard </p>
           
            <section class="d-flex mt-5">
                <button class="btn btn-light bg-transparent mr-3 mb-3">
                    <i class="fa fa-comments"></i>
                   Kirim Pesan
                </button>
                <button class="btn btn-danger  mr-3 mb-3">
                    <i class="fa fa-warning"></i>
                    Laporkan
                </button>
                <button class="btn btn-primary mb-3">
                    <i class="fa fa-check"></i>
                    Following
                </button>
                
            </section>
            <section class="mt-4">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                            Tentang saya
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                            Following  
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                           Followers
                        </a>
                    </li>
                   
                </ul>
                <div class="tab-content py-4" id="myTabContent">
                    <div class="tab-pane py-3 fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h4 class="text-uppercase font-weight-bold text-success">
                            Peliharaanku
                        </h4>
                       <!-- Konten Gallery Peliharaanku -->
         
       <section class="gallery-block grid-gallery">
            <div class="container">
                
                <div class="row">
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="asset/img/hewanku/anggora.jpg">
                            <img style="margin-top: 25px;width: 200px; height: 200px;object-fit: cover;" class="rounded img-fluid image scale-on-hover" src="asset/img/hewanku/anggora.jpg">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="asset/img/hewanku/husky.jpg">
                            <img style="margin-top: 25px;width: 200px; height: 200px;object-fit: cover;" class="rounded img-fluid image scale-on-hover" src="asset/img/hewanku/husky.jpg">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="asset/img/hewanku/kitten.jpg">
                            <img style="margin-top: 25px;width: 200px; height: 200px;object-fit: cover;" class="rounded img-fluid image scale-on-hover" src="asset/img/hewanku/kitten.jpg">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="asset/img/hewanku/kucinglucu.jpg">
                            <img style="margin-top: 25px;width: 200px; height: 200px;object-fit: cover;" class="rounded img-fluid image scale-on-hover" src="asset/img/hewanku/kucinglucu.jpg">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="asset/img/hewanku/kucinglucu2.jpg">
                            <img style="margin-top: 25px;width: 200px; height: 200px;object-fit: cover;" class="rounded img-fluid image scale-on-hover" src="asset/img/hewanku/kucinglucu2.jpg">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <a class="lightbox" href="asset/img/hewanku/kucingsungapura.jpg">
                            <img style="margin-top: 25px;width: 200px; height: 200px;object-fit: cover;" class="rounded img-fluid image scale-on-hover" src="asset/img/hewanku/kucingsungapura.jpg">
                        </a>
                    </div>
                  
                </div>
            </div>
        </section>
        
        <br>
        <br>
        <br>
        
                        <!-- Selesai Konten Gallery Peliharaanku -->

                        <!-- Awal List Komunitasku -->
                        
                       <h4 class="text-uppercase font-weight-bold text-success">
                            Komunitasku
                       </h4>
                        <dl class="row mt-4 mb-4 pb-3">
                        <!-- komunitas 1 -->
                        <div class="container">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-lg-8 col-md-6">
                            <h3 class="mb-0 text-truncated">MSafe Animal Depok</h3>
                            <p class="lead">Komunitas Pecinta Anjing dan Kucing</p>
                            <p>
                                Kami adalah pecinta anjing dan kucing . Kami sering mengadakan event - event menarik lainnya di sekitaran depok. Let's join our community!
                            </p>
                            <p> <span class="badge badge-info tags">Siberian Husky</span> 
                                <span class="badge badge-info tags">Kucing Anggora</span>
                                <span class="badge badge-info tags">Pitbull</span>
                            </p>
                        </div>
                        <div class="col-12 col-lg-4 col-md-6 text-center">
                            <img src="asset/img/event/siberianhusky.jpg" alt="" class="rounded img-fluid">
                            <br>
                            <ul class="list-inline ratings text-center" title="Ratings">
                                <li class="list-inline-item"><a href="#"><span class="fa fa-star"></span></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><span class="fa fa-star"></span></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><span class="fa fa-star"></span></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><span class="fa fa-star"></span></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><span class="fa fa-star"></span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-4">
                            <h3 class="mb-0">20.7K</h3>
                            <small>Followers</small>
                            <button class="btn btn-block btn-outline-success"><span class="fa fa-plus-circle"></span> Follow</button>
                        </div>
                        <div class="col-12 col-lg-4">
                            <h3 class="mb-0">245</h3>
                            <small>Following</small>
                            <button class="btn btn-outline-info btn-block"><span class="fa fa-user"></span> View </button>
                        </div>
                        
                        <!--/col-->
                    </div>
                    <!--/row-->
                </div>
                <!--/card-block-->
            </div>
        </div>

        <!-- Ending komunitas 1 -->
        
  <!-- Awal komunitas 2 -->
           
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-lg-8 col-md-6">
                            <h3 class="mb-0 text-truncated">MSafe Animal Jakarta Selatan</h3>
                            <p class="lead">Komunitas Pecinta Anjing dan Kucing</p>
                            <p>
                                Kami adalah pecinta anjing dan kucing . Kami sering mengadakan event - event menarik lainnya di sekitaran depok. Let's join our community!
                            </p>
                            <p> <span class="badge badge-info tags">Siberian Husky</span> 
                                <span class="badge badge-info tags">Rottweiler</span>
                                <span class="badge badge-info tags">Pitbull</span>
                            </p>
                        </div>
                        <div class="col-12 col-lg-4 col-md-6 text-center">
                            <img src="asset/img/event/anjing.jpg" alt="" class=" rounded img-fluid">
                            <br>
                            <ul class="list-inline ratings text-center" title="Ratings">
                                <li class="list-inline-item"><a href="#"><span class="fa fa-star"></span></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><span class="fa fa-star"></span></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><span class="fa fa-star"></span></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><span class="fa fa-star"></span></a>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="col-12 col-lg-4">
                            <h3 class="mb-0">1.4K</h3>
                            <small>Followers</small>
                            <button class="btn  btn-outline-primary"><span class="fa fa-check"></span> Following</button>
                        </div>
                        <div class="col-12 col-lg-4">
                            <h3 class="mb-0">245</h3>
                            <small>Following</small>
                            <button class="btn btn-outline-info btn-block"><span class="fa fa-user"></span> View </button>
                        </div>
                        
                        <!--/col-->
                    </div>
                    <!--/row-->
                </div>
                <!--/card-block-->
            </div>
        </div>
  
<!-- Ending komunitas 2 -->
    </div>
</div>




 <!-- Akhir List Komunitasku -->
                        </dl>
                    </div>
                    <!-- Akhir dari Tab Tentang Saya -->

                    <!-- AWAL tab Following -->
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container profile-page">
    <div class="row">
        <div class="col-xl-6 col-lg-7 col-md-12">
            <div class="card profile-header">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image float-md-right"> <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt=""> </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h4 class="m-t-0 m-b-0"><strong>Michael</strong> Deo</h4>
                            <span class="job_post">Ui UX Designer</span>
                            <p>795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                            <div>
                                <button class="btn btn-primary btn-round">Following</button>
                                <button class="btn btn-light btn-round btn-simple">Detail</button>
                            </div>
                         
                        </div>                
                    </div>
                </div>                    
            </div>
        </div>
        
        
        <div class="col-xl-6 col-lg-7 col-md-12">
            <div class="card profile-header">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image float-md-right"> <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt=""> </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h4 class="m-t-0 m-b-0"><strong>Michael</strong> Deo</h4>
                            <span class="job_post">Ui UX Designer</span>
                            <p>795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                            <div>
                                <button class="btn btn-primary btn-round">Following</button>
                                <button class="btn btn-light btn-round btn-simple">Detail</button>
                            </div>
                         
                        </div>                
                    </div>
                </div>                    
            </div>
        </div>
        
        
        <div class="col-xl-6 col-lg-7 col-md-12">
            <div class="card profile-header">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image float-md-right"> <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt=""> </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h4 class="m-t-0 m-b-0"><strong>Michael</strong> Deo</h4>
                            <span class="job_post">Ui UX Designer</span>
                            <p>795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                            <div>
                                <button class="btn btn-primary btn-round">Following</button>
                                <button class="btn btn-light btn-round btn-simple">Detail</button>
                            </div>
                         
                        </div>                
                    </div>
                </div>                    
            </div>
        </div>
	</div>
</div>
                    </div>
                    <!-- Akhir Tab FOllowing -->
                    <!-- AWAL tab Followers -->
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="container profile-page">
    <div class="row">
        <div class="col-xl-6 col-lg-7 col-md-12">
            <div class="card profile-header">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image float-md-right"> <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt=""> </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h4 class="m-t-0 m-b-0"><strong>Michael</strong> Deo</h4>
                            <span class="job_post">Ui UX Designer</span>
                            <p>795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                            <div>
                                <button class="btn btn-primary btn-round">Following</button>
                                <button class="btn btn-light btn-round btn-simple">Detail</button>
                            </div>
                         
                        </div>                
                    </div>
                </div>                    
            </div>
        </div>
        
        
        <div class="col-xl-6 col-lg-7 col-md-12">
            <div class="card profile-header">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image float-md-right"> <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt=""> </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h4 class="m-t-0 m-b-0"><strong>Michael</strong> Deo</h4>
                            <span class="job_post">Ui UX Designer</span>
                            <p>795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                            <div>
                                <button class="btn btn-primary btn-round">Following</button>
                                <button class="btn btn-light btn-round btn-simple">Detail</button>
                            </div>
                         
                        </div>                
                    </div>
                </div>                    
            </div>
        </div>
        
        
        <div class="col-xl-6 col-lg-7 col-md-12">
            <div class="card profile-header">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image float-md-right"> <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt=""> </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h4 class="m-t-0 m-b-0"><strong>Michael</strong> Deo</h4>
                            <span class="job_post">Ui UX Designer</span>
                            <p>795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                            <div>
                                <button class="btn btn-light btn-round">Follow Back</button>
                                <button class="btn btn-light btn-round btn-simple">Detail</button>
                            </div>
                         
                        </div>                
                    </div>
                </div>                    
            </div>
        </div>
	</div>
</div>
                    </div>
                    <!-- AKHIR Tab Followers -->
                </div>
            </section>
        </div>
    </div>
</div>
@endsection