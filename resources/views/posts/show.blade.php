@extends('layouts.app')

@section('title',$post['first_name'])

@section('content')

<h1>{{$post['first_name']}}</h1>
<p>{{$post['lastName']}}</p>
    
@endsection