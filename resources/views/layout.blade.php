<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- <link rel="stylesheet" href="/style/style.css"> -->
    <!-- <link rel="stylesheet" href="{{url('style/style.css')}}"> -->
    <link rel="stylesheet" href="{{asset('style').'/style.css'}}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <div class="container">
        @yield('content')
    </div>
</body>

</html>