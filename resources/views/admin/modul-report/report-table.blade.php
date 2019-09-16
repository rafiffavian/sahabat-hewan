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
          <a class="btn btn-primary" href="{{route('event.create')}}">Tambah</a>

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
                    <th>Gambar 1</th>
                    <th>Gambar 2</th>
                    <th>Gambar 3</th>
                    <th>Gambar 4</th>
                    <th>Video</th>
                    <th>location</th>
                    <th>no_tlp</th>
                    <th>whatsapp</th>
                    <th>created_at</th>
                    <th>updated_at</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
              @foreach($report as $reports)
                  <tr>
                    <td><img src="{{ url('reportimage/' . $reports->imageone) }}" width="200"></td>
                    <td><img src="{{ url('reportimage/' . $reports->imagetwo) }}" width="200"></td>
                    <td><img src="{{ url('reportimage/' . $reports->imagethree) }}" width="200"></td>
                    <td><img src="{{ url('reportimage/' . $reports->imagefour) }}" width="200"></td>
                    <td><img src="{{ url('video/' . $reports->video) }}" width="200"></td>
                    <td>{{$reports->location}}</td>
                    <td>{{$reports->no_tlp}}</td>
                    <td>{{$reports->whatsapp}}</td>
                    <td>
                        <a href=""><i class="fa fa-eye"></i></a>
                        <a href=""><i class="fa fa-pencil"></i></a>
                        <a href=""><i class="fa fa-trash"></i></a>
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