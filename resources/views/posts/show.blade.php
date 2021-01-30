@extends('layouts.main')

@section('content')

    <div class="container mb-5">

        <h1> {{ $post->title }} </h1>

            <div class="mb-2">Last Update: {{$post->updated_at->diffForHumans() }} </div>
            {{-- @dump($post->infoPost()); --}}
            {{-- @dump($post->infoPost); --}}
            {{-- @dump($post->infoPost->post_status); --}}                  {{-- <---ti mostra la relazione in più modi --}}
             <div class="mb-2">POST STATUS: {{ $post->infoPost->post_status }} </div>



            <div class="actions mb-5">
                <a class=" btn btn-primary "href="{{ route('posts.edit', $post->slug) }}">Edit</a>
                <form class= "d-inline" action=" {{ route('posts.destroy',$post->id) }} " method="POST" >
                    @csrf
                    @method('DELETE')
                    <input class="btn btn-danger" type="submit" value="Delete">
                </form>
            </div>

        @if (!empty($post->path_img))
             <img width="1000px"src="{{asset('storage/'. $post->path_img )}}" alt="{{$post->title}}">
        @else{{-- <p> no image for this post</p> --}}
       {{-- oppure volendo settare una placeholder presa dal web --}}
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/200px-No_image_available.svg.png"
        alt="{{$post->title}}">

        @endif

        <div class="text mb- mt-5">{{ $post->body }}</div>


        {{-- @dump($post->comments) --}}

        <h4 class="mt-4 mb-2">COMMENTS:</h4>
        <ul class="comments">
            @foreach ($post->comments as $comment)
                <li class="mb-4">
                    <div class="date"> {{ $comment->created_at ->diffForHumans() }} </div>
                    <p class="text"> {{ $comment->text }} </p>
                    <h6> {{ $comment->author }} </h6>
                </li>

            @endforeach
        </ul>

    </div>


@endsection
