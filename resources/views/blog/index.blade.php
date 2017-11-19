@extends('layouts.app')

@section('title-extension')
    - Blog
@endsection

@section('sections')

    @if($posts->count() > 0)
    @foreach($posts->sortByDesc('created_at') as $post)
        <div class="blog-post p-3 p-lg-5 d-flex d-column">
            <div class="my-auto">
                <h2 class="mb-0 text-primary"><a href="{{ route('blog::post', ['post' => $post]) }}">{{ $post->title }}</a></h2>
                <div class="subheading mb-3">
                    {{ $post->created_at }} ·
                    <a href="mailto:haghighati.amir@gmail.com" target="_blank" rel="noopener">haghighati.amir@gmail.com</a>
                    @if(!Auth::guest())
                        · <a href="{{ route('admin::blog.edit', ['post' => $post]) }}" class="btn btn-sm btn-outline-success"><i class="fa fa-edit"></i></a>
                    @endif
                </div>
                <div class="mb-1">
                    {!! $post->brief !!}
                </div>
                <div class="text-center mb-0">
                    <a class="btn btn-outline-secondary" href="{{ route('blog::post', ['post' => $post]) }}"><i class="fa fa-link" aria-hidden="true"></i> Read More</a>
                </div>
            </div>
        </div>
    @endforeach
    {{ $posts->links('vendor/pagination/bootstrap-4') }}
    @else
        <section class="resume-section p-3 p-lg-5 d-flex d-column align-items-center justify-content-center">
            <div class="my-auto text-center">
                <h1 class="mb-0 text-primary">Come Back Soon...</h1>
                <h2 class="mb-0 text-muted">No Blog posts were found but I'll write soon!</h2>
                <h1 class="text-muted">;)</h1>
            </div>
        </section>
    @endif

@endsection
