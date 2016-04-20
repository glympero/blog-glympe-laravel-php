@extends('layouts.master')

@section('title')
    {{ $post->title }}
@endsection

@section('styles')

@endsection

@section('content')
   
    
    <div class="row medium-8 large-7 columns">
        <div class="blog-post">
            <h3>{{ $post->title }}</h3>
            <img class="thumbnail" src="http://placehold.it/850x350">   
            <p>{{ $post->body }}</p>
            <div class="callout">
                <ul class="menu simple">
                    <li><a href="#">{{ $post->author }}</a></li>
                    <li><a href="#">{{ $post->title }}</a></li>
                </ul>
            </div>
        </div>
   </div>
@endsection