@extends('master')
@section('content')
<!-- Required Resources -->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
<div class="row flex-lg-nowrap">
  <div class="col-12 col-lg-auto mb-3" style="width: 200px;">
    <div class="card p-3">
      <div class="e-navlist e-navlist--active-bg">
        <ul class="nav">
          <li class="nav-item text-primary"><i class="fas fa-user"></i><span> Profilku</span></li>
         
        </ul>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="row">
      <div class="col mb-3">
        <div class="card">
          <div class="card-body">
            <div class="e-profile">
              <div class="row">
                <div class="col-12 col-sm-auto mb-3">
                  <div class="mx-auto" style="width: 140px;">
                    <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                      <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span>
                    </div>
                  </div>
                </div>
                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                  <div class="text-center text-sm-left mb-2 mb-sm-0">
                    <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">Mochammad Fariz Syah Lazuardy</h4>
                    <p class="mb-0">@mochammadfariz</p>
                    <div class="mt-2">
                      <button class="btn btn-primary" type="button">
                        <i class="fa fa-fw fa-camera"></i>
                        <span>Change Photo</span>
                      </button>
                    </div>
                  </div>
                  <div class="text-center text-sm-right">
                    <div class="text-muted"><small>Joined 09 Dec 2017</small></div>
                  </div>
                </div>
              </div>
              <ul class="nav nav-tabs">
                <li class="nav-item"><a href="" class="active nav-link">Profil</a></li>
              </ul>
              <div class="tab-content pt-3">
                <div class="tab-pane active">
                  <form class="form" novalidate="">
                    <div class="row">
                      <div class="col">
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Full Name</label>
                              <input class="form-control" type="text" name="name" placeholder="Mochammad Fariz Syah Lazuardy" value="Mochammad Fariz Syah Lazuardy">
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Username</label>
                              <input class="form-control" type="text" name="username" placeholder="@mochammadfariz" value="@mochammadfariz">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Provinsi</label>
                              <input class="form-control" type="text" name="name" placeholder="Jakarta Selatan" value="Jakarta Selatan">
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Kabupaten/Kota</label>
                              <input class="form-control" type="text" name="username" placeholder="Depok" value="Depok">
                            </div>
                          </div>
                        </div>
                        
                        <div class="row">
                          <div class="col mb-3">
                            <div class="form-group">
                              <label>Bio</label>
                              <textarea class="form-control" rows="5" placeholder="Pecinta Kucing Anggora. Teknik Informatika UG 16 . Sedang mencari kucing lucu untuk dipelihara siapapun bisa contact saya. Work Hard Pray Hard"></textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-12 ">
                        <div class=""><b>Hewan Favoritku  </b><i style="color:green;" class="fas fa-cat"></i></div>

                        <br>

                         <div class="container">
  <div class="row">
    <div class="col-sm mb-3">
       <div class="chart" data-percent="95" data-scale-color="#fff">Kucing Anggora<button type="button" class="btn btn-danger btn-sm ml-3">  <i class="fas fa-trash"></i> Hapus</button></div>
    </div>
    <div class="col-sm mb-3">
       <div class="chart" data-percent="95" data-scale-color="#fff">Kucing Persia<button type="button" class="btn btn-danger btn-sm ml-3">  <i class="fas fa-trash"></i> Hapus</button></div>
    </div>
    <div class="col-sm mb-3">
       <div class="chart" data-percent="95" data-scale-color="#fff">Kucing Singapura<button type="button" class="btn btn-danger btn-sm ml-3">  <i class="fas fa-trash"></i> Hapus</button></div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm mb-3">
       <div class="chart" data-percent="95" data-scale-color="#fff">Siberian Husky<button type="button" class="btn btn-danger btn-sm ml-3">  <i class="fas fa-trash"></i> Hapus</button></div>
    </div>
    <div class="col-sm mb-3">
       <div class="chart" data-percent="95" data-scale-color="#fff">Pitbull<button type="button" class="btn btn-danger btn-sm ml-3">  <i class="fas fa-trash"></i> Hapus</button></div>
    </div>
    <div class="col-sm mb-3">
       <div class="chart" data-percent="95" data-scale-color="#fff">Doberman<button type="button" class="btn btn-danger btn-sm ml-3">  <i class="fas fa-trash"></i> Hapus</button></div>
    </div>
  </div>
</div>
                        </div>
                      </div>
                    </div>

<br>
<br>

                       <div class="row">
                      <div class="col-12 ">
                        <div class="mb-2"><i style="color:green"class="fas fa-plus"></i><b> Tambah hewan favorit</b></div>
                                  <div class="form-group">
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Tambah hewan Favoritmu">
                                  </div>
                        </div>
                      </div>
                    </div>
<br>
<br>
                <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="button" class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-secondary" value="Cancel">
            </div>
          </div>

@endsection