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

@endsection