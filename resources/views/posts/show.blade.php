@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="{{ asset('/storage/'.$post->image) }}" class="w-100" alt="image">
        </div>
        <div class="col-4">
            <div class="d-flex align-items-center">
                <div class="pe-3">
                    <img src="{{ asset('/storage/'.$post->user->profile->image) }}" class="w-100 rounded-circle" style="max-width:40px;" alt="image">
                </div>
                <div>
                    <strong>
                        <a href="/profile/{ $post->user->id }}" class="text-decoration-none text-dark">
                            {{ $post->user->username }}
                        </a>
                    </strong>
                </div>
                <div class="ps-3">
                    <a href="#" class="text-decoration-none">
                        <strong>
                            Follow
                        </strong>
                    </a>
                </div>
            </div>
            <hr>
            <div>
                    <strong>
                        <a href="/profile/{ $post->user->id }}" class="text-decoration-none text-dark">
                            {{ $post->user->username }}
                        </a>
                    </strong>
                    <span>{{ $post->caption }}</span>    
                </div>
        </div>
    </div>
</div>
@endsection
