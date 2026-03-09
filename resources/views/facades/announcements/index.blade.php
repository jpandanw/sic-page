@extends('templates.facade-template')

@php
use Carbon\Carbon;
@endphp

@section('scripts')
@endsection

@section('body')

<!-- Hero Section -->
<div class="bg-gradient-to-r from-primary to-secondary text-primary-content min-h-96 flex items-center justify-center">
    <div class="text-center px-4">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Announcements</h1>
        <p class="text-lg opacity-90">Latest Updates from San Isidro College</p>
        <div class="divider divider-primary opacity-50 my-4 max-w-xs mx-auto"></div>
    </div>
</div>

<!-- Breadcrumbs -->
<div class="max-w-6xl mx-auto px-4 py-4">
    <div class="breadcrumbs text-sm">
        <ul>
            <li><a href="/" class="link link-hover">Home</a></li>
            <li class="text-primary font-semibold">Announcements</li>
        </ul>
    </div>
</div>

<!-- Main Content -->
<div class="max-w-6xl mx-auto px-4 py-12">

    <!-- Introduction Card -->
    <div class="card bg-base-100 shadow-md mb-12">
        <div class="card-body">
            <h2 class="card-title text-2xl text-primary mb-4">Stay Informed</h2>
            <p class="text-base-content/80 leading-relaxed">
                Keep up-to-date with important announcements from San Isidro College. Here you'll find notifications about admissions, academic calendar changes, campus events, maintenance schedules, and other significant college updates.
            </p>
        </div>
    </div>

    <!-- Announcements Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        @foreach ($announcements as $announcement)
            <a class="card bg-base-100 shadow-md hover:shadow-lg hover:scale-105 transition-all ease-in-out overflow-hidden group" href="/announcements/{{ $announcement->id }}">
                <figure class="aspect-video overflow-hidden">
                    <img src="/storage/{{ $announcement->image_url }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform" alt="{{ $announcement->title }}" />
                </figure>
                <div class="card-body">
                    <h3 class="card-title text-lg line-clamp-2 text-primary">{{ $announcement->title }}</h3>
                    <p class="text-sm text-base-content/70 line-clamp-3">{!! $announcement->description !!}</p>
                    <div class="flex justify-between items-center text-xs text-base-content/60 pt-2 border-t border-base-300">
                        <span>{{ $announcement->created_at->diffForHumans() }}</span>
                        <span class="btn btn-xs btn-primary">Read More →</span>
                    </div>
                </div>
            </a>
        @endforeach

    </div>

    <!-- Pagination -->
    <div class="flex justify-center mt-12">
        {{ $announcements->links() }}
    </div>
</div>

@endsection
