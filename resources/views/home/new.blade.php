<header><h1>入力フォーム</h1></header>
<main class="flex"> 
  <form action="{{ url('/hello/create')}}" method="POST">
    {{ csrf_field() }}
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
        <td><input type="datetime-local" name="time_limit" class="edit-new map_new"></td>
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
</main>
<link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">