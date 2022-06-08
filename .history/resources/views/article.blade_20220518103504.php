@extends('layouts.main')
@section('content')

    <!-- hero section -->
    <section id="hero-tentang">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-6 mx-auto my-auto hero-tagline-tentang">
                    <h1>Kabar Ambulance Hebat</h1>
                </div>
            </div>
        </div>
    </section>


    <section id="kabar">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-8 pb-4 mb-4">
                    <article class="blog-post">
                        <img src="assets/imgs/ahha-1.png" alt="">
                        <h2 class="blog-post-title">Kriteria Kegawatdarurat
                            Ambulan Hebat</h2>
                        <p>Antusiasme masyarakat dengan hadirnya ambulan hebat ini dapat dilihat dari banyaknya telfon
                            masuk yang menanyakan informasi mengenai ambulan hebat. Melihat antusiasme masyarakat ini,
                            membuat tim Ambulan Hebat semakin bersemangat untuk memberikan pelayanan.</p>
                        <p class="blog-post-meta">
                          <i class="fa-solid fa-user me-2"></i><a href="">Mark</a>
                          <i class="fa-regular fa-calendar-day ms-2 me-2"></i>January 1, 2021
                        </p>
                    </article>
                    <article class="blog-post">
                        <img src="assets/imgs/ahha-4.png" alt="">
                        <h2 class="blog-post-title">Ambulance Emergensi Gratis Semarang</h2>
                        <p>Pada bulan Januari Ambulan Hebat hanya memiliki 5 dokter yang berjaga di Dinas Kesehatan Kota Semarang sebagai titik koordinasi tim Ambulan Hebat, dan Pada bulan Februari Ambulan Hebat mulai menambahkan 6 orang dokter untuk berjaga di 4 titik lainnya</p>
                        <p class="blog-post-meta">
                          <i class="fa-solid fa-user me-2"></i><a href="">Mark</a>
                          <i class="fa-regular fa-calendar-day ms-2 me-2"></i>January 1, 2021
                        </p>
                      </article>
                    <article class="blog-post">
                        <img src="assets/imgs/ahha2.png" alt="">
                        <h2 class="blog-post-title">Update terbaru dokter baru</h2>
                        <p>Antusiasme masyarakat dengan hadirnya ambulan hebat ini dapat dilihat dari banyaknya telfon
                            masuk yang menanyakan informasi mengenai ambulan hebat. Melihat antusiasme masyarakat ini,
                            membuat tim Ambulan Hebat semakin bersemangat untuk memberikan pelayanan.</p>
                            <p class="blog-post-meta">
                              <i class="fa-solid fa-user me-2"></i><a href="">Mark</a>
                              <i class="fa-regular fa-calendar-day ms-2 me-2"></i>January 1, 2021
                            </p>
                          </article>
                    <article class="blog-post">
                        <img src="imgs/ahha2.png" alt="">
                        <h2 class="blog-post-title">Update terbaru dokter baru</h2>
                        <p>Antusiasme masyarakat dengan hadirnya ambulan hebat ini dapat dilihat dari banyaknya telfon
                            masuk yang menanyakan informasi mengenai ambulan hebat. Melihat antusiasme masyarakat ini,
                            membuat tim Ambulan Hebat semakin bersemangat untuk memberikan pelayanan.</p>
                            <p class="blog-post-meta">
                              <i class="fa-solid fa-user me-2"></i><a href="">Mark</a>
                              <i class="fa-regular fa-calendar-day ms-2 me-2"></i>January 1, 2021
                            </p>
                          </article>

                    <div class="p-4 mt-4">

                        @include('partials.pagenav')

                    </div>

                </div>
                <div class="col-md-4">
                    <div class="position-sticky" style="top: 2rem;">
                        <div class="p-4 mb-3">
                            <h3>Post Terbaru</h3>
                            <hr>
                            <ol class="list-recent-post">
                                <li class="col-xs-6"><a href="#">
                                    Klarifikasi Aduan
                                    Ambulan Hebat</a>
                                    <p>02/03/2020</p>
                                </li>
                                <li class="col-xs-6">
                                    <a href="#">Liputan Media Online
                                    Januari 2017</a>
                                    <p>02/03/2020</p>
                                </li>
                                <li class="col-xs-6"><a href="#">Ambulan Emergensi 
                                    Gratis Semarang</a>
                                    <p>02/03/2020</p>
                                </li>
                                <li class="col-xs-6">
                                    <a href="#">Pelayanan Vaksin Ambulance Hebat</a>
                                    <p>02/03/2020</p>
                                </li>
                            </ol>
                        </div>

                        <div class="p-4 mb-3 search">
                            <h3>Cari Artikel Ambulance Hebat</h3>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Cari Artikel"aria-describedby="basic-addon1">
                                <button class="btn btn-search">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFFF" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                      </svg>
                                </button>
                              </div>
                           
                        </div>
                      
                        <div class="p-4 mb-3">
                            <h3>Kabar Twitter</h3>
                            <a class="twitter-timeline" data-height="500"href="https://twitter.com/dkksemarang?ref_src=twsrc%5Etfw">Tweets by dkksemarang</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            <!-- <a href="https://twitter.com/intent/tweet?screen_name=dkksemarang&ref_src=twsrc%5Etfw" class="twitter-mention-button" data-show-count="false">Tweet to @dkksemarang</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection