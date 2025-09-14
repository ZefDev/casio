@extends('layouts.app')

@section('title', 'Slots')

@section('content')
<section class="main">
    <div class="main_content">
        <div class="slider">
            <div><img src="{{ asset('storage/images/Container.png') }}" alt="Slide 1"></div>
            <div><img src="{{ asset('storage/images/Container.png') }}" alt="Slide 2"></div>
            <div><img src="{{ asset('storage/images/Container.png') }}" alt="Slide 3"></div>
        </div>
        <div class="navigation_carousel">
                <a href="">Fournisseurs</a>
                <a href=""><img src="{{ asset('storage/images/11.png') }}" alt="">Top</a>
                <a href=""><img src="{{ asset('storage/images/12.png') }}" alt="">Nouveau</a>
                <a href=""><img src="{{ asset('storage/images/13.png') }}" alt="">Populaire</a>
                <a href=""><img src="{{ asset('storage/images/14.png') }}" alt="">Exclusif</a>
                <a href=""><img src="{{ asset('storage/images/15.png') }}" alt="">Roulette</a>
                <a href=""><img src="{{ asset('storage/images/16.png') }}" alt="">Game Shows</a>
                <a href=""><img src="{{ asset('storage/images/17.png') }}" alt="">Blackjack</a>
            </div>
        <div class="main_slots">
            <div class="slots_header">
                <h1>TOP</h1>
                <a href="#">VOIR TOUS</a>
            </div>
            <div class="slots_list">
                @foreach ($slots as $index => $slot)
                    <div class="slot">
                        <a href="{{ route('slots.show', $slot->slug) }}">
                        <div class="gradient-slot">
                            @if ($slot->image_url)
                                <img src="{{ asset('storage/' . $slot->image_url) }}" alt="{{ $slot->name }}" id="main-image">
                            @else
                                <img src="{{ asset('storage/images/pinguin.png') }}" id="main-image-pinguin" alt="">
                            @endif
                            <p id="number">{{ $index }}</p>
                            <img src="{{ asset('storage/images/bonus.png') }}" id="bonus" alt="">
                        </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection