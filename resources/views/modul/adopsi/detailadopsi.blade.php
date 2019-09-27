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
<form action="" method="post">
    
    <div class="container" >
        <div class="row" >
            <div class="col-lg-8 col-sm-12 col-11 main-section">
                <h4 class="text-center ">DETAIL HEWAN ADOPSI</h4>
                <hr>
                <br><br>
               

                    <div class="form-group ">
                     
                        <div class="col-md-4">
                        <img class="" src="{{ url('adoptionimage/' . $adoption->image) }}" width="200" alt="">
                        </div>
                    </div><br>
                    <div class="form-group text-center">
                        <label style="margin-left:40px;" class="col-md-4 control-label" for="textinput"><h4>Nama Hewan:</h4></label>  
                        <div class="col-md-4">
                            <h2>{{$adoption->animal_name}}</h2>
                        </div>
                    </div><br>
                    <div class="form-group">
                        <label style="margin-left:40px;" class="col-md-4 control-label" for="textinput"><h4>Kategori Hewan:</h4></label>  
                        <div class="col-md-4">
                            <h2>{{$adoption->myhewan->name}}</h2>
                        </div>
                    </div><br>
                    <div class="form-group">
                         <label style="margin-left:40px;" class="col-md-4 control-label" for="textinput"><h4>Jenis hewan:</h4></label>  
                        <div class="col-md-4">
                            <h2>{{$adoption->animal_kind}}</h2>
                        </div>
                    </div><br>
                    <div class="form-group">
                     <label style="margin-left:40px;" class="col-md-4 control-label" for="textinput"><h4>Tanggal Lahir:</h4></label>  
                        <div class="col-md-4">
                            <h2>{{$adoption->birth}}</h2>
                        </div>
                    </div><br>
                    <div class="form-group">
                     <label style="margin-left:40px;" class="col-md-4 control-label" for="textinput"><h4>Gender:</h4></label>  
                        <div class="col-md-4">
                        <h2>{{$adoption->gender}}</h2>
                        </div>
                    </div><br>
                    <div class="form-group">
                     <label style="margin-left:40px;" class="col-md-4 control-label" for="textinput"><h4>Tingkat Agresivitas:</h4></label>  
                        <div class="col-md-4">
                            <h2>{{$adoption->agresiv}}</h2>
                        </div>
                    </div><br>
                    <div class="form-group">
                     <label style="margin-left:40px;" class="col-md-4 control-label" for="textinput"><h4>Alasan Pemilik Melepas Hewan:</h4></label>  
                        <div class="col-md-4">
                            <h2>{{$adoption->alasan}}</h2>
                        </div>
                    </div>
                  
                  


                <br>
               
                        <br>
                    <a class="btn btn-danger" href="{{route('teman.edit', $user->id)}}">Back</a>

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