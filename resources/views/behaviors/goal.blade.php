<div class="goal_wrapper flex">
      <!-- ラスボス画像 -->
      <img class="goal_img buruburu" src="https://yuugokino.com/wp-content/uploads/2019/06/f8c5975420433544f1ae12d94a2993c8.png" alt="">
      <div class="goal_container">
            <!-- カウントダウンタイマー -->
            <div class="goal_cdt_wrapper flex">
              <div class="cdt flex edit-new">
                  <span class="cdt_txt" id="cdt_txt"></span>
                  <span class="cdt_date" id="cdt_date"></span>
              </div>
            </div>
            <!-- user情報 -->
            <div class="battle_left">
              <div class="battle_member edit-new">
                <table>
                    <tr>
                    コナン
                    </tr>
                    <tr>
                    <th>H</th>
                    <td>319</td>
                    </tr>
                    <tr>
                    <th>M</th>
                    <td>192</td>
                    </tr>
                    <tr>
                    <th>Lv</th>
                    <td>35</td>
                    </tr>
                </table>
              </div>
              <br>
              <!-- 行動の選択 -->
              <div class="behavior_choice edit-new flex">
                <p>たたかう</p>
                <p>いれかえ</p>
                <p>さくせん</p>
                <p>にげる</p>
              </div>
          </div>
            <div class="goal_enemy edit-new">
            {{ $goal->goal }}ダークドレアム があらわれた！
            </div>
      </div>
 </div>
            <!-- カウントダウンタイマーjs -->
<script>
function CountdownTimer(elm, tl, mes) {
  this.initialize.apply(this, arguments);
}
CountdownTimer.prototype = {
  initialize: function (elm, tl, mes) {
    this.elem = document.getElementById(elm);
    this.tl = tl;
    this.mes = mes;
  },
  countDown: function () {
    var timer = '';
    var today = new Date();
    var day = Math.floor((this.tl - today) / (24 * 60 * 60 * 1000));
    var hour = Math.floor((day * 24) + ((this.tl - today) % (24 * 60 * 60 * 1000)) / (60 * 60 * 1000));
    var min = Math.floor(((this.tl - today) % (24 * 60 * 60 * 1000)) / (60 * 1000)) % 60;
    var sec = Math.floor(((this.tl - today) % (24 * 60 * 60 * 1000)) / 1000) % 60 % 60;
    var milli = Math.floor(((this.tl - today) % (24 * 60 * 60 * 1000)) / 10) % 100;
    var me = this;

    if ((this.tl - today) > 0) {
      if (hour) timer += '<span class="cdt_num">' + hour + '</span><small>時間</small>';
      timer += '<span class="cdt_num">' + this.addZero(min) + '</span><small>分</small><span class="cdt_num">' + this.addZero(sec) + '</span><small>秒</small><span class="cdt_num">' + this.addZero(milli) + '</span>';
      this.elem.innerHTML = timer;
      tid = setTimeout(function () {
        me.countDown();
      }, 10);
    } else {
      this.elem.innerHTML = this.mes;
      return;
    }
  },
  addZero: function (num) {
    return ('0' + num).slice(-2);
  }
}

// ▼ 開始＆終了日時の指定と日付の判別
function CDT() {
  const timeLimit = `{{ $goal->time_limit }}` //タイムリミット
  console.log(timeLimit)
  var myD = Date.now(); // 1970/1/1午前0時から現在までのミリ秒
  var start = new Date(timeLimit); // 開始日時の指定
  var myS = start.getTime(); // 1970/1/1午前0時からの開始日時までのミリ秒
  var end = new Date('2020-010-01T14:00+09:00');   // 終了日時の指定
  
  var myE = end.getTime(); // 1970/1/1午前0時から終了日時までのミリ秒

  // 今日が開始日前か期間中か終了日後かの判別
  if (myS <= myD && myE >= myD) {
    var text = '<span>戦闘終了</span><span>まで</span>';
    var tl = end;
  } // 期間中
  else if (myS > myD) {
    var text = '<span></span><span></span>';
    var tl = start;
  } // 開始日前
  else {
    var text = "";
  } // 終了日後
  var timer = new CountdownTimer('cdt_date', tl, '<small>{{ $goal->goal }}ダークドレアム をたおしましたか？ <br> <a class=" button" href="/goal/clear/{{ $goal->id  }}">はい</a> <a class="button" href="/goal/goal_update_time_limit/{{ $goal->id  }}">いいえ</a></small>'); // 終了日後のテキスト
  timer.countDown();
  target = document.getElementById("cdt_txt");
  target.innerHTML = text; 
}
window.onload = function () {
  CDT();
}

</script>
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">