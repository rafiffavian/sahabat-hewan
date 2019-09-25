<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css"/>
    <style type="text/css">
        .main-section{
            margin:0 auto;
            padding: 20px;
            margin-top: 100px;
            background-color: #fff;
            box-shadow: 0px 0px 20px #c1c1c1;
        }
        .fileinput-remove,
        .fileinput-upload{
            display: none;
        }
    </style>
     <script src="https://kit.fontawesome.com/ca9b56cb62.js"></script>
</head>

<body class="">
 @include('layouts.includes.navbar')
<form action="{{route('detail.updatehewan', $hewan->id)}}" enctype="multipart/form-data" method="post">
    <input type="hidden" name="_method" value="put">
    @csrf
    <div class="container" >
        <div class="row" >
            <div class="col-lg-8 col-sm-12 col-11 main-section">
                <h4 class="text-center ">Edit Hewan</h4>
                @include('layouts.error-form')
                <p class="lead text-center ">Isi nomor handphone dan email aktif</p>

                <div class="form-group">
                    <label for="hp">Gambar Hewan</label><br>
                    <img src="{{ url('adoptionimage/' . $hewan->image) }}" width="200"><br><br>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <label for="hp">Nama Hewan</label>
                    <input type="text" name="animal_name" value="{{$hewan->animal_name}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="hp">Jenis Hewan</label>
                    <input type="text" name="animal_kind" value="{{$hewan->animal_kind}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="hp">Kategori Hewan</label>
                    <select name="id_animaltype" id="" class="form-control">
               @foreach($animal as $animals)
                    <option value="{{$animals->id}}" @if($animals->id == $hewan->id_animaltype) selected="selected" @endif>{{$animals->name}}</option>
               @endforeach     
               
                </select>
                </div>
                <div class="form-group">
                    <label for="hp">Tanggal Lahir Hewan</label>
                    <input type="date" name="birth" value="{{$hewan->birth}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="hp">gender</label>
                    <select name="gender" id="" class="form-control">   
                        <option value="{{$hewan->gender}}">{{$hewan->gender}}</option>                    
                        <option value="lakilaki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="hp">Tingkat Agresivitas</label>
                    <select name="agresiv"class="form-control custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                        <option value="{{$hewan->agresiv}}">{{$hewan->agresiv}}</option>                    
                        <option value="baik">Baik</option>
                        <option value="biasa">Biasa</option>
                        <option value="sedikitgalak">Sedikit Galak</option>
                        <option value="galak">Galak</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="hp">Alasan</label>
                    <textarea name="alasan" id="" cols="30" rows="10">{{$hewan->alasan}}</textarea>
                </div>



                <br>
               
                        <br>
                    <a href="{{route('detailprofile.index')}}" class="btn btn-danger">Kembali</a>
                    <button type="submit" class="btn btn-success">Ubah</button><br><br>

            </div>
        </div>
    </div>
</form>
    
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>



        <!-- script for maps -->

        <!-- end script for maps -->

    <script type="text/javascript">
        $("#file-1").fileinput({
            theme: 'fa',
            uploadUrl: "/image-view",
            uploadExtraData: function() {
                return {
                    _token: $("input[name='_token']").val(),
                };
            },
            allowedFileExtensions: ['jpg', 'png', 'gif','mp4'],
            overwriteInitial: false,
            maxFileSize:100000,
            maxFilesNum: 10,
            slugCallback: function (filename) {
                return filename.replace('(', '_').replace(']', '_');
            }
        });
    </script>


</body>
</html>