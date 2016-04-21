@extends('layouts.master')

@section('title')
    Contact
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ URL::secure('src/css/form.css') }}" type="text/css" />
@endsection
    
@section('content')
   
   
    
    <div class="row medium-8 large-7 columns">
        @include('includes.info-box')
        <form action="{{ route('contact.send') }}" method="post" id="contact-form">
            <div class="input-group">
                <label for="name">Your name</label>
                <input type="text" name="name" id="name" value="{{ Request::old('name') }}" />
            </div>
            <div class="input-group">
                <label for="email">Your email</label>
                <input type="email" name="email" id="email" value="{{ Request::old('email') }}"/>
            </div>
            <div class="input-group">
                <label for="subject">Subject</label>
                <input type="text" name="subject" id="subject" value="{{ Request::old('subject') }}"/>
            </div>
            <div class="input-group">
                <label for="message">Your message</label>
                <textarea name="message" id="message" rows="10">{{ Request::old('message') }}</textarea>
                
            </div>
            
            <input type="submit" value="Submit Message" class="btn" />
            <input type="hidden" value="{{ Session::token() }}" name="_token" />
        </form>
   </div>
  
@endsection