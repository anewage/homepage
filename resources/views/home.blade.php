@extends('layouts.app')

@section('sections')

    <section class="resume-section p-3 p-lg-5" id="about">
        <div class="my-auto">
            @if(session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Session Status:</strong> {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
                <h2 class="mb-0">Adminstrative
                    <span class="text-primary">Dashboard</span>
                </h2>
                <ul class="nav nav-tabs" id="dashboard" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="home" aria-selected="true">Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                    </li>
                </ul>
                <div class="tab-content" id="dashboardContent">
                    <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                        @if($posts->count() > 0)
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $index => $post)
                                <tr>
                                    <th scope="row">{{$index+1}}</th>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->shortDescription}}</td>
                                    <td>{{$post->created_at}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @else
                            <div class="text-center text-muted"> No posts yet!</div>
                        @endif
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                </div>
        </div>
    </section>
@endsection
