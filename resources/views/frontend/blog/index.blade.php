@extends('layouts.master')

@section('title')
    My Blog
@endsection

@section('styles')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
@endsection

@section('content')
    <div class="row medium-8 large-7 columns">
        <div class="blog-post">
            <h3>Awesome blog post title <small>3/6/2016</small></h3>
            <img class="thumbnail" src="http://placehold.it/850x350">   
            <p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus.</p>
            <div class="callout">
                <ul class="menu simple">
                    
                    <li><a href="#">Read More</a></li>
                </ul>
            </div>
        </div>
   </div>
   <section class="pagination">
       
   </section>
@endsection