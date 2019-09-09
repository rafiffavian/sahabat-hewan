@extends('layouts.master')

@section('content')
        <form class="form-horizontal" method="post" action="{{route('admin.store')}}" enctype="multipart/form-data">
        @csrf
        <fieldset>

        <!-- Form Name -->
        <legend>Form Create Admin</legend>

        <!-- Text input-->
       
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Nama Depan</label>  
            <div class="col-md-4">
                <input id="textinput" name="first_name" type="text" placeholder="Nama Depan" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Nama Belakang</label>  
            <div class="col-md-4">
                <input id="textinput" name="last_name" type="text" placeholder="Nama Belakang" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Username</label>  
            <div class="col-md-4">
                <input id="textinput" name="username" type="text" placeholder="Username" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">No Telp</label>  
            <div class="col-md-4">
                <input id="textinput" name="no_tlp" type="text" placeholder="No Telp" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Email</label>  
            <div class="col-md-4">
                <input id="textinput" name="email" type="email" placeholder="Email" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Jenis Kelamin</label>  
            <div class="col-md-4">
                <select name="gender" id="" class="form-control">               
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
                    <option value="{{$roles->id}}">{{$roles->name}}</option>
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
