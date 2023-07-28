@extends('layouts.default')

@yield('header')


@yield('content')
<h1>{{$data->title}}</h1>
<h2>{{$category}}</h2>
<h3>{{$data->available}}</h3>
<p>{{$data->content}}</p>
<div>
    <input class="editPost" type="text">
    <button onclick="editPost({{$data->id}}, event)" class="btn btn-dark">edit</button>
</div>
