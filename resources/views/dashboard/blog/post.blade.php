@extends('layouts.app')

@section('sections')
    <section class="resume-section p-3 p-lg-5">
        <div class="my-auto">
            <h2 class="mb-0">Blog
                <span class="text-primary">Post</span>
            </h2>
            <form method="POST" class="mb-1" action="{{ route('admin::blog.edit', ['post' => $post]) }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Post Title" value="{{$post->title}}">
                    @if ($errors->has('title'))
                        <small class="form-text text-danger">{{ $errors->first('title') }}</small>
                    @endif
                    <small id="titleHelp" class="form-text text-muted">A title for the post</small>
                </div>
                <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
                    <label for="slug">Slug</label>
                    <input type="text" name="slug" class="form-control" id="slug" placeholder="post-slug" value="{{$post->slug}}">
                    @if ($errors->has('slug'))
                        <small class="form-text text-danger">{{ $errors->first('slug') }}</small>
                    @endif
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Post Description!">{{$post->description}}</textarea>
                </div>
                <button type="submit" class="btn btn-outline-secondary"><i class="fa fa-save"></i> Save</button>
                <button type="button" class="btn btn-danger pull-right" data-toggle="modal" data-target="#confirm"><i class="fa fa-trash"></i> Delete</button>
            </form>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirm Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Warning! You are deleting this psot. Are you sure?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <form method="POST" action="{{ route('admin::blog.delete', ['post' => $post]) }}">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash"></i> Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
