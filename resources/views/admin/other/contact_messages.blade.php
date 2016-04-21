@extends("layouts.admin-master")

@section('styles')
    <link rel="stylesheet" href="{{ URL::secure('src/css/modal.css') }}" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
@endsection

@section('content')
    <div class="row medium-8 large-7 columns">
       
        <section class="list">
            @if(count($contact_messages) == 0)
                No messages
            @endif
            @foreach($contact_messages as $contact_message)
                <article data-message="{{ $contact_message->body }}" data-id="{{ $contact_message->id }}" class="contact-message">
                    <div class="message-info">
                        <h3>{{ $contact_message->name }}</h3>
                        <span class="info">Sender: {{ $contact_message->sender }} | {{ $contact_message->created_at }}</span>
                        
                    </div>
                    <div class="edit">
                        <nav>
                            <ul>
                                
                                <li><a href="#">Show message</a></li>
                                <li><a href="#" class="danger">Delete</a></li>
                            </ul>
                        </nav>
                    </div>
                </article>
            
            @endforeach
        </section>
        
        @if($contact_messages->lastPage() > 1)
       <section class="pagination">
           @if($contact_messages->currentPage() !== 1)
                <a href="{{ $contact_messages->previousPageUrl() }}"><span class="fa fa-caret-left"></span></a>
            @endif
            @if($contact_messages->currentPage() !== $contact_messages->lastPage() && $contact_messages->hasPages())
                <a href="{{ $contact_messages->nextPageUrl() }}"><span class="fa fa-caret-right"></span></a>
            @endif
       </section>
    @endif
   </div>
        
@endsection

@section('scripts')
<script type="text/javascript">
        var token = "{{ Session::token() }}";
    </script>
    <script type="text/javascript" src="{{ URL::secure('src/js/modal.js') }}"></script>
    <script type="text/javascript" src="{{ URL::secure('src/js/contact_messages.js') }}"></script>
@endsection