@section('styles')
     <link rel="stylesheet" href="{{ URL::secure('src/css/common.css') }}" type="text/css" />
@append

@if(Session::has('fail'))
    
    <div class="alert callout">
      {{ Session::get('fail') }}
      
    </div>
@endif

@if(Session::has('success'))
    
    <div class="success callout">
      {{ Session::get('success') }}
      
    </div>
@endif

@if(count($errors) > 0)
    <div class="alert callout">
      
          @foreach($errors->all() as $error)
              <p>{{ $error }}</p>
          @endforeach
      
      
    </div>
@endif