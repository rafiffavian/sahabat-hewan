<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{url('/public')}}/css/daftar.css">

    <title>Hello, world!</title>
  </head>
  <body>

    @if (Session::has('failed'))
      <div class="alert alert-warning" role="alert">
        {{Session::get('failed')}}
      </div>
    @endif
   <!-- MultiStep Form -->
   <form method="post" action="{{route('enduser.verifikasiOTP')}}">
     @csrf
        <div id="msform">
          <!-- progressbar -->
          <ul id="progressbar">

          </ul>
          <!-- fieldsets -->
            <fieldset>
            <h2 class="fs-title">Verifikasi {{Session::get('otp')}} {{Session::get('no_telp')}}</h2>
            <h3 class="fs-subtitle"></h3>
            <input type="text" class="first_name" name="otp" placeholder="masukkan kode verifikasi" />
            <input type="hidden" name="no_telp" value="{{Session::get('no_telp')}}">
            <input type="hidden" name="otp_session" value="{{Session::get('otp')}}">
            <input type="submit" style="border-radius: 30px;" name="next" class="next action-button" value="Next" /><br><br>
            <a href="{{route('resendOTP')}}">kirim ulang</a> kode verifikasi

          </fieldset>
          <br><br>

        </div>
    </form>

<!-- /.MultiStep Form -->






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  </body>
</html>
