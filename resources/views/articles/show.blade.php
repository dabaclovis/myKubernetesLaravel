@extends('layouts.users')

@section('content')
        <div class="card">
            @if ($article->image !== 'noimage')
            <img class="card-img-top" src="{{ asset('storage/images/'.$article->image) }}" alt="">
            @endif
            <div class="card-body">
                <h4 class="card-title">{{ Str::ucfirst($article->title) }}</h4>
                <p class="card-text">{{ Str::ucfirst($article->body) }}</p>
                <small>
                    written by {{ $article->user->fname }}, {{ $article->created_at->diffForHumans() }}
                </small>
            </div>
        </div>
        <a href="{{ route('articles.index') }}" class=" btn btn-secondary mt-2">
            <i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i>
        </a>
@endsection
