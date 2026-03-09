
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
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Downloads</h1>
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
    <div style="left: 0; width: 100%; height: 400px; position: relative;">
        <iframe src="https://drive.google.com/embeddedfolderview?id=1Dpey7uY8dYWc5UR-ehlDQfOJUkXz6gF6#grid" style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;" allowfullscreen></iframe>
    </div>
</div>

@endsection
