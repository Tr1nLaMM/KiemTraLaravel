@extends('master.master')

@section('content')
<div class="wrapper d-flex">
    <div class="content-section">
        @foreach($categories as $category)
        <div class="category-card mt-4">
            <div class="category-header">
                <h2 class="category-title">{{$category->title}}</h2>
            </div>
            <div class="category-body">
                <ul class="post-list">
                    @foreach($category->posts as $post)
                    <li class="post-item">
                        <a href="{{ route('posts.show', ['id' => $post->id]) }}" class="post-title font-weight-bold">{{$post->title}}</a>
                        <p class="post-content m-0">{{$post->content}}</p>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endforeach
    </div>
    <div class="logo-section">
        <h1 class="partner-logo-title">Logo các đối tác</h1>
        <div class="partner-logo-list">
            @foreach($logos as $logo)
            <div class="partner-logo-item">
                <a class="partner-logo-link" href="{{ route('posts.show', ['id' => $logo->id]) }}"><img src="{{$logo->slide_url }}" alt=""></a>
                <p class="partner-logo-name">{{$logo->name}}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
