<!-- APPS ZEESH4_015 -->
<!doctype html>
<html lang="en">
  <head>
    <title>Steganography LSB Base64</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Style -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
    <link rel="stylesheet" href="assets/css/style.css" >
    <!-- JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
  </head>
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span> 
          </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#home"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
            <li><a href="enkripsi.php">ENCODE</a></li>
            <li><a href="dekripsi.php">DECODE</a></li>
          </ul>
        </div>
      </div>
    </nav> 

    <div class="container-fluid bg-cover" id="home" style="margin-top:0px;">
      <div class="page-header">
        <h1><b>STEGANOGRAPHY GAMBAR BASE64</b></h1> 
      </div>
      
      <p>Menggunakan Algoritma LSB Base64</p> 
      <a class="btn btn-primary lg btn-lg" href="enkripsi.php">Mulai Encode</a>
      <a class="btn btn-success lg btn-lg" href="#bantuan">Panduan Penggunaan</a>
    </div>

    <div id="bantuan" class="container-fluid bg-1" style="margin-top:0px;">
      <div class="row">
        <div class="col-md-12">
          <h3>Petunjuk Penggunaan</h3>
          <hr>
          <div class="col-md-10"></div>
          <h4>Own Abd.Azzam.Z_015</h4>
          <p>Format gambar yang didukung untuk di-encode adalah sebagai berikut:</p>
          <div class="col-md-6">
          <li>.jpg</li>
          <li>.jpeg</li>
          <li>.png</li>
          </div>  
          <div class="col-md-6">
          <li>.bmp</li>
          <li>.gif</li>
          <li>.psd</li>
          </div> 
          <p>
           Dengan mengenkodekan sebuah gambar dengan menggunakan Algoritma lsb Base64 dalam metode proses encode dan decode maka pengamanan gambar akan lebih aman karena tidak sembarang orang dapat melihat gambar tersebut.
           User harus menginput terlebih dahulu gambar yang akan didekripsi dengan cara mencari file teks menggunakan tombol
           open file. Selanjutnya user dapat mengklik tombol dekripsi maka gambar akan berubah menjadi
           teks asli (plainteks) dan ukuran file dan waktu proses akan tampil pada form tersebut. Setelah
           proses dekripsi selesai, maka user dapat menyimpan hasil dekripsi dengan cara mengklik tombol simpan. Tampilam form dekripsi Base64
           Gambar yang telah dienkodekan perlu didekoding untuk dapat dilihat dalam bentuk gambar bukan teks. gambar yang berada di folder gambar boleh dihapus. Untuk mengetahui cara menggunakannya Anda bisa meng-klik tombol yang terdapat dibawah ini :
          </p>
          <a class="btn purple" href="#demoEn" data-toggle="collapse">Encode | <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
          <a class="btn purple" href="#demoDe" data-toggle="collapse">Decode | <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>

          <br><br>

          <div id="demoEn" class="collapse">
            ENCODE
            <li>Setelah berada di halaman enkode lalu pada form pilih gambar, pilih gambar yang akan di encodingkan.</li>
            <li>selanjutnya klik tombol encode maka akan muncul hasil enkoding disamping berupa kumpulan karakter.</li>
            <li>salin / unduh semua karakter tersebut untuk digunakan saat mendekripsi atau mengembalikan menjadi gambar kembali.</li><br/>
          </div>

          <div id="demoDe" class="collapse">
            DECODE
            <li>Setelah berada di halaman dekripsi lalu pada form plaintext, masukan teks / karakter untuk di dekripsi.</li>
            <li>selanjutnya klik tombol dekripsi maka akan muncul hasil dekripsi dibawah berupa gambar.</li>
            <li>untuk menyimpan sebagai gambar kembali pilih save image pada brower yang digunakan.</li>
          </div>

    <!-- JavaScript -->
    <script>
      $(document).ready(function(){
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {

          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 900, function(){

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
            });
          } // End if 
        });
      });
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <!-- Footer -->


    <!-- End Footer -->
  </body>
</html>