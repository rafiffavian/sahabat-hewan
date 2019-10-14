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
          <h3 style="text-align: center" class="box-title">Table User</h3><br>
          <a class="btn btn-primary" href="{{route('user.create')}}">Tambah</a>

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
                    <th>Nama Depan</th>
                    <th>Nama Belakang</th>
                    <th>Jenis Kelamin</th>
                    <th>No Telp</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
              @foreach($user as $users)
                  <tr>
               @if($users->image != null)  
                  <td><img src="{{ url('/') }}/userimage/{{$users->image}}" width="200"></td> 
              @else
                  <td><img src="{{ url('/') }}/userimage/anon.jpg" width="200"></td> 
              @endif 
                    <td>{{$users->first_name}}</td>
                    <td>{{$users->last_name}}</td>
                    <td>{{$users->gender}}</td>
                    <td>{{$users->no_tlp}}</td>
                    <td>{{$users->email}}</td>
                    <td>{{$users->username}}</td>
                    <td>
                        <a href="{{route('user.show', $users->id)}}"><i class="fa fa-eye"></i></a>
                        <a href="{{route('user.edit', $users->id)}}"><i class="fa fa-pencil"></i></a>
                        <form method="post" action="{{ route('user.destroy', $users->id) }}"> 
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