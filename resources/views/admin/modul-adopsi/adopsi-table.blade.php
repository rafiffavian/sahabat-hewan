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
          <a class="btn btn-primary" href="{{route('dopsiadmin.create')}}">Tambah</a>

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
                    <th>Nama Hewan</th>
                    <th>Kategori</th>
                    <th>Jenis Hewan</th>
                    <th>Tanggal Lahir</th>
                    <th>Gender</th>
                    <th>Agresive</th>
                    <th>alasan</th>
                    <th>asal</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
              @foreach($adoption as $adoptions)
                  <tr>
                  @if($adoptions->image != null)        
                  <td><img src="{{ url('/') }}/adoptionimage/{{$adoptions->image}}" width="200"></td>
                  @else
                  <td><img src="{{ url('/') }}/userimage/anon.jpg" width="200"></td> 
                  @endif 
                    <td>{{$adoptions->animal_name}}</td>
                    <td>{{$adoptions->myhewan->name}}</td>
                    <td>{{$adoptions->animal_kind}}</td>
                    <td>{{$adoptions->birth}}</td>
                    <td>{{$adoptions->gender}}</td>
                    <td>{{$adoptions->agresiv}}</td>
                    <td>{{$adoptions->alasan}}</td>
                    @if($adoptions->asal == 1) 
                    <td>User</td>
                    @else
                    <td>Komunitas</td>
                    @endif
                    <td>
                        <a href="{{route('dopsiadmin.show', $adoptions->id)}}"><i class="fa fa-eye"></i></a>
                        <a href="{{route('dopsiadmin.edit', $adoptions->id)}}"><i class="fa fa-pencil"></i></a>
                        <form method="post" action="{{route('dopsiadmin.destroy', $adoptions->id)}}"> 
                      @csrf
                        <input type="hidden" name="_method" value="delete">   
                        <button onClick="return confirm('Are you sure?')" type="submit"><i class="fa fa-trash"></i></button>
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