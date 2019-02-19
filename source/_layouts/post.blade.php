@extends('_layouts.master')

@section('body')
    <div class="post">
        <h1>{{ $page->title }}</h1>

        <div class="date">
            {{ date('F j, Y', $page->date) }}
        </div>

        @yield('content')
    </div>
@endsection
