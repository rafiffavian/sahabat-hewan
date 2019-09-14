@extends('master')
@section('content')
<!-- Required Resources -->

<div class="container py-4 my-2">
            <div class="row">
                <div class="col-md-4 pr-md-5">
                    <img  style=""class="img-fluid" alt="Responsive image" src="{{$user->image}}" />
                    <div class="pt-4 mt-2">

                        <section class="mb-4 pb-1">
                            <div class="work-experience pt-2">
                                <div class="section">
                                <h3>{{$user->username}}</h3>
                                <h1>{{Auth::user()->id}}</h1>
                                </div>
                            </div>
                        </section>

                        <section class="mb-5 mb-md-0">
                        <h3 class="h6 font-weight-light text-secondary text-uppercase">Kontak Saya </h3>
                        <p> <i style="color:green"class="fas fa-phone-alt"></i> {{$user->no_tlp}}</p>
                        <a href="https://api.whatsapp.com/send?phone=6287789123707"><img height="40px;" width="auto"src="asset/img/desainpelaporan/whatsapp.png"> Hubungi Whatsapp saya. </a>
                        </section>

                    </div>
                </div>

        <div class="col-md-8">
            <div class="d-flex align-items-center">
                <h2 class="font-weight-bold m-0">
                {{$user->first_name}}&nbsp;{{$user->last_name}}
                </h2>
           </div>
                 <address class="m-0 pt-2 pl-0 pl-md-4 font-weight-light text-secondary">
                    <i class="fa fa-map-marker"></i>
                   {{$user->kelurahan}} {{$user->kota}}, {{$user->provinsi}}
                </address>
            <p class="h5 text-primary mt-2 d-block font-weight-light">
            </p>
            <p class="lead mt-4">{{$user->description}}. </p>
           
            <section class="d-flex mt-5">
                <a href="{{route('detailprofile.edit',$user->id)}}" class="btn btn-success"> <i class="fas fa-cog"></i> Ubah Profil</a>
            </section>
            <section class="mt-4">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                            Tentang saya
                        </a>
                    </li>
                   
                    
                   
                </ul>
                <div class="tab-content py-4" id="myTabContent">
                    <div class="tab-pane py-3 fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h4 class="text-uppercase font-weight-bold text-success">
                            Open Adopsi Free untuk hewan 
                        </h4>
                        <br>
                       <!-- Konten Gallery Peliharaanku -->
                       <section class="gallery-block grid-gallery">
                           <div class="container">
                               <button style= "rounded:100%"type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#tambahfoto"><i class="fas fa-plus"></i> Tambah Foto</button>
                               <div class="row">
                                   
                    @foreach($adoption as $adoptions)        
                        <div class="col-6 col-md-4">
                            <a class="lightbox" href="{{ url('adoptionimage/' . $adoptions->image) }}">
                                <img style="margin-top: 25px;width: 200px; height: 200px;object-fit: cover;" class="rounded img-fluid image scale-on-hover" src="{{ url('adoptiontimage/' . $adoptions->image) }}">
                            </a>
                            <button type="button" class="btn btn-danger btn-sm">  <i class="fas fa-trash"></i> Hapus</button>
                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#husky">  Ubah</button>
                        </div>
                    @endforeach        
                        
                    </div>
                </div>
            </section>
        
        <br>
        <br>
        <br>
        
                        <!-- Selesai Konten Gallery Peliharaanku -->

                       
                    <!-- Akhir dari Tab Tentang Saya -->

                    <!-- AWAL tab Mengikuti -->
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
                                <button class="btn btn-primary btn-round">Mengikuti</button>
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
                                <button class="btn btn-primary btn-round">Mengikuti</button>
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
                                <button class="btn btn-primary btn-round">Mengikuti</button>
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
                    <!-- Akhir Tab Mengikuti -->
                 
                </div>
            </section>
        </div>
    </div>
</div>



<!-- Modal Edit -->
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
                    <input type="text" name="animal_name" value="" class="form-control" id="formGroupExampleInput" placeholder="Misal: Cody">
                </div>
                 <div class="form-group">
                    <label for="exampleFormControlFile1">Unggah Foto</label>
                    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                 </div>
                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Kategori</label>
                    <select name="id_animaltype" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                        @foreach($animal as $animals)
                            <option value="{{$animals->id}}">{{$animals->name}}</option>
                       @endforeach   
                    </select>
                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Jenis</label>
                    <input type="text" name="animal_kind" placeholder="Misal: Siberian Husky" class="form-control">
                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Jenis Kelamin</label>
                    <select name="gender" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                        <option value="lakilaki">laki-Laki</option>
                         <option value="perempuan">perempuan</option>
                    </select>
                <div class="form-group">
                    <label for="formGroupExampleInput">Lahir </label>
                    <input type="date" name="birth" class="form-control" id="formGroupExampleInput" placeholder="DD-MM-YYYY">
                </div>
                 <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Tingkat agresivitas</label>
                    <select name="" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                        <option selected>Baik</option>
                        <option value="1">Biasa</option>
                        <option value="3">Sedikit Galak</option>
                        <option value="1">Galak</option>
                    </select>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Alasan Lepas Adopsi</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
        </form>
      </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
    </div>
  </div>
</div>
<!-- Akhir Modal Edit -->

<!-- Awal Modal Tambah -->
<!-- Modal -->
<div class="modal fade" id="tambahfoto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Beri Hewan Adopsi </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('adoption.store')}}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="formGroupExampleInput">Nama Peliharaan </label>
                    <input type="text" name="animal_name" class="form-control" id="formGroupExampleInput" placeholder="Misal: Cody">
                </div>
                 <div class="form-group">
                    <label for="exampleFormControlFile1">Unggah Foto</label>
                    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                 </div>
                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Kategori</label>
                    <select name="id_animaltype" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                    @foreach($animal as $animals)
                        <option value="{{$animals->id}}">{{$animals->name}}</option>
                      @endforeach   
                    </select>
                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Jenis</label>
                    <input type="text" name="animal_kind" placeholder="Misal: Siberian Husky" class="form-control">
                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Jenis Kelamin</label>
                  <select name="gender" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                      
                        <option value="lakilaki">laki-Laki</option>
                        <option value="perempuan">perempuan</option>
                      
                    </select>
                <div class="form-group">
                    <label for="formGroupExampleInput">Lahir </label>
                    <input type="date" name="birth" class="form-control" id="formGroupExampleInput" placeholder="DD-MM-YYYY">
                </div>
                 <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Tingkat agresivitas</label>
                    <select name="agresiv"class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                        <option value="baik">Baik</option>
                        <option value="biasa">Biasa</option>
                        <option value="sedikitgalak">Sedikit Galak</option>
                        <option value="galak">Galak</option>
                    </select>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Alasan Lepas Adopsi</label>
                        <textarea class="form-control" name="alasan" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Akhir Modal Tambah -->
@endsection