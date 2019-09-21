@extends('layouts.master')

@section('content')
        <form class="form-horizontal" method="post" action="{{route('comunity.update',$editComunity->id)}}" enctype="multipart/form-data">
        @csrf
        @include('layouts.error-form')
        <fieldset>
            <input type="hidden" name="_method" value="put">

        <!-- Form Name -->
        <legend>Form Create Admin</legend>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Image</label>  
            <div class="col-md-4">
                <input id="textinput" name="image" type="file" placeholder="Image" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Nama Komunitas</label>  
            <div class="col-md-4">
                <input id="textinput" name="name" type="text" value="{{$editComunity->name}}" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Url Alamat</label>  
            <div class="col-md-4">
                <textarea name="url_lokasi" id="" cols="30" rows="10">{{$editComunity->url_lokasi}}</textarea>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Alamat</label>  
            <div class="col-md-4">
                <input id="textinput" name="location" type="text" value="{{$editComunity->location}}" class="form-control input-md">
            </div>
        </div>
      
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Description</label>  
            <div class="col-md-4">
                <textarea name="description" id="" cols="30" rows="10">{{$editComunity->description}}</textarea>
            </div>
        </div>
        
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Wilayah</label>  
            <div class="col-md-4">
                <select name="id_jakartatype" id="" class="form-control">
               @foreach($wilayah as $wilayahku)
                    <option value="{{$wilayahku->id}}" @if($wilayahku->id == $editComunity->id_jakartatype) selected="selected" @endif>{{$wilayahku->name}}</option>
                   
               @endforeach     
               
                </select>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Jenis Hewan</label>  
            <div class="col-md-4">
                <select name="id_animaltype" id="" class="form-control">
               @foreach($animal as $animals)
                    <option value="{{$animals->id}}" @if($animals->id == $editComunity->id_animaltype) selected="selected" @endif>{{$animals->name}}</option>
                   
               @endforeach     
               
                </select>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Instagram</label>  
            <div class="col-md-4">
                <input id="textinput" name="instagram" type="text" value="{{$editComunity->instagram}}" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Whatsapp</label>  
            <div class="col-md-4">
                <input id="textinput" name="whatsapp" type="text" value="{{$editComunity->whatsapp}}" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Line</label>  
            <div class="col-md-4">
                <input id="textinput" name="Line" type="text" value="{{$editComunity->Line}}" class="form-control input-md">
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
