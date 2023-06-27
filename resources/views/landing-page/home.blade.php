@extends('layouts.main')


@section('content')
    
    <!-- Banner -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="Img/Banner 1.png" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/Banner 2.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/Banner 3.png" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/Banner 4.png" alt="Fourth slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    <!-- End Banner -->

 <!-- Awal Visi Misi Dan Latar Belakang-->
    <div class="container kurfas">
        <div class="kurikulum-1">
            <div class="kurikulum-bar">
            <p class="kurikulum-title">Visi dan Misi</p>
            <p class="kurikulum-tag">Menjadi penyelenggara pendidikan profesi keinsinyuran yang berstandar internasional, menjadi acuan baku etika dan profesionalisme keinsinyuran, memegang peran kunci dalam pemajuan profesi ...</p>
            <!-- <p class="kurikulum-tag">Mengakselerasi insinyur profesional di Provinsi Kepulauan Riau guna menjaga kedaulatan dan martabat bangsa dibidang keinsinyuran.</p> -->
            <div class="kurikulum-rm">
                <a href="/visi-misi" class="kurikulum-href">Selengkapnya..</a>
            </div>
        </div></div>
        <div class="kurikulum-2">
            <div class="kurikulum-bar">
            <p class="kurikulum-title">Fasilitas</p>
            <ul type="">
                <li><p >Ruang Kelas yang nyaman dan memiliki AC</p></li>
                <li><p >Free WIFI</p></li>
                <li><p >Perpustakaan dengan referensi engineering yang lengkap</p></li>
            </ul> 
            <div class="kurikulum-rm">
                <a href="/fasilitas" class="kurikulum-href">Selengkapnya..</a>
            </div>
        </div></div>
    </div>

    <!-- Latar Belakang -->
    
    <div class="container">
        <div class="latar-belakang" id="tentang-kami">
            <h5 class="latar-belakang-title">Latar Belakang</h5>
            <div class="latar-belakang-konten mt-4">
                <a href="/latar-belakang">
                    <p class="latar-belakang-tag">Program profesi insinyur merupakan salah satu dari tujuh bidang keprofesian yang ditetapkan dalam Keputusan Menteri Pendidikan dan Kebudayaan Republik 
                        Indonesia nomor 036/U/1993, Undang-Undang No.12 tahun 2012 tentang Dikti, Perpres No.8 tahun 2012 tentang KKNI, Undang-Undang nomor 11 tahun 2014 tentang Keinsinyuran, 
                        Permenristekdikti No.35 tahun 2016 tentang PSPPI, serta PP No.25 tahun 2019 tentang Keinsinyuran. Keinsinyuran merupakan kegiatan teknik dengan menggunakan kepakaran dan keahlian 
                        berdasarkan penguasaan ilmu pengetahuan dan teknologi untuk meningkatkan nilai tambah dan daya guna secara berkelanjutan dengan...
                    </p>
                </a>
                <a href="/latar-belakang"><img src="img/News.jpg" alt="" class="latar-belakang-img"></a>
            </div>
        </div>
    </div>


    <!-- Berita dan Acara -->
    <div class="container">
        <div class="berita">
            <h5 class="latar-belakang-title">Berita dan Acara</h5>
            <!-- <p class="berita-tag">Apa saja sih fasilitas yang disediakan di Program Studi Program Profesi Insinyur ini? Ayoo cek dan temukan fasilitasnya</p> -->
            <div class="container-row">
                <div class="berita-konten-wrap">
                    
                    <div class="berita-konten">
                        <a href="/berita"><img src="img/news-item.png" alt="" class="w-100 berita-konten-img"></a>
                        <a href="/berita">
                        <p class="berita-konten-title">Kurikulum / Progeress Pembelajaran
                        </p>
                        <p class="berita-konten-tag" style="color: black;">Apa saja sih fasilitas yang disediakan di Program Studi Program Profesi Insinyur ini? Ayoo cek dan temukan fasilitasnya...</p>
                        </a>
                    </div>
                    <div class="berita-konten">
                        <a href="/berita"><img src="img/news-item.png" alt="" class="w-100 berita-konten-img"></a>
                        <a href="/berita">
                        <p class="berita-konten-title">Kurikulum / Progeress Pembelajaran
                        </p>
                        <p class="berita-konten-tag" style="color: black;">Apa saja sih fasilitas yang disediakan di Program Studi Program Profesi Insinyur ini? Ayoo cek dan temukan fasilitasnya...</p>
                        </a>
                    </div>
                    <div class="berita-konten">
                        <a href="/berita"><img src="img/news-item.png" alt="" class="w-100 berita-konten-img"></a>
                        <a href="/berita">
                        <p class="berita-konten-title">Kurikulum / Progeress Pembelajaran
                        </p>
                        <p class="berita-konten-tag" style="color: black;">Apa saja sih fasilitas yang disediakan di Program Studi Program Profesi Insinyur ini? Ayoo cek dan temukan fasilitasnya...</p>
                        </a>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-5"></div>
                    <div class="col-4">
                        <a href="/berita-lgkp">
                            <button class="btn-success tombol-more">Berita Selengkapnya...</button>
                        </a>
                    </div>
                    <div class="col5">
                </div>
            </div>
        </div>
    </div>>


    <!-- Prestasi -->

    <div class="container">
        <div class="prestasi">
            <h5 class="latar-belakang-title">Prestasi</h5>
            <p class="prestasi-tag">Apa saja sih Prestasi yang sudah diraih oleh Program Studi Program Profesi Insinyur Polibatam? Check dibawah ini yaa..</p>

            <div class="prestasi-konten-box">
            <div class="row">
                <div class="col-5">
                    <div class="prestasi-sub-container">
                        <div class="prestasi-konten">
                            <h5 class="prestasi-konten-title">2022</h5>
                            <p class="prestasi-konten-tag">Lorem ipsum dolor sit amet, consectetur adipiscing elit. dolor sit amet, dolor sit amet, </p>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="line-center"></div>
                </div>
                <div class="col-5"></div>
            </div>

            <div class="row">
                <div class="col-5"></div>
                <div class="col-2">
                    <div class="line-center"></div>
                </div>
                <div class="col-5"> <div class="prestasi-sub-container">
                    <div class="prestasi-konten">
                        <h5 class="prestasi-konten-title">2022</h5>
                        <p class="prestasi-konten-tag">Lorem ipsum dolor sit amet, consectetur adipiscing elit. dolor sit amet, dolor sit amet, </p>
                    </div>
                </div></div>
            </div>

            <div class="row">
                <div class="col-5">
                    <div class="prestasi-sub-container">
                        <div class="prestasi-konten">
                            <h5 class="prestasi-konten-title">2022</h5>
                            <p class="prestasi-konten-tag">Lorem ipsum dolor sit amet, consectetur adipiscing elit. dolor sit amet, dolor sit amet, </p>
                        </div>
                    </div>
                </div>
                    <div class="col-2">
                        <div class="line-center"></div>
                    </div>
                <div class="col-5"></div>
            </div>
        </div>  
            <div class="row">
                <div class="col-5"></div>
                <div class="col-2"><a href="/prestasi"><button class="btn-success tombol-more">Selengkapnya...</button></div></a>
                <div class="col5"></div>
            </div>
        </div>
    </div>
@endsection