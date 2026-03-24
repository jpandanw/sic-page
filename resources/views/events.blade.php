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
      <div class="w-full h-full flex items-center justify-center h-full aspect-video">
        <img src="/storage/{{ $event['image_url'] }}" class="object-cover h-full">
    </div>


    <div class="max-w-5xl  mx-auto mt-5">
        <div class="breadcrumbs text-sm">
            <ul>
                <li><a class="/">Home</a></li>
                <li><a class="/events">Events</a></li>
                <li> {{  $event['title'] }}</li>
            </ul>
        </div>
        <h1 class="font-bold text-5xl"> {{$event['title']}} </h1>

        <span class="text-sm"> Event Date:
            {{$event['start_date']->format('M-d-y')}}
            @if ($event['end_date'])
                - {{$event['end_date']->format('M-d-y')}}
            @endif
        </span>



        <div class="prose mt-20">
            {!! $event['description'] !!}
        </div>
    </div>


@endsection
