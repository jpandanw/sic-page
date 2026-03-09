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
                San Isidro College hosts a variety of events throughout the year including academic conferences, cultural celebrations,
                sports tournaments, and student organization activities. Join us and be part of our vibrant college community!
            </p>
        </div>
    </div>

    @if ($events->isEmpty())
        <!-- Empty State -->
        <div class="flex flex-col items-center justify-center py-24 text-base-content/50">
            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="mb-6 opacity-40"><path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/></svg>
            <p class="text-xl font-semibold mb-2">No Events Scheduled</p>
            <p class="text-sm">Check back soon for upcoming events.</p>
        </div>
    @else
        <!-- Events Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($events as $event)
                <a class="card bg-base-100 shadow-md hover:shadow-lg hover:scale-105 transition-all ease-in-out overflow-hidden group" href="/events/{{ $event->id }}">
                    <figure class="aspect-video overflow-hidden">
                        <img src="/storage/{{ $event->image_url }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform" alt="{{ $event->title }}" />
                    </figure>
                    <div class="card-body">
                        <h3 class="card-title text-lg line-clamp-2 text-secondary">{{ $event->title }}</h3>

                        <div class="flex flex-col gap-1 text-xs text-base-content/60">
                            <span class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/></svg>
                                {{ $event->start_date->format('M d, Y') }}
                                @if ($event->end_date)
                                    &mdash; {{ $event->end_date->format('M d, Y') }}
                                @endif
                            </span>

                            @if ($event->location)
                                <span class="flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
                                    {{ $event->location }}
                                </span>
                            @endif
                        </div>

                        <p class="text-sm text-base-content/70 line-clamp-3 mt-2">{!! $event->description !!}</p>

                        <div class="card-actions justify-end mt-2 pt-2 border-t border-base-300">
                            <span class="btn btn-xs btn-secondary">View Details →</span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="flex justify-center mt-12">
            {{ $events->links() }}
        </div>
    @endif

</div>

@endsection
