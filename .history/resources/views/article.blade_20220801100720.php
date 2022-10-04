@extends('layouts.article-layout')
@section('content')
    <!-- hero section -->
    {{-- <section id="hero-tentang">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-6 mx-auto my-auto hero-tagline-tentang">
                    <h1>Kabar Ambulance Hebat</h1>
                </div>
            </div>
        </div>
    </section> --}}

    <section id="kabar">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-9 col-lg-offset-2 col-md-10 col-xs-12 mx-auto">
                    <article class="blog-post">
                        <h2 class="blog-post-title mb-4">{{ $posts->title }}</h2>
                        <div class="d-flex mb-5">
                            <div class="bio-pic mr-3">
                                <i class="fa-solid fa-user me-2"></i> 
                            </div>
                            <div class="vcard">
                                <span class="d-block">
                                    <a href="/authors/{{$posts->user->username}}" class="text-decoration-none">{{ $posts->user->username }}</a> in <a href="/categories/{{ $posts->category->slug }}" class="text-decoration-none"> {{ $posts->category->name }}</a>
                                </span>
                                <span>
                                   January 2022 
                                </span>
                            </div>
                        </div>


                        <img src= "http://admin-ambulance-hebat-web.test/{{ $posts->img_blog)}}" class="img-fluid"alt="">
                        {!! $posts->body !!}

                    <div class="pt-3">
                        <p>Kategori :
                            <a href="/categories/{{ $posts->category->slug }}" class="text-decoration-none"> {{ $posts->category->name }}</a>
                        </p>
                    </div>
                    <a href="/artikel" class="d-block mt-5 text-decoration-none">Kembali ke Artikel</a>
                    </article>
                </div>
            </div>         
                {{-- <div class="col-md-4">
                    <div class="position-sticky" style="top: 2rem;">

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

                    
                      
                        <div class="p-4 mb-3">
                            <h3>Kabar Twitter</h3>
                            <a class="twitter-timeline" data-height="500"href="https://twitter.com/dkksemarang?ref_src=twsrc%5Etfw">Tweets by dkksemarang</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            <!-- <a href="https://twitter.com/intent/tweet?screen_name=dkksemarang&ref_src=twsrc%5Etfw" class="twitter-mention-button" data-show-count="false">Tweet to @dkksemarang</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> -->
                        </div>
                    </div>
                </div> --}}
        </div>

    </section>

@endsection