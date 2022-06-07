@extends('layouts.main')
@section('content')

<!-- hero section -->
<section id="hero">
    <div class="container hero-tagline">
      <div class="row flex-lg-row-reverse align-items-center g-4">
        <div class="col-sm-8 col-lg-6">
          <img src="imgs/ambulance.png" width="400px" height="400px" class="img-hero">
        </div>
        <div class="col-lg-6 col-sm-4">
          <h1>Layanan Ambulance Andalan Masyarakat Kota Semarang</h1>
          <p>Ambulance Hebat siap melayani penanganan gawat darurat di Kota Semarang</p>
          <button class="button-lg-primary">
            <i class="fa-solid fa-phone"></i>
            Call 1500-132</button>
        </div>
      </div>
    </div>
  </section>

    <!-- section short description -->
    <section id="desc">
        <div class="container col-xxl-6 px-3 py-5">
          <div class="row flex-lg-row align-items-center g-4 desc-info">
            <div class=" col-lg-6 col-sm-6 col-md-8 ">
              <img src="imgs/foto-aha1.png" width="100%" alt="">
            </div>
            <div class=" col-lg-6 col-md-8 col-sm-6 px-5">
              <h1>Ambulance Hebat SiCepat</h1>
              <p>Layanan emergenci untuk penangan kasus kegawatdaruratan di Kota Semarang. Ambulan hebat adalah salah satu
                layanan gratis yang disediakan oleh Pemerintah Kota Semarang, dibawah asuhan Dinas Kesehatan Kota Semarang
              </p>
              <button class="button-more">
                <a href="#"></a>
                Selengkapnya</button>
            </div>
          </div>
        </div>
      </section>

      <section id="service">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center service-headline">
              <h2>Keunggulan Ambulance Hebat</h2>
              <p>Ambulance Hebat siap melayani karena</p>
            </div>
          </div>
          <div class="row d-flex align-items-center text-center mt-3">
            <div class="col-lg-4 col-sm-6 p-2">
              <div class="card-layanan">
                <div class="circle-icon position-relative mx-auto mt-5">
                  <img src="assets/imgs/24jam.png" class="position-absolute top-50 start-50 translate-middle" alt=""
                    srcset="">
                </div>
                <h3>Siaga 24 Jam</h3>
                <p>Ambulan Hebat siap melayani
                  gawat darurat 24 jam</p>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 p-2">
              <div class="card-layanan">
                <div class="circle-icon position-relative mx-auto mt-5">
                  <img src="assets/imgs/profesional.png" class="position-absolute top-50 start-50 translate-middle" alt=""
                    srcset="">
                </div>
                <h3 class="mt-2">Tenaga Profesional</h3>
                <p>Ditangani langsung oleh dokter,
                  tenaga medis,
                  perawat dan driver terlatih</p>
              </div>
    
            </div>
            <div class="col-lg-4 col-sm-6 p-2 text-center">
              <div class="card-layanan">
                <div class="circle-icon position-relative mx-auto mt-5">
                  <img src="assets/imgs/free.png" class="position-absolute top-50 start-50 translate-middle" alt=""
                    srcset="">
                </div>
                <h3 class="mt-2">Gratis</h3>
                <p>Layanan Ambulan Hebat
                  tidak dipungut
                  biaya</p>
              </div>
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
      <div class="row d-flex align-items-center text-center mt-3">
        <div class="col-lg-4 col-sm-6 p-2">
          <div class="card-layanan">
            <div class="circle-icon position-relative mx-auto mt-5">
              <img src="assets/imgs/24jam.png" class="position-absolute top-50 start-50 translate-middle" alt=""
                srcset="">
            </div>
            <h3>Siaga 24 Jam</h3>
            <p>Ambulan Hebat siap melayani
              gawat darurat 24 jam</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 p-2">
          <div class="card-layanan">
            <div class="circle-icon position-relative mx-auto mt-5">
              <img src="assets/imgs/profesional.png" class="position-absolute top-50 start-50 translate-middle" alt=""
                srcset="">
            </div>
            <h3 class="mt-2">Tenaga Profesional</h3>
            <p>Ditangani langsung oleh dokter,
              tenaga medis,
              perawat dan driver terlatih</p>
          </div>

        </div>
        <div class="col-lg-4 col-sm-6 p-2 text-center">
          <div class="card-layanan">
            <div class="circle-icon position-relative mx-auto mt-5">
              <img src="assets/imgs/free.png" class="position-absolute top-50 start-50 translate-middle" alt=""
                srcset="">
            </div>
            <h3 class="mt-2">Gratis</h3>
            <p>Layanan Ambulan Hebat
              tidak dipungut
              biaya</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- dashboard kasus -->
  <section id="dashboard">
    <div class="container">
      <div class="row counter-headline p-5">
        <div class="col-12 text-center">
          <p class="mt-5">Kasus Yang Telah Ditangani</p>
          <h1 class="mt-3">Tim Ambulance Hebat</h1>
        </div>
        <div class="flex-container column text-center mt-5">
          <div class="row">
            <div class="col-md-4 col-sm-4">
              <p>Gawat Darutat</p>
              <h1>1941</h1>
            </div>
            <div class="col-md-4 col-sm-4">
              <p>Maternal Neonatal</p>
              <h1>85</h1>
            </div>
            <div class="col-md-4 col-sm-4">
              <p>Bencana</p>
              <h1>0</h1>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-md-4">
              <p>LakaLantas</p>
              <h1>743</h1>
            </div>
            <div class="col-md-4">
              <p>Non Gawat Darurat</p>
              <h1>2676</h1>
            </div>
            <div class="col-md-4">
              <p>Kasus Lainnya</p>
              <h1>747</h1>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section id="artikel">
    <div class="container col-xxl-6 px-3 py-5 artikel-style">
      <h1>Artikel Ambulan Hebat</h1>
      <div class="row flex-lg-row align-items-center g-4  mt-5 pb-5 desc-info">
        <div class="col-lg-6 col-md-8 col-sm-6">
          <img src="assets/imgs/ahha2.png" width="100%" alt="" srcset="">

        </div>
        <div class="col-lg-6 col-md-8 col-sm-6">
          <h1>Ambulance Hebat SiCepat</h1>
          <p>Layanan emergenci untuk penangan kasus kegawatdaruratan di Kota Semarang. Ambulan hebat adalah salah satu
            layanan gratis yang disediakan oleh Pemerintah Kota Semarang, dibawah asuhan Dinas Kesehatan Kota Semarang
          </p>
          <button class="button-more">
            <a href="#"></a>
            Selengkapnya</button>
        </div>
      </div>
      <div class="row flex-lg-row-reverse align-items-center g-5 mt-5 pb-5 desc-info">

        <div class="col-lg-6 col-md-8 col-sm-6">
          <img src="assets/imgs/ahha2.png" width="100%" alt="" srcset="">
        </div>

        <div class="col-lg-6 col-md-8 col-sm-6">
          <h1>Ambulance Hebat SiCepat</h1>
          <p>Layanan emergenci untuk penangan kasus kegawatdaruratan di Kota Semarang. Ambulan hebat adalah salah satu
            layanan gratis yang disediakan oleh Pemerintah Kota Semarang, dibawah asuhan Dinas Kesehatan Kota Semarang
          </p>
          <button class="button-more">
            <a href="#"></a>
            Selengkapnya</button>
        </div>


      </div>
    </div>


  </section>

  <section id="tanya-kami">
    <div class="container col-xxl-6">
      <div class="card-kontak">
        <div class="row flex-lg-row mx-auto align-items-center g-4 p-5">
          <div class="col-lg-6 col-md-8 col-sm-6 text-center">
            <img src="assets/imgs/contact-us.png" width="79%" alt="" srcset="">
          </div>
          <div class="col-lg-6 col-md-8 col-sm-6">
            <h2 class="headline-ask">Punya Pertanyaan soal Ambulance Hebat?</h2>
            <button class="button-contact">
              <a href="#"></a>
              Tanya Kami</button>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection