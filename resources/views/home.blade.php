@extends('layouts.default')


@section('headers')
    <title>overview</title>

@section('content')
    <div>
        <h1>OVERVIEW</h1>
        <a href="/">All</a>
        @foreach($categories as $category)
            <a href="/category/{{$category->id}}">{{$category->name}}</a>
        @endforeach
    </div>
    <div>
        <button onclick="createPost(event)" class="btn btn-primary">add post</button>
        <input class="create-post">
        <input class="create-post">
        <input class="create-post">
    </div>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Category</th>
            <th scope="col">Available</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $post)
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td><a href="/single/{{$post->id}}">{{$post->title}}</a></td>
                <td>{{$post->content}}</td>
                <td>{{$post->category}}</td>
                <td>{{$post->available}}</td>
                <td><button onclick="deletePost({{$post->id}})" class="btn btn-danger">delete</button></td>
            </tr>
        @endforeach
        </tbody>
    </table>
