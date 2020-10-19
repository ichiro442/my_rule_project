<header>
<img class="top-logo" src="../img/top-logo.svg" alt="">

<!-- <h1>自分クエスト</h1> -->
<a href="/hello/new/" class="btn-new">
 冒険の追加
  </a>
</header>
<main>
<div class="task-items">
      @foreach ($goals as $goal)
        <div class="task">
              <div class="task-text">
                  <a href="/hello/{{ $goal->id }}" class="btn-text button">
                      {{ $goal->goal }}
                  </a>
              </div>
              <div class="task-btn">
                <a href="/hello/edit/{{ $goal->id }}" class="btn-edit btn button">
                  編集
                </a>
                <a href="/hello/delete/{{ $goal->id }}" class="btn-delete btn button">
                  削除
                </a>
          </div>
        </div>
      @endforeach
</div>
</main>

<link rel="stylesheet" href="{{ asset('css/style.css') }}">
