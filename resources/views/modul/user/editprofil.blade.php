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
                    <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">{{$editUser->first_name}} {{$editUser->last_name}}</h4>
                    <p class="mb-0">{{$editUser->username}}</p>
                    
                    <div class="mt-2">
                      <button class="btn btn-primary" type="file">
                        <i class="fa fa-fw fa-camera"></i>
                        <span>Ubah foto</span>
                      </button>
                    </div>
                  </div>
                  <div class="text-center text-sm-right">
                    <div class="text-muted"><small>Bergabung sejak 09 Desember 2017</small></div>
                  </div>
                </div>
              </div>
              <ul class="nav nav-tabs">
                <li class="nav-item"><a href="" class="active nav-link">Profil</a></li>
              </ul>
              <div class="tab-content pt-3">
                <div class="tab-pane active">
                  <form class="form" novalidate="" method="post" action="{{route('detailprofile.update',$editUser->id)}}">
                    @csrf
                    <input type="hidden" name="_method" value="put">
                    <div class="row">
                      <div class="col">
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>First Name</label>
                              <input class="form-control" type="text" name="first_name" placeholder="First Name" value="{{$editUser->first_name}}">
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Last Name</label>
                              <input class="form-control" type="text" name="last_name" placeholder="Last Name" value="{{$editUser->last_name}}">
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Username</label>
                              <input class="form-control" type="text" name="username" placeholder="Username" value="{{$editUser->username}}">
                            </div>
                          </div>
                        </div>
                        
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Provinsi</label>
                              <input class="form-control" type="text" name="provinsi" placeholder="Provinsi" value="{{$editUser->provinsi}}">
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Kabupaten/Kota</label>
                              <input class="form-control" type="text" name="kota" placeholder="Kabupaten/Kota" value="{{$editUser->kota}}">
                            </div>
                          </div>
                        </div>
                        
                        <div class="row">
                          <div class="col mb-3">
                            <div class="form-group">
                              <label>Bio</label>
                              <textarea name="description" class="form-control" rows="5" placeholder="Bio">{{$editUser->description}}</textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                       <div class="row">
                      <div class="col-8 offset-2 ">
                                  <div class="form-group">
                                    <input type="text" class="form-control" name="no_tlp" value="{{$editUser->no_tlp}}" id="formGroupExampleInput" placeholder="Nomor Handphone">
                                    <button class="btn btn-instagram"> Sembunyikan <i class="fas fa-eye-slash"></i></button>
                                  </div> 
                      </div>
                    </div>

                     <div class="row">
                    
                   
                     
                      <div class="col-8 offset-2 ">
                        <img height="40px;" width="auto"src="{{asset ('asset/img/desainpelaporan/whatsapp.png')}}">
                                  <div class="form-group">
                                    <input type="text" name="whatsapp" class="form-control" id="formGroupExampleInput" value="{{$editUser->whatsapp}}" placeholder="Nomor Whatsapp">
                                    <button class="btn btn-instagram"> Sembunyikan <i class="fas fa-eye-slash"></i></button>
                                  </div>
                        </div>
                      </div>
                    </div>
<br>
<br>
                          <div class="form-group">
                      <label class="col-md-3 control-label"></label>
                      <div class="col-md-8">
                      <button class="btn btn-primary" type="submit">Simpan</button>
                        <span></span>
                        <input type="reset" class="btn btn-secondary" value="Kembali">
                      </div>
                    </div>
                   </form>  

@endsection