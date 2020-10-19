<header><h1>冒険の書</h1></header>
<main class="map_main flex">
	<div class="map_left">
		<div class="details_box">
				<table>
				<tr>
					<th>勇者のID</th>
					<td>{{ $goal['id'] }}</td>
				</tr>
				<tr>
				<th>勇者のタイトル</th>
					<td>{{ $goal['goal'] }}</td>
				</tr>
				<tr>
				<th>勇者の作成日時</th>
					<td>{{ $goal['created_at'] }}</td>
				</tr>
				<tr>
				<th>勇者の更新日時</th>
					<td>{{ $goal['updated_at'] }}</td>
				</tr>
				</table>
				<div class="redirect_btn">
					<a href="/hello" class="btn button">ホームへ</a>
				</div>
		</div>
				<br>
				<br>
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

		<form action="{{ url('/behavior/'.$goal['id'])}}" method="POST">
		{{ csrf_field() }}
				<table>
					<tr>
						<th>敵の名前</th>
						<td><input type="text" name="task" class="edit-new map_new" placeholder="ラスボスを倒すための行動"></td>
					</tr>
					<tr>
						<th>経験値</th>
						<td><input type="number" name="experience_point" value="0" class="edit-new map_new"></td>
					</tr>
					<tr>
						<th>ご褒美</th>
						<td><input type="text" name="reward" class="edit-new map_new" placeholder="行動をクリアしたらもらえる"></td>
					</tr>
					<tr>
						<th>期限</th>
						<td><input type="datetime-local" name="time_limit" class="edit-new map_new"></td>
					</tr>
					<tr>
						<th>タイプ</th>
							<td><select name="choice" class="type">
							<option name="choice" value="normal">ザコ</option>
							<option name="choice" value="small_boss">小ボス</option>
							<option name="choice" value="middle_boss">中ボス</option>
						</td></select>
					</tr>
					<td><button type="submit" name="add" class="btn button">追加</button></td>
				</table>
		</form>
	</div>
	<div class="map">
		<p class="main_color">冒険マップ</p>
		<div class="map_box ">
				<div class="flex">
					<div class="last_boss">ラスボス：{{ $goal['goal'] }}</div>
					<div class="last_boss">ご褒美：{{ $goal->reward }}</div>
				</div>
				<div class="flex">
					<div class="last_boss limit">期限：{{ $goal->time_limit }}</div>
						<a href="/goals/{{ $goal->id }}" class="column boss_color  button">たたかう</a>
						<a href="/hello/{{ $goal->id }}" class="column boss_color button">にげる</a>

						<!-- <div class="fight_btn">
							<a href="/behavior/{{ $goal->id }}" class="column boss_color">たたかう</a>
							<a href="/hello/{{ $goal->id }}" class="column boss_color">にげる</a>
						</div> -->
				</div>
		</div>
			@foreach ($behaviors as $behavior)
				<div class="boss">
					@if ($behavior->choice == "normal")
					<div class="zako flex">
						<div class="column">ザコ：{{ $behavior->task }}</div>
						<div class="column">ご褒美：{{ $behavior->reward }}</div>
						<div class="column limit">期限：{{ $behavior->time_limit }}</div>
						<a href="/behavior/{{ $behavior->id }}" class="column button">たたかう</a><a href="/hello" class="column button">にげる</a>

					</div>
					@elseif ($behavior->choice == "small_boss")
						<div class="small_boss flex">
							<div class="column small_boss_box">小ボス：{{ $behavior->task }}</div>
							<div class="column small_boss_box">ご褒美：{{ $behavior->reward }}</div>
							<div class="column small_boss_box limit">期限：{{ $behavior->time_limit }}</div>
							<a href="/behavior/{{ $behavior->id }}" class="column small_boss_box button">たたかう</a><a href="/hello/{{ $goal->id }}" class="column small_boss_box button">にげる</a>

						</div>
					@elseif ($behavior->choice == "middle_boss")
					<div class="middle_boss flex">
						<div class="column middle_boss_box">中ボス：{{ $behavior->task }}</div>
						<div class="column middle_boss_box">ご褒美：{{ $behavior->reward }}</div>
						<div class="column middle_boss_box limit">期限：{{ $behavior->time_limit }}</div>
						<a href="/behavior/{{ $behavior->id  }}" class="column middle_boss_box button">たたかう</a><a href="/hello/{{ $goal->id }}" class="column middle_boss_box button">にげる</a>

					</div>
				</div>
			@endif
			@endforeach
		</div>
	</div>
	</main>
<link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">