@extends("layouts.admin-master")

@section('styles')
    <link rel="stylesheet" href="{{ URL::secure('src/css/modal.css') }}" type="text/css" />

@endsection

@section('content')
    
    <div class="row medium-8 large-8 columns">
        @include('includes.info-box')
            <section id="post-admin">
                <a href="{{ route('admin.blog.create_post') }}" class="btn">New Post</a>
            </section>
            <section>
                
                     @if(count($posts) == 0)
                         No posts
                     @else
                         @foreach($posts as $post)
                             
                                 <article>
                                     <div class="post-info">
                                         <h3>{{ $post->title }}</h3>
                                         <span class="info">{{ $post->author }} | {{ $post->created_at }}</span>
                                     </div>
                                     <div class="edit">
                                         <nav>
                                             <ul>
                                                 <li>
                                                     <a href="{{ route('admin.blog.post', ['post_id' => $post->id, 'end' => 'admin']) }}">View Post</a>
                                                     <a href="{{ route('admin.blog.post.edit', ['post_id' => $post->id]) }}">Edit</a>
                                                     <a href="{{ route('admin.blog.post.delete', ['post_id' => $post->id]) }}" class="danger">Delete</a>
                                                 </li>
                                             </ul>
                                         </nav>
                                     </div>
                                 </article>
                             <hr/>
                        @endforeach
                     @endif
                
            </section>
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
        </div>
   
   
   
   
@endsection