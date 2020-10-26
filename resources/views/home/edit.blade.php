<header class="main_color"><h1>冒険の編集</h1></header>
<main class="edit_main flex">
  <form action="{{ url('/hello/update/'.$goal->id)}}" method="POST">
    {{ csrf_field() }}
    <table>
      <tr>
        <th>目標</th>
        <td><input type="text" name="goal" value="{{ $goal->goal }}" class="edit-new map_new"></td>
      </tr>
      <tr>
        <th>経験値</th>
        <td><input type="number" name="experience_point" value="{{ $goal->experience_point }}"  class="edit-new map_new"></td>
      </tr>
      <tr>
        <th>ご褒美</th>
        <td><input type="text" name="reward" value="{{ $goal->reward }}"  class="edit-new map_new"></td>
      </tr>
    </table>
    <button type="submit" name="add"  class="btn button">
      変更
    </button>
  </form>
</main>
<link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

