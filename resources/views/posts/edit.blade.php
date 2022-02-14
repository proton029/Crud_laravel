@extends('layouts.app')

@section('first_name','Update the post')

@section('content')
<form action="{{route('posts.update',['post'=>$post->id])}}" method="POST">
   @csrf
   @method('PUT')
    @include('posts.partials.form')
    <div>
        <input type="submit" value="Update">
    </div>
</form>
@endsection