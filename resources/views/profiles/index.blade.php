@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            @can('update', $user->profile)
            <a href="/profile/{{ $user->id }}/edit" class="text-decoration-none">
            @endcan
                <img src="{{ asset($user->profile->profileImage()) }}" class="rounded-circle w-100" alt="image">
            </a>
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <div class="me-4 h4">
                        {{ $user->username }}
                    </div>
                    @cannot('update', $user->profile)
                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                    @endcannot
                </div>
            @can('update', $user->profile)
                <a href="/p/create" class="text-decoration-none btn btn-primary">Add New Post</a>
            @endcan
            </div>
            @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit" class="text-decoration-none btn btn-primary">Edit Profile</a>
            @endcan
            <div class="d-flex">
                <div style="padding-right:2rem;"><strong>{{ $postCount }}</strong> posts</div>
                <div style="padding-right:2rem;"><strong>{{ $followersCount }}</strong> followers</div>
                <div style="padding-right:2rem;"><strong>{{ $followingCount }}</strong> following</div>
            </div>
            
            <div class="pt-4"><strong>{{ $user->profile->title }}</strong></div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#" class="text-decoration-none">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img src="{{ asset('/storage/'.$post->image) }}" alt="image" class="w-100">
                </a>
            </div>
        @endforeach
        
    </div>
</div>
@endsection
