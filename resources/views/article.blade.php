@extends('templates.facade-template')

@php
use Carbon\Carbon;
@endphp


@section('scripts')

<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
@endsection


@section('body')
    <img src="/storage/{{ $article['image_url'] }}" class="object-cover h-full max-h-80 w-full">

    <div class="max-w-5xl  mx-auto mt-5">
        <div class="breadcrumbs text-sm">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/articles">Articles</a></li>
                <li> {{  $article['title'] }}</li>
            </ul>
        </div>
        <h1 class="font-bold text-5xl"> {{$article['title']}} </h1>

        <span class="text-sm"> Published:
            {{$article['created_at']->format('M d, Y')}}
        </span>



        <div class="prose mt-20">
            {!! $article['description'] !!}
        </div>
    </div>


@endsection
