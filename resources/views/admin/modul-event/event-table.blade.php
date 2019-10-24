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
            <div class="main-content">
	<h2 align="center">Data Tables</h2>
	<br />
<hr>
<div class="col-md-2">
	<a type="button" class="btn btn-green btn-icon icon-left" href="/siswa">
								New Unit
								<i class="entypo-plus">    		 </i>
							</a>
	</div>
<div class="col-md-3">
							
<button type="button" class="btn btn-blue btn-icon">
								Set Unit Partition
								<i class="fa fa-pie-chart">    			  </i>
							</button>
							</div>

			<br />
			<br />
			<br />

            <script type="text/javascript">
		jQuery( document ).ready( function( $ ) {
			var $table3 = jQuery("#table-3");

			var table3 = $table3.DataTable( {
				"aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
			} );

			// Initalize Select Dropdown after DataTables is created
			$table3.closest( '.dataTables_wrapper' ).find( 'select' ).select2( {
				minimumResultsForSearch: -1
			});

			// Setup - add a text input to each footer cell
			$( '#table-3 tfoot th' ).each( function () {
				var title = $('#table-3 thead th').eq( $(this).index() ).text();
				$(this).html( '<input type="text" class="form-control" placeholder="" />' );
			} );

			// Apply the search
			table3.columns().every( function () {
				var that = this;

				$( 'input', this.footer() ).on( 'keyup change', function () {
					if ( that.search() !== this.value ) {
						that
							.search( this.value )
							.draw();
					}
				} );
			} );
		} );
		</script>

            <table class="table table-bordered datatable" id="table-3">
			<thead>
				<tr class="replace-inputs">
                    <th>No</th>
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
      <?php $no = 0 ;?> 
      @foreach($event as $events)<?php $no++ ;?> 
                  <tr>
                  <td>{{$no}}</td>
                  @if($events->image != null)    
                  <td><img src="{{ url('/') }}/eventimage/{{$events->image}}" width="200"></td>
                  @else
                  <td><img src="{{ url('/') }}/userimage/anon.jpg" width="200"></td> 
                  @endif 
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
                       <form method="post" action="{{ route('event.destroy', $events->id) }}"> 
                      @csrf
                        <input type="hidden" name="_method" value="delete">   
                        <button type="submit"><i class="fa fa-trash"></i></button>
                    </form>    
                    </td>
                  </tr>
              
             @endforeach
			</tbody>
			<tfoot>
				<tr>
        <th>No</th>
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
			</tfoot>
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