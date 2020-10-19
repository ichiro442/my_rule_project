<div class="update_wrapper flex">
    <div class="img_wrapper">
    <img class="update_img" src="https://lh3.googleusercontent.com/proxy/-7Quy-onE4lgGK3kDLksmCSLuKaa4KHEZDQ71l3FKX9iiMJmD2J1nMbbQcj7q-pO8gv7nqBcRq47Y4NsyZk7DG-u9EWyrgyyc8p8VhW-3vPcsdegC_iAYzV1mT4pxGuHjRkZt_wAPNTL48ugdmRICGH8JiveKKzfHZ8XVCCjDvUYLBjkSQijA7BBrGA0IBBgps8kN_DJxzxy4H7mzFd3H4JcpDVeaneLcBPwId6qYTtPdfRsvSZoQCHGE5OlerldNeiTtMGF53JjutXyaZ75vFE8xcETyz6_Xsmx" alt="">
   </div>
    <div class="update_container flex">
        <form  action="{{ url('/behavior/'.$goal['id'])}}" method="POST">
        <div class="priest edit-new">
      
            「生きとし生けるものは みな 神の子。<br>
           神のまえにこれまでの おこないを告白なさい。<br>
             なんと！！<br>
              <p>【{{ $behavior->task }}】</p>
             を倒さずに来たと申されるか……。<br>
            では この冒険の書にそなたの<br>
             <p>【{{ $behavior->task }}】</p>
            を再設定してもらうがよろしいのじゃな？<br>
            おお 神よ！<br>
            この者に あなたさまのご加護のあらんことを！！」<br>
        </div>
                {{ csrf_field() }}
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
</div>
<link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

