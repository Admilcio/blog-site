<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  @auth
  <h1>Welcome {{ Auth::user()->name }}</h1>
  <form action="/logout" method="POST">
    @csrf
    <button>Log out</button>
  </form>
  <div style="border: 3px solid black;">
    <h2>Post</h2>
    <form action="{{ url('/create-post') }}" method="post">
      @csrf
      <label for="title">Title:</label>
      <input type="text" name="title" id="title" required>
  
      <label for="content">Content:</label>
      <textarea name="content" id="content" rows="4" required></textarea>
  
      <button type="submit">Create Post</button>
  </form>
  </div>

    <h2>All Posts</h2>
    @foreach ($posts as $post)
    <div style="background-color: gray; padding:10px; margin:10px">
      <h3>{{ $post->title }} by {{$post->user->name}} </h3>
      <p>{{ $post->content }}</p>
      <p><a href="/edit-post/{{$post->id}}">Edit</a></p>
      <form action="/delete-post/{{$post->id}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="hidden" name="post_id" value="{{ $post->id }}">
        <button type="submit">Delete Post</button>
      </form>
    </div>

    @endforeach

 @else
  <section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> 

    <div style="border: 3px solid black;" class="signin">
      <div class="content"> 
        <h2>Login</h2>
        <div class="form"> 
          <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="inputBox"> 
              <input name="loginemail" type="text" placeholder="email">
            </div>
            <div class="inputBox">
              <input name="loginpassword" type="password" placeholder="password">
            </div>
            <div class="links"> 
              <a href="{{ url('/home') }}">Havent registered?</a> 
              <a href="{{ url('/home') }}">Signup</a> 
          </div>          
            <div class="inputBox"> 
              <input type="submit" value="Login"> 
            </div> 
          </form>
        </div>
      </div>
    </div>

  
  
{{--   <div style="border: 3px solid black;">
    <h2>Login</h2>
    <form action="/login" method="POST">
      @csrf
      <input name="loginemail" type="text" placeholder="email">
      <input name="loginpassword" type="password" placeholder="password">
      <button>Log in</button>
    </form> --}}
    
  @if($errors->any())
  <div class="alert alert-danger" style="color: rgb(240, 8, 8)">
      {{ __('auth.failed') }}
  </div>
@endif
  </div>

  
  @endauth

  
</body>
</html>