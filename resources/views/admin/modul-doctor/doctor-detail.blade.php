@extends('layouts.master')

@section('content')
        <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
        @csrf
        <fieldset>

        <!-- Form Name -->
        <legend>Detail Table Komunitas</legend>

        <!-- Text input-->
        
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Gambar:</h4></label>  
            <div class="col-md-4">
            <img src="{{ url('doctorimage/' . $detailDoctor->image) }}" width="200" alt="">
            </div>
        </div><br>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Nama Dokter:</h4></label>  
            <div class="col-md-4">
                <h2>{{$detailDoctor->name}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>No Telpon</h4></label>  
            <div class="col-md-4">
                <h2>{{$detailDoctor->no_tlp}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Kelurahan</h4></label>  
            <div class="col-md-4">
                 <h2>{{$detailDoctor->kelurahan}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Kecamatan</h4></label>  
            <div class="col-md-4">
             <h2>{{$detailDoctor->kecamatan}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Kota</h4></label>  
            <div class="col-md-4">
                <h2>{{$detailDoctor->kota}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Provinsi</h4></label>  
            <div class="col-md-4">
                 <h2>{{$detailDoctor->provinsi}}</h2>
            </div>
        </div>
      
       

        <!-- Text input-->

        <div class="form-group text-center">
                 
        </div>

        </fieldset>
        </form>
@endsection        
