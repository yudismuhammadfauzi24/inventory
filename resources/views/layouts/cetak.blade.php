<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="cstf-token" content="{{ csrf_token() }}">
  
    <title>{{config ('app.name', 'Inventori') }}</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <div id="app">
        <div class="content">
            @yield('content')
        </div>
    </div>
</body>
</html>