@extends('layouts.app')

@section('title', $slot->slug)

@section('content')
<section class="main-content">
    <h1>{{ ucfirst($slot->slug) }}</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</section>
@endsection