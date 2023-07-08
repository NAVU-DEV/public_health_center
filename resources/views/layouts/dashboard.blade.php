<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('components.style')
    @stack('styles')
</head>
<body>
    <div class="content-wrapper">
        <div class="wrapper bg-soft-primary">
            @yield('content')
        </div>
    </div>
    @include('components.script')
    @stack('scripts')
</body>
</html>