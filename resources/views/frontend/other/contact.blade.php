@extends('layouts.master')

@section('title')
    Contact
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ URL::to('src/css/form.css') }}" type="text/css" />
@endsection
    
@section('content')
   
   @include('includes.info-box')
    
    <div class="row medium-8 large-7 columns">
        <form action="" method="" id="contact-form">
            <div class="input-group">
                <label for="name">Your name</label>
                <input type="text" name="name" id="name" />
            </div>
            <div class="input-group">
                <label for="email">Your email</label>
                <input type="email" name="email" id="email" />
            </div>
            <div class="input-group">
                <label for="subject">Subject</label>
                <input type="text" name="subject" id="subject" />
            </div>
            <div class="input-group">
                <label for="message">Your message</label>
                <textarea name="message" id="message" rows="10"></textarea>
                <input type="text" name="subject" id="subject" />
            </div>
            
            <input type="submit" value="Submit Message" class="btn" />
            <input type="hidden" value="{{ Session::token() }}" name="_token" />
        </form>
   </div>
  
@endsection