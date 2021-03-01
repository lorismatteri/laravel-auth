@extends('layouts.dashboard')

@section('content')
    <h1>All articles for the Admin</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Body</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
            <tr>
                <td>{{$article->id}}</td>
                <td>{{$article->title}}</td>
                <td>{{$article->slug}}</td>
                <td>{{$article->body}}</td>
                <td>
                    <a href="{{route('admin.articles.show', ['article' => $article->slug])}}" class="btn btn-primary"><i class="fas fa-eye fa-sm fa-fw"></i>View</a>
                    <a href="#" class="btn btn-warning"><i class="fas fa-pen fa-sm fa-fw"></i>Edit</a>
                    <a href="#" class="btn btn-danger"><i class="fas fa-trash fa-sm fa-fw"></i>Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection