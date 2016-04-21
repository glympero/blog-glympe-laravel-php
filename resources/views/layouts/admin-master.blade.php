<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Admin Area</title>
        
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
       
        <link rel="stylesheet" href="{{ URL::secure('src/css/admin.css') }}">
         <link rel="stylesheet" href="{{ URL::secure('src/css/foundation.css') }}">
        @yield('styles')
    </head>
    <body>
        @include('includes/admin-header')
    
        @yield('content')
        
        <script type="text/javascript">
            var baseUrl = "{{ URL::to('/') }}"
        </script>
        
        @yield('scripts')
        @include('includes/footer')
    </body>
</html>