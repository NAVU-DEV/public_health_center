<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
    @include('components.style')
</head>
<body>
    <div class="content-wrapper">
        @include('components.header')
        <div class="wrapper bg-soft-primary">
            @yield('content')
        </div>
    </div>
    @include('components.footer')
    @include('components.script')
</body>
</html>