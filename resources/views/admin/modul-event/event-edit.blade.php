@extends('layouts.master')

@section('content')
        <form class="form-horizontal" method="post" action="{{route('event.update',$editEvent->id)}}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="put">
        <fieldset>

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
        <label class="col-md-4 control-label" for="textinput">Nama Event</label>  
            <div class="col-md-4">
                <input id="textinput" name="name" type="text" value="{{$editEvent->name}}" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Alamat</label>  
            <div class="col-md-4">
                <input id="textinput" name="location" type="text" value="{{$editEvent->location}}" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Time Start</label>  
            <div class="col-md-4">
                <input id="textinput" name="rating" type="time" value="{{$editEvent->time}}" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Time Finish</label>  
            <div class="col-md-4">
                <input id="textinput" name="rating" type="time" value="{{$editEvent->time_finish}}" class="form-control input-md">
            </div>
        </div>
        <label class="col-md-4 control-label" for="textinput">Url Lokasi</label>  
            <div class="col-md-4">
                <textarea name="url_lokasi" id="" cols="30" rows="10">{{$editEvent->url_lokasi}}</textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Description</label>  
            <div class="col-md-4">
                <textarea name="description" id="" cols="30" rows="10">{{$editEvent->description}}</textarea>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">price</label>  
            <div class="col-md-4">
                <input id="textinput" name="price" type="text" value="{{$editEvent->price}}" class="form-control input-md">
            </div>
        </div>
        
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Wilayah</label>  
            <div class="col-md-4">
                <select name="id_jakartatype" id="" class="form-control">
               @foreach($wilayah as $wilayahku)
                    <option value="{{$wilayahku->id}}" @if($wilayahku->id == $editEvent->id_jakartatype) selected="selected" @endif>{{$editEvent->name}}</option>
               @endforeach     
               
                </select>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Jenis Hewan</label>  
            <div class="col-md-4">
                <select name="id_animaltype" id="" class="form-control">
               @foreach($animal as $animals)
                    <option value="{{$animals->id}}">{{$animals->name}}</option>
                    <option value="{{$animals->id}}" @if($animals->id == $editEvent->id_animaltype) selected="selected" @endif>{{$editEvent->name}}</option>
               @endforeach     
               
                </select>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Whatsapp</label>  
            <div class="col-md-4">
                <input id="textinput" name="whatsapp" type="text" value="{{$editEvent->whatsapp}}" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Line</label>  
            <div class="col-md-4">
                <input id="textinput" name="line" type="text" value="{{$editEvent->line}}" class="form-control input-md">
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
