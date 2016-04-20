@section('styles')
     <link rel="stylesheet" href="{{ URL::to('src/css/common.css') }}" type="text/css" />
@append

@if(Session::has('fail'))
    
    <div data-alert class="alert-box alert round">
      {{ Session::get('fail') }}
      <a href="#" class="close">&times;</a>
    </div>
@endif

@if(Session::has('success'))
    
    <div data-alert class="alert-box success round">
      {{ Session::get('success') }}
      <a href="#" class="close">&times;</a>
    </div>
@endif

@if(count($errors) > 0)
    <div data-alert class="alert-box success round">
      <ul>
          @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
      <a href="#" class="close">&times;</a>
    </div>
@endif