<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BehaviorsController extends Controller
{
    function create(Request $request, $id)
    {
      $request->validate([
          'task' => 'required',
          'experience_point' => 'required',
          'reward' => 'required',
          'time_limit' => 'required',
          'choice' => 'required',
        ],
        [
          'task.required' => "敵の名前は必須です！",
          'experience_point.required' => '経験値は必須です！',
          "reward.required" => "ご褒美は必須です！",
          "time_limit.required" => "期限は必須です！",
          'choice.required' => '必須です',
        ]
      );
      $task = $request->input("task");
      $experience_point = $request->input("experience_point");
      $reward = $request->input("reward");
      $time_limit = $request->input("time_limit");
      $choice = $request->input("choice");
      \App\Behavior::create([
          "goal_id" => $id,
          "task" => $task,
          "experience_point" => $experience_point,
          "reward" => $reward,
          "time_limit" => $time_limit,
          "choice" => $choice
      ]); // 受け取った情報を保存する
      return redirect("/hello/".$id); // 一覧にリダイレクトさせる
    }
    function countdown($id)
    
    {
        $behavior = \App\Behavior::find($id); 
        // Behavior MOdelのidを見つけてね。
        $goal = \App\Goal::find($behavior->goal_id);
// behaviorModelがBehavior.phpに取得しているgoal_idを見つけて$goalに入れたよ。
        return view('behaviors.countdown', compact("behavior", "goal"));
        // 返す view=bladeのやつに返すよ  compact behaviorは$behavior
    }

  function clear($id)
  {
    $behavior = \App\Behavior::find($id);
    $goal = $behavior->goal;
    // $goalにbehavior->goalを代入したよ
    $level = \App\Behavior::find($id);
    // $level_name = $level->level_name;
    $user = Auth::user();
    if ($user->level < 10){
      $total_exp = $behavior->experience_point  + $user->experience_point;
      $user->experience_point = $total_exp;
      $level = \App\Level_standard::where('level', $user->level + 1)->first();
      if ($level->standard <= $user->experience_point) {
        $user->level += 1;
      }
    }
    $user->save();
    return view('behaviors.clear', compact("goal","behavior","user","level"));
  }
  function update_time_limit($id)
  {
    $behavior = \App\Behavior::find($id);
    $goal = $behavior->goal;
    return view('behaviors.update_time_limit', compact("behavior","goal"));
  }

  function goal($id){
    $goal = \App\Goal::find($id);
    return view('behaviors.goal', compact("goal"));
  }
  function goal_clear($id){
    $goal = \App\Goal::find($id);
    $user = Auth::user();
    if ($user->level < 10){
      $total_exp = $goal->experience_point  + $user->experience_point;
      $user->experience_point = $total_exp;
      $level = \App\Level_standard::where('level', $user->level + 1)->first();
      if ($level->standard <= $user->experience_point) {
        $user->level += 1;
      }
    }
    $user->save();

    return view('behaviors.goal_clear', compact("goal","level","user"));
  }
  function goal_update_time_limit($id){
    $goal = \App\Goal::find($id);
    return view('behaviors.goal_update_time_limit', compact("goal"));
  }
  // public function store(Request $request)
  // {
  //   $request->validate([
  //     'task' => 'required',
  //     'experience_point' => 'required',
  //     'reward' => 'required',
  //     'time_limit' => 'required',
  //     'choice' => 'required',
  //   ],
  //   [
  //     'task.required' => "必須です",
  //     'experience_point.required' => '必須です',
  //     "reward.required" => "必須です",
  //     "time_limit.required" => "必須です",
  //     'choice.required' => '必須です',
  //   ]
  // );
  // }
}
