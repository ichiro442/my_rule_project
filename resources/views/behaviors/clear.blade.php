<div class="clear_container flex">
    <img class="clear_img_1" src="https://www.dq11.jp/_img/gate_v6/pic.jpg" alt="">
    <!-- <img class="clear_img" src="https://xneo.jp/wp-content/uploads/2019/09/dq-walk-1.jpeg" alt=""> -->
    <!-- スターウォーズ css -->
    <div class="type-pers-parent">
        <!-- 宇宙背景 -->
        <div id="d1">
            <div id="d2">
                <div id="d3">
                </div>
            </div>
        </div>
        <!-- ここまで宇宙背景 -->
     <div class="type-pers-child">
                <!-- clear_messages -->
        <div class="clear_messages flex">
            <div class="clear_message  edit-new">
                <p>{{ $user->name }}は<br>
                <span>{{ $behavior->experience_point }}ポイント</span>の経験値を かくとく！</p>
                <p>今のトータルの経験値は<span> {{ $user->experience_point }}</span></p>
            <p>あなたの現在のレベルは<span>  Lv{{ $user->level }}</span></p>
            <p>あなたは<span> {{ $hoge->level_name }} </span>です</p>
            </div>
            <div class="clear_message edit-new">
                おめでとうございます！！！！<br>
                <br>
                ご褒美
                <p class="behavior_rewward">【{{ $behavior->reward }}】</p>
            で 戦いの疲れを癒してください
        </div>
            <!-- clear_messages -->
        <!-- clear_btn -->
            <div class="clear_btn">
                    <a class="edit-new button" href="/hello/{{ $goal->id }}">次の敵を倒す</a>  <a class="edit-new button" href="/hello">疲れを癒す</a>
            </div>
        <!-- clear_btn -->
      </div>
    </div>
    <!-- スターウォーズ css -->
</div>
<link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="{{ asset('css/space.css') }}" rel="stylesheet">


