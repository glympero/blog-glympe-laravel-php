@extends('layouts.master')

@section('title')
    My Blog
@endsection

@section('styles')
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
@endsection

@section('content')
    <div class="row medium-8 large-7 columns">
        @include('includes.info-box')
        @foreach($posts as $post)
        <div class="blog-post">
            <h3>{{ $post->title }} <small>{{ $post->created_at }}</small></h3>
            <img class="thumbnail" src="http://placehold.it/850x350">   
            <p>{{ $post->body }}</p>
            <div class="callout">
                <ul class="menu simple">
                    
                    <li><a href="{{ route('blog.single', ['post_id' => $post->id, 'end' => 'frontend']) }}">Read More</a></li>
                </ul>
            </div>
        </div>
        @endforeach
   </div>
    @if($posts->lastPage() > 1)
       <section class="pagination">
           @if($posts->currentPage() !== 1)
                <a href="{{ $posts->previousPageUrl() }}"><span class="fa fa-caret-left"></span></a>
            @endif
            @if($posts->currentPage() !== $posts->lastPage() && $posts->hasPages())
                <a href="{{ $posts->nextPageUrl() }}"><span class="fa fa-caret-right"></span></a>
            @endif
       </section>
    @endif
@endsection