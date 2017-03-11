<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Missouri Soccer Association</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

</head>
<body>
<div class="container">
    <a href="{{ action('SchoolController@index') }}">Schools</a> |
    <a href="{{ action('TeamController@index') }}">Teams</a> |
</div>
<hr>
<div class="container">
    @yield('content')
</div>
</body>
</html>

