@extends('layouts.master')

@section('content')
        <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
        @csrf
        <fieldset>

        <!-- Form Name -->
        <legend>Detail Table Pendaftaran Komunitas</legend>

        <!-- Text input-->
        
        <div class="form-group">
        
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Nama User:</h4></label>  
            <div class="col-md-4">
                <h2>{{$detailDafkom->user->first_name}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Nama Komunitas</h4></label>  
            <div class="col-md-4">
                <h2>{{$detailDafkom->nama_komunitas}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>No Tlp</h4></label>  
            <div class="col-md-4">
                 <h2>{{$detailDafkom->no_tlp}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Whatsapp</h4></label>  
            <div class="col-md-4">
             <h2>{{$detailDafkom->whatsapp}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Email</h4></label>  
            <div class="col-md-4">
                 <h2>{{$detailDafkom->email}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Alasan</h4></label>  
            <div class="col-md-4">
                <h4>{{$detailDafkom->alasan}}</h4>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Created_at</h4></label>  
            <div class="col-md-4">
                 <h2>{{$detailDafkom->created_at}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Updated_at</h4></label>  
            <div class="col-md-4">
                 <h2>{{$detailDafkom->updated_at}}</h2>
            </div>
        </div>
       

        <!-- Text input-->

        <div class="form-group text-center">
                 
        </div>

        </fieldset>
        </form>
@endsection        
