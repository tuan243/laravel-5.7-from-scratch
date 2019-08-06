<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="/project">
    @csrf
    <div><input type="text" placeholder="Project title" name="title"></div>
    <div><textarea name="description" placeholder="Project description"></textarea></div>
    <div><button type="submit">Create project</button></div>
    </form>
</body>
</html>