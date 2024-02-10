<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body class="hello" style="background-color:aliceblue">
  <h1>Edit Post</h1>
  <form action="/edit-post/{{$post->id}}" method="post">
  @csrf
  @method('PUT')
  <label for="title">Title:</label>
  <input type="text" name="title" id="title" value="{{$post->title}}" required>
  <textarea name="content">{{$post->content}}</textarea>
  <button>Save Change</button>
</form>
</body>
</html>