@extends('templates.facade-template')

@php
use Carbon\Carbon;
@endphp

@section('scripts')
@endsection

@section('body')

<!-- Hero Section -->
<div class="bg-gradient-to-r from-accent to-primary text-primary-content min-h-96 flex items-center justify-center">
    <div class="text-center px-4">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Articles & Blog</h1>
        <p class="text-lg opacity-90">Insights and Stories from San Isidro College</p>
        <div class="divider divider-primary opacity-50 my-4 max-w-xs mx-auto"></div>
    </div>
</div>

<!-- Breadcrumbs -->
<div class="max-w-6xl mx-auto px-4 py-4">
    <div class="breadcrumbs text-sm">
        <ul>
            <li><a href="/" class="link link-hover">Home</a></li>
            <li class="text-accent font-semibold">Articles & Blog</li>
        </ul>
    </div>
</div>

<!-- Main Content -->
<div class="max-w-6xl mx-auto px-4 py-12">

    <!-- Introduction Card -->
    <div class="card bg-base-100 shadow-md mb-12">
        <div class="card-body">
            <h2 class="card-title text-2xl text-accent mb-4">Latest Articles</h2>
            <p class="text-base-content/80 leading-relaxed">
                Explore our collection of articles featuring insights from faculty, student achievements, campus life stories, and educational resources. Our blog covers topics relevant to students, parents, and the broader academic community.
            </p>
        </div>
    </div>

    <!-- Articles Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">

        @foreach($articles ?? [] as $article)
        <a href="/articles/{{ $article['id'] }}" class="card bg-base-100 shadow-md hover:shadow-lg hover:scale-105 transition-all ease-in-out overflow-hidden group">
            <!-- Article Image -->
            <figure class="aspect-video relative overflow-hidden">
                <img src="/storage/{{ $article['image_url'] }}" alt="{{ $article['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform" />
            </figure>

            <!-- Article Details -->
            <div class="card-body">
                <h3 class="card-title text-lg text-accent line-clamp-2">{{ $article['title'] }}</h3>

                <p class="text-sm text-base-content/70 line-clamp-3">{!! $article['description'] !!}</p>

                <!-- Article Metadata -->
                <div class="flex justify-between items-center text-xs text-base-content/60 pt-2 border-t border-base-300">
                    <span>{{ $article['created_at']->diffForHumans() }}</span>
                    <span class="btn btn-xs btn-accent">Read More →</span>
                </div>
            </div>
        </a>
        @endforeach

    </div>

    <!-- Pagination -->
    <div class="flex justify-center mt-12">
        {{ $articles->links() }}
    </div>

</div>

@endsection
