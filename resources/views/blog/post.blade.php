@extends('layouts.app')

@section('title-extension')
    - {{$post->title}}
@endsection

@section('sections')

    <section class="resume-section p-3 p-lg-5 d-flex d-column">
        <div class="my-auto">
            <h1 class="mb-0 text-primary"><a href="{{ route('blog::post', ['post' => $post]) }}">{{ $post->title }}</a></h1>
            <div class="subheading mb-3">
                {{ $post->created_at }} ·
                <a href="mailto:haghighati.amir@gmail.com" target="_blank" rel="noopener">haghighati.amir@gmail.com</a>
                @if(!Auth::guest())
                    · <a href="{{ route('admin::blog.edit', ['post' => $post]) }}" class="btn btn-sm btn-outline-success"><i class="fa fa-edit"></i></a>
                @endif
            </div>
            <div class="mb-1">
                {!! $post->description !!}
            </div>
        </div>
    </section>

@endsection
