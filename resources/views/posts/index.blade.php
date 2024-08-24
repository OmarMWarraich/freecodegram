@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
        <div class="row">
            <div class="col-6 offset-3">
                <a href="/profile/{{ $post->user->id }}">
                    <img src="{{ asset('/storage/'.$post->image) }}" class="w-100" alt="image">
                </a>
            </div>
        </div>
        <div class="row pt-2 pb-4">
            <div class="col-6 offset-3">
            
                <div>
                        <strong>
                            <a href="/profile/{{ $post->user->id }}" class="text-decoration-none text-dark">
                                {{ $post->user->username }}
                            </a>
                        </strong>
                        <span>{{ $post->caption }}</span>    
                    </div>
            </div>
        </div>
    @endforeach

    <div class="row">
        <div class="d-flex justify-content-center">
            {{ $posts->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>
@endsection
