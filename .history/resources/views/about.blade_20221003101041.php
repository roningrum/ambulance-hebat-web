@extends('layouts.main')
@section('content')

    <!-- hero section -->
    <section id="hero-tentang">
      <div class="container py-5" data-aos="fade-up">
        <div class="row align-items-starts justify-content-start">
            <div class="col-lg-6">
                <h1 class=" text-white mb-4">Tentang</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">Beranda</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="/">Halaman</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="/about">About</a>
                        </li>
                    </ol>
                </nav> 
            </div>
        </div>
    </div>
     </section>

     <!-- information ambulance hebat -->
     <section id="info-about" class="py-5">
      <div class="container" data-aos="fade-right">
          <div class="row gx-5">
              <div class="col-md-6">
                  <h2 class="title-benefit">Ambulance Hebat<br>Si Cepat</h2>
                  <p>Layanan emergenci untuk penangan kasus kegawatdaruratan di Kota Semarang.Ambulan hebat adalah
                      salah satu layanan gratis yang disediakan oleh Pemerintah Kota Semarang, dibawah asuhan
                      Dinas Kesehatan Kota Semarang.<br>Berbeda dengan ambulance pada umumnya, Ambulance Hebat
                      menyediakan layanan gawat darurat yang dilengkapi alat dan obat emergensi. Ditangani
                      langsung oleh dokter, serta tenaga medis bidan, perawat serta driver terlatih</p>
                  <div class=" watch-video d-flex align-items-center pt-2">
                      <i class="bi bi-play-circle"></i>
                      <a href="https://www.youtube.com/watch?v=cI7Szxz-JL4" class="glightbox">
                          Video Kegiatan
                      </a>
                  </div>
              </div>
              <div class="col-md-6">
                  <img src="imgs/foto-aha1.png" width="100%" alt="">
              </div>

          </div>
      </div>
  </section>

  <!-- layanan Ambulance Hebat -->
  <section id="layanan-aha">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center layanan-style">
          <h2>Layanan Ambulance Hebat</h2>
          <p>Ambulance Hebat melayani</p>
        </div>
        <div class="row mt-4 d-flex flex-wrap">
          <div class="col-md-4">
            <div class="box align-items-center">
              <div class="circle-icon-layanan position-relative">
                <img src="imgs/maternal.png" class="position-absolute top-50 start-50 translate-middle" alt="" srcset="">
              </div>
              <h3>Maternal<br>Non maternal</h3>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box align-items-center">
              <div class="circle-icon-layanan position-relative">
                <img src="imgs/medis.png" class="position-absolute top-50 start-50 translate-middle" alt="" srcset="">
              </div>
              <h3>Kegawat Daruratan<br>Medis</h3>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box align-items-center">
              <div class="circle-icon-layanan position-relative">
                <img src="imgs/kecelakaan.png" class="position-absolute top-50 start-50 translate-middle" alt="" srcset="">
              </div>
              <h3>Kecelakaan<br>Lalu Lintas</h3>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box align-items-center">
              <div class="circle-icon-layanan position-relative">
                <img src="imgs/bencana.png" class="position-absolute top-50 start-50 translate-middle"alt="" srcset="">
              </div>
              <h3>Bencana</h3>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box align-items-center">
              <div class="circle-icon-layanan position-relative">
                <img src="imgs/non-darurat.png" class="position-absolute top-50 start-50 translate-middle" alt="" srcset="">
              </div>
              <h3>Non Darurat<br>dan Lainnya</h3>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- tim --}}

  <section id="team">
    <div class="container">
        <h2 class="text-center" data-aos="fade-up">Tim Kami</h2>
        <div class="row mt-5">
            <div class="col-lg-12">
              <div class="owl-carousel owl-theme">
                <div class="item ms-2 me-2">
                  <div class="icon">
                    <img data-src="imgs/kegiatan-4.png" class="owl-lazy" alt="">
                  </div>
                  <div class="down-content text-center">
                    <h4>Tim Rusa</h4>
                  </div>
                </div>
                
                <div class="item">
                    <div class="icon">
                        <img data-src="imgs/kegiatan-4.png" class="owl-lazy" alt="">
                      </div>
                      <div class="down-content text-center">
                        <h4>Tim Singa</h4>
                      </div>
                </div>
                
                <div class="item ms-2 me-2">
                    <div class="icon">
                        <img data-src="imgs/kegiatan-4.png" class="owl-lazy" alt="">
                      </div>
                      <div class="down-content text-center">
                        <h4>Tim Kuda</h4>
                      </div>
                </div>
                
                <div class="item ms-2 me-2">
                    <div class="icon">
                        <img data-src="imgs/kegiatan-4.png" class="owl-lazy" alt="">
                      </div>
                      <div class="down-content text-center">
                        <h4>Tim Harimau</h4>
                      </div>
                </div>
                
                <div class="item ms-2 me-2">
                    <div class="icon">
                        <img data-src="imgs/kegiatan-4.png" class="owl-lazy" alt="">
                      </div>
                      <div class="down-content text-center">
                        <h4>Tim Elang</h4>
                      </div>
                </div>

                <div class="item ms-2 me-2">
                    <div class="icon">
                        <img data-src="imgs/kegiatan-4.png" class="owl-lazy" alt="">
                      </div>
                      <div class="down-content text-center">
                        <h4>Tim Call Center</h4>
                      </div>
                </div>

                <div class="item ms-2 me-2">
                    <div class="icon">
                        <img data-src="imgs/kegiatan-4.png" class="owl-lazy" alt="">
                      </div>
                      <div class="down-content text-center">
                        <h4>Tim Admin</h4>
                      </div>
                </div>
                
              </div>
            </div>

    </div>
</section>

  <!-- peta ambulance Hebat -->
  <section id="peta">
    <div class="container">
      <div class="card-tim-ahha text-center">
        <h1 class="mt-2">Siap Melayani Masyarakat<br>Kota Semarang</h1>
        <div id='map' style='width: 100%; height:500px'></div>
      </div>
    </div>
  </section>

  <!-- Galery Ambulance Hebat -->
  <section id="galery">
    <div class="container galery-title">
      <div class="row">
        <div class="col-12 mx-auto text-center mt-5">
          <h1>Galeri Ambulance Hebat</h1>
        </div>
      </div>
      <div class="row g-4">
        @foreach ($data ['data'] as $photo )
        <div class="col-lg-6 col-md-6 col-sm-6">
          <img src="http://admin-ambulance-hebat-web.test/{{ $photo['image'] }}"alt="" width="100%" height= 350px srcset="">
        </div>
        @endforeach
      </div>
    </div>
    </div>
  </section>

  <!-- call Ambulance Hebat -->
  <section id="call-ambulance-hotline">
    <div class="container hotline text-end">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <h1>Panggil Ambulance Hebat</h1>
          <h1>SiCepat</h1>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6  text-end">
          <div class="d-flex align-items-center ">
            <img src="imgs/icon-call.png" alt="">
            <a class="align-items-center">1500-132</a>
      </div>
          </div>
      </div>
    </div>
  </section>
  <script src='https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.js'></script>
  <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
  @stack('script')

@endsection