@extends('layouts.master')

@section('content')

<section class="content-header">
      <h1>
        Blank page
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 style="text-align: center" class="box-title">Table Event</h3><br>
          <a class="btn btn-primary" href="{{route('finddoctor.create')}}">Tambah</a>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Gambar</th>
                    <th>Nama Dokter</th>
                    <th>No Telpon</th>
                    <th>Kelurahan</th>
                    <th>Kota</th>
                    <th>Kecamatan</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
              @foreach($doctor as $doctors)
                  <tr>
                  @if($doctors->image != null)      
                  <td><img src="{{ url('/') }}/doctorimage/{{$doctors->image}}" width="200"></td>
                  @else
                  <td><img src="{{ url('/') }}/userimage/anon.jpg" width="200"></td> 
                  @endif 
                    <td>{{$doctors->name}}</td>
                    <td>{{$doctors->no_tlp}}</td>
                    <td>{{$doctors->kelurahan}}</td>
                    <td>{{$doctors->kota}}</td>
                    <td>{{$doctors->kecamatan}}</td>
                    
                    <td>
                        <a href="{{route('finddoctor.show',$doctors)}}"><i class="fa fa-eye"></i></a>
                        <a href="{{route('finddoctor.edit',$doctors)}}"><i class="fa fa-pencil"></i></a>
                    <form method="post" action="{{ route('finddoctor.destroy', $doctors->id) }}"> 
                      @csrf
                        <input type="hidden" name="_method" value="delete">   
                        <button type="submit"><i class="fa fa-trash"></i></button>
                    </form>    
                    </td>
                  </tr>
             @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
         
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
@endsection