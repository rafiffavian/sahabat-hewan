@extends('master')
@section('content')
<!-- Required Resources -->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<style type="text/css">
       .custom-file-input::-webkit-file-upload-button {
  visibility: hidden;
      }
      .custom-file-input::before {
        content: 'Select some files';
        display: inline-block;
        background: linear-gradient(top, #f9f9f9, #e3e3e3);
        border: 1px solid #999;
        border-radius: 3px;
        padding: 5px 8px;
        outline: none;
        white-space: nowrap;
        -webkit-user-select: none;
        cursor: pointer;
        text-shadow: 1px 1px #fff;
        font-weight: 700;
        font-size: 10pt;
      }
      .custom-file-input:hover::before {
        border-color: black;
      }
      .custom-file-input:active::before {
        background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
}
</style>
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
                      <a href="#file" class="btn btn-primary">
                        <i class="fa fa-fw fa-camera"></i>
                        <span>Ubah foto</span>
                        </a>
                        <input type="file" class="custom-file-input">
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
                              <input class="form-control" type="text" name="provinsi" placeholder="Misal : jakarta" value="{{$editUser->provinsi}}">
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Kabupaten/Kota</label>
                              <input class="form-control" type="text" name="kota" placeholder="Misal : jakarta timur" value="{{$editUser->kota}}">
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Kelurahan</label>
                              <input class="form-control" type="text" name="kelurahan" placeholder="Misal: rawamangun" value="{{$editUser->kelurahan}}">
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
                        <span></span>
                        <a href="javascript:history.back()" class="btn btn-danger">Kembali</a>
                        <button class="btn btn-primary" type="submit">Simpan</button>
                        <input type="reset" class="btn btn-secondary" value="Reset">
                      </div>
                    </div>
                   </form>  

@endsection