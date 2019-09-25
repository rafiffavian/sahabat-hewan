@extends('layouts.master')

@section('content')
        <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
        @csrf
        <fieldset>

        <!-- Form Name -->
        <legend>Detail Table User</legend>

        <!-- Text input-->
        
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Gambar:</h4></label>  
            <div class="col-md-4">
            <img src="{{ url('userimage/' . $detailUser->image) }}" width="200" alt="">
            </div>
        </div><br>
        
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>First_name:</h4></label>  
            <div class="col-md-4">
             <h2>{{$detailUser->first_name}}</h2>
            </div>
        </div><br>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Last_name:</h4></label>  
            <div class="col-md-4">
                <h2>{{$detailUser->last_name}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Role</h4></label>  
            <div class="col-md-4">
                <h2>{{$detailUser->myrole->name}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Jenis Kelamin</h4></label>  
            <div class="col-md-4">
                <h2>{{$detailUser->gender}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>No Tlp</h4></label>  
            <div class="col-md-4">
                 <h2>{{$detailUser->no_tlp}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Whatsapp</h4></label>  
            <div class="col-md-4">
                 <h2>{{$detailUser->whatsapp}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>email</h4></label>  
            <div class="col-md-4">
             <h2>{{$detailUser->email}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>username</h4></label>  
            <div class="col-md-4">
                <h2>{{$detailUser->username}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>tanggal lahir</h4></label>  
            <div class="col-md-4">
                <h2>{{$detailUser->tanggal_lahir}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>description</h4></label>  
            <div class="col-md-4">
                <h2>{{$detailUser->description}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>provinsi</h4></label>  
            <div class="col-md-4">
                <h2>{{$detailUser->provinsi}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>kota</h4></label>  
            <div class="col-md-4">
                <h2>{{$detailUser->kota}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>kelurahan</h4></label>  
            <div class="col-md-4">
                <h2>{{$detailUser->kelurahan}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>kecamatan</h4></label>  
            <div class="col-md-4">
                <h2>{{$detailUser->kecamatan}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>created_at</h4></label>  
            <div class="col-md-4">
                <h2>{{$detailUser->created_at}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>updated_at</h4></label>  
            <div class="col-md-4">
                <h2>{{$detailUser->updated_at}}</h2>
            </div>
        </div>
       
       
       

        <!-- Text input-->

        <div class="form-group text-center">
                 
        </div>

        </fieldset>
        </form>
@endsection        
