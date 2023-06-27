@extends('layouts.main')

@section('content')
    
    <!-- Banner -->
    <!-- Banner -->
    <div class="visi-banner">
        <img class="visi-banner-img" src="Img/Banner101.png" alt="">
    </div>

    <div class="container faq">
        <div class="fasilitas-2">
            <h5 class="berita-title">f  a  q</h5>

        <div class="box">
            <button type="button" class="collapsible">Apakah gelar dari lulusan program profesi insinyur di polibatam ?</button>
            <div class="content">
                <p>Lulusan Program Profesi Insinyur akan memperoleh Sertifikat Profesi Keinsinyuran dan berhak menyandang gelar Insinyur (Ir.).</p>
            </div>
        </div>

        <div class="box">
            <button type="button" class="collapsible">Dimana saya bisa memperoleh informasi mengenai pendaftaran calon mahasiswa program Profesi Insinyur polibatam ?</button>
            <div class="content">
                <p>Silahkan mengunjungi laman https://registrasi.polibatam.ac.id/jalur-masuk/program-profesi-insinyur-psppi/ untuk memperoleh gambaran mengenai penerimaan mahasiswa baru program Profesi Keinsinyuran di polibatam.</p>
            </div>
        </div>

        <div class="box">
            <button type="button" class="collapsible">Apakah saya dapat melakukan pendaftaran calon mahasiswa program Profesi insinyur polibatam secara online ?</button>
            <div class="content">
                <p>Pendaftaran mahasiswa program Profesi Keinsinyuran polibatam hanya dapat dilaksanakan secara daring (online) di laman hhttps://registrasi.polibatam.ac.id/jalur-masuk/program-profesi-insinyur-psppi/. Polibatam tidak menyediakan fasilitas pendaftaran calon mahasiswa program Profesi insinyur polibatam secara luring (offline).

                </p>
            </div>
        </div>
        
        <div class="box">
            <button type="button" class="collapsible">Kapan pendaftaran calon mahasiswa program Profesi polibatam dilaksanakan ?</button>
            <div class="content">
                <p>Silakan mengunjungi laman https://registrasi.polibatam.ac.id/jalur-masuk/program-profesi-insinyur-psppi/ untuk memperoleh gambaran mengenai penerimaan mahasiswa baru program Profesi Keinsinyuran di polibatam.</p>
            </div>
        </div>
        
        <div class="box">
            <button type="button" class="collapsible">Bidang apa saja yang ditawarkan di Program Profesi Keinsinyuran polibatam ?</button>
            <div class="content">
                <p>Polibatam menawarkan 19 sub program studi pada pelaksanaan Program Profesi Keinsinyuran. Daftar subprogram studi yang ditawarkan tersebut dapat diperoleh di laman beikut Program Studi PS PPI polibatam</p>
            </div>
        </div>
        
        <div class="box">
            <button type="button" class="collapsible">Ada berapa jalur pendidikan yang dilaksanakan di Program Profesi Keinsinyuran polibatam ?</button>
            <div class="content">
                <p>polibatam melaksanakan pendidikan Program Profesi Keinsinyuran melalui 2 jalur, yaitu Jalur Rekognisi Pengalaman Lampau (RPL) dan Jalur Reguler. jalur Rekognisi Pengalaman Lampau (RPL) akan berlangsung selama 1 (satu) semester. Peserta PPI jalur RPL dapat mengikuti program dengan tetap melaksanakan profesi dan pekerjaannya sehari-hari, termasuk bila peserta yang bersangkutan sedang melaksanakan perkuliahan S2 atau S3. Sedangkan peserta Program Profesi Insinyur melalui jalur Reguler akan mengikuti kegiatan kuliah dan tatap muka di Kampus polibatam selama 2 (dua) semester. Daftar subprogram studi yang ditawarkan melalui masing-masing jalur pendidikan tersebut dapat diperoleh di laman https://admission.polibatam.ac.id/home/profesi-keinsinyuran.html.</p>
            </div>
        </div>
        
        <div class="box">
            <button type="button" class="collapsible">Apa persyaratan untuk mendaftar sebagai calon mahasiswa program Profesi Keinsinyuran jalur RPL di polibatam ?</button>
            <div class="content">
                <p>Untuk melaksanakan mendaftar di program Profesi Keinsinyuran jalur RPL, calon mahasiswa dipersilakan untuk melaksanakan pendaftaran secara online di laman https://admission.polibatam.ac.id/registration/pascasarjana dengan mengunggah dokumen-dokumen persyaratan sebagai berikut :</p>
                <ul>
                    <li>Ijazah S1,</li>
                    <li>Transkrip S1,</li>
                    <li>Ijazah S2 (bila ada),</li>
                    <li>Ijazah S3 (bila ada),</li>
                    <li>Pas Foto 4 cm x 6 cm terbaru,</li>
                    <li>Sertifikat Pendidikan Profesi/Keahlian Teknik/Keinsinyuran bagi yang pendidikan S1 bukan dari bidang keteknikan (minimum 1),</li>
                    <li>Sertifikat Keikutsertaan Seminar/Lokakarya Keinsinyuran (minimum 1),</li>
                    <li>Sertifikat Keahlian/Kompentensi Keinsinyuran (bila ada),</li>
                    <li>Melunasi Biaya Pendaftaran Program sebesar Rp. 1.000.000,-</li>
                    <li>Surat Pernyataan Program Kesetaraan</li>
                    <li>Surat Pernyataan Masa Studi</li>
                    <li>Surat Pernyataan Keaslian Dokumen</li>
                </ul>
            </div>
        </div>
        
    </div>

    <style>
        /* FAQ */

 .faq {
   width: 50%;
   margin-top: 50px;
   margin-right: auto;
   margin-left: auto;
 }

 .faq-title {
   text-align: center;
   color: #5FCF80;
 }
 
 
 .collapsible {
   background-color: #fff;
   color: #444;
   cursor: pointer;
   padding: 18px;
   width: 100%;
   border: none;
   text-align: left;
   outline: none;
   font-size: 15px;
   border: 1px solid;
 }
 
 
 .active, .collapsible:hover {
   background-color: #ccc;
 
 }
 
 
 .content {
   width: 100%;
   padding: 0 18px;
   background-color: #fff;
   max-height: 0;
   overflow: hidden;
   transition: max-height 0.2s ease-out;
 }
 

 


   </style>
    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;
        
        for (i = 0; i < coll.length; i++) {
          coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.maxHeight){
              content.style.maxHeight = null;
            } else {
              content.style.maxHeight = content.scrollHeight + "px";
            }
          });
        }
        </script>
@endsection