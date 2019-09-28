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
          <h3 style="text-align: center" class="box-title">Table Daftar Komunitas</h3><br>
        

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
                   
                    <th>Nama User</th>
                    <th>Nama Komunitas</th>
                    <th>No Tlp</th>
                    <th>Whatsapp</th>
                    <th>Email</th>
                    <th>Alasan</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
              @foreach($dafkom as $dafkoms)
                  <tr>
               
                    <td>{{$dafkoms->user->first_name}}</td>
                    <td>{{$dafkoms->nama_komunitas}}</td>
                    <td>{{$dafkoms->no_tlp}}</td>
                    <td>{{$dafkoms->whatsapp}}</td>
                    <td>{{$dafkoms->email}}</td>
                    <td>{{$dafkoms->alasan}}</td>
                    <td>{{$dafkoms->created_at}}</td>
                    <td>{{$dafkoms->updated_at}}</td>
                    <td>
                        <a href="{{route('daftarkomunitas.show', $dafkoms->id)}}"><i class="fa fa-eye"></i></a>
                    <form method="post" action="{{ route('daftarkomunitas.destroy', $dafkoms->id) }}"> 
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