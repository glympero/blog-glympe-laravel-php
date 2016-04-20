@extends("layouts.admin-master")



@section('content')
    <div class="row medium-8 large-7 columns">
        <section id="post-admin" >
                <a href="{{ route('admin.blog.post.edit', ['post_id' => $post->id]) }}" class="btn">Edit Post</a>
                <a href="{{ route('admin.blog.post.delete', ['post_id' => $post->id]) }}" class="btn">Delete Post</a>
            </section>
        
        <div class="blog-post">
            <h3>{{ $post->title }} <small>{{ $post->created_at }}</small></h3>
            <img class="thumbnail" src="http://placehold.it/850x350">   
            <p>{{ $post->body }}</p>
            <div class="callout">
                <ul class="menu simple">
                    <li><a href="#">{{ $post->author }}</a></li>
                    <li><a href="#">{{ $post->created_at }}</a></li>
                </ul>
            </div>
        </div>
        
   </div>
    
@endsection