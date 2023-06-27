<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Web PSPPI Polibatam | {{ $judul }}</title>
  </head>
  <body>
    @include('partials.navbar')
    @yield('content')

    <!-- Footer -->
   <hr>
    <div class="container">
        <div class="footer">
            <div class="row">
                <div class="col-4 footer-left">
                    <a href="/">
                        <img src="img/LogoPoltek2.png" class="rounded float-start" alt="..." width="250px" height="250px">
                    </a>
                </div>
                <div class="col footer left">
                    <div class="row">
                        <div class="col footer-right">
                        <ul type="none">
                            <h6 class="footer-right-title">Program Profesi Insinyur</h6>
                            <li><span class="footer-right-tagline">Politeknik Negeri Batam</span></li>
                            <li><span href="" class="footer-right-tagline">JL. Ahmad Yani, TL.Kering Kec.Batam Kota, Kota Batam, Kepulauaan Riau</span></li>
                            <li><span href="" class="footer-right-tagline">Batam, Indonesia</span></li>
                        </ul><br>
                        <ul type="none">
                            <li><span><img src="img/iconkontak/g5.png" width="20px" height="20px" alt=""> (0778) 469890</span>
                            <li><span><img src="img/iconkontak/g4.png" width="20px" height="20px" alt=""> 0812148866777</span>
                            <li><span><img src="img/iconkontak/g1.png" width="20px" height="20px" alt=""> PoliteknikNB@gmail.com</span>
                        </ul>
                            <!-- <img src="img/icon/linkedin.png" alt="">
                            <img src="img/icon/facebook.png" alt="">
                            <img src="img/icon/Vector.png" alt=""> -->
                        </div>
                        <div class="col footer-right">
                            <ul type="none">
                                <h6 class="footer-right-title">Quick Links</h6>
                                <li><a href="/" class="footer-right-tagline">Visi dan misi</a></li><br>
                                <li><a href="/" class="footer-right-tagline">Prestasi</a></li><br>
                                <li><a href="/" class="footer-right-tagline">Akademik</a></li><br>
                                <li><a href="/" class="footer-right-tagline">Struktural</a></li><br>
                                <li><a href="/" class="footer-right-tagline">Alumni</a></li>                       
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- copyright -->
    <div class="copyright">
        <div class="copyright-tagline">
            <svg xmlns="http://www.w3.org/2000/svg"  width="14" height="14" fill="currentColor" class="bi bi-c-circle" viewBox="0 0 16 16">
                <path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM8.146 4.992c-1.212 0-1.927.92-1.927 2.502v1.06c0 1.571.703 2.462 1.927 2.462.979 0 1.641-.586 1.729-1.418h1.295v.093c-.1 1.448-1.354 2.467-3.03 2.467-2.091 0-3.269-1.336-3.269-3.603V7.482c0-2.261 1.201-3.638 3.27-3.638 1.681 0 2.935 1.054 3.029 2.572v.088H9.875c-.088-.879-.768-1.512-1.729-1.512Z"/>
              </svg> <span class="copyright-tagline-deep">Copyright Polibatam. All Rights Reserved</span>
        </div>
    </div>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="js/script.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>