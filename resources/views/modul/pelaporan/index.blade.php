@extends('master')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-7">
      <img src="asset/img/logo/dog.png" alt="">
    </div>
    <div class="col-md-5">
     <h4 style="margin-top:60px;"class="font-weight-bold" style="font-family:Segoe UI Symbol " style="padding-top"> Hentikan Kekerasan Hewan Sekarang Juga!</h4>
     <hr style="height:3px;border:none;color:#333;background-color:#333;">
     <p class="font-weight-light">Sahabat Hewan merupakan platform untuk pecinta hewan yang melindungi hak asasi hewan. Sesuatu seperti penyiksaan hewan dan keadaan hewan terlantar harap laporkan pada tim kami. Peduli terhadap hewan  yang membutuhkan pertolongan merupakan suatu sikap kepedulian anda terhadap hewan. Anda dapat membantu kami dengan mengisi form dibawah ini atau melakukan laporan pada social media kami di : </p>
     <a href=""> <img width="50" height="50" src="asset/img//desainpelaporan/whatsapp2.png" alt=""></a>
     <a href=""><img width="50" height="50" src="asset/img//desainpelaporan/telegram.png" alt=""></a>
     <a href=""> <img width="50" height="50" src="asset/img//desainpelaporan/twitter.png" alt=""></a>
     <a href=""><img width="50" height="50" src="asset/img//desainpelaporan/insta.png" alt=""></a>
     
    
    
    </div>
  </div>
  
  
  <div class="row">
  <div class="col-md-8 offset-2" style="margin-top:160px;">
  <h4 class="font-weight-bold text-center" >Form Laporan</h4>
   <hr style="height:3px;border:none;color:#333;background-color:#666;" width="200">
   <br>
  <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputnamadepan">Nama Depan</label>
      <input type="text" class="form-control" id="inputnamadepan" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputnamabelakang">Nama Belakang</label>
      <input type="text" class="form-control" id="inputnamabelakang" placeholder="Password">
    </div>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email </label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email@example.com">
    
  </div>
   <div class="form-group">
    <label for="exampleFormControlFile1">Upload Gambar</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
    <small id="" class="form-text text-muted">Upload gambar hewan disini(maks:500kb).</small>
  </div>
   <div class="form-row">
      <div class="col-md-3 ">
      <label for="validationDefault05">Provinsi</label>
       <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
      <div class="col-md-3 ">
      <label for="validationDefault05">Kota</label>
       <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="col-md-3 ">
      <label for="validationDefault05">Kecamatan</label>
       <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="col-md-3 ">
      <label for="validationDefault05">Kelurahan</label>
       <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
      <small id="" class="form-text text-muted">Harap isi kokasi kejadian</small>
  </div>
   <div class="form-group">
    <label for="exampleFormControlTextarea1">Alamat Lengkap</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <label for="customRange3">Tingkat keparahan </label> 
<input type="range" class="custom-range" min="0" max="5" step="0.5" id="customRange3"> 
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Keterangan</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
</form>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
  </div>
@endsection