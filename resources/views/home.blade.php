@extends('layouts.front')

@section('title', '')

@section('content')
<main id="home-page">
    <!-- HERO SECTION -->
    <div id="hero" >
        <div class="hero-content">
            <div class="text-center">
                <h1>Bienvenue à<br>la Roche sur Yon</h1>
                <p>Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
                <div class="cta-row">
                    <a href="#decouvrir-la-roche-sur-yon" class="btn fill-red">Découvrir</a>
                    <a href="{{route('contact')}}" class="contact-btn">Nous contacter <span aria-hidden="true">→</span></a>
                </div>
            </div>
        </div>

        <div class="hero-bg-img absolute">
            <img src="{{asset('images/place-napoleon-la-roche-sur-yon.jpeg')}}" lady="loading" alt="place napoléon à la roche sur yon">
        </div>
    </div>

    <!--  -->
</main>

@endsection