@extends('layouts.app')

@section('title',$post['first_name'])

@section('content')

<h1>{{$post->first_name}}</h1>
<p>{{$post->lastName}}</p>
<p>Added {{$post->created_at->diffForHumans()}}</p>

@if (now()->diffInMinutes($post->created_at)<5)

<div class="alert alert-info">New!!</div>
    
@endif
    
@endsection