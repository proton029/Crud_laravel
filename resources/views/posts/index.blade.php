@extends('layouts.app')

@section('title','BlogPost')

@section('content')

    @foreach($posts as $key=>$post)

    @include('posts.partials.post')

    <div>{{$key}}. {{$post['first_name']}} {{$post['lastName']}}</div>

    @endforeach
    
@endsection
