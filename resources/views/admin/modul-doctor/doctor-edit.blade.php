@extends('layouts.master')

@section('content')
        <form class="form-horizontal" method="post" action="{{route('finddoctor.update',$editDoctor->id)}}" enctype="multipart/form-data">
        @csrf
        @include('layouts.error-form')
        <fieldset>

        <!-- Form Name -->
        <legend>Form Create Admin</legend>

        <!-- Text input-->
        <input type="hidden" name="_method" value="put">
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Image</label>  
            <div class="col-md-4">
                <input id="textinput" name="image" type="file" placeholder="Image" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Nama Doctor</label>  
            <div class="col-md-4">
                <input id="textinput" value="{{$editDoctor->name}}" name="name" type="text" placeholder="Nama Doctor" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">No Tlp</label>  
            <div class="col-md-4">
                <input id="textinput" value="{{$editDoctor->no_tlp}}" name="no_tlp" type="text" placeholder="No TLP" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Kelurahan</label>  
            <div class="col-md-4">
                <input id="textinput" value="{{$editDoctor->kelurahan}}" name="kelurahan" type="text" placeholder="Kelurahan" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Kota</label>  
            <div class="col-md-4">
                <input id="textinput" value="{{$editDoctor->kota}}" name="kota" type="text" placeholder="Kota" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Kecamatan</label>  
            <div class="col-md-4">
                <input type="text" value="{{$editDoctor->kecamatan}}" name="kecamatan" placeholder="Kecamatan" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Provinsi</label>  
            <div class="col-md-4">
                <input type="text" value="{{$editDoctor->provinsi}}" name="provinsi" placeholder="Provinsi" class="form-control input-md">  
            </div>
        </div>
       
        <!-- Text input-->
       <br>
        

        <!-- Text input-->

        <div class="form-group text-center">
                  <button class="btn btn-primary" type="submit">Simpan</button>
        </div>

        </fieldset>
        </form>
@endsection        
