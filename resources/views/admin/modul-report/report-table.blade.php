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
          <a class="btn btn-primary" href="{{route('report.create')}}">Tambah</a>

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
                    <th>latitude</th>
                    <th>longtitude</th>
                    <th>Jenis Hewan</th>
                    <th>Kategori Pelaporan</th>
                    <th>Email</th>
                    <th>whatsapp</th>
                    <th>no tlp</th>
                    <th>Description</th>
                    <th>created_at</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
              @foreach($report as $reports)
                  <tr>
                    <td><img src="{{ url('remortimage/' . $reports->image_one) }}" width="100"></td>
                    <td>{{$reports->latitude}}</td>
                    <td>{{$reports->longtitude}}</td>
                    <td>{{$reports->kategori_hewan}}</td>
                    <td>{{$reports->kat_pelaporan->name}}</td>
                    <td>{{$reports->email}}</td>
                    <td>{{$reports->no_whatsapp}}</td>
                    <td>{{$reports->no_tlp}}</td>
                    <td>{{$reports->description}}</td>
                    <td>{{$reports->created_at}}</td>
                    <td>
                        <a href="{{route('report.show',$reports->id)}}"><i class="fa fa-eye"></i></a>
                        <form method="post" action="{{ route('report.destroy', $reports->id) }}"> 
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