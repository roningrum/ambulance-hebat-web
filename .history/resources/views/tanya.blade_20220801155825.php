@extends('layouts.main')
@section('content')
    <!-- hero section -->
    <section id="hero-tentang">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-6 mx-auto my-auto hero-tagline-tentang">
                    <h1>Tanya Kami</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- form section -->

    <section id="form-contact">
        <div class="container">
            <h4 class="mb-3">Tanya Kami</h4>
            <p class="mb-2">Kami sangat mengapresiasi saran, kritik, testimonial dan pertanyaan Anda</p>
            <p class="mb-2">Silahkan mengisi kolom di bawah ini untuk mengontak kami </p>
            <form method = "post" action="/tanya"class="needs-validation mt-4">
              @csrf  
              <div class="row g-3">
                    <div class="col-sm-5">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Isi nama" required value="{{ old('name') }}">
                        @error('name')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                      </div>
                      <div class="col-sm-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="isi email aktif">
                        <div class="invalid-feedback">
                          Please enter a valid email address for shipping updates.
                        </div>
                      </div>
                      <div class="col-9">
                        <label for="lastName" class="form-label">Subjek</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                        <div class="invalid-feedback">
                          Valid last name is required.
                        </div>
                      </div>
                      <div class="col-9">
                        <div class="form-group">
                            <label for="message" class="form-label">Pesan</label>
                            <textarea class="form-control" id="message" rows="3" placeholder="Isi pesan berupa kritik, saran atau pertanyaan soal Ambulance Hebat"></textarea>
                          </div>
                      </div>
                </div>
                <button class="button-more">
                    <a href="#"></a>
                    Kirim</button>
            </form>
        </div>

    </section>
@endsection