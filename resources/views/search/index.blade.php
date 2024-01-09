@extends('layouts.app')

@section('content')
@foreach($posts as $post)

  <div class="row">
    <div class="col-6 offset-3 pt-3 pb-3">
            <span class ="fw-bold"> 
              <img src="{{$post->user->profile->profileImage()}}" class="w-100 rounded-circle" alt="" style="max-width:50pX;">
                <a href="/profile/{{$post->user->id}}"  class="text-dark bg-color">
                    <span class="ps-3">{{$post->user->username}}
                    </span>
                </a>
            </span>
        </div>
       </div>
  <div class="row pb-5">
    <div class="col-6 offset-3">
        <a href="/profile/{{$post->user->id}}">
        <img src="/storage/{{$post->image}}" alt="" class="w-100 pb-3 rounded-image">
        <span class ="fw-bold text-dark">{{$post->caption}}</span>
        </a>
    </div>
</div>

  @endforeach

@endsection
