<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>laravel 留言</h1>
    <table>
        <tr>
            <td>标题</td>
            <td>内容</td>
            <td>操作</td>
        </tr>
        @foreach($msg  as $m)
        <tr>
            <td>{{$m->title}}</td>
            <td>{{$m->content}}</td>
            <td>
                <a href="/msg/del/{{$m->id}}">删除</a>
                <a href="/msg/edit/{{$m->id}}">编辑</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>