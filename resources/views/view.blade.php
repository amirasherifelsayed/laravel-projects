<!DOCTYPE html>
<html>
<head>

</head>
<body>

    <ul>
        @foreach( $tasks as $task)
            <li>
             <a href="/view/{{ $task->id }}">{{ $task->body }}</a></li>
            @endforeach
    </ul>

</body>

</html>