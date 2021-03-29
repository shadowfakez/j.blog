@extends('layouts.layout')

@section('title', 'J.blog | Home')

@section('header')
    <div class="slider">
        <div id="coin-slider">
            <a href="#"><img src="assets/front/images/slide1.jpg" width="960" height="360" alt="" /> </a>
            <a href="#"><img src="assets/front/images/slide2.jpg" width="960" height="360" alt="" /> </a>
            <a href="#"><img src="assets/front/images/slide3.jpg" width="960" height="360" alt="" /> </a>
        </div>
        <div class="clr"></div>
    </div>
@endsection

@section('content')
<div class="mainbar">

    @foreach($posts as $post)
        <div class="articletitle"><h2><a href="{{ route('posts.single', ['slug' => $post->slug]) }}" class="rm">{{ $post->title
        }}</a></h2></div>
        <div class="article">
        <p class="infopost">Posted <span class="date">{{ $post->created_at }}</span> |  <a href="{{ route
        ('categories.single', ['slug' => $post->category->slug]) }}">{{
            $post->category->title }}</a> <a href="#" class="com"><span><i class="fa fa-eye"></i>{{ $post->views
            }}</span></a></p>
        <div class="clr"></div>
        <div class="img"><img src="{{ $post->getImage() }}" width="620" height="auto" alt="no-image.png" class="fl"
            /></div>
        <div class="post_content">
            {!! $post->description !!}
            <p class="spec"><a href="{{ route('posts.single', ['slug' => $post->slug]) }}" class="rm">Read more &raquo;</a></p>
        </div>
        <div class="clr"></div>
    </div>

    @endforeach

    {{--<p class="pages"><small>Page 1 of 2</small> <span>1</span> <a href="#">2</a> <a href="#">&raquo;</a></p>--}}
        <div class="row">
            <div class="col-md-12">
                <ul class="pagination pagination-sm m-0 float-right">
                {{ $posts->links() }}</div>
                </ul>
            </div>

</div>
@endsection