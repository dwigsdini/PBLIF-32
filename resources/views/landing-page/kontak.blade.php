@extends('layouts.main')

@section('content')
    <!-- Kontak -->

    <div class="container">
        <div class="kontak">
            <div class="col-6">
                <img class="kontak-img" src="img/LogoPoltek.png" alt="">
                <h5 class="kontak-title">Program Profesi Insinyur</h5>
                    <p class="kontak-tag"><span><img src="img/iconkontak/g3.png" alt=""></span>JL. Ahmad Yani, TL.Kering Kec.Batam Kota, Kota Batam, Kepulauaan Riau</p>

                    <p class="kontak-tag"><span><img src="img/iconkontak/g5.png" alt=""></span>(0778) 469890</p>

                    <p class="kontak-tag"><span><img src="img/iconkontak/g4.png" alt=""></span>0812148866777</p>

                    <p class="kontak-tag"><span><img src="img/iconkontak/g1.png" alt=""></span>PoliteknikNB@gmail.com</p>

                    <p class="kontak-tag"><span><img src="img/iconkontak/g2.png" alt=""></span>Politeknik Negeri Batam</p>

                    <p class="kontak-tag"><span><img src="img/iconkontak/g6.png" alt=""></span>Politeknik Negeri Batam</p>
                    
            </div>
            <div class="col-6">
                <div id="googleMap"></div>
            </div>
        </div>
    </div>

    <style>
        /* Kontak */

.kontak {
  width: 75%;
  background-color: #fff;
  margin-top: 100px;
  margin-left: auto;
  margin-right: auto;
}

.kontak-img {
  width: 250px;
  margin-left: 65px;
  
}

.kontak-title {
  color: #000;
  text-align: center;
  padding-bottom: 50px;
}

.kontak-tag {
  border-bottom: 2px solid;
  padding-top: 5px;
  padding-bottom: 6px;
}

#googleMap {
  width: 300px;
}
    </style>
@endsection