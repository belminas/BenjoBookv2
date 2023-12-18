@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://media.wired.com/photos/59324c6352d99d6b984dd8ee/master/w_1920,c_limit/Grumpy_Kitty....jpg" class="img-responsive rounded-circle img-thumbnail" alt="">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create">New Post</a>
            </div>
            <div class="d-flex">
                <div class="pe-5"><strong>{{$user->posts->count()}}</strong> post</div>
                <div class="pe-5"><strong>21K</strong> followers</div>
                <div class="pe-5"><strong>212</strong> following</div>
            </div>
            <div class=" pt-4 fw-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <a href="#">{{$user->profile->url}}</a>
        </div>
        <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{$post->id}}">
                    <img src="/storage/{{ $post->image }}" class="w-100" >
                </a>
            </div>
        @endforeach
         </div>
    </div>
</div>
@endsection
