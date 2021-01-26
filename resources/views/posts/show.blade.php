@extends('layouts.main')

@section('content')

    <div class="container mb-5">

        <h1> {{ $post->title }} </h1>

        <div>Last Update: {{$post->updated_at->diffForHumans() }} </div>

        <div class="actions mb-5">
            <a class="mt-2 btn btn-primary "href="{{ route('posts.edit', $post->slug) }}">Edit</a>
        </div>

        @if (!empty($post->path_img))
            <img src=" {{asset('storage/' . $post->path_img )}} " alt=" {{ $post->title }} ">
        @else
        {{-- <p> no image for this post</p> --}}
       {{-- oppure volendo settare una placeholder presa dal web --}}
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/200px-No_image_available.svg.png"
        alt=" {{ $post->title }} " >

        @endif

        <div class="text mb- mt-5">{{ $post->body }}</div>


    </div>


@endsection
