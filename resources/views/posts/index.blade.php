@extends('layouts.app')

@section('content')
<div class="container">
  @foreach($posts as $post)
  <div class="row pt-5">
    <div class="col-6 offset-3">
        <a href="/profile/{{$post->user->id}}">
        <img src="/storage/{{$post->image}}" alt="" class="w-100">
        </a>
    </div>
</div>
<div class="row">
<div class="col-6 offset-3 pt-3 pb-3">
        <span class ="fw-bold"> 
            <a href="/profile/{{$post->user->id}}">
                <span class="text-dark">{{$post->user->username}}
                    
                </span>
            </a>
        </span>
        <span>  {{$post->caption}}</span>
    </div>
   </div>
  @endforeach

  <div class="row">
    <div class="col-12 d-flex justify-content-center">
        {{$posts->links()}}
    </div>
  </div>

</div>
@endsection
