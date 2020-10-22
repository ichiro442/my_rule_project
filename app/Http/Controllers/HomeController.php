<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // 特定のルートやアクションを、認証済みユーザーだけがアクセスできるよう保護することができる

class HomeController extends Controller
{

    function top()
    {
        $user =  Auth::user();
        $goals = \App\Goal::where("user_id", "=", $user->id)->get();
        return view('home.top', compact("goals"));
    }
    function show($id)
    {
        $goal = \App\Goal::find($id);
        $behaviors = $goal->behaviors;
        return view('home.show', compact('goal', 'behaviors'));
        
    }
    function new()
    {
        return view('home.new');
    }
    function create(Request $request)
    {
        $request->validate([
            // バリデーション
            'goal' => 'required',
            'experience_point' => 'required',
            'reward' => 'required',
            'time_limit' => 'required',
          ],
          [
            'goal.required' => "敵の名前は必須です！",
            'experience_point.required' => '経験値は必須です！',
            "reward.required" => "ご褒美は必須です！",
            "time_limit.required" => "期限は必須です！",
          ]
        );
        $goal = $request->input("goal");// 情報を受け取る
        $experience_point = $request->input("experience_point");
        $reward = $request->input("reward");
        $time_limit = $request->input("time_limit");
        \App\Goal::create([
            "goal" => $goal,
            "experience_point" => $experience_point,
            "reward" => $reward,
            "time_limit" => $time_limit,
            "user_id" => \Auth::id()
            ]); // 受け取った情報を保存する
        return redirect("/hello"); // 一覧にリダイレクトさせる


    }
    function edit($id)
    {
    $goal = \App\Goal::find($id);
    return view('home.edit', compact("goal"));
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
        // return view('hello');
    }
    function update(Request $request, $id)
    {
    $goal = \App\Goal::find($id);
    $goal->goal = $request->goal;
    $goal->experience_point = $request->experience_point;
    $goal->reward = $request->reward;
    $goal->save();
    return redirect("/hello");
    }
    function destroy($id)
    {
    $goal = \App\Goal::find($id);
    $goal->delete();
    return redirect("/hello");
    }
    // function clear($id)
    // {
    // $goal = \App\Goal::find($id);
    // return view('behaviors.clear', compact("goal"));
    // }
}
