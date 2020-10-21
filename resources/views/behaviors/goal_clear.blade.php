<div class="clear_container flex">
    <img class="clear_img_1" src="https://www.dq11.jp/_img/gate_v6/pic.jpg" alt="">
    <!-- <img class="clear_img" src="https://xneo.jp/wp-content/uploads/2019/09/dq-walk-1.jpeg" alt=""> -->
    <div class="clear_messages flex">
        <div class="clear_massage  edit-new">
            <p>勇者は<br>
            {{ $goal->experience_point }}ポイントの経験値を かくとく！<br>
            </p>

            <p>今のトータルの経験値は {{ $user->experience_point }}</p>
            <p>あなたの現在のレベルは Lv{{ $user->level }}</p>
            <p>あなたは {{ $level->level_name }}</p>
        </div>
        <div class="clear_message edit-new">
            <p>おめでとうございます！！<br>
            <br>
            ご褒美<br>
            【{{ $goal->reward }}】で<br>
            <br>
            戦いの疲れを癒してください</p>
    </div>
    <div class="clear_btn">
            <a class="edit-new button" href="/hello/{{ $goal->id }}">次の敵を倒す</a>  <a class="edit-new button" href="/hello">疲れを癒す</a>
    </div>

</div>

<!-- テストscss  -->
<!-- <div class="bluelight">
    <a href="#">HOVER</a>
</div>
<p class="caption">BLUE LIGHT BUTTON</p>
 -->

<link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


