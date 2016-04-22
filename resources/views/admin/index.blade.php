@extends("layouts.admin-master")

@section('styles')
    <link rel="stylesheet" href="{{ URL::secure('src/css/modal.css') }}" type="text/css" />

@endsection

@section('content')
    
    <div class="row medium-12 large-12 columns">
        @include('includes.info-box')
        <div class="card">
            <header>
                <nav>
                    <li><a href="{{ route('admin.blog.create_post') }}" class="btn">New Post</a></li>
                    <li><a href="{{ route('admin.blog.index') }}" class="btn">Show all Posts</a></li>
                </nav>
            </header>
            <section>
                <ul>
                     @if(count($posts) == 0)
                         <li>No posts</li>
                     @else
                         @foreach($posts as $post)
                             <li>
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
                             </li>
                        @endforeach
                     @endif
                </ul>
            </section>
        </div>
   
   
        <div class="card">
            <header>
                <nav>
                    
                    <li><a href="{{ route('admin.contact.index') }}" class="btn">Show all Messages</a></li>
                </nav>
            </header>
            <section>
                <ul>
                    @if(count($contact_messages) == 0)
                       <li>No messages</li>
                    @endif
                    @foreach($contact_messages as $contact_message)
                     <li>
                         <article data-message="{{ $contact_message->body }}" data-id="{{ $contact_message->id }}">
                             <div class="message-info">
                                 <h3>{{ $contact_message->subject }}</h3>
                                 <span class="info">Sender: {{ $contact_message->sender }} | {{ $contact_message->created_at }}</span>
                             </div>
                             
                         </article>
                     </li>
                     @endforeach
                </ul>
            </section>
        </div>
   </div>
   <div class="modal" id="contact-message-info">
       <button class="btn" id="modal-close">Close</button>
   </div>
   
   <script type="text/javascript">
            var token = "{{ Session::token() }}";
    </script>
    <script type="text/javascript" src="{{ URL::secure('src/js/modal.js') }}"></script>
    <script type="text/javascript" src="{{ URL::secure('src/js/contact-messages.js') }}"></script>
@endsection