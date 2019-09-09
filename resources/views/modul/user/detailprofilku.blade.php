@extends('master')
@section('content')
<!-- Required Resources -->

<div class="container py-4 my-2">
    <div class="row">
        <div class="col-md-4 pr-md-5">
            <img  style=""class="img-fluid" alt="Responsive image" src="asset/img/user/fariz.jpg" />
            <div class="pt-4 mt-2">
                <section class="mb-4 pb-1">
                   
                    <div class="work-experience pt-2">
                          <div class="section">
                        <h3>@mochammadfarizz</h3>
                       <button class="btn btn-outline-info btn-success"><span class="fa fa-user"></span> 332 <b>Following </b></button>
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

                     <div class="skills pt-1 row">
                        <div class="col-4 mb-2">
                            <div class="chart" data-percent="95" data-scale-color="#fff"><span class="badge badge-pill badge-success">Siberian Husky</span></div>
                        </div>
                        <div class="col-4 mb-2">
                            <div class="chart" data-percent="85" data-scale-color="#fff"><span class="badge badge-pill badge-success">Pitbull</span></div>
                        </div>
                        <div class="col-4 mb-2">
                            <div class="chart" data-percent="90" data-scale-color="#fff"><span class="badge badge-pill badge-success">Doberman</span></div>
                        </div>
                       
                    </div>
                </section>
            </div>
        </div>
        <div class="col-md-8">
            <div class="d-flex align-items-center">
                <h2 class="font-weight-bold m-0">
                    Mochammad Fariz Syah Lazuardy
                </h2>
                <address class="m-0 pt-2 pl-0 pl-md-4 font-weight-light text-secondary">
                    <i class="fa fa-map-marker"></i>
                    Depok, Jakarta Selatan
                </address>
            </div>
            <p class="h5 text-primary mt-2 d-block font-weight-light">
              
            </p>
            <p class="lead mt-4">Saya suka dengan anjing doberman dan kucing persia. Teknik Informatika UG 16 . Sedang mencari teman main untuk doberman saya agar melatih kemampuan bersosialisasi dengan anjing lainnya. </p>
           
            <section class="d-flex mt-5">
                <a href="/editprofil" class="btn btn-success"> <i class="fas fa-cog"></i> Edit Profile</a>
              
                
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
              <button style= ""type="button" class="btn btn-success btn-sm">Tambah Foto</button>
                <div class="row">
                    <div class="col-4">
                        <a class="lightbox" href="asset/img/hewanku/anggora.jpg">
                            <img style="margin-top: 25px;width: 200px; height: 200px;object-fit: cover;" class="rounded img-fluid image scale-on-hover" src="asset/img/hewanku/anggora.jpg">
                        </a>
                        <button type="button" class="btn btn-danger btn-sm">  <i class="fas fa-trash"></i> Hapus</button>
                          <button type="button" class="btn btn-warning btn-sm">  Edit</button>
                    </div>
                    <div class="col-4">
                        <a class="lightbox" href="asset/img/hewanku/husky.jpg">
                            <img style="margin-top: 25px;width: 200px; height: 200px;object-fit: cover;" class="rounded img-fluid image scale-on-hover" src="asset/img/hewanku/husky.jpg">
                        </a>
                         <button type="button" class="btn btn-danger btn-sm">  <i class="fas fa-trash"></i> Hapus</button>
                         <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#husky">  Edit</button>
                    </div>
                    <div class="col-4">
                        <a class="lightbox" href="asset/img/hewanku/kitten.jpg">
                            <img style="margin-top: 25px;width: 200px; height: 200px;object-fit: cover;" class="rounded img-fluid image scale-on-hover" src="asset/img/hewanku/kitten.jpg">
                        </a>
                         <button type="button" class="btn btn-danger btn-sm">  <i class="fas fa-trash"></i> Hapus</button>
                           <button type="button" class="btn btn-warning btn-sm">  Edit</button>
                    </div>
                    <div class="col-4">
                        <a class="lightbox" href="asset/img/hewanku/kucinglucu.jpg">
                            <img style="margin-top: 25px;width: 200px; height: 200px;object-fit: cover;" class="rounded img-fluid image scale-on-hover" src="asset/img/hewanku/kucinglucu.jpg">
                        </a>
                         <button type="button" class="btn btn-danger btn-sm">  <i class="fas fa-trash"></i> Hapus</button>
                           <button type="button" class="btn btn-warning btn-sm">  Edit</button>
                    </div>
                    <div class="col-4">
                        <a class="lightbox" href="asset/img/hewanku/kucinglucu2.jpg">
                            <img style="margin-top: 25px;width: 200px; height: 200px;object-fit: cover;" class="rounded img-fluid image scale-on-hover" src="asset/img/hewanku/kucinglucu2.jpg">
                        </a>
                         <button type="button" class="btn btn-danger btn-sm">  <i class="fas fa-trash"></i> Hapus</button>
                           <button type="button" class="btn btn-warning btn-sm">  Edit</button>
                    </div>
                    <div class="col-4">
                        <a class="lightbox" href="asset/img/hewanku/kucingsungapura.jpg">
                            <img style="margin-top: 25px;width: 200px; height: 200px;object-fit: cover;" class="rounded img-fluid image scale-on-hover" src="asset/img/hewanku/kucingsungapura.jpg">
                        </a>
                         <button type="button" class="btn btn-danger btn-sm">  <i class="fas fa-trash"></i> Hapus</button>
                           <button type="button" class="btn btn-warning btn-sm">  Edit</button>
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
        <div class="col-12 col-md-6">
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

        <!-- Ending komunitas 1 -->
        
  <!-- Awal komunitas 2 -->
           
        <div class="col-12 col-md-6">
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

<!-- Modal -->

<!-- Modal -->
<div class="modal fade" id="husky" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cody</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
                <div class="form-group">
                    <label for="formGroupExampleInput">Nama Peliharaan </label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Cody">
                </div>
                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Kategori</label>
                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                        <option selected>Anjing</option>
                        <option value="1">Kucing</option>
                    </select>
                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Jenis</label>
                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                        <option selected>Siberian Husky</option>
                        <option value="1">Pitbull</option>
                        <option value="2">Rottweiler</option>
                        <option value="3">Doberman</option>
                    </select>
                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Jenis Kelamin</label>
                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                        <option selected>Laki-Laki</option>
                         <option selected>Perempuan</option>
                    </select>
                <div class="form-group">
                    <label for="formGroupExampleInput">Lahir </label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="DD-MM-YYYY">
                </div>
                 <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Jenis</label>
                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                        <option selected>Baik</option>
                        <option value="1">Biasa</option>
                        <option value="3">Sedikit Galak</option>
                        <option value="1">Galak</option>
                    </select>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
@endsection