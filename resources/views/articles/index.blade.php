@extends('layouts.users')

@section('content')
    <div class=" d-flex justify-content-between">
        <div class=" w3-xlarge">
            Articles
        </div>
        <div class="">
            <a href="{{ route('articles.create') }}" class=" btn btn-success">Create Article</a>
        </div>
    </div><hr>
@endsection
