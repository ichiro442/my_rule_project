<div class="update_wrapper flex">
    <div class="img_wrapper">
    <!-- <img src="../img/dragon.jpg" alt=""> -->
    <img class="update_img" src="https://lh3.googleusercontent.com/proxy/VAC0iycLa3DUC9-0PsRXUgA4zrasEkvqwG4kcHvX23svjzu6rOTig7ie54kkNieCe81kgIlSOm5mDrShgFrEf_b1JYsSJ4ysHU_1q2sWkbP8ke3LMJwPDTvez8tO2xplS1kcDyWQhxkOQSkhpICL3zsl15o4VtJAvaZ5GH1YOBpKg7p-BNOPT3dYS_ho0p8hEqgwuhi3HxaGOdDclHgjoXgCsXBndbfTBF4cr518_erC69ZJdt4j7IPLN3dnnk-EKZbR4z1S0sPddkmDNBWDELM8ueXM2khIPnXa" alt="">
   </div>
    <div class="update_container flex">
        <form  action="{{ url('/behavior/'.$goal['id'])}}" method="POST">
        <div class="priest edit-new">
      
            「生きとし生けるものは みな 神の子。<br>
           神のまえにこれまでの おこないを告白なさい。<br>
             なんと！！<br>
              <p>【{{ $goal->goal }}】</p>
             を倒さずに来たと申されるか……。<br>
            では この冒険の書にそなたの<br>
             <p>【{{ $goal->goal }}】</p>
            を再設定してもらうがよろしいのじゃな？<br>
            おお 神よ！<br>
            この者に あなたさまのご加護のあらんことを！！」<br>
        </div>
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
                                <th>名前</th>
                                <td><input type="text" name="task" class="edit-new map_new"></td>
                            </tr>
                            <tr>
                                <th>経験値</th>
                                <td><input type="number" name="experience_point" value="0" class="edit-new map_new"></td>
                            </tr>
                            <tr>
                                <th>ご褒美</th>
                                <td><input type="text" name="reward" class="edit-new map_new"></td>
                            </tr>
                            <tr>
                                <th>期限</th>
                                <td><input type="datetime-local" name="time_limit" class="edit-new map_new limit_btn"></td>
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
</div>
<link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

