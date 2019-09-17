@extends('layouts.master')

@section('content')
        <form class="form-horizontal" method="post" action="{{route('admin.update',$editAdmin->id)}}" enctype="multipart/form-data">
        @csrf
        <fieldset>
            <input type="hidden" name="_method" value="put">

        <!-- Form Name -->
        <legend>Form Edit Admin</legend>

        <!-- Text input-->
       
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Nama Depan</label>  
            <div class="col-md-4">
                <input id="textinput" name="first_name" type="text" value="{{$editAdmin->first_name}}" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Nama Belakang</label>  
            <div class="col-md-4">
                <input id="textinput" name="last_name" type="text" value="{{$editAdmin->last_name}}" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Username</label>  
            <div class="col-md-4">
                <input id="textinput" name="username" type="text" value="{{$editAdmin->username}}"class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">No Telp</label>  
            <div class="col-md-4">
                <input id="textinput" name="no_tlp" type="text" value="{{$editAdmin->no_tlp}}" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Email</label>  
            <div class="col-md-4">
                <input id="textinput" name="email" type="email" value="{{$editAdmin->email}}" class="form-control input-md">
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
        <label class="col-md-4 control-label" for="textinput">Role</label>  
            <div class="col-md-4">
                <select name="id_role" id="" class="form-control">
             
               @foreach($role as $roles)
                    <option value="{{$roles->id}}" @if($roles->id == $editAdmin->id_role) selected="selected" @endif>{{$roles->name}}</option>
               @endforeach     
               
                </select>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Password</label>  
            <div class="col-md-4">
                <input id="textinput" name="password" type="text" value="{{$editAdmin->password}}" class="form-control input-md">
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
