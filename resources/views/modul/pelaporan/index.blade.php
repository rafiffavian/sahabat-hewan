<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/laporkomunitas.css">
    <link rel="stylesheet" type="text/css" href="css/multipleimage.css">
    <title>Hello, world!</title>
  </head>
  
  <body>
  
  @include('layouts.includes.navbar')
  <div class="container">
  <div class="row">
  <div class="col 12">

  
   <!-- MultiStep Form -->
   <form method="post" novalidate>
  <div id="msform">
    <!-- progressbar -->
    <ul id="progressbar">

    </ul>
    <!-- fieldsets -->
      <fieldset>
      <h1 class="fs-title">Personal Detail</h1>
      <h2 class="fs-subtitle">Isi nomor handphone dan email aktif</h2>
      
      <input type="text" name="phone" placeholder="+628780000000" required/>
      <div>
      <small>Isi nomor Whatsapp (Opsional)  <img height="40px;" width="auto"src="asset/img/desainpelaporan/whatsapp.png"></small>
      <input type="text" name="phone" placeholder="+628780000000" />
     </div>
      <input type="text" name="email" placeholder="email" />
       <input type="button" style="border-radius: 30px;" name="Berikutnya" class="next action-button" value="Berikutnya" />
    </fieldset>
    <fieldset>
      <h1 class="fs-title">Unggah Foto dan Video</h1>
      <h2 class="fs-subtitle">Unggah foto bagian hewan yang terluka. 
        <br>
        Mengunggah video akan sangat membantu kami dalam proses identifikasi.</h2>
      <br/><br/>

      <h4 class="fs-title">Foto 4 sisi</h4>
      <h2 class="fs-subtitle">Unggah foto hewan tampak depan, tampak kiri,tampak kanan & tampak belakang. Foto yang di ambil harus jelas.
      <input accept=".jpg,.jpeg.,.gif,.png,.mov,.mp4" class="mt-3"type="file" id="file-input" multiple />
      <input type="button" onClick=removeAllImage() value="Remove All Image" clas="remove"> 
      <div id="thumb-output"></div>
    


       <input type="button" style="border-radius: 30px;" name="previous" class="previous action-button" value="Previous" />
      <input type="button" style="border-radius: 30px;" name="next" class="next action-button" value="Next" />
    </fieldset>
    <fieldset>
      <h1 class="fs-title">Selesai</h1>
      <h2 class="fs-subtitle">Selesaikan akunmu sekarang juga!</h2>
    <p class="font-weight-lighter">hai <b>@mochammadfariz</b> pastikan anda membaca poin-poin pada license agreement & Term of Service sebelum melakukan submit!  </p>
    <div>
    <form action="" class="typecast-form simple-register">
    <p class="simple-reg-terms">
    <label>
      <span class="checkbox"><input title="Please tick" name="accept_terms" type="checkbox" class="required" id="js-accept-terms" /></span> <span title="Please tick">Saya menyetujui </span> <a target="_blank" href="#license" data-toggle="modal" title="Opens in a new tab">end-user license agreement</a> &amp; <a target="_blank" href="#tof" data-toggle="modal" title="Opens in a new tab">terms of service</a>
    </label>
  </p>
  </form>
  </div>
      <input type="button" style="border-radius: 30px;" name="previous" class="previous action-button" value="Previous" />
      <input type="submit" style="border-radius: 30px;" name="submit" class="submit action-button" value="Submit" />
    </fieldset>
  
  </div>
</form>

<!-- /.MultiStep Form -->

<!-- Modal license-->
<div class="modal fade" id="license" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Purbasari memiliki enam orang kakak perempuan yaitu Purbararang, Purbadewata, Purbaendah, Purbakancana, Purbamanik dan Purbaleuih.

Purbasari sangat baik sifat dan kelakuannya. Dia lembut, manis budi, ddan suka menolong.

Siapapun juga yang membutuhkan pertolongan dengan senang hati dibantunya.

Selain hatinya yang elok, Purbasari juga memiliki paras yang cantik dan rupawan, setiap orang yang melihatnya pasti jatuh hati pada pandangan pertama.

Sayangnya kecantikan dan kebaikan hati purbasari tidak menurun dari kakak sulungnya Purbararang yang berperangai sangat buruk.

Walaupun cantik Purbararang sangat kasar, sombong, kejam dan iri hati terhadap siapapun juga.
 Purbasari memiliki enam orang kakak perempuan yaitu Purbararang, Purbadewata, Purbaendah, Purbakancana, Purbamanik dan Purbaleuih.

Purbasari sangat baik sifat dan kelakuannya. Dia lembut, manis budi, ddan suka menolong.

Siapapun juga yang membutuhkan pertolongan dengan senang hati dibantunya.

Selain hatinya yang elok, Purbasari juga memiliki paras yang cantik dan rupawan, setiap orang yang melihatnya pasti jatuh hati pada pandangan pertama.

Sayangnya kecantikan dan kebaikan hati purbasari tidak menurun dari kakak sulungnya Purbararang yang berperangai sangat buruk.

Walaupun cantik Purbararang sangat kasar, sombong, kejam dan iri hati terhadap siapapun juga.
 Purbasari memiliki enam orang kakak perempuan yaitu Purbararang, Purbadewata, Purbaendah, Purbakancana, Purbamanik dan Purbaleuih.

Purbasari sangat baik sifat dan kelakuannya. Dia lembut, manis budi, ddan suka menolong.

Siapapun juga yang membutuhkan pertolongan dengan senang hati dibantunya.

Selain hatinya yang elok, Purbasari juga memiliki paras yang cantik dan rupawan, setiap orang yang melihatnya pasti jatuh hati pada pandangan pertama.

Sayangnya kecantikan dan kebaikan hati purbasari tidak menurun dari kakak sulungnya Purbararang yang berperangai sangat buruk.

Walaupun cantik Purbararang sangat kasar, sombong, kejam dan iri hati terhadap siapapun juga.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!-- akhir Modal license-->

<!-- Modal tof-->
<div class="modal fade" id="tof" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Purbasari memiliki enam orang kakak perempuan yaitu Purbararang, Purbadewata, Purbaendah, Purbakancana, Purbamanik dan Purbaleuih.

Purbasari sangat baik sifat dan kelakuannya. Dia lembut, manis budi, ddan suka menolong.

Siapapun juga yang membutuhkan pertolongan dengan senang hati dibantunya.

Selain hatinya yang elok, Purbasari juga memiliki paras yang cantik dan rupawan, setiap orang yang melihatnya pasti jatuh hati pada pandangan pertama.

Sayangnya kecantikan dan kebaikan hati purbasari tidak menurun dari kakak sulungnya Purbararang yang berperangai sangat buruk.

Walaupun cantik Purbararang sangat kasar, sombong, kejam dan iri hati terhadap siapapun juga.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!-- akhir Modal tof-->

</div>
  </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- depedency js upload multiple image -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- end depedency js uupload multiple -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="js/daftar.js" type="text/javascript"></script>

<!-- depedency script untuk multiple upload image -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/js/foundation.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/js/foundation/foundation.clearing.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

<!-- end depedency -->


    <!-- script untuk upload multiple image -->
    <script>
  $(document).ready(function(){
    $('#file-input').on('change', function(){ //on file input change
        if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
        {
            
            var data = $(this)[0].files; //this file data
            
            $.each(data, function(index, file){ //loop though each file
                if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                    var fRead = new FileReader(); //new filereader
                    fRead.onload = (function(file){ //trigger function on successful read
                    return function(e) {
                        var img = $('<img/>').addClass('thumb').attr('src', e.target.result); //create image element 
                        $('#thumb-output').append(img); //append image to output element
                    };
                    })(file);
                    fRead.readAsDataURL(file); //URL representing the file's data.
                }
            });
            
        }else{
            alert("Your browser doesn't support File API!"); //if File API is absent
        }
    });
  
  $(".remove").click(function (e) {
        e.preventDefault();
        data.splice(0, 1);
        $('#thumb-output a').eq(data.length).remove();
    });
});


    </script>
    
    <!-- end script untuk upload multiple image -->
  </body>
</html>