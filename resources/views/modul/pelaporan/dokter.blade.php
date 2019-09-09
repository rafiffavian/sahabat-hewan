@extends('master')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-7">
      
      <div style="text-align: center;">
      <img width = "80%" height ="auto" class=" " src="asset/img/desainpelaporan/dokter.png" alt="">
      <button style=" margin: 0 auto;" type="button" class="btn btn-success text-center btn-lg" data-toggle="modal" data-target="#caridokter">Cari dokter hewan <i class="fas fa-search-location ml-2"></i> </button></div>
      
    </div>
    <div class="col-md-5 mt-4">
     <h4 style="margin-top:60px;"class="font-weight-bold" style="font-family:Segoe UI Symbol " style="padding-top"> Laporkan Hewan Terluka ke Dokter Sekarang Juga!</h4>
     <hr style="height:3px;border:none;color:#333;background-color:#333;">
     <p class="font-weight-light">Sahabat Hewan merupakan platform untuk pecinta hewan yang melindungi hak asasi hewan.  Peduli terhadap hewan  yang membutuhkan pertolongan merupakan suatu sikap kepedulian anda terhadap hewan. Anda dapat membantu kami dengan melaporkan hewan yang terluka pada dokter hewan. Dengan Fitur dokter hewan kamu akan mendapatkan rekomendasi dokter hewan terdekatmu!


     
   
     
    
    
    </div>
  </div>
  
  
  <div class="row">
  <div class="col-md-8 offset-2" style="margin-top:160px;">
  
  </div>
  </div>

  <!-- modal cari dokter -->
  <!-- Modal -->
<div class="modal fade" id="caridokter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Dokter Hewan Terdekatmu </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <div id="googleMap" style="width:100%;height:400px;"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
@endsection