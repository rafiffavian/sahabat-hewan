@extends('layouts.master')

@section('content')
        <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
        @csrf
        <fieldset>

        <!-- Form Name -->
        <legend>Detail Table Komunitas</legend>

        <!-- Text input-->
        
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Gambar:</h4></label>  
            <div class="col-md-4">
            <img src="{{ url('eventimage/' . $detailEvent->image) }}" width="200" alt="">
            </div>
        </div><br>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Nama Event:</h4></label>  
            <div class="col-md-4">
                <h2>{{$detailEvent->name}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Price</h4></label>  
            <div class="col-md-4">
                <h2>{{$detailEvent->price}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>location</h4></label>  
            <div class="col-md-4">
                <h2>{{$detailEvent->location}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Url Lokasi</h4></label>  
            <div class="col-md-4">
                 <h2>{{ $detailEvent->url_lokasi}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Description</h4></label>  
            <div class="col-md-4">
             <h2>{{$detailEvent->description}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Jenis Hewan</h4></label>  
            <div class="col-md-4">
                 <h2>{{$detailEvent->myhewan->name}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Wilayah</h4></label>  
            <div class="col-md-4">
                 <h2>{{$detailEvent->mywilayah->name}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Waktu Mulai</h4></label>  
            <div class="col-md-4">
                 <h2>{{$detailEvent->time}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Waktu Selesai</h4></label>  
            <div class="col-md-4">
                 <h2>{{$detailEvent->time_finish}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Whatsapp</h4></label>  
            <div class="col-md-4">
                 <h2>{{$detailEvent->whatsapp}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Line</h4></label>  
            <div class="col-md-4">
                 <h2>{{$detailEvent->line}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Instagram</h4></label>  
            <div class="col-md-4">
                 <h2>{{$detailEvent->instagram}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Created_at</h4></label>  
            <div class="col-md-4">
                 <h2>{{$detailEvent->created_at}}</h2>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"><h4>Updated_at</h4></label>  
            <div class="col-md-4">
                 <h2>{{$detailEvent->updated_at}}</h2>
            </div>
        </div>
       

        <!-- Text input-->

        <div class="form-group text-center">
                 
        </div>

        </fieldset>
        </form>
@endsection        
