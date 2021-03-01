@extends('layouts.app')

@section('content')
    <h1>Blog</h1>
    @foreach ($articles as $article)
            
        <div class="card mb-2">
            <div class="card-header">
                <h4 class="card-title">{{$article->title}}</h4>
            </div>
            <div class="card-body">
                <p class="card-text">{{$article->body}}</p>
            </div>
            <div class="card-footer text-muted">
                <p>{{$article->created_at}}</p>
            </div>
        </div>
        
    @endforeach
@endsection