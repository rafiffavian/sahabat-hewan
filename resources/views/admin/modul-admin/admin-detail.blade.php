@extends('layouts.master')

@section('content')
        <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
        @csrf
        <fieldset>

        <!-- Form Name -->
        <legend>Detail Table Admin</legend>

        <!-- Text input-->
        
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>First_name:</h4></label>  
            <div class="col-md-4">
             <h2>{{$detailAdmin->first_name}}</h2>
            </div>
        </div><br>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Last_name:</h4></label>  
            <div class="col-md-4">
                <h2>{{$detailAdmin->last_name}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Role</h4></label>  
            <div class="col-md-4">
                <h2>{{$detailAdmin->myrole->name}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Jenis Kelamin</h4></label>  
            <div class="col-md-4">
                <h2>{{$detailAdmin->gender}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>No Tlp</h4></label>  
            <div class="col-md-4">
                 <h2>{{$detailAdmin->no_tlp}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>email</h4></label>  
            <div class="col-md-4">
             <h2>{{$detailAdmin->email}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>username</h4></label>  
            <div class="col-md-4">
                <h2>{{$detailAdmin->username}}</h2>
            </div>
        </div>
       

        <!-- Text input-->

        <div class="form-group text-center">
                 
        </div>

        </fieldset>
        </form>
@endsection        
