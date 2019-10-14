<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/daftar.css">

    <title>Hello, world!</title>
  </head>
  <body>
   <!-- MultiStep Form -->
   <form method="post" action="{{route('enduser.store')}}" novalidate>
     @csrf
        <div id="msform">
          <!-- progressbar -->
          <ul id="progressbar">
            <li class="active">Personal Detail</li>
            <li>Buat Akun</li>
            <li>Selesai</li>
          </ul>
          <!-- fieldsets -->
            <fieldset>
            <h2 class="fs-title">Personal Detail</h2>
            <h3 class="fs-subtitle"></h3>
            <input type="text" class="first_name" name="first_name" placeholder="Nama Depan" />
            <input type="text" class="last_name" name="last_name" placeholder="Nama Belakang" />
            <label class="" for="birthday"><p class="font-weight-light">Tanggal Lahir</p></label>
          <div class="container">
            <div class="row">
                      <div class="col-4">
                        <select name="tanggal" class="tanggal custom-select custom-select-sm">
                          <option value="1" selected>1</option>
                          @for($i=2; $i < 32; $i++)
                              <option value="{{$i}}">{{$i}}</option>
                          @endfor     
                          </select>
                      </div>
                      <div class="col-4">
                        <select name="bulan" class="tanggal custom-select custom-select-sm">
                          <option value="1" selected>1</option>
                          @for($i=2; $i < 13; $i++)
                              <option value="{{$i}}">{{$i}}</option>
                          @endfor                     
                          </select>
                      </div>
                      <div class="col-4">
                        <select name="tahun" class="tanggal custom-select custom-select-sm">
                        @for ($i = $last; $i <= $now; $i++)   
                          <option value="{{$i}}" selected>{{$i}}</option>
                        @endfor 
                          </select>
                      </div>
          </div>
          </div>
          <br>
            <div class="container">
            <div class="row">
                      <div class="col-6">
                          <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="customRadioInline1" name="gender" value="pria" class="gender custom-control-input" checked>
                                  <label class="custom-control-label" for="customRadioInline1"><p class="font-weight-light">Pria</p></label>
                          </div>
                      </div>
                      <div class="col-6">
                          <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="customRadioInline2" name="gender" value="wanita" class="gender custom-control-input">
                          <label class="custom-control-label" for="customRadioInline2"><p class="font-weight-light">Wanita</p></label>
                          </div>
                      </div>
          </div>
          </div>
          
            <input type="text" class="tlp" name="no_tlp" placeholder="+628780000000" />
          
            <input type="text" class="email" name="email" placeholder="email" />
            <input type="button" style="border-radius: 30px;" name="next" class="next action-button" value="Next" />
          </fieldset>
          <fieldset>
            <h2 class="fs-title">BUAT AKUN</h2>
            <h3 class="fs-subtitle">Buat username dan passwordmu</h3>
            <input type="text" name="username" placeholder="@username" id="username"/>
            <input type="password" class="password" name="password" placeholder="Password" />
            <input type="password" class="password_confirm" name="cpass" placeholder="Confirm Password" />
            <input type="button" style="border-radius: 30px;" name="previous" class="previous action-button" value="Previous" />
            <input type="button" style="border-radius: 30px;" name="next" class="next_password action-button" value="Next" />
          </fieldset>
          <fieldset>
            <h2 class="fs-title">Selesai</h2>
            <h3 class="fs-subtitle">Selesaikan akunmu sekarang juga!</h3>
          <p class="font-weight-lighter nama-orang">hai <b>@mochammadfariz</b> pastikan anda membaca poin-poin pada license agreement & Term of Service sebelum melakukan submit!  </p>
          <form action="" class="typecast-form simple-register">
          <p class="simple-reg-terms">
          <label>
            <span class="checkbox"><input title="Please tick" name="accept_terms" type="checkbox" class="required" id="js-accept-terms" /></span> <span title="Please tick">Saya menyetujui </span> <a target="_blank" href="#license" data-toggle="modal" title="Opens in a new tab">end-user license agreement</a> &amp; <a target="_blank" href="#tof" data-toggle="modal" title="Opens in a new tab">terms of service</a>
          </label>
        </p>
        
        <input type="button" style="border-radius: 30px;" name="previous" class="previous action-button" value="Previous" />
        <input type="submit" style="border-radius: 30px;" name="submit" class="submit action-button" disabled  value="Submit" />
    </form>
          </fieldset>
        
        </div>
</form>

<!-- /.MultiStep Form -->

<!-- Modal license-->
<div class="modal fade" id="license" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">end-user license agreement</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Ketentuan Penggunaan Web App<br><br>
            1.&nbsp;	Kami mengumpulkan dan memproses informasi bisnis dan informasi pribadi Anda, seperti nama, alamat surat elektronik (surel / e-mail), dan nomor telepon seluler Anda ketika Anda mendaftar. Anda harus memberikan informasi yang akurat dan lengkap, memperbaharui informasi dan setuju untuk memberikan kepada kami bukti identitas apapun yang secara wajar dapat kami mintakan. Jika informasi pribadi yang Anda berikan kepada kami ada yang berubah, misalnya, jika Anda mengubah alamat surel, nomor telepon, atau jika Anda ingin membatalkan akun Anda, mohon perbaharui rincian informasi Anda dengan mengirimkan permintaan Anda kepada kami. Sepanjang yang dapat kami lakukan, kami akan memberlakukan perubahan yang diminta tersebut.<br>
            2.&nbsp;	Anda hanya dapat menggunakan Web App ketika Anda telah mendaftar pada Web App tersebut. Setelah Anda berhasil mendaftarkan diri, Web App akan memberikan Anda suatu akun pribadi yang dapat diakses dengan kata sandi yang Anda pilih.<br>
            3.&nbsp;	Hanya Anda yang dapat menggunakan akun Anda sendiri dan Anda berjanji untuk tidak memberikan wewenang kepada orang lain untuk menggunakan identitas Anda atau menggunakan akun Anda. Anda tidak dapat menyerahkan atau mengalihkan akun Anda kepada pihak lain. Anda harus menjaga keamanan dan kerahasiaan kata sandi akun Anda dan setiap identifikasi yang kami berikan kepada Anda. Dalam hal terjadi pengungkapan atas kata sandi Anda, dengan cara apapun, yang mengakibatkan setiap penggunaan yang tidak sah atau tanpa kewenangan atas akun atau identitas Anda, maka Kami tidak bertanggung jawab atas data yang direkam dan disajikan dari penggunaan yang tidak sah atau tanpa kewenangan tersebut.<br>
            4.&nbsp;	Anda diharuskan untuk melaporkan kepada Kami bila Anda, oleh sebab apapun, tidak memiliki kontrol atas akun Anda. Anda bertanggung jawab atas setiap penggunaan akun Anda dalam Web App meskipun jika Akun tersebut telah disalahgunakan oleh orang lain.
            5.&nbsp;	Anda berjanji bahwa Anda akan menggunakan Web App hanya untuk tujuan yang dimaksud untuk mendapatkan Layanan. Anda tidak diperbolehkan untuk menyalahgunakan atau menggunakan Web App untuk tujuan penipuan atau menyebabkan ketidaknyamanan kepada orang lain.<br>
6.&nbsp;	Anda tidak diperkenankan untuk membahayakan, mengubah atau memodifikasi Web App atau mencoba untuk membahayakan, mengubah atau memodifikasi Web App dengan cara apapun. Kami tidak bertanggungjawab jika Anda tidak memiliki perangkat yang sesuai atau jika Anda telah mengunduh versi Aplikasi yang salah untuk perangkat Anda. Kami berhak untuk melarang Anda untuk menggunakan Web App lebih lanjut jika Anda menggunakan Web App dengan perangkat yang tidak kompatibel/cocok atau tidak sah atau untuk tujuan lain selain daripada tujuan yang dimaksud untuk penggunaan Web App ini. Anda berjanji bahwa Anda hanya akan menggunakan suatu jalur akses yang diperbolehkan untuk Anda gunakan.<br>
7.&nbsp;	Anda akan menjaga kerahasiaan dan tidak akan menyalahgunakan informasi yang Anda terima dari penggunaan Web App tersebut.
8.&nbsp;	Anda mengetahui dan setuju bahwa setiap informasi dalam bentuk apapun, termasuk namun tidak terbatas pada video, audio, gambar atau tulisan yang ada dalam Web App memiliki hak atas kekayaan intelektual (termasuk namun tidak terbatas kepada hak atas merek dan hak cipta) masing-masing. Anda tidak diperbolehkan untuk menggunakan, mengubah, memfasilitasi, menyebarluaskan dan/atau memutilasi hak atas kekayaan intelektual tersebut tanpa izin dari pemilik hak atas kekayaan intelektual tersebut  sebagaimana diatur dalam peraturan perundang-undangan yang berlaku.<br>
9.&nbsp;	Pada saat mengakses dan menggunakan Web App termasuk setiap fitur dan layanannya, Anda tidak diperkenankan untuk:<br>
&nbsp;&nbsp;&nbsp;i.	mengalihkan akun Anda kepada pihak lain tanpa persetujuan terlebih dahulu dari Kami.<br>
&nbsp;&nbsp;&nbsp;ii.	menyebarkan virus, spam atau teknologi sejenis lainnya yang dapat merusak dan/atau merugikan Web App dan pengguna lainnya.<br>
&nbsp;&nbsp;&nbsp;iii.	memasukkan atau memindahkan fitur pada Web App tanpa persetujuan dari Kami.<br>
&nbsp;&nbsp;&nbsp;iv.	menempatkan informasi atau aplikasi lain yang melanggar hak kekayaan intelektual pihak lain di dalam Web App.<br>
&nbsp;&nbsp;&nbsp;v.	mengambil atau mengumpulkan data pribadi dari pengguna lain, termasuk tetapi tidak terbatas pada alamat surel, tanpa persetujuan dari pengguna tersebut.<br>
&nbsp;&nbsp;&nbsp;vi.	menggunakan Web App untuk untuk hal-hal yang dilarang berdasarkan hukum dan undang-undang yang berlaku.<br>
&nbsp;&nbsp;&nbsp;vii.	menggunakan Web App untuk mendistribusikan iklan atau materi lainnya.<br>
10.&nbsp;	Anda memahami dan setuju bahwa penggunaan Web App oleh Anda akan tunduk pula pada Kebijakan Privasi kami sebagaimana dapat diubah dari waktu ke waktu. Dengan menggunakan Web App, Anda juga memberikan persetujuan sebagaimana dipersyaratkan berdasarkan Kebijakan Privasi kami.
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
        <h5 class="modal-title" id="exampleModalLongTitle"> terms of service</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <b>Syarat dan Ketentuan</b>
<b>PENTING:</b> Anda sebagai pengguna (“Anda”) aplikasi web Sahabat Hewan (Web App) diwajibkan untuk membaca Syarat dan Ketentuan Penggunaan ini (“Ketentuan Penggunaan”) dan Kebijakan Privasi yang terlampir dengan hati-hati dan seksama sebelum menggunakan setiap fitur dan/atau layanan yang tersedia dalam Web App.<br><br>

Dengan menggunakan Web App Sahabat Hewan Anda setuju bahwa Anda telah membaca, memahami, mengetahui, menerima, dan menyetujui seluruh informasi, syarat-syarat, dan ketentuan-ketentuan penggunaan Web App yang terdapat dalam Ketentuan Penggunaan ini. Ketentuan Penggunaan ini merupakan suatu perjanjian sah terkait tata cara dan persyaratan penggunaan Web App antara Anda dengan pengelola Web App yaitu Olympians Developer (“Kami”).<br><br>

Mohon diperhatikan bahwa Ketentuan Penggunaan dan Kebijakan Privasi dapat diperbarui dari waktu ke waktu dan pembaruan tersebut akan Kami beritahukan kepada Anda pada saat Anda mengakses Web App. 
Jika Anda tidak menyetujui Syarat dan Ketentuan ini, jangan mengakses dan/atau menggunakan Platform dan/atau Layanan ini.<br><br>


<b>I.	Ketentuan Umum</b>
1.	Koneksi internet diperlukan untuk dapat menggunakan Layanan. Segala biaya yang timbul atas koneksi perangkat elektronik Anda dengan jaringan internet merupakan tanggung jawab Anda sepenuhnya.<br>
2.	Aplikasi ini merupakan aplikasi perangkat lunak yang menghubungkan Anda dengan pihak Komunitas hewan dan Dokter Hewan.<br>
3.	Jenis Layanan yang dapat diminta Melalui Web App :<br>
-	Pelaporan;<br>
-	Komunitas;<br>
-	Dokter Hewan terdekat;<br>
-	Adopsi; dan<br>
-	Event.<br>
4.	Web App merupakan fitur yang berfungsi sebagai sarana Pengguna untuk mengakses beberapa Layanan Kami tanpa perlu mengunduh Aplikasi. Untuk saat ini, Sahabat Hewan tersedia dalam Web App.<br>
5.	Kami berhak untuk sewaktu-waktu mengubah, menghapus,  dan/atau menerapkan syarat dan ketentuan baru dalam Ketentuan Penggunaan ini. Perubahan terhadap Ketentuan Penggunaan akan segera berlaku efektif dan akan diberitahukan kepada Anda pada saat Anda mengakses Web App pertama kalinya setelah perubahan tersebut efektif. Pemakaian Anda yang berkelanjutan terhadap Web App akan dianggap sebagai persetujuan untuk tunduk kepada perubahan atas syarat dan ketentuan dari Ketentuan Penggunaan ini.<br>
6.	Kami berhak sewaktu-waktu mengubah, menghapus, mengurangi, menambah dan/atau memperbarui fitur atau fasilitas dalam Web App . Pemakaian Anda yang berkelanjutan terhadap Web App akan dianggap sebagai persetujuan kepada perubahan, penghapusan, pengurangan, penambahan dan/atau pembaruan fitur atau fasilitas Web App.<br>

<b>II.	Layanan</b>
1.	Pelaporan<br>
i.	Fitur aplikasi ini memungkinkan Anda melakukan pelaporan atas hewan yang sedang terluka, sekarat dan atau kondisi yang lainnya.<br>
ii.	Laporan yang Anda buat akan ditangani oleh Komunitas Hewan yang telah bekerjasama dengan kami.<br>
iii.	Layanan Kami tidak bersifat memaksa atau pun mengikat. Keputusan untuk menggunakan Layanan ini sepenuhnya berada di tangan Anda. Anda bebas untuk memilih untuk menggunakan penyedia layanan lainnya.<br><br>

2.	Dokter Hewan Terdekat<br>
i.	Fitur Applikasi ini memfasilitasi Anda untuk menemukan dokter hewan terdekat dengan lokasi Anda.<br>
3.	Adopsi<br>
i.	Fitur ini memfasilitasi pengguna dan atau komunitas untuk menawarkan hewan yang dapat diadopsi oleh pengguna lain yang tertarik dengan hewan tersebut.<br>
ii.	Fitur adopsi ini bebas dari biaya apapun.<br><br>

4.	Event<br>
i.	Fitur ini memberikan informasi seputar event terkait perlindungan hewan, penanganan hewan, dan yang lainnya.<br>
ii.	Fitur ini hanya menyediakan informasi tanpa memfasilitasi pengguna untuk bergabung dalam event. Untuk bergabung dalam event pengguna dapat menghubungi pihak terkait.<br>
5.	Komunitas<br>
i.	Fitur ini memberikan informasi mengenai semua komunitas yang bekerja sama dengan kami.<br>
ii.	Fitur ini memfasilitasi komunitas untuk mengajukan kerjasama dengan kami.<br><br>

<b>III.	Hak Atas Kekayaan Intelektual</b><br>

1.	Kami adalah pemilik tunggal atas nama, ikon, dan logo Sahabat Hewan serta fitur dalam Web App, yang mana merupakan hak cipta dan merek dagang yang dilindungi undang-undang Republik Indonesia. Dilarang keras menggunakan, memodifikasi, atau memasang nama, ikon, logo, atau merek tersebut tanpa persetujuan tertulis dari Kami.<br>
2.	Olympians Developer adalah pemilik tunggal atas nama, ikon, dan logo “” serta pemegang hak kekayaan intelektual yang sah atas nama, ikon dan logo “Sahabat Hewan” dalam Web App tersebut, yang merupakan hak cipta dan merek yang dilindungi undang-undang. Dilarang keras menggunakan, mengubah, atau memasang nama, ikon, logo, atau merek tersebut tanpa persetujuan tertulis dari Olympians Developer.<br>
3.	Seluruh hak atas kekayaan intelektual yang terdapat dalam Web App berdasarkan hukum negara Republik Indonesia, termasuk dalam hal ini adalah kepemilikan hak kekayaan intelektual atas seluruh source code Web App dan hak kekayaan intelektual terkait Web App. Untuk itu, Anda dilarang untuk melakukan pelanggaran atas hak kekayaan intelektual yang terdapat pada Web App ini, termasuk melakukan modifikasi, karya turunan, mengadaptasi, menduplikasi, menyalin, menjual, membuat ulang, meretas, menjual, dan/atau mengeksploitasi Web App ini termasuk penggunaan Web App atas akses yang tidak sah, meluncurkan program otomatis atau script, atau segala program apapun yang mungkin menghambat operasi dan/atau kinerja Web App, atau dengan cara apapun memperbanyak atau menghindari struktur navigasi atau presentasi dari Web App atau isinya.<br>
4.	Anda hanya diperbolehkan untuk menggunakan Web App maupun salinan web App semata-mata untuk kebutuhan pribadi, non-komersial, non-eksklusif, tidak dapat dipindahtangankan, tidak dapat dialihkan dan tidak dapat disublisensikan.<br>
5.	Kami memiliki hak sepenuhnya untuk melakukan tindakan hukum terhadap setiap pelanggaran yang dilakukan oleh Anda terkait dengan hak kekayaan intelektual yang terkait Web App.<br><br>

IV.	Pemberitahuan
1.	Semua pemberitahuan atau permintaan informasi kepada atau tentang Kami akan diproses jika dibuat secara tertulis dan dikirimkan ke alamat alamat email kami di sahabathewan@gmail.com.
2.	Semua pemberitahuan dan/atau permintaan tentang Anda akan diproses bila diserahkan langsung, dikirimkan melalui e-mail yang diberikan oleh Anda kepada Kami. 

<b>V.	Tidak Ada Jaminan</b><br>
Web App  ini disediakan “sebagaimana adanya” dalam arti Anda mengakui dan menyetujui bahwa seluruh risiko yang ditimbulkan dari penggunaan fitur Web App oleh Anda tetap sepenuhnya ada pada Anda dan Anda tidak memiliki hak untuk meminta ganti rugi apapun dari Kami. Kami TIDAK memberikan pernyataan ataupun jaminan terkait dengan:<br>
1.	Bahwa Web App ini akan bebas dari kesalahan dan/atau kecacatan maupun saat beroperasi dengan kombinasi dengan perangkat keras, perangkat lunak, sistem atau data lainnya serta bahwa kesalahan dan/atau kecacatan dalam Web App akan diperbaiki.<br>
2.	Ketersediaan dan kehandalan Web App maupun server-server pendukung yang menyediakan Web App , termasuk terbebas dari virus dan komponen berbahaya lain.<br>
3.	Ketersediaan dan kehandalan Web App maupun server-server pendukung yang menyediakan Web App , termasuk terbebas dari virus dan komponen berbahaya lain.<br>
4.	Bahwa fitur dalam Web App akan sesuai dengan harapan dan kebutuhan Anda.<br>
5.	Bahwa kualitas produk, fitur dan informasi yang tersedia akan memenuhi harapan dan kebutuhan Anda.<br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!-- akhir Modal tof-->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/daftar.js" type="text/javascript"></script>
  </body>
</html>