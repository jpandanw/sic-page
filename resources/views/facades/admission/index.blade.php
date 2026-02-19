@extends('templates.facade-template')



@php
@endphp


@section('scripts')

@endsection

@section('body')

    <div class="bg-primary text-white h-50 flex items-center justify-center flex-col">
        <div class="w-fit text-center flex justify-center flex-col items-center">
            <div class="font-bold text-5xl"> Admission </div>
            <div class="bg-white h-3 mt-5 w-45"></div>
        </div>
    </div>

    <div class="max-w-5xl mx-auto mt-5 space-y-8">

        <div class="card rounded-lg shadow-2xl bg-green-100">
            <div class="card-body">
                <h1 class="text-2xl font-bold text-green-800"> Basic Education</h1>
                <div class="grid grid-cols-2">
                    <div>
                        <div class="text-lg font-bold"> Pre School </div>
                        <p class="text-lg text-blue-900">Requirements</p>
                        <div class="prose">
                            <ul class="leading-5">
                                <li>Birth Certificate</li>
                                <li>Health Certificate</li>
                                <li>Parent's ID</li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <div class="text-lg font-bold"> Elementary </div>
                        <p class="text-lg text-blue-900">Requirements</p>
                        <div class="prose">
                            <ul class="leading-5">
                                <li>Birth Certificate</li>
                                <li>Health Certificate</li>
                                <li>Parent's ID</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card rounded-lg shadow-xl bg-purple-50">
            <div class="card-body">
                <h1 class="text-2xl font-bold text-purple-800"> High School </h1>
                <div class="grid grid-cols-2">
                    <div>
                        <div class="text-lg font-bold"> Junior High School </div>
                        <p class="text-lg text-blue-900">Requirements</p>
                        <div class="prose">
                            <ul class="leading-5">
                                <li>Birth Certificate</li>
                                <li>Health Certificate</li>
                                <li>Parent's ID</li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <div class="text-lg font-bold"> Senior High School </div>
                        <p class="text-lg text-blue-900">Requirements</p>
                        <div class="prose">
                            <ul class="leading-5">
                                <li>Birth Certificate</li>
                                <li>Health Certificate</li>
                                <li>Parent's ID</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card rounded-lg shadow-xl bg-blue-50">
            <div class="card-body">
                <h1 class="text-2xl font-bold text-blue-800"> Higher Education </h1>
                <div class="grid grid-cols-2">
                    <div>
                        <div class="text-lg font-bold"> Bachelor's Degree </div>
                        <p class="text-lg text-blue-900">Requirements</p>
                        <div class="prose">
                            <ul class="leading-5">
                                <li>Birth Certificate</li>
                                <li>Health Certificate</li>
                                <li>Parent's ID</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
