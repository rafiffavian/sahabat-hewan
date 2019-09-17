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
                    <th>Gambar</th>
                    <th>Nama Event</th>
                    <th>Alamat</th>
                    <th>Time</th>
                    <th>Jenis Hewan</th>
                    <th>Requirement</th>
                    <th>Deskripsi</th>
                    <th>Price</th>
                    <th>Wilayah</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
              @foreach($event as $events)
                  <tr>
                  <td><img src="{{ url('eventimage/' . $events->image) }}" width="200"></td>
                    <td>{{$events->name}}</td>
                    <td>{{$events->location}}</td>
                    <td>{{$events->time}}</td>
                    <td>{{$events->myhewan->name}}</td>
                    <td>{{$events->requirement}}</td>
                    <td>{{$events->description}}</td>
                    <td>{{$events->price}}</td>
                    <td>{{$events->mywilayah->name}}</td>
                    <td>
                        <a href="{{route('event.show', $events->id)}}"><i class="fa fa-eye"></i></a>
                        <a href="{{route('event.edit', $events->id)}}"><i class="fa fa-pencil"></i></a>
                        <a href="{{route('event.destroy', $events->id)}}"><i class="fa fa-trash"></i></a>
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