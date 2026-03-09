@extends('templates.facade-template')

@php
use Carbon\Carbon;
@endphp

@section('scripts')

@endsection
@section('body')


<!-- Hero Section -->
<div class="bg-gradient-to-r from-secondary to-accent text-primary-content min-h-96 flex items-center justify-center">
    <div class="text-center px-4">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Events</h1>
        <p class="text-lg opacity-90">Discover What is Happening at San Isidro College</p>
        <div class="divider divider-primary opacity-50 my-4 max-w-xs mx-auto"></div>
    </div>
</div>

<!-- Breadcrumbs -->
<div class="max-w-6xl mx-auto px-4 py-4">
    <div class="breadcrumbs text-sm">
        <ul>
            <li><a href="/" class="link link-hover">Home</a></li>
            <li class="text-secondary font-semibold">Events</li>
        </ul>
    </div>
</div>

<!-- Main Content -->
<div class="max-w-6xl mx-auto px-4 py-12">

    <!-- Introduction Card -->
    <div class="card bg-base-100 shadow-md mb-12">
        <div class="card-body">
            <h2 class="card-title text-2xl text-secondary mb-4">Upcoming Events</h2>
            <p class="text-base-content/80 leading-relaxed">
                San Isidro College hosts a variety of events throughout the year including academic conferences, cultural celebrations, sports tournaments,
    and student organization activities. Join us and be part of our vibrant college community!
            </p>
        </div>
    </div>


    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

        @foreach ($events ?? [] as $i)
            <a class="card bg-base-100 shadow-md hover:scale-105 transition-all ease-in-out" href="/events/{{  $i['id'] }}">

                <figure class="aspect-video">
                    <img src="/storage/{{ $i['image_url'] }}" />
                </figure>
                <div class="card-body">
                    <div class="font-bold text-lg"> {{ $i['title']}} </div>
                    <span class="flex gap-4 items-center text-xs">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-icon lucide-calendar"><path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/></svg>
                        {{ $i['start_date']->format('M d') }}
                        @if ($i['end_date'])
                            - {{ $i['end_date']->format('M d')}}
                        @endif
                    </span>


                    <span class="flex gap-4 items-center text-xs">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin-icon lucide-map-pin"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
                        {{ $i['location'] }}
                    </span>


                    <div class="truncate leading-4 h-[5rem] mt-5">
                        {!!   $i['description'] !!}
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
@endsection
