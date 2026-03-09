@extends('templates.facade-template')

@php
use Carbon\Carbon;
@endphp

@section('scripts')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
@endsection

@section('body')
    <!-- Hero Image -->
    @if ($announcement->image_url)
        <img src="/storage/{{ $announcement->image_url }}" alt="{{ $announcement->title }}" class="object-cover h-full max-h-96 w-full">
    @else
        <div class="bg-gradient-to-r from-primary to-secondary h-96 w-full flex items-center justify-center">
            <div class="text-center text-white">
                <div class="text-6xl mb-4">📰</div>
                <p class="text-xl font-semibold">{{ $announcement->title }}</p>
            </div>
        </div>
    @endif

    <!-- Main Content -->
    <div class="max-w-5xl mx-auto px-4 py-8">
        <!-- Breadcrumbs -->
        <div class="breadcrumbs text-sm mb-6">
            <ul>
                <li><a href="/" class="link link-hover">Home</a></li>
                <li><a href="/announcements" class="link link-hover">Announcements</a></li>
                <li class="text-primary font-semibold">{{ $announcement->title }}</li>
            </ul>
        </div>

        <!-- Article Header -->
        <div class="mb-8" data-aos="fade-up">
            <h1 class="font-bold text-4xl md:text-5xl mb-4 font-outfit text-base-900">{{ $announcement->title }}</h1>
            
            <div class="flex flex-wrap gap-4 items-center text-base-600">
                <span class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v2H4a2 2 0 00-2 2v2h16V7a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v2H7V3a1 1 0 00-1-1zm0 5a2 2 0 012 2v2H4V9a2 2 0 012-2h12a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V9z" clip-rule="evenodd" /></svg>
                    {{ $announcement->created_at->format('F d, Y') }}
                </span>
                <span class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" /></svg>
                    {{ $announcement->created_at->diffForHumans() }}
                </span>
            </div>

            <div class="divider my-4"></div>
        </div>

        <!-- Article Content -->
        <div class="prose prose-lg max-w-none mb-12" data-aos="fade-up">
            @if ($announcement->description)
                {!! $announcement->description !!}
            @elseif ($announcement->content)
                {!! $announcement->content !!}
            @else
                <p class="text-base-600">No additional content available.</p>
            @endif
        </div>

        <!-- Related Announcements -->
        <div class="mt-16 pt-8 border-t border-base-300" data-aos="fade-up">
            <h3 class="text-2xl font-bold mb-8 font-outfit">More Announcements</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                    $relatedAnnouncements = \App\Models\Announcements::where('is_published', true)
                        ->where('id', '!=', $announcement->id)
                        ->orderBy('created_at', 'desc')
                        ->limit(3)
                        ->get();
                @endphp

                @forelse ($relatedAnnouncements as $related)
                    <a href="/announcements/{{ $related->id }}" class="card bg-base-100 shadow-md hover:shadow-lg hover:scale-105 transition-all ease-in-out overflow-hidden group">
                        <figure class="aspect-video overflow-hidden">
                            @if ($related->image_url)
                                <img src="/storage/{{ $related->image_url }}" alt="{{ $related->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform" />
                            @else
                                <div class="w-full h-full bg-gradient-to-br from-accent to-secondary flex items-center justify-center">
                                    <span class="text-4xl">📰</span>
                                </div>
                            @endif
                        </figure>
                        <div class="card-body">
                            <h4 class="card-title text-lg line-clamp-2 text-primary group-hover:text-accent transition-colors">{{ $related->title }}</h4>
                            <p class="text-sm text-base-content/70 line-clamp-2">{{ $related->description ?? $related->content }}</p>
                            <div class="text-xs text-base-content/60 mt-2">{{ $related->created_at->format('M d, Y') }}</div>
                        </div>
                    </a>
                @empty
                    <div class="col-span-full text-center py-8">
                        <p class="text-base-600">No other announcements available.</p>
                    </div>
                @endforelse
            </div>
        </div>

        <!-- Back to Announcements -->
        <div class="mt-12 text-center" data-aos="fade-up">
            <a href="/announcements" class="btn btn-primary btn-lg">
                ← Back to All Announcements
            </a>
        </div>
    </div>

    <script>
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 1000,
                once: true,
            });
        }
    </script>
@endsection
