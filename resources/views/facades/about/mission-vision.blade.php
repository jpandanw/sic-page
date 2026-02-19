
@extends('templates.facade-template')



@php
use Carbon\Carbon;
@endphp


@section('scripts')
@endsection



@section('body')

    <div class="bg-primary text-white h-50 flex items-center justify-center">
        <div class="w-fit text-center">
            <div class="font-bold text-3xl"> Our History </div>
            <span>Excellence in Education since 1948</span>
        </div>
    </div>

    <div class="breadcrumbs text-sm max-w-5xl w-full mx-auto">
        <ul>
            <li><a class="/">Home</a></li>
            <li><a>About</a></li>
            <li>Mission and Vision</li>

        </ul>
    </div>


    <div class=" max-w-5xl w-full mx-auto mt-5">
        <h1 class="font-bold text-5xl">Mission</h1>
        <div class="prose mt-10">
            An enlightened and Powered Catholic learning institution in the service of God,
            for others and the rest of creation.

        </div>
    </div>

    <div class=" max-w-5xl w-full mx-auto mt-5">
        <h1 class="font-bold text-5xl">Vision</h1>
        <div class="prose mt-10">
            <ol>
                <li>To develop dynamic curriculums, excellent instruction, efficient facilities for
                    the development of competencies and multiple skills.</li>
                <li>To witness to Gospel Values, build basic ecclesial communities and
                    demonstrate preferential option for the poor.</li>
                <li>To promote and strenghten social justice, human rights and integrity of
                    creation</li>
                <li>To instill national pride and appreciation of Filipino culture and heritage and
                    those of others.</li>
                <li>To conduct relevant researches.</li>
            </ol>
        </div>
    </div>


        <div class=" max-w-5xl w-full mx-auto mt-5">
            <h1 class="font-bold text-5xl">Core Values</h1>
            <div class="prose mt-10">
                <ol>
                    <li>To develop dynamic curriculums, excellent instruction, efficient facilities for
                        the development of competencies and multiple skills.</li>
                    <li>To witness to Gospel Values, build basic ecclesial communities and
                        demonstrate preferential option for the poor.</li>
                    <li>To promote and strenghten social justice, human rights and integrity of
                        creation</li>
                    <li>To instill national pride and appreciation of Filipino culture and heritage and
                        those of others.</li>
                    <li>To conduct relevant researches.</li>
                </ol>
            </div>
        </div>

        <div class="max-w-5xl w-full mx-auto mt-5 prose">

            <h2>Core Values</h2>


            <div class="core-value">
                <h3>1. Discipline and Character</h3>
                <p>
                    Practice of orderly conduct, good behavior, positive attitude and disposition towards self and others,
                    and development of personality with good mental and moral qualities.
                </p>
            </div>

            <div class="core-value">
                <h3>2. Excellence</h3>
                <p>
                    Adoption and exercise of quality standards, professionalism, truth, goodness, beauty, harmony,
                    distinctiveness, and promptness.
                </p>
            </div>

            <div class="core-value">
                <h3>3. Faith</h3>
                <p>
                    Adherence to strong belief and trust in God, church’s dogmas and doctrines, prayer, spiritual nurturing,
                    and obedience.
                </p>
            </div>

            <div class="core-value">
                <h3>4. Industry and Work</h3>
                <p>
                    Demonstration of diligence, patience, and grit through steady habitual effort, with focus on
                    study and learning, duty, tasks, livelihood, vocation, roles, functions, and service.
                </p>
            </div>

            <div class="core-value">
                <h3>5. Nationalism and Cultural Integration</h3>
                <p>
                    Promotion of national consciousness and loyalty to the country, its people, history, culture,
                    traditions, and constitution; preservation of Filipino cultural heritage; and respect for the
                    cultures of other peoples of the world.
                </p>
            </div>

            <div class="core-value">
                <h3>6. Social Responsibility</h3>
                <p>
                    Concern for and response to the welfare of human beings in society, and promotion of accountability,
                    justice, fairness, and equity.
                </p>
            </div>
        </div>


@endsection
