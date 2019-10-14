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
            @if($detailComunity->image != null)        
            <img src="{{ url('/') }}/comunityimage/{{$detailComunity->image}}" width="200" alt="">
            @else <td><img  width="100"lass="img-fluid" alt="Responsive image" src="{{ url('/') }}/userimage/anon.jpg" /></td>
            @endif
            </div>
        </div><br>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Nama Komunitas:</h4></label>  
            <div class="col-md-4">
                <h2>{{$detailComunity->name}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Jenis hewan</h4></label>  
            <div class="col-md-4">
                <h2>{{$detailComunity->myhewan->name}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Alamat Komunitas</h4></label>  
            <div class="col-md-4">
                 <h2>{{$detailComunity->location}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Wilayah</h4></label>  
            <div class="col-md-4">
             <h2>{{$detailComunity->mywilayah->name}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>URL lokasi</h4></label>  
            <div class="col-md-4">
                <h4><a href="{{$detailComunity->url_lokasi}}">Url Lokasi</a></h4>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Whatsapp</h4></label>  
            <div class="col-md-4">
                 <h2>{{$detailComunity->whatsapp}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Line</h4></label>  
            <div class="col-md-4">
                 <h2>{{$detailComunity->Line}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Instagram</h4></label>  
            <div class="col-md-4">
                 <h2>{{$detailComunity->instagram}}</h2>
            </div>
        </div>
       

        <!-- Text input-->

        <div class="form-group text-center">
                 
        </div>

        </fieldset>
        </form>
@endsection        
