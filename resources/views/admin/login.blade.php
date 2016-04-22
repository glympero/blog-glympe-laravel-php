@extends("layouts.master")

@section('styles')
        <link rel="stylesheet" href="{{ URL::secure('src/css/form.css') }}" type="text/css">
@endsection

@section('content')
    <div class="row medium-8 large-7 columns">
        @include('includes.info-box')
        
        <h1>Login</h1>
        
        <form method="POST" action="{{ route('admin.login') }}">
            
            <div class="input-group">
                
                <input type="text" name="email" id="email" placeholder="Your email" {{ $errors->has('email') ? 'class=has-error' : '' }} value="{{ Request::old('email') }}"/>
            </div>
            
            <div class="input-group">
                
                <input type="password" name="password" id="password" placeholder="Your password" {{ $errors->has('password') ? 'class=has-error' : '' }} />
            
            </div>
        
            
            <button type="submit" class="btn btn-success">Login</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}"/>
            
        </form>
    </section>    
    </div>

@endsection