@extends('layouts.app')

@section('title-extension')
    - HTTP 502 Bad Gateway
@endsection

@section('sections')

    <section class="resume-section p-3 p-lg-5 d-flex d-column align-items-center justify-content-center">
        <div class="my-auto text-center">
            <h1 class="mb-0 text-primary">Whoops!</h1>
            <h2 class="mb-0 text-muted">502 - Bad Gateway!</h2>
            <h1 class="text-muted">:(</h1>
        </div>
    </section>

@endsection
