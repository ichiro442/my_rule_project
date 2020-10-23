<style>
  /* ボタン２ */
  .button_2{
    color: #d2ae2c;
    position:relative;
    transition:800ms ease all;
  }
  .button_2:hover{
    background: #ad6fbf;
    color: #d2ae2c;
    text-shadow:none;
  }
  .button_2:before,.button_2:after{
    content:'';
    position:absolute;
    top:0;
    right:0;
    height:2px;
    width:0;
    background: #d2ae2c;
    transition:400ms ease all;
  }
  .button_2:after{
    right:inherit;
    top:inherit;
    left:0;
    bottom:0;
  }
  .button_2:hover:before,.button_2:hover:after{
    width:100%;
    transition:800ms ease all;
  }
</style>
<header class="top_header flex">
<a href="http://127.0.0.1:8000/" class="main_color button_2">冒険の外</a>
<img class="top-logo" src="../img/top-logo.svg" alt="">
<!-- <h1>自分クエスト</h1> -->
<a href="/hello/new/" class="btn-new main_color button_2">
 冒険の追加
  </a>
</header>
<body>
  <!-- 宇宙css -->
<div id="d1">
  <div id="d2">
    <div id="d3">
    </div>
  </div>
</div>
<!-- ここまで宇宙css -->
<main>
  <br>
  <div class="task-items">
        @foreach ($goals as $goal)
          <div class="task">
                <div class="task-text">
                    <a href="/hello/{{ $goal->id }}" class="btn-text button">
                        {{ $goal->goal }}
                    </a>
                </div>
                <div class="task-btn">
                  <a href="/hello/edit/{{ $goal->id }}" class="btn-edit btn button">
                    編集
                  </a>
                  <a href="/hello/delete/{{ $goal->id }}" class="btn-delete btn button">
                    削除
                  </a>
            </div>
          </div>
        @endforeach
  </div>
</main>
</body>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/space.css') }}">

