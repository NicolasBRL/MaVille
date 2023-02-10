@extends('layouts.front')

@section('title', '')

@section('content')
<main id="home-page">
    <!-- HERO SECTION -->
    <section id="hero">
        <div class="hero-content">
            <div class="text-center">
                <h1>Bienvenue à<br>la Roche sur Yon</h1>
                <p>Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
            </div>
        </div>

        <div class="hero-bg-img absolute">
            <img src="{{asset('images/place-napoleon-la-roche-sur-yon.jpeg')}}" lady="loading" alt="place napoléon à la roche sur yon">
        </div>
    </section>

    <!-- DATA SECTION -->
    <section id="city-number" class="bg-red-600 p-8 relative">
        <div class="flex max-w-6xl justify-center mx-auto">
            <div class="w-4/12 text-center separator">
                <span class="title-number block text-4xl text-white">97 771</span>
                <span class="title uppercase text-white">habitants</span>
            </div>

            <div class="w-4/12 text-center separator">
                <span class="title-number block text-4xl text-white">1804</span>
                <span class="title uppercase text-white">fondée en </span>
            </div>
        </div>
    </section>

    <section id="posts-list" class="px-8 py-20">
        <div class="container mx-auto text-4xl font-bold">
            <h2>Nos dernières actualités</h2>
            <div class="overflow-hidden">
                    <div class="py-6 grid gap-8 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
                        @foreach($posts as $post)
                        <div class="md:max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                            <a href="{{ route('actualites.article', $post->slug) }}">
                                <img class="rounded-t-lg max-h-64 w-full object-cover" src="{{ asset('storage/'.$post->thumb_path) }}" alt="" />
                            </a>
                            <div class="p-5">
                                <a href="{{ route('actualites.article', $post->slug) }}">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $post->title }}</h5>
                                </a>
                                <p class="mb-3 font-normal text-lg text-gray-700">{{ substr(strip_tags(html_entity_decode($post->content)), 0, 100) }}...</p>

                                <div class="flex justify-between">
                                    <a href="{{ route('actualites.article', $post->slug) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300">
                                        Voir l'article
                                        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
            </div>
        </div>
        </div>
    </section>

    <section id="localization-map">
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=La%20roche%20sur%20yon&t=&z=7&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
        </div>
    </section>

</main>

@endsection