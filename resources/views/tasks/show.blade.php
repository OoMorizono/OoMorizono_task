<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>show</title>
</head>

<body>
    <h1>タスク詳細</h1>
    <br>
    <p>【タイトル】</p>
    <p>{{ $task->title }}</p>
    <br>
    <p>【内容】</p>
    <div class="button-group">
        <button onclick="location.href='//localhost/tasks'">一覧へ戻る</button>
        <button onclick="location.href='/tasks/{{ $task->id }}/edit'">編集する</button>
        <form action="/tasks/{{ $task->id }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
        </form>
    </div>
</body>

</html>