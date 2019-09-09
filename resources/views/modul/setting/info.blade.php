@extends('master')
@section('content')
<!-- Required Resources -->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<br>
<div class="container">
<div class="row flex-lg-nowrap">
  <div class="col-12 col-lg-auto mb-3" style="width: 200px;">
    <div class="card p-3">
      <div class="e-navlist e-navlist--active-bg">
        <ul class="nav">
          <li class="nav-item"><a class="nav-link px-2 active" href="/info"><i class="fa fa-user"></i><span> Informasi saya</span></a></li>
          <li class="nav-item"><a class="nav-link px-2" href="/gantipassword"><i class="fas fa-unlock-alt"></i><span> Ganti Password</span></a></li>
         
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
              
              <ul class="nav nav-tabs">
                <li class="nav-item"><a href="" class="active nav-link">Informasi saya</a></li>
              </ul>
              <div class="tab-content pt-3">
                <div class="tab-pane active">
                  <form class="form" novalidate="">
                    <div class="row">
                      <div class="col">
                        <div class="row">
                          
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Email</label>
                              <input class="form-control" type="text" placeholder="user@example.com">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                         <div class="form-group">
                            <label for="inputAddress">Nomor Handphone</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="+62878880000">
                          </div>
                          </div>
                        </div>
                         <div class="row">
                          <div class="col">
                         <div class="form-group">
                            <label for="inputAddress">Jenis Kelamin</label>
                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                              <option selected>Laki-Laki</option>
                              <option value="1">Perempuan</option>
                            </select>
                          </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                     
                    <div class="row">
                    <div class="col">
                      <div class="col d-flex justify-content-end">
                        <button class="btn btn-primary" type="submit">Simpan</button>
                      </div>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      

  </div>
</div>
</div>

@endsection