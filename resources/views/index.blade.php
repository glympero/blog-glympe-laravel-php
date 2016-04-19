@extends('layouts.master')

@section('title')
    Post-it
@endsection

@section('styles')
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
@endsection

@section('content')
    @if(!empty(Request::segment(1)))
        <section class="filter-bar">
            A filter has been set! <a href="{{ route('index') }}">Show all notes</a>
        </section>
    @endif
    @if(count($errors) > 0)
        <section class="alert alert-danger text-center">
           
                @foreach($errors->all() as $error)
                    {{ $error }}
                @endforeach
            
        </section>
    @endif
    @if(Session::has('success'))
        <section class="alert alert-success text-center">
            {{ Session::get('success') }}
        </section>
    @endif
        
    
    <section class="quotes">
        <h1>Latest Notes</h1>
        <hr/>
        @for($i = 0; $i < count($quotes); $i++)
            <article class="quote">
                <div class="delete"><a href="{{ route('delete', ['quote_id' => $quotes[$i]->id]) }}">x</a></div>
                {{ $quotes[$i]->quote }}
                
                <div class="info">Created by <a href="{{ route('index', ['author' => $quotes[$i]->author->name]) }}">{{ $quotes[$i]->author->name }}</a> on {{ $quotes[$i]->created_at }}</div>
            </article>
        @endfor
        <div class="pagination">
            <!--{{ $quotes->links() }}-->
            @if($quotes->currentPage() !== 1)
                <a href="{{ $quotes->previousPageUrl() }}"><span class="fa fa-caret-left"></span></a>
            @endif
            @if($quotes->currentPage() !== $quotes->lastPage() && $quotes->hasPages())
                <a href="{{ $quotes->nextPageUrl() }}"><span class="fa fa-caret-right"></span></a>
            @endif
        </div>
    </section>
    
    
    
    <section class="edit-quote">
        <h1>Add a note</h1>
        <hr/>
        <form method="POST" action="{{ route('create') }}">
            
            <div class="input-group">
                
                <input type="text" name="author" id="author" placeholder="Your name"/>
            
            </div>
            
            <div class="input-group">
                
                <input type="email" name="email" id="email" placeholder="Your email"/>
            
            </div>
        
            <div class="input-group">
                
               
                <textarea rows="5" name="quote" id="quote" placeholder="Your note"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit Note</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}"/>
            
        </form>
    </section>
    
   
@endsection