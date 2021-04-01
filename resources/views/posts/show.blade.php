@extends('layouts.layout')

@section('title', 'J.blog | ' . $post->title)

@section('content')
    <div class="mainbar">

        <div class="articletitle"><h2>{{ $post->title }}</h2></div>
            <div class="clr"></div>



        <div class="article">
            <div class="category"style="padding:
            11px">
                <a href="{{ route('categories.single', ['slug' => $post->category->slug]) }}" >{{
            $post->category->title
            }}</a>
            </div>
            <div class="img"><img src="{{ $post->getImage() }}" width="620" height="auto" alt="" class="fl"/></div>
            <div class="post_content">
            {!! $post->description !!}
                <hr>
            <p>{!! $post->content !!}</p>
            </div>
            @if($post->tags->count())
                @foreach($post->tags as $tag)
                    <button>
                    <a href="{{ route('tags.single', ['slug' => $tag->slug])}}" class="text-decoration-none">{{ $tag->title }}</a>
                    </button>
                @endforeach
            @endif
            <p><span>&nbsp;&bull;&nbsp;</span> {{ $post->created_at }} <span>&nbsp;&bull;&nbsp;</span>

                @auth
                    @if(Auth::user()->is_admin == 1)
                        <a href="{{ route('posts.edit', ['post' => $post->id]) }}"><strong>Edit</strong></a></p>
                    @endif
                @endauth



        </div>
    </div>
@endsection