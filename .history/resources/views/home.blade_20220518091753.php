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

@endsection