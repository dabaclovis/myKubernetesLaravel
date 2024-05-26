@extends('layouts.users')


@section('content')
    <div class="card">
        <div class="card-header w3-padding-16 w3-xlarge">
            Create Article
        </div>
    </div>
    <div class="card">
        <div class="card-body w3-card-4 w3-container">
            <form action="{{ route('articles.store') }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="form-group pt-1">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control">
                    @error('title')
                        <div class=" alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class=" form-group">
                    <label for="body">Content</label>
                    <textarea name="body" id="body" class="form-control" cols="30" rows="10"></textarea>
                    @error('body')
                        <div class=" alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="file" name="image">
                </div>
                <div class="form-group d-flex justify-content-end">
                    <button class=" btn btn-success btn-sm" type="submit">create</button>
                </div>
            </form>
        </div>
    </div>
@endsection
