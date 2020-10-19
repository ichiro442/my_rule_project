<header><h1>入力フォーム</h1></header>
<main>
<form action="{{ url('/hello/create')}}" method="POST">
  {{ csrf_field() }}
   目標      <input type="text" name="goal" class="edit-new"><br>
  経験値<input type="number" name="experience_point" value="0" class="edit-new"><br>
  期限<input type="datetime-local" name="time_limit" class="edit-new"><br>
  ご褒美<input type="text" name="reward" class="edit-new"><br>
  <button type="submit" name="add" class="btn button">
   追加
  </button>
</form>
</main>
<link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">