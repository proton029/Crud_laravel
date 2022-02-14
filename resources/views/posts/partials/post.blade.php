@if ($loop->even)

<div>{{$key}}.{{$post->email}}</div>

@else
<div style="background-color: silver">{{$key}}.{{$post->email}}</div>
    
@endif


<div>

<form action="{{route('posts.destroy',['post'=>$post->id])}}" method="POST">
@csrf
@method('DELETE');
<input type="submit" value="Delete!">

</form>

</div>