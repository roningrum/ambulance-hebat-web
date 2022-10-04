@extends('layouts.main')
@section('content')
    <!-- hero section -->

    <section id="hero-tentang">
        <div class="container py-5" data-aos="fade-up">
            <div class="row align-items-starts justify-content-start">
                <div class="col-lg-6">
                    <h1 class=" text-white mb-4">Tanya Kami</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Beranda</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="/">Halaman</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="/artikel">Tanya Kami</a>
                            </li>
                        </ol>
                    </nav> 
                </div>
            </div>
    </section>

    <!-- form section -->

    <section id="form-contact">
        <div class="container">
            <h4 class="mb-3">Tanya Kami</h4>
            <p class="mb-2">Kami sangat mengapresiasi saran, kritik, testimonial dan pertanyaan Anda</p>
            <p class="mb-2">Silahkan mengisi kolom di bawah ini untuk mengontak kami </p>
            <form method="post" action="/tanya"class="needs-validation mt-4" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col-sm-5">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            placeholder="Isi nama" name="name" required value={{ old('name') }}>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('name') is-invalid @enderror" id="email"
                            placeholder="Isi Email" name="email" required value={{ old('email') }}>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-9">
                        <label for="subjek" class="form-label">Subjek</label>
                        <input type="text" class="form-control @error('subjek') is-invalid @enderror"id="subjek"
                            placeholder="Isi Subjek" name="subjek" required value={{ old('subjek') }}>
                        @error('subjek')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-9">
                        <label for="pesan" class="form-label">Pesan</label>
                        <textarea class="form-control" id="pesan" rows="3"
                            placeholder="Isi pesan berupa kritik, saran atau pertanyaan soal Ambulance Hebat" name="pesan"></textarea>
                        @error('message')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="button-more" id="button-submit">Kirim</button>
            </form>
        </div>

    </section>
    <script>
        // $('#button-submit').click(function() {
        //     Swal.fire(
        //         'Good job!',
        //         'You clicked the button!',
        //         'success'
        //     )
        // })
    </script>
@endsection
