
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{--    <link rel="stylesheet" href="/css/style.css">--}}
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
{{--    <script src="/js/index.js"></script>--}}
    <script src="{{URL::asset('js/index.js')}}"></script>
    <title>@yield('title')</title>
</head>
<body>
{{--    <img src="/img/1.jpg" alt="Nancy" style="width: 200px">--}}
    <img src="{{URL::asset('img/1.jpg')}}" alt="Nancy" style="width: 200px">
    @yield('header')
    <h2 style="color: red">
        Đây là phần chung, phần mà tất cả các page đều phải có. Đây là thay đổi ở layout.
        Đã đổi.
    </h2>
    <div>
        @yield('content')
    </div>
</body>
</html>
