@extends('layouts.main')
@section('content')

    <!-- hero section -->
    <section id="hero-tentang">
        <div class="container h-100">
          <div class="row h-100">
            <div class="col-md-6 mx-auto my-auto hero-tagline-tentang">
              <h1>Tentang Ambulance Hebat</h1>
            </div>
        </div>
        </div>
     </section>

     <!-- information ambulance hebat -->
     <section id="info-aha">
         <div class="container">
             <div class="row gx-5">
                 <div class="col-md-6 desc-info">
                     <h1>Ambulance Hebat SiCepat</h1>
                     <p>Layanan emergenci untuk penangan kasus kegawatdaruratan di Kota Semarang.  Ambulan hebat adalah salah satu layanan gratis yang disediakan oleh Pemerintah Kota Semarang, dibawah asuhan Dinas Kesehatan Kota Semarang</p>
                 </div>
                 <div class="col-lg-6 col-md-6">
                     <img src="imgs/foto-aha1.png" width="100%" alt="">
                 </div>
             </div>
         </div>
     </section>

     <section id="info-aha">
      <div class="container">
          <div class="row gx-5">
            <div class="col-md-6">
              <img src="imgs/ahha3.png" width="100%"alt="">
          </div>
              <div class="col-md-6 desc-info">
                  <p>Berbeda dengan ambulance pada umumnya, Ambulance Hebat menyediakan layanan gawat darurat yang dilengkapi alat dan obat emergensi. Ditangani langsung oleh dokter, serta tenaga medis bidan, perawat serta driver terlatih.</p>
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

  <!-- peta ambulance Hebat -->
  <section id="peta">
    <div class="container">
      <div class="card-tim-ahha text-center">
        <h1 class="mt-2">Siap Melayani Masyarakat<br>Kota Semarang</h1>
        <div class="row mt-3 mb-2">
          <div class="col-md-6">
            <h1>25 <span class="sentence-h1">Tim Ambulance Hebat</span></h2>
          </div>
          <div class="col-md-6">
            <h1>5 <span class="sentence-h1">Titik Lokasi</span></h2>
          </div>
        </div>
        <div class="mapBox position-relative">
          <iframe class="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126715.84250585646!2d110.34702396464287!3d-7.02455422254658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4d3f0d024d%3A0x1e0432b9da5cb9f2!2sSemarang%2C%20Semarang%20City%2C%20Central%20Java!5e0!3m2!1sen!2sid!4v1647925253975!5m2!1sen!2sid" frame=0 height="400px"  width="100%" allowfullscreen loading="lazy"></iframe>
        </div>
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
          <img src="http://admin-ambulance-hebat-web.test/{{ $photo['image'] }}"alt="" width="100%"srcset="">
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

@endsection