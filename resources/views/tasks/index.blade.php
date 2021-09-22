<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>index</title>
</head>

<body>
    <h1>タスク一覧</h1>
    @foreach ($tasks as $task)
    <div class="button-group">
        <a href="/tasks/{{ $task->id }}">{{ $task->title }}</a>
        <form action="/tasks/{{ $task->id }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
        </form>
    </div>
    @endforeach
    <hr>
    <h1>新規論文投稿</h1>
    <form action="/tasks" method="post">
        @csrf
        <label for="title">タイトル</label>
        <input type="text" name="title" size="">
        <label for="body">内容</label>
        <textarea name="body"></textarea>
        <div>
            <input type="submit" value="create task">
        </div>
    </form>
</body>

</html>