@extends('layouts.master')

@section('content')
        <form class="form-horizontal" method="post" action="{{route('user.update', $editUser->id)}}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="put">
        <fieldset>

        <!-- Form Name -->
        <legend>Form Create User</legend>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Image</label>  
            <div class="col-md-4">
                <input id="textinput" name="image" type="file" class="form-control input-md">
            </div>
        </div>
       
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Nama Depan</label>  
            <div class="col-md-4">
                <input id="textinput" name="first_name" type="text" value="{{$editUser->first_name}}" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Nama Belakang</label>  
            <div class="col-md-4">
                <input id="textinput" name="last_name" type="text" value="{{$editUser->last_name}}" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Jenis Kelamin</label>  
            <div class="col-md-4">
                <select name="gender" id="" class="form-control">   
                <option value="{{$editAdmin->gender}}">{{$editAdmin->gender}}</option>                    
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">No Telp</label>  
            <div class="col-md-4">
                <input id="textinput" name="no_tlp" type="text" value="{{$editUser->no_tlp}}" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Email</label>  
            <div class="col-md-4">
                <input id="textinput" name="email" type="email" value="{{$editUser->email}}" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Username</label>  
            <div class="col-md-4">
                <input id="textinput" name="username" type="text" value="{{$editUser->username}}" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Description</label>  
            <div class="col-md-4">
                <textarea name="description" id="" cols="30" rows="10">{{$editUser->description}}</textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Alamat</label>  
            <div class="col-md-4">
                <textarea name="address" id="" cols="30" rows="10">{{$editUser->address}}</textarea>
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
