@extends('layouts.master')

@section('content')
        <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
        @csrf
        <fieldset>

        <!-- Form Name -->
        <legend>Detail Table Komunitas</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput"><h4>Gambar1:</h4></label>  
            <div class="col-md-4">
            <img src="{{ url('remortimage/' . $detailReport->image_one) }}" width="200" alt="{{asset('asset/img/desainpelaporan/anjingbelakang.PNG')}}">
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Gambar2:</h4></label>  
            <div class="col-md-4">
            <img src="{{ url('remortimage/' . $detailReport->image_two) }}" width="200" alt="">
            </div>
        </div><br>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Gambar3:</h4></label>  
            <div class="col-md-4">
            <img src="{{ url('remortimage/' . $detailReport->image_three) }}" width="200" alt="">
            </div>
        </div><br>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Gambar4:</h4></label>  
            <div class="col-md-4">
            <img src="{{ url('remortimage/' . $detailReport->image_four) }}" width="200" alt="">
            </div>
        </div><br>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Gambar5:</h4></label>  
            <div class="col-md-4">
            <img src="{{ url('remortimage/' . $detailReport->image_five) }}" width="200" alt="">
            </div>
        </div><br>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>ID user:</h4></label>  
            <div class="col-md-4">
                <h2>{{$detailReport->id_user}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Nama User:</h4></label>  
            <div class="col-md-4">
                <h2>{{$detailReport->user->first_name}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Email:</h4></label>  
            <div class="col-md-4">
                <h2>{{$detailReport->email}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>No Tlp</h4></label>  
            <div class="col-md-4">
                <h2>{{$detailReport->no_tlp}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>No Whatsapp</h4></label>  
            <div class="col-md-4">
                 <h2>{{ $detailReport->no_whatsapp}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Latitude</h4></label>  
            <div class="col-md-4">
             <h2>{{$detailReport->latitude}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Longtitude</h4></label>  
            <div class="col-md-4">
                 <h2>{{$detailReport->longtitude}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Description</h4></label>  
            <div class="col-md-4">
                 <h2>{{$detailReport->description}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>kategori pelaporan</h4></label>  
            <div class="col-md-4">
                 <h2>{{$detailReport->kat_pelaporan->name}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Kategori Hewan</h4></label>  
            <div class="col-md-4">
                 <h2>{{$detailReport->kategori_hewan}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Created_at</h4></label>  
            <div class="col-md-4">
                 <h2>{{$detailReport->created_at}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Updated_at</h4></label>  
            <div class="col-md-4">
                 <h2>{{$detailReport->updated_at}}</h2>
            </div>
        </div>
       

        <!-- Text input-->

        <div class="form-group text-center">
         <a href="javascript:history.back()" class="btn btn-warning"> Back </a>
        </div>

        </fieldset>
        </form>
@endsection        
