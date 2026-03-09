<?php

use App\Models\Announcements;
use App\Models\Articles;
use App\Models\Carousel;
use App\Models\Downloads;
use App\Models\Events;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $carousel = Carousel::where('is_published', true)
        ->orderBy('created_at', 'desc')
        ->get();

    $events = Events::where('is_published', true)
        ->orderBy('start_date', 'desc')
        ->limit(5)
        ->get();

    $announcements = Announcements::where('is_published', true)
        ->orderBy('created_at', 'desc')
        ->limit(6)
        ->get();

    return view('welcome', [
        'carousel' => $carousel,
        'events' => $events,
        'announcements' => $announcements,
    ]);
})->name('home');

Route::get('/events/{slug}', function ($slug) {
    $event = Events::all()->where('id', $slug)->first();

    return view('events', [
        'event' => $event,
    ]);
});

Route::get('/announcements/{id}', function ($id) {
    $announcement = Announcements::findOrFail($id);

    return view('facades/announcements/show', [
        'announcement' => $announcement,
    ]);
});

Route::get('/events', function () {
    $events = Events::where('is_published', true)
        ->orderBy('start_date', 'desc')
        ->paginate(12);

    return view('facades/events-list/index', [
        'events' => $events,
    ]);
});

Route::get('/articles', function () {
    $articles = Articles::where('is_published', true)
        ->orderBy('created_at', 'desc')
        ->paginate(20);

    return view('facades/articles/index', [
        'articles' => $articles,
    ]);
});

Route::get('/articles/{id}', function ($id) {
    $article = Articles::where('is_published', true)->findOrFail($id);

    return view('facades/articles/show', [
        'article' => $article,
    ]);
});

Route::get('/announcements', function () {
    $announcements = Announcements::orderBy('created_at', 'desc')->paginate(20);

    return view('facades/announcements/index', [
        'announcements' => $announcements,
    ]);
});

Route::get('/downloads', function () {
    $downloads = Downloads::orderBy('created_at', 'desc')->paginate(20);

    return view('facades/downloads/index', [
        'downloads' => $downloads,
    ]);
});

Route::get('/about', function () {
    return redirect('/about/history');
});

Route::get('/about/history', function () {
    return view('facades/about/history');
});

Route::get('/about/mission-vision', function () {
    return view('facades/about/mission-vision');
});

Route::get('/about/faculty-and-staff', function () {
    return view('facades/about/faculty-and-staff');
});

Route::get('/admission', function () {
    return view('facades/admission/index');
});

Route::get('/downloads', function () {
    return view('facades/downloads/index');
});

Route::prefix('/programs')->group(function () {
    Route::get('/', function () {
        return view('facades/programs/index');
    });
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

require __DIR__.'/settings.php';
