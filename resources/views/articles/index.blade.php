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
    @if (count($articles) > 0)
        <p> {{ Auth::user()->fname }}  have created <strong>{{ $articles->count() }} </strong> articles</p>
        @foreach ($articles as $article)
        <div class="list-group">
            <a href="{{ route('articles.show', $article->id) }}" class="list-group-item list-group-item-action flex-column align-items-start mb-1">
                <div class="d-flex w-100 justify-content-between">
                    <h4 class="mb-1">{{ Str::ucfirst($article->title) }}</h4>
                    <small>{{ $article->created_at->diffForHumans() }}</small>
                </div>
                <p class="mb-1">{{ Str::limit(Str::ucfirst($article->body)),150, '...' }}</p>
                <small>written by {{ $article->user->fname }}</small>
                <form action="{{ route('articles.destroy',$article->id) }}" method="post">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                </form>
            </a>
        </div>
        @endforeach
    @else
        <div class=" d-flex justify-content-center">
            <p>
                {!! Str::upper(Auth::user()->name) !!} HAVE NO ARTICLE
            </p>
        </div>
    @endif
@endsection
