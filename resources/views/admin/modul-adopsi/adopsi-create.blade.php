@extends('layouts.master')

@section('content')
        <form class="form-horizontal" method="post" action="{{route('dopsiadmin.store')}}" enctype="multipart/form-data">
        @csrf
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
        <label class="col-md-4 control-label" for="textinput">Nama Hewan</label>  
            <div class="col-md-4">
                <input id="textinput" name="animal_name" type="text" placeholder="Nama Hewan" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Kategori</label>  
            <div class="col-md-4">
                <select name="id_animaltype" id="" class="form-control">
               @foreach($animal as $animals)
                    <option value="{{$animals->id}}">{{$animals->name}}</option>
               @endforeach     
               
                </select>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Jenis Hewan</label>  
            <div class="col-md-4">
                <input id="textinput" name="animal_kind" type="text" placeholder="Jenis Hewan" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Tanggal Lahir</label>  
            <div class="col-md-4">
                <input id="textinput" name="birth" type="date" placeholder="Tanggal Lahir" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Gender</label>  
            <div class="col-md-4">
                <select name="gender" id="" class="form-control">         
                    <option value="lakilaki">Laki-laki</option>            
                    <option value="perempuan">Perempuan</option>            
                </select>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Agresive</label>  
            <div class="col-md-4">
                <select name="agresiv"class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                        <option value="baik">Baik</option>
                        <option value="biasa">Biasa</option>
                        <option value="sedikitgalak">Sedikit Galak</option>
                        <option value="galak">Galak</option>
                </select>
            </div>
        </div>
       
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Alasan</label>  
            <div class="col-md-4">
                <textarea name="alasan" id="" cols="30" rows="10"></textarea>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">asal</label>  
            <div class="col-md-4">
                <select name="asal"class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                        <option value="1">User</option>
                        <option value="2">Komunitas</option>
                </select>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">admin</label>  
            <div class="col-md-4">
                <select name="id_admin"class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                    @foreach($admin as $admins)
                        <option value="{{$admins->id}}">{{$admins->first_name}}</option>
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
