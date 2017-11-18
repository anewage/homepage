@extends('layouts.app')

@section('sections')

    @foreach($posts as $post)
        <div class="blog-post p-3 p-lg-5 d-flex d-column">
            <div class="my-auto">
                <h1 class="mb-0 text-primary">{{ $post['title'] }}</h1>
                <div class="subheading mb-3">{{ $post['created_at'] }} ·
                    <a href="mailto:haghighati.amir@gmail.com" target="_blank">haghighati.amir@gmail.com</a>
                </div>
                <div class="mb-1">
                    {!! $post['description'] !!}
                </div>
            </div>
        </div>
    @endforeach

@endsection
