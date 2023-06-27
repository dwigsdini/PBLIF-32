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

<!-- Header -->
<header id="header" class="">
    <div class="container d-flex align-items-center">
        <h4 class="logo me-auto"><a href="/"><img  src="img/LogoPoltek.png" alt="" ></a></h4>
        <nav id="navbar" class="navbar order-last order-lg-0 ml-auto">
        <ul>
            <li><a class="{{  ($judul === "Home") ? 'active' : '' }}" href="/">Home</a></li>
            <li class="dropdown"><a href="#">Tentang Kami <img class="w-50" src="img/icon/dropdown.png" alt=""></a>
            <ul>
                <li><a class="{{  ($judul === "Latar Belakang") ? 'active' : '' }}" href="/latar-belakang">Latar Belakang</a></li>
                <li><a class="{{  ($judul === "Visi dan Misi") ? 'active' : '' }}" href="/visi-misi">Visi dan Misi</a></li>
                <li><a class="{{  ($judul === "Struktur Organisasi") ? 'active' : '' }}" href="/struktur-organisasi">Struktur Organisasi PSPPI</a></li>
                <li><a class="{{  ($judul === "FAQ") ? 'active' : '' }}" href="/faq">FAQ</a></li>
            </ul>
            </li>
            <li  class="dropdown"><a href="#">Akademik <img class="w-50" src="img/icon/dropdown.png" alt=""></a>
                <ul>                    
                    <li><a class="{{  ($judul === "Fasilitas") ? 'active' : '' }}" href="/akreditasi">Akreditasi</a></li>
                    <li><a class="{{  ($judul === "Buku Panduan") ? 'active' : '' }}" href="/buku-panduan">Buku Panduan PSPPI</a></li>
                    <li><a class="{{  ($judul === "Kompetensi Lulusan") ? 'active' : '' }}" href="/kompetensi-lulusan">Kompetensi Lulusan</a></li>
                    <li class="dropdown"><a href="">Kurikulum <img class="w-50" src="img/right.png" alt=""></a>
                        <ul>
                            <li><a class="{{  ($judul === "Kurikulum Reguler") ? 'active' : '' }}" href="/kurikulum-reguler">Kurikulum Jalur Reguler</a></li>
                            <li><a class="{{  ($judul === "Kurikulum RPL") ? 'active' : '' }}" href="/kurikulum-rpl">Kurikulum Jalur RPL</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            </li>
            <li><a class="{{  ($judul === "Alumni") ? 'active' : '' }}" href="/statistik-alumni">Alumni</a></li>
            <li><a class="{{  ($judul === "Galeri") ? 'active' : '' }}" href="#">Galeri</a></li>
            @auth
            <li><a href="/dash">Dashboard</a></li>  
            @else
            <li><a href="https://psppipolibatam.edukati.com/login/index.php" target="_blank" >E-Learning</a></li>
            @endauth
            
            <li><a class="{{  ($judul === "Daftar") ? 'active' : '' }}" target="_blank" href="https://registrasi.polibatam.ac.id/jalur-masuk/program-profesi-insinyur-psppi/">Pendaftaran Online</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
    </div>
    </header>
    <!-- End Header -->