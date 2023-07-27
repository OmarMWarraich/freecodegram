@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <div style="width:200px;height:200px;">
                <img src="{{ asset('jpg/profile.jpg') }}" style="width:100%;height:100%;" class="rounded-circle" alt="image">
            </div>
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>
                    {{ $user->username }}
                </h1>
                <a href="/p/create" class="text-decoration-none">
                    Add New Post
                </a>
            </div>
            <div class="d-flex">
                <div style="padding-right:2rem;"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div style="padding-right:2rem;"><strong>17</strong> followers</div>
                <div style="padding-right:2rem;"><strong>40</strong> following</div>
            </div>
            
            <div class="pt-4"><strong>{{ $user->profile->title }}</strong></div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#" class="text-decoration-none">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <img src="{{ asset('/storage/'.$post->image) }}" alt="image" class="w-100">
            </div>
        @endforeach
        
    </div>
</div>
@endsection
