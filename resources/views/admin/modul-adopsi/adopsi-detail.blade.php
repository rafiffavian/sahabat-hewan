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
            @if($detailAdopsi->image != null)            
            <img src="{{ url('/') }}/adoptionimage/{{$detailAdopsi->image}}" width="200" alt="">
            @else <td><img  width="100"lass="img-fluid" alt="Responsive image" src="{{ url('/') }}/userimage/anon.jpg" /></td>
            @endif
            </div>
        </div><br>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Nama Hewan:</h4></label>  
            <div class="col-md-4">
                <h2>{{$detailAdopsi->animal_name}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Kategori</h4></label>  
            <div class="col-md-4">
                <h2>{{$detailAdopsi->myhewan->name}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Jenis Hewan</h4></label>  
            <div class="col-md-4">
                <h2>{{$detailAdopsi->animal_kind}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Tanggal Lahir</h4></label>  
            <div class="col-md-4">
                 <h2>{{ $detailAdopsi->birth}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Gender</h4></label>  
            <div class="col-md-4">
             <h2>{{$detailAdopsi->gender}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Tingkat Agresivitas</h4></label>  
            <div class="col-md-4">
                 <h2>{{$detailAdopsi->agresiv}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Alasan</h4></label>  
            <div class="col-md-4">
                 <h2>{{$detailAdopsi->alasan}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Asal</h4></label>  
            <div class="col-md-4">
            @if($detailAdopsi->asal == 1) 
            <h2>User</h2>
            @else
            <td>Komunitas</td>
            @endif
                
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Lokasi</h4></label>  
            <div class="col-md-4">
                 <h2>{{$detailAdopsi->lokasi}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Whatsapp</h4></label>  
            <div class="col-md-4">
                 <h2>{{$detailAdopsi->whatsapp}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Created_at</h4></label>  
            <div class="col-md-4">
                 <h2>{{$detailAdopsi->created_at}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Updated_at</h4></label>  
            <div class="col-md-4">
                 <h2>{{$detailAdopsi->updated_at}}</h2>
            </div>
        </div>
       

        <!-- Text input-->

        <div class="form-group text-center">
                 
        </div>

        </fieldset>
        </form>
@endsection        
