<header class="main_color"><h1>入力フォーム</h1></header>
<body>
<main class="new_main flex"> 
<img class="new_img" src="https://img.atwikiimg.com/www30.atwiki.jp/niconicomugen/attach/7980/16749/DQ5-2.png" alt="">
<span class="flash1"></span>
  <!-- <div class="new_form"> -->
    <form action="{{ url('/hello/create')}}" method="POST">
      {{ csrf_field() }}
              <!-- 未入力エラー -->
              @if ($errors->any())
            <div class="alert edit-new alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
      <table>
        <tr>
          <th>目標</th>
          <td><input type="text" name="goal" class="edit-new map_new"></td>
        </tr>
        <tr>
          <th>経験値</th>
          <td><input type="number" name="experience_point" value="0" class="edit-new map_new"></td>
        </tr>
        <tr>
          <th>期限</th>
          <td><input type="datetime-local" name="time_limit" class="edit-new map_new limit_btn"></td>
        </tr>
        <tr>
          <th>ご褒美</th>
          <td><input type="text" name="reward" class="edit-new map_new"></td>
        </tr>
      </table> 
      <button type="submit" name="add" class="btn button">
        追加
      </button>
    </form>
  </div>
</main>
</body>
<link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

