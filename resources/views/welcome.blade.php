<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/space.css') }}" rel="stylesheet">
        <link rel="shortcut icon" type="image/x-icon"  href="{{ asset('/favicon.ico') }}">
        <title>自分クエスト</title>
        <!-- Styles -->
        <style>
            html, body {
                background-color: black;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }


            .top-right {
                position: absolute;
                left: 50%;
                transform: translateX(-50%);
                -webkit-transform: translateX(-50%);
                -ms-transform: translateX(-50%);
            }

            .content {
                text-align: center;
                position: relative;

            }

            .title {
                font-size: 84px;
                width:100%;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
          <!-- 宇宙テスト -->
<div id="d1">
  <div id="d2">
    <div id="d3">
    </div>
  </div>
</div>
  <!-- ここまで宇宙テスト -->

        <div class="flex-center position-ref full-height">
                <div class="light_1"></div>
            <div class="content">
                <div class="title m-b-md">
                    <p class="text-focus-in"> <img class="top-logo" src="../img/top-logo.svg" alt=""></p>
                </div>
                @if (Route::has('login'))
                <div class="top-right links login_box flex">
                    @auth
                    <div class="home_btn flex">
                        <a class="edit-new button" href="{{ url('/home') }}">Home</a>
                        <a class="edit-new button" href="https://jibun-quest-usage.s3.ap-northeast-1.amazonaws.com/quest_lp.html">使い方</a>
                    </div>
                    @else
                    <div class="home_btn flex">
                        <a class="edit-new button" href="{{ route('login') }}">Login</a>
                        @if (Route::has('register'))
                            <a class="edit-new button" href="{{ route('register') }}">Register</a>
                        @endif
                        <a class="edit-new button" href="https://jibun-quest-usage.s3.ap-northeast-1.amazonaws.com/quest_lp.html">使い方</a>
                        </div>
                    @endauth
                </div>
            @endif
            </div>
        </div>
    </body>
    <!-- <script type="text/javascript" src="techAcademy.js"></script> -->
</html>
