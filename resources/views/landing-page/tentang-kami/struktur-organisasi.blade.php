@extends('layouts.main')

@section('content')
    <!-- Banner -->
    <div class="visi-banner">
        <img class="visi-banner-img" src="Img/Banner101.png" alt="">
    </div>

    <!-- <div class="struktural-banner">
        <h2 class="struktural-title">Struktural</h2>
    </div> -->

    <!-- Struktural -->
    <div class="container">
        <div class="struktural">
        <div class="fasilitas-2">
            <h5 class="berita-title">struktur organisasi psppi</h5>
            <div class="row kegiatan-sub-konten">
            <div class="col">
                    <img class="w-100 kegiatan-img" src="img/struktural-diagram.png" alt="">
                </div>
         </div>
         <!-- <div class="Title">
            <h2 class="judul">Struktural PSPPI Polibatam</h2>
            <p class="deskripsi">Struktural PSPPI Polibatam Beserta Staff dan Pengelolanya.</p>
         </div> -->
         <div class="Title">
            <h2 class="judul">EKSEKUTIF PROFILE</h2>
         </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="struktural-card">
                        <div class="pad-impo">
                            <div class="d-flex struktural-profile">
                                <img class="struktural-img-profile" src="img/struktural-profile.png" alt="">
                                <h5 class="struktural-profile-title">Jamal Hacker Tyz</h5>
                            </div>
                            <div class="profile1">
                                <p class="struktural-profile-tagline" >NIP: 12345678910</p>
                                <p class="" >Jabatan: Direktur</p>
                                <p class="" >Prodi: Teknologi Informatika</p>
                            </div>
                            <h6 class="struktural-btn-text">Read more</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                     <div class="struktural-card">
                        <div class="pad-impo">
                            <div class="d-flex struktural-profile">
                                <img class="struktural-img-profile" src="img/struktural-profile.png" alt="">
                                <h5 class="struktural-profile-title">Jamal Hacker Tyz</h5>
                            </div>
                            <div class="profile1">
                                <p class="struktural-profile-tagline" >NIP: 12345678910</p>
                                <p class="" >Jabatan: Direktur</p>
                                <p class="" >Prodi: Teknologi Informatika</p>
                            </div>
                            <h6 class="struktural-btn-text">Read more</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Title">
                <h2 class="judul">STAFF PROFILE</h2>
             </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="struktural-card">
                        <div class="pad-impo">
                            <div class="d-flex struktural-profile">
                                <img class="struktural-img-profile" src="img/struktural-profile.png" alt="">
                                <h5 class="struktural-profile-title">Jamal Hacker Tyz</h5>
                            </div>
                            <div class="profile1">
                                <p class="struktural-profile-tagline" >NIP: 12345678910</p>
                                <p class="" >Jabatan: Direktur</p>
                                <p class="" >Prodi: Teknologi Informatika</p>
                            </div>
                            <h6 class="struktural-btn-text">Read more</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                     <div class="struktural-card">
                        <div class="pad-impo">
                            <div class="d-flex struktural-profile">
                                <img class="struktural-img-profile" src="img/struktural-profile.png" alt="">
                                <h5 class="struktural-profile-title">Jamal Hacker Tyz</h5>
                            </div>
                            <div class="profile1">
                                <p class="struktural-profile-tagline" >NIP: 12345678910</p>
                                <p class="" >Jabatan: Direktur</p>
                                <p class="" >Prodi: Teknologi Informatika</p>
                            </div>
                            <h6 class="struktural-btn-text">Read more</h6>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>


    <style>
        /* Struktural */

  .pad-impo {
    padding: 20px;
  }

  .struktural-title {
    color: #5FCF80;
    text-align: center;
    padding-top: 50px ;
  }

  .struktural-card {
    width: 75%;
    margin-top: 50px;
    margin-right: auto;
    margin-left: auto;
    box-shadow: 26px 143px 58px rgba(0, 0, 0, 0.01), 14px 81px 49px rgba(0, 0, 0, 0.03), 6px 36px 36px rgba(0, 0, 0, 0.04), 2px 9px 20px rgba(0, 0, 0, 0.05), 0px 0px 0px rgba(0, 0, 0, 0.05);
  }

  .struktural-profile-title {
    padding-top: 35px;
    padding-left: 10px;
    color: #5FCF80;
  }

  .struktural-profile-tagline {
    padding-top: 20px;
    text-align: justify;
  }

  .struktural-btn-text {
    color: #5FCF80;
    text-align: right;
  }

  .Title .judul{
    margin-top:60px;
    text-align: center;
  }
  
  .Title .deskripsi{
    font-size: 20px;
    text-align: center;
  }
    </style>

@endsection