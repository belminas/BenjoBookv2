@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
    <div class="col-8">
        <img src="/storage/{{$post->image}}" alt="" class="w-100 rounded-image">
    </div>
    <div class="col-4">
        <div class="d-flex align-items-center">
            <div class="pe-3">
                <img src="{{$post->user->profile->profileImage()}}" class="w-100 rounded-circle" alt="" style="max-width:50pX;">
            </div>
            <div>
                <div class ="fw-bold d-flex">
                    <a href="/profile/{{$post->user->id}}">
                        <span class="text-dark">{{$post->user->username}}

                        </span>
                    </a>
                    <a class="ps-3" href="#">Follow</a>
                    @if(Auth::check() && Auth::user()->id == $post->user_id)
                    <div>
                        <form class="ps-5" action="/delete/{{$post->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                @endif
                </div>
            </div>
        </div>

        <hr>
        <span class ="fw-bold"> 
            <a href="/profile/{{$post->user->id}}">
                <span class="text-dark">{{$post->user->username}}
                    
                </span>
            </a>
        </span>
        <span>  {{$post->caption}}</span>
    </div>
   </div>
</div>
@endsection
