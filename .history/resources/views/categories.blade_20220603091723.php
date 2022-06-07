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
                    <h1 class="mb-5">Post Categories</h1>
                    @foreach ($categories as $category)
                    <ul>
                        <li>
                            <h2>
                                <a href="/categories/{{ $category->slug }}" class="title-article"> {{ $category->name}}</a></h2>
                           
                        </li>
                    </ul>
                    {{-- <article class="blog-post">
                        <img src="imgs/{{ $blog->img_blog }}" alt="">
                        <p>{{ $blog->excerpt}}</p>
                        <p class="blog-post-meta">
                          <i class="fa-solid fa-user me-2"></i><a href="">{{ $blog["author"] }}</a>
                          <i class="fa-regular fa-calendar-day ms-2 me-2"></i>January 1, 2021
                        </p>
                    </article> --}}
                    @endforeach

                </div>
                <div class="col-md-4">
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
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection