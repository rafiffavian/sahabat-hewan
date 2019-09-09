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
          <h3 style="text-align: center" class="box-title">Table Admin</h3><br>
          <a class="btn btn-primary" href="{{route('admin.create')}}">Tambah</a>

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
                    <th>Nama Depan</th>
                    <th>Nama Belakang</th>
                    <th>Username</th>
                    <th>No Telp</th>
                    <th>Email</th>
                    <th>Jenis Kelamin</th>
                    <th>Role</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
              @foreach($admin as $admins)
                  <tr>
                    <td>{{$admins->first_name}}</td>
                    <td>{{$admins->last_name}}</td>
                    <td>{{$admins->username}}</td>
                    <td>{{$admins->no_tlp}}</td>
                    <td>{{$admins->email}}</td>
                    <td>{{$admins->gender}}</td>
                    <td>{{$admins->myrole->name}}</td>
                    <td>
                        <a href="{{route('admin.show', $admins->id)}}"><i class="fa fa-eye"></i></a>
                        <a href="{{route('admin.edit', $admins->id)}}"><i class="fa fa-pencil"></i></a>
                        <a href="{{route('admin.destroy', $admins->id)}}"><i class="fa fa-trash"></i></a>
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