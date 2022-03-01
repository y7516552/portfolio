<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        .controller{
            position: fixed;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            z-index:10;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.808);
            border-radius: 15px;
            padding: 10px;
        }
        .controller a{
            text-decoration: none;
            color: #000;
        }
        .controller a:hover{
            background-color: #fa0;
            color: #fff;
        }
    </style>
    @yield('css')
</head>
<body>
    <div class="controller">
        <h2>目錄</h2>
        <a href="{{route('fitness')}}">耀健身</a>
        <a href="{{route('weather')}}">天氣卡</a>
        <a href="{{route('game')}}">色弱遊戲</a>
        <a href="{{route('info')}}">簡易疫情資訊網</a>
        <a href="https://steven-store-laravel.herokuapp.com/">小型電商</a>
        <a href="{{route('index')}}">回首頁</a>
    </div>
    @yield('content')

    @yield('js')
</body>
</html>