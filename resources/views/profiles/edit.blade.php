@extends('layouts.app')

@section('content')
<div class="container">
<form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Edit Profile</h1>
                </div>

                <div class="row mb-3">
                    <label for="title" class="col-md-4 col-form-label">Title</label>

                    
                    <input id="title" 
                        type="text" 
                        class="form-control @error('title') is-invalid @enderror" 
                        name="title" 
                        value="{{ old('title') ?? $user->profile->title }}" 
                        required autocomplete="title" autofocus>

                    @error('title')
                        <strong>{{ $message }}</strong>
                    @enderror
                    
                </div>

                <div class="row mb-3">
                    <label for="description" class="col-md-4 col-form-label">Description</label>

                    
                    <input id="description" 
                        type="text" 
                        class="form-control @error('description') is-invalid @enderror" 
                        name="description" 
                        value="{{ old('description') ?? $user->profile->description }}"
                        required autocomplete="description" autofocus>

                    @error('description')
                        <strong>{{ $message }}</strong>
                    @enderror
                    
                </div>

                <div class="row mb-3">
                    <label for="url" class="col-md-4 col-form-label">Url</label>

                    
                    <input id="url" 
                        type="text" 
                        class="form-control @error('url') is-invalid @enderror" 
                        name="url" 
                        value="{{ old('url') ?? $user->profile->url }}"
                        required autocomplete="url" autofocus>

                    @error('url')
                        <strong>{{ $message }}</strong>
                    @enderror
                    
                </div>

                <div class="row mb-3">
                    <label for="image" class="col-md-4 col-form-label">Profile Image</label>

                    
                    <input id="image" 
                        type="file" 
                        class="form-control-file" 
                        name="image"
                        id="image" 
                        value="{{ old('image') }}" 
                        autocomplete="image" autofocus>

                    @error('image')
                        <strong>{{ $message }}</strong>
                    @enderror
 
                </div>

                <div class="row pt-4 w-25">
                    <button class="btn btn-primary">Save Profile</button>                
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
