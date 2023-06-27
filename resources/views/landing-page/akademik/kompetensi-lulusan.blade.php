@extends('layouts.main')

@section('content')
    <!-- Banner -->
    <div class="visi-banner">
        <img class="visi-banner-img" src="Img/banner 7.png" alt="">
    </div>

    <!-- Akademik -->
    <div class="container">
        <h5 class="akademik-title">Kompetensi Lulusan</h5>
    
        <p class="akademik-tag">
            Untuk mewujudkan kompetensi lulusan program profesi insinyur, proses pembelajaran disusun dalam bentuk kurikulum, yang meliputi susunan mata kuliah yang harus ditempuh, metode penyampaian, dan proses penilaiannya. Sistem pembelajaran (jumlah SKS) dan mata kuliah dalam program PPI diatur dalam SK Dirjen Kelembagaan Ilmu Pengetahuan dan Pendidikan Tinggi No. 1462/C/Kep/VI/2016 yang terdiri dari :
        </p>

        <ol>
            <li><p class="akademik-tag">Jumlah beban pembelajaran adalah 24 SKS</p></li>
            <li><p class="akademik-tag">Lebih dari 70% di lapangan atau tempat kerja dengan pembimbing magang</p></li>
            <li><p class="akademik-tag">Maksimum 30% tatap muka di kelas dengan dosen pembimbing</p></li>
        </ol>

        <p class="akademik-tag">Secara garis besar materi PPI dapat diuraikan sebagai berikut :</p>

        <ol>
            <li><p class="akademik-tag">Pengetahuan dasar;</p></li>
            <li><p class="akademik-tag">Kompetensi dasar keprofesian (Etika profesi (kesehatan, keselamatan, lingkungan & kesejahteraan);</p></li>
            <li><p class="akademik-tag">Kemampuan praktik dan studi kasus;</p></li>
            <li><p class="akademik-tag">Kecakapan perilaku (softskills, yang antara lain mencakup: komunikasi, kerjasama, kepemimpinan, dan manajemen)</p></li>
        </ol>

        <p class="akademik-tag">Kurikulum disusun untuk mencapai kompetensi yang sudah ditetapkan. Kompetensi yang dihasilkan sebenarnya merupakan akumulasi dari semua proses pendidikan yang sebelumnya ditempuh. Karena program studi Program Profesi Insiyur merupakan tahapan lanjutan dari program sarjana, maka kurikulum di prodi ini lebih bersifat menguatkan kompetensi yang pernah dicapai di level sebelumnya dengan lebih menekankan pada pengalaman keprofesian insinyur baik dalam tataran pengetahuan maupun implementasi di lapangan. Kompetensi telah dijabarkan menjadi course learning outcomes yang diimplementasikan pada silabus masing-masing mata kuliah.</p>
    </div>

    <style>
        .akademik-title {
    margin-top: 50px;
    text-align: center;
    margin-right: auto;
    margin-left: auto;
    width: 60%;
    color: #5FCF80;
  }

  .akademik-tag {
    text-align: justify;
  }
    </style>
@endsection