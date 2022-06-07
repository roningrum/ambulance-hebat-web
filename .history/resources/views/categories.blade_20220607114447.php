@extends('layouts.article-layout')
@section('content')

    <section id="kabar">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-8 p-4">
                    <h1 class="mb-5">{{ $title }}</h1>
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
            </div>
        </div>

    </section>

@endsection