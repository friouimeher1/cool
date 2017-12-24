@extends('layouts.base')
@section('content')

<div class="panel panel-info" style="margin:80px">
  <div class="panel-heading">
    <strong>All Post</strong>
  </div>
  <div class="panel-body">
    @foreach ($posts as $post)

    <h4><a href="{{route('post.show',$post)}}">{{ $post->name }} </a></h4>
    <hr>

    @endforeach
  </div>
</div>

@endsection
