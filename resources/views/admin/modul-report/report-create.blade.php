@extends('layouts.master')

@section('content')


    <div class="container" >
        <form action="{{route('pelaporan.store')}}" method="post" id="form-lapor">
            @csrf
            <input type="hidden" id="lat" name="latitude"/>
            <input type="hidden" id="long" name="longtitude"/>
            <div class="row" >
                <div class="col-lg-8 col-sm-12 col-11 main-section">
                    <h4 class="text-center ">Personal Detail</h4>
                    <p class="lead text-center ">Isi nomor handphone dan email aktif</p>

                    <div class="form-group">
                        <label for="hp">Nomor Handphone Aktif</label>
                        <input type="text" class="form-control" name="no_tlp" id="hp" placeholder="+62878000000000">
                    </div>

                    <div class="form-group">
                        <label for="wa">Nomor Whatsapp Aktif <img height="40px;" width="auto"src="{{asset('asset/img/desainpelaporan/whatsapp.png')}}"></label>
                        <input type="text" name="no_whatsapp" class="form-control" id="wa" placeholder="+62878000000000">
                        <small id="emailHelp" class="form-text text-muted">Opsional</small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Kategori Hewan</label>
                        <select name="kategori_hewan" class="form-control" id="">
                            <option value="anjing">Anjing</option>
                            <option value="kucing">Kucing</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Kategori Pelaporan</label>
                        <select name="id_katpelaporan" class="form-control" id="">
                        @foreach($katPelaporan as $katPelaporans)
                            <option value="{{$katPelaporans->id}}">{{$katPelaporans->name}}</option>
                        @endforeach    
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>

                    <br>
                    <div style="height: 250px; width: 100%; display: none;" id="map"></div>
                    <h4 class="text-center">Bagikan Lokasi</h4>
                    <p class="lead text-center ">Bagikan lokasi kejadian hewan terluka / terlantar. </p>
                    
                    <center> <button type="button" id="bagikan_lokasi" class="btn btn-success"><i class="fas fa-map-marker-alt"></i> Bagikan Lokasi Kejadian</button></center>
                

                    <br>
                    <h4 class="text-center ">Unggah Foto dan Video</h4>
                    <p class="lead text-center ">Unggah foto dan video hewan terlantar.<br>Mengunggah laporan dengan format video akan membantu kami dalam proses identifikasi hewan yang terluka / terlantar. </p>
                    <p class="text-center text-muted ">Contoh Upload yang direkomendasikan <br>*Foto di ambil dari segala sisi</p>
                    <div class="container">
                    <div class="row text-center">
                    <div class="col 12">
                    
                        <img height= "100px" width="auto" src="{{asset('asset/img/desainpelaporan/front.jpg')}}" alt="">
                        <img height= "100px" width="auto" src="{{asset('asset/img/desainpelaporan/sidel.jpg')}}" alt="">
                        <img height= "100px" width="auto" src="{{asset('asset/img/desainpelaporan/sider.jpg')}}" alt="">
                        <img height= "100px" width="auto" src="{{asset('asset/img/desainpelaporan/back.PNG')}}" alt="">

                    </div>
                    </div>
                    </div>
                    
                      
                        <div class="form-group">
                            <div class="file-loading">
                                <input id="file-1" type="file" name="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2">
                            </div>
                            <small id="foto" class="form-text text-muted">ukuran foto maks 2MB</small>
                            <small id="video" class="form-text text-muted">ukuran video maks 10MB</small>
                        </div>
                            <br>
                        <button type="submit" class="btn btn-success" id="submit-lapor">Laporkan</button>

                </div>
            </div>
        </form>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6ATO8whdI6uuHaUYrS885LyU7g5Wf4bs&callback=initMap">
</script>
<script src="{{asset('js/map.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        $('#bagikan_lokasi').click(function(){
            $('#map').show();
        })

        $("#file-1").fileinput({
            theme: 'fa',
            uploadUrl: "{{route('pelaporan.fileUpload')}}",
            enableResumableUpload: true,
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

        $('#form-lapor').submit(function(e){
            e.preventDefault();
            var data = $(this).serializeArray();
            var gambar = [];
            $('.kv-zoom-cache').find('.kv-file-content').find('img').each(function(){
                gambar.push($(this).attr('title'));
            });
            if(gambar.length > 5){
                alert('total gambar dan video yang boleh di upload 5');
            } else {
                data.push({name: 'gambar', value: gambar});
                console.log('data', data)
                request = $.ajax({
                    url: "{{route('pelaporan.store')}}",
                    type: "post",
                    data: data
                });

                // Callback handler that will be called on success
                request.done(function (response, textStatus, jqXHR){
                    // Log a message to the console
                    console.log(response);
                });
            }

        })
    </script>
</body>
</html>
@endsection