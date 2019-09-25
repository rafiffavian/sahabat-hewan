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
                <option value="{{$editUser->gender}}">{{$editUser->gender}}</option>                    
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
        <label class="col-md-4 control-label" for="textinput">Whatsapp</label>  
            <div class="col-md-4">
                <input id="textinput" name="whatsapp" type="text" value="{{$editUser->whatsapp}}" class="form-control input-md">
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
            <label class="col-md-4 control-label" for="textinput">Password</label>  
            <div class="col-md-4">
                <input type="password" name="password" value="{{$editUser->password}}">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Tanggal Lahir</label>  
            <div class="col-md-4">
               <input type="date" name="tanggal_lahir" value="{{$editUser->tanggal_lahir}}">
            </div>
        </div>  <br>           
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Provinsi</label>  
            <div class="col-md-4">
                <input id="textinput" name="provinsi" value="{{$editUser->provinsi}}" type="text" placeholder="Provinsi" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Kota</label>  
            <div class="col-md-4">
                <input id="textinput" value="{{$editUser->kota}}" name="kota" type="text" placeholder="Kota" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Kelurahan</label>  
            <div class="col-md-4">
                <input id="textinput" value="{{$editUser->kelurahan}}" name="kelurahan" type="text" placeholder="Kelurahan" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Kecamatan</label>  
            <div class="col-md-4">
                <input id="textinput" value="{{$editUser->kecamatan}}" name="kecamatan" type="text" placeholder="Kecamatan" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Role</label>  
            <div class="col-md-4">
                <select name="id_role" id="" class="form-control">               
                @foreach($role as $roles)    
                    <option value="{{$roles->id}}" @if($roles->id == $editUser->id_role) selected="selected" @endif>{{$roles->name}}</option>
               @endforeach     
                </select>
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
