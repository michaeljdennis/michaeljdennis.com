@extends('_layouts.master')

@section('body')
    @foreach ($posts as $post)
        <div class="post">
            <h1>
                <a href="{{ $post->getUrl() }}" class="title-link">
                    {{ $post->title }}
                </a>
            </h1>

            <div class="date">
                {{ date('F j, Y', $post->date) }}
            </div>
        </div>
    @endforeach
@endsection
