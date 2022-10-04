@extends('layouts.main')
@section('content')
<!-- hero section -->
<section id="hero">
    <div class="container hero-tagline">
      <div class="row">
        <div class="col-lg-6">
          <h1>Layanan Ambulance Andalan Masyarakat Kota Semarang</h1>
          <p>Ambulance Hebat siap melayani penanganan gawat darurat di Kota Semarang</p>
          <button class="button-lg-primary">
            <i class="fa-solid fa-phone"></i>
            Call 1500-132</button>
        </div>
        <div class="col-lg-6">
          <img src="imgs/ambulance.png"class="img-fluid d-block">
        </div>
      </div>
    </div>
  </section>

    <!-- section short description -->
    <section id="desc">
        <div class="container col-xxl-6 px-3 py-5">
          <div class="row flex-lg-row align-items-center g-5 desc-info">
            <div class=" col-lg-6">
              <img src="imgs/foto-aha1.png" width="100%" class="img-fluid"alt="">
            </div>
            <div class=" col-lg-6">
              <h1>Ambulance Hebat SiCepat</h1>
              <p>Layanan emergenci untuk penangan kasus kegawatdaruratan di Kota Semarang. Ambulan hebat adalah salah satu
                layanan gratis yang disediakan oleh Pemerintah Kota Semarang, dibawah asuhan Dinas Kesehatan Kota Semarang
              </p>
              <button class="button-more">
                <a href="/about"></a>
                Selengkapnya</button>
            </div>
          </div>
        </div>
      </section>

        <!--service-->
  <section id="service">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center service-headline">
          <h2>Keunggulan Ambulance Hebat</h2>
          <p>Ambulance Hebat siap melayani karena</p>
        </div>
      </div>
      <div class="row align-items-center text-center mt-3">
        <div class="col-lg-4 p-2">
          <div class="card-layanan">
            <div class="circle-icon position-relative mx-auto mt-5">
              <img src="imgs/24jam.png" class="position-absolute top-50 start-50 translate-middle" alt=""
                srcset="">
            </div>
            <h3 class="mt-4">Siaga 24 Jam</h3>
            <p>Ambulan Hebat siap melayani
              gawat darurat 24 jam</p>
          </div>
        </div>
        <div class="col-lg-4 p-2">
          <div class="card-layanan">
            <div class="circle-icon position-relative mx-auto mt-5">
              <img src="imgs/profesional.png" class="position-absolute top-50 start-50 translate-middle" alt=""
                srcset="">
            </div>
            <h3 class="mt-4">Tenaga Profesional</h3>
            <p>Ditangani langsung oleh dokter,
              tenaga medis,
              perawat dan driver terlatih</p>
          </div>

        </div>
        <div class="col-lg-4 p-2 text-center">
          <div class="card-layanan">
            <div class="circle-icon position-relative mx-auto mt-5">
              <img src="imgs/free.png" class="position-absolute top-50 start-50 translate-middle" alt=""
                srcset="">
            </div>
            <h3 class="mt-4">Gratis</h3>
            <p>Layanan Ambulan Hebat
              tidak dipungut
              biaya</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- dashboard kasus -->
  <section id="statistic" class="counts outer-box">
    <div class="container content">
      <div class="row">
        <div class="col-xl-4">
          <h3>Kasus Yang Telah Ditangani</h2>
          <h2>Tim Ambulance Hebat</h2>
        </div>
        <div class="col-xl-8 align-items-center">
          <div class="row counters">
            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Gawat Darurat</p>
            </div>
  
            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
              <p>Maternal Neonatal</p>
            </div>
  
            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
              <p>Bencana</p>
            </div>
  
            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Laka Lantas</p>
            </div>
          </div>
          <div class="row counters">
            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Non Gawat Darurat</p>
            </div>
  
            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
              <p>Kasus Lainnya</p>
            </div>
          </div>
        </div>
      </div>
  
    </div>
  </section>

  <section id="news" class="py-5">
    <div class="container my-5">
      <div class="newest-title" data-aos="fade-left">
        <h2 class="text-center">Berita Ambulance Hebat</h2>
        <p class="text-center">Kabar terbaru kegiatan Ambulance Hebat</p>
      </div>
      <div class="row g-4 my-4">
        <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up">
          <div class="card">
            <img class="card-img-top" src="imgs/kegiatan-4.png">
            <div class="card-body">
              <span class="badge text-bg-primary p-2 mb-2">News</span>
              <h5 class="card-title">Kriteria kegawatdaruratan</h5>
              <p class="card-text">Antusiasme masyarakat dengan hadirnya ambulan hebat ini dapat dilihat dari banyaknya telfon masuk yang menanyakan informasi mengenai ambulan hebat kota semarang</p>
              <a href="#">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up">
          <div class="card">
            <img class="card-img-top" src="imgs/kegiatan-4.png">
            <div class="card-body">
              <span class="badge text-bg-primary p-2 mb-2">News</span>
              <h5 class="card-title">Kriteria kegawatdaruratan</h5>
              <p class="card-text">Antusiasme masyarakat dengan hadirnya ambulan hebat ini dapat dilihat dari banyaknya telfon masuk yang menanyakan informasi mengenai ambulan hebat kota semarang</p>
              <a href="#">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up">
          <div class="card">
            <img class="card-img-top" src="imgs/kegiatan-4.png">
            <div class="card-body">
              <span class="badge text-bg-primary p-2 mb-2">News</span>
              <h5 class="card-title">Kriteria kegawatdaruratan</h5>
              <p class="card-text">Antusiasme masyarakat dengan hadirnya ambulan hebat ini dapat dilihat dari banyaknya telfon masuk yang menanyakan informasi mengenai ambulan hebat kota semarang</p>
              <a href="#">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    new PureCounter();
  </script>

@endsection
