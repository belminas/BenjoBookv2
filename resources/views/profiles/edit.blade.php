@extends('layouts.app')

@section('content')
<div class="container">
<form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')
    <div class="row">
    <div class="col-8 offser-2">
        <div class="row">
            <h1> Add New Post</h1>
        </div>
        <div class="row mb-3">
                            <label for="title" class="col-md-4 col-form-label">Title</label>

                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title }}"  autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label">Description</label>

                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user->profile->description }}"  autocomplete="description" autofocus>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
            </div>
            <div class="row">
                <label for="image" class="col-md-4 col-form-label">Profile Image</label>
                <input type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" id="image">
                @error('image')
                    <strong>{{ $message }}</strong>
                 @enderror
            </div>
            <div class="row pt-4">
                <button class="btn btn-primary"  style="max-width:20%;">Save Profile</button>
            </div>
   </div>
    </form>
</div>
@endsection
