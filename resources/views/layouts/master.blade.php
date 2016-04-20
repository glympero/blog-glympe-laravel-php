<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{ URL::secure('src/css/foundation.css') }}">
        <link rel="stylesheet" href="{{ URL::secure('src/css/main.css') }}">
        @yield('styles')
    </head>
    <body>
        @include('includes/header')
        <div class="main">
            @yield('content')
        </div>
        <script src="{{ URL::secure('js/vendor/jquery.js') }}"></script>
        <script src="{{ URL::secure('js/vendor/what-input.js') }}"></script>
        <script src="{{ URL::secure('js/vendor/foundation.js') }}"></script>
        <script src="{{ URL::secure('js/app.js') }}"></script>
        @include('includes/footer')
    </body>
</html>