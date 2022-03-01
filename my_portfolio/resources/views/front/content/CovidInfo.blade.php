@extends('front.portfolio')
@section('title','簡易COVID-19資訊網')
 
@section('css')
    <style>
         * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        .container {
            display: grid;
            grid-template-areas:
                'item1 item2 item3'
                'item4 item5 item6';
            grid-column-gap: 10px;
            grid-row-gap: 10px;
        }

        .item {
           
            padding: 40px;
            font-size: 35px;
            text-align: center;
            color: #000;
            transition: .3s;
        }

        .item:hover {
            box-shadow: 3px 3px 3px 5px #aaa;
            transform: translateY(5px);
        }

        .item1 {
            background-color: #fa0;
        }

        .item2 {
            background-color: #af0;
        }

        .item3 {
            background-color: #0fa;
        }

        .item4 {
            background-color: #0af;
        }

        .item5 {
            background-color: #f0a;
        }

        .item6 {
            background-color: #a0f;
        }

        i,
        p,
        span {
            display: inline;
            margin: 20px 0;
        }

        img {
            display: block;
            margin: auto;
        }

        @media(max-width:960px) {
            .container {
                display: grid;
                grid-template-areas:
                    'item1'
                    'item2'
                    'item3'
                    'item4'
                    'item5'
                    'item6';
                grid-column-gap: 10px;
                grid-row-gap: 10px;
            }
        }
    </style>
@endsection

@section('content')
<div class="container">
    <div class="item item1">
        <h3>簡易COVID-19資訊網</h3>
        <select id="mySelect" class="dropdown" onchange="countrySelect()">
            <option value="">請選擇</option>
            <option value="Taiwan">台灣</option>
            <option value="USA">美國</option>
            <option value="Japan">日本</option>
        </select>
    </div>
    <div class="item item2">
        <i class="fa fa-user-plus" aria-hidden="true"></i>
        <p>今日確診:</p>
        <span id="today"></span>
    </div>
    <div class="item item3">
        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
        <p>新增死亡:</p>
        <span id="pass"></span>
    </div>
    <div class="item item4">
        <span id="country"></span>
        <img src="" id="flag">
        <p style="font-size:20px;" id="currentDate"></p>
    </div>
    <div class="item item5">
        <i class="fa fa-bar-chart" aria-hidden="true"></i>
        <p>總各案數:</p>
        <span id="total"></span>
    </div>
    <div class="item item6">
        <i class="fa fa-meh-o" aria-hidden="true"></i>
        <p>總死亡數:</p>
        <span id="all"></span>
    </div>
</div>
@endsection

@section('js')
    <script>
        function countrySelect() {
            var c = document.getElementById("mySelect").value;

            var link = "https://corona.lmao.ninja/v2/countries/" + c;

            fetch(link)
            .then((response) => {
                return response.json();
            })
            .then((data) => {
                var total = parseFloat(data.cases);
                var pass = parseFloat(data.deaths);

                document.getElementById("country").innerHTML = data.country;
                document.getElementById("today").innerHTML = data.todayCases.toLocaleString();
                document.getElementById("pass").innerHTML = data.todayDeaths.toLocaleString();
                document.getElementById("total").innerHTML = total.toLocaleString();
                document.getElementById("all").innerHTML = pass.toLocaleString();
                document.getElementById("flag").src = data.countryInfo.flag;
            });
            var time = new Date();

            document.getElementById("currentDate").innerHTML = time;
        };
    </script>
@endsection
