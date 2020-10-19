<header><h1>冒険の編集</h1></header>
<main>

<form action="{{ url('/hello/update/'.$goal->id)}}" method="POST">
  {{ csrf_field() }}
   <!-- 目標      <input type="text" name="goal" class="edit-new"><br> -->
 目標  <input type="text" name="goal" value="{{ $goal->goal }}" class="edit-new"><br>
  経験値<input type="number" name="experience_point" value="{{ $goal->experience_point }}"  class="edit-new"><br>
  ご褒美<input type="text" name="reward" value="{{ $goal->reward }}"  class="edit-new"><br>
  <button type="submit" name="add"  class="btn button">
   変更
  </button>
</form>
</main>
<link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

