

@extends('templates.facade-template')



@php
use Carbon\Carbon;
@endphp


@section('scripts')
@endsection



@section('body')
<div class="container mx-auto">
    <div role="tablist" class="tabs tabs-border">
    <a role="tab" class="tab"> Faculty and Staff</a>
    <a role="tab" class="tab tab-active text-prbmary [--tab-bg:orange] [--tab-border-color:red]"> Organizational Chart</a>
    </div>
</div>
<h1 class="text-center p-5 font-bold text-5xl">Organizational Chart</h1>
<div
 class="container relative p-0 shadow-lg mx-auto h-200"
>
    <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
        src="https://www.canva.com/design/DAHBtt1hw2U/SC7sEKxKCZAHyX2He2mI9w/view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
    </iframe>

</div>


@endsection
