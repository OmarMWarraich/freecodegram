@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <div style="width:200px;height:200px;">
                <img src="jpg/profile.jpg" style="width:100%;height:100%;" class="rounded-circle" alt="image">
            </div>
        </div>
        <div class="col-9 pt-5">
            <div>
                <h1>{{ $user->username }}</h1>
            </div>
            <div class="d-flex">
                <div style="padding-right:2rem;"><strong>24</strong> posts</div>
                <div style="padding-right:2rem;"><strong>17</strong> followers</div>
                <div style="padding-right:2rem;"><strong>40</strong> following</div>
            </div>
            
            <div class="pt-4"><strong>Omar Mohammad</strong></div>
            <div>BlockChain Developer</div>
            <div>Full Stack Developer</div>
            <div><a href="#">https://o-v-a-portfolio.netlify.app/</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="jpg/profile.jpg" alt="image">
        </div>
        <div class="col-4">
            <img src="jpg/profile.jpg" alt="image">
        </div>
        <div class="col-4">
            <img src="jpg/profile.jpg" alt="image">
        </div>
    </div>
</div>
@endsection
