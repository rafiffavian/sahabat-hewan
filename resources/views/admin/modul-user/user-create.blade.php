@extends('layouts.master')

@section('content')
        <form class="form-horizontal" method="post" action="{{route('user.store')}}" enctype="multipart/form-data">
        @csrf
        <fieldset>

        <!-- Form Name -->
        <legend>Form Create User</legend>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Image</label>  
            <div class="col-md-4">
                <input id="textinput" name="image" type="file" placeholder="Image" class="form-control input-md">
            </div>
        </div>
       
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
        <label class="col-md-4 control-label" for="textinput">Jenis Kelamin</label>  
            <div class="col-md-4">
                <select name="gender" id="" class="form-control">               
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">No Telp</label>  
            <div class="col-md-4">
                <input id="textinput" name="no_tlp" type="text" placeholder="No Telp" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">No Whatsapp</label>  
            <div class="col-md-4">
                <input id="textinput" name="whatsapp" type="text" placeholder="Username" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Email</label>  
            <div class="col-md-4">
                <input id="textinput" name="email" type="email" placeholder="Email" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Password</label>  
            <div class="col-md-4">
                <input id="textinput" name="password" type="text" placeholder="Password" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Username</label>  
            <div class="col-md-4">
                <input id="textinput" name="username" type="text" placeholder="Username" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Description</label>  
            <div class="col-md-4">
                <textarea name="description" id="" cols="30" rows="10"></textarea>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-offset-3" for="textinput">Tanggal Lahir</label>  <br><br>
                    <div class="col-md-2 col-md-offset-3">
                        <select name="tanggal" class="form-control tanggal custom-select custom-select-sm">
                          <option value="1" selected>1</option>
                          @for($i=2; $i < 32; $i++)
                              <option value="{{$i}}">{{$i}}</option>
                          @endfor     
                          </select>
                      </div>
                      <div class="col-md-2">
                        <select name="bulan" class="form-control tanggal custom-select custom-select-sm">
                          <option value="1" selected>1</option>
                          @for($i=2; $i < 13; $i++)
                              <option value="{{$i}}">{{$i}}</option>
                          @endfor                     
                          </select>
                      </div>
                      <div class="col-md-2">
                        <select name="tahun" class="form-control tanggal custom-select custom-select-sm">
                        @for ($i = $last; $i <= $now; $i++)   
                          <option value="{{$i}}" selected>{{$i}}</option>
                        @endfor 
                          </select>
                      </div>
        </div>   <br>           
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Provinsi</label>  
            <div class="col-md-4">
                <input id="textinput" name="provinsi" type="text" placeholder="Provinsi" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Kota</label>  
            <div class="col-md-4">
                <input id="textinput" name="kota" type="text" placeholder="Kota" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Kelurahan</label>  
            <div class="col-md-4">
                <input id="textinput" name="kelurahan" type="text" placeholder="Kelurahan" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Kecamatan</label>  
            <div class="col-md-4">
                <input id="textinput" name="kecamatan" type="text" placeholder="Kecamatan" class="form-control input-md">
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
