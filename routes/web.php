<?php

use App\Models\Carousel;
use App\Models\Events;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    $carousel = Carousel::all();
    $events = Events::orderBy("start_date", "desc")->limit(5)->get();

    return view("welcome", [
        "carousel" => $carousel,
        "events" => $events,
    ]);
})->name("home");

Route::get("/events/{slug}", function ($slug) {
    $event = Events::all()->where("id", $slug)->first();

    return view("events", [
        "event" => $event,
    ]);
});

Route::get("/about/history", function () {
    return view("facades/about/history");
});

Route::get("/about/mission-vision", function () {
    return view("facades/about/mission-vision");
});

Route::get("/about/faculty-and-staff", function () {
    return view("facades/about/faculty-and-staff");
});

Route::get("/admission", function () {
    return view("facades/admission/index");
});

Route::prefix("/programs")->group(function () {
    Route::get("/", function () {
        return view("facades/programs/index");
    });
});

Route::view("dashboard", "dashboard")
    ->middleware(["auth", "verified"])
    ->name("dashboard");

require __DIR__ . "/settings.php";
