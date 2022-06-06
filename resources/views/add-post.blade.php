<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>
</head>
<body>
    @if(Session::has('post_add'))
    <span>{{Session::get('post_add')}}</span>
    @endif
    <form method="post" action="{{route('save.post')}}">
        @csrf
        Post : <br><input type="text" name="name" value=""><br>
        Description: <br><textarea name="description"></textarea><br>
        <input type='submit' value="submit">
    </from>
</body>
</html>