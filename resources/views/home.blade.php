<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  @auth

  <div class="blog-site">
    <header>
      <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
          <div class="container-fluid nav-container">
              <a class="navbar-brand" href="#">GoodNews <i class="fa-regular fa-face-smile"></i></a>
              <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-between" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                      <a class="nav-link active" aria-current="page" href="#">Budget Pricing</a>
                      <a class="nav-link" href="#">Contacts</a>
                  </div>
                  <form action="{{ route('logout') }}" method="POST" class="form-inline my-2 my-lg-0">
                      @csrf
                      <a class=" my-2 my-sm-0" href="logout.php"><button class="logout">Log out</button></a>
                  </form>
      {{--             <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button>Log out</button>
                  </form> --}}
              </div>
          </div>
      </nav>
  </header>
  <div class="content">
  <h1>Welcome <span>{{ Auth::user()->name }}!</span></h1>
  <p>The <span>#1</span> source for Good News.</p>
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
  <form action="{{ route('logout') }}" method="POST" class="form-inline my-2 my-lg-0">
    @csrf
    <a class=" my-2 my-sm-0" href="logout.php"><button class="logout">Log out</button></a>
</form>
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
  </div>

    @endforeach
  </div>
 @else
  <section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> 
    
    <div style="border: 3px solid black;" class="signin">
      <div class="content"> 
        <h2>Register</h2>
        <div class="form"> 
          <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="inputBox"> 
              <input name="name" type="text" placeholder="name">
            </div>
            <div class="inputBox">
              <input name="email" type="text" placeholder="email">
            </div>
            <div class="inputBox">
              <input name="password" type="password" placeholder="password">
            </div>
            <div class="links"> 
              <a href="#">Already registered?</a> 
              <a href="{{ url('/loginUser') }}">Login</a> 
            </div>            
            <div class="inputBox"> 
              <input type="submit" value="Signup"> 
            </div> 
          </form>
        </div>
      </div>
    </div>
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif
  </section>

{{--     <div style="border: 3px solid black;" class="signin">
      <div class="content"> 
        <h2>Login</h2>
        <div class="form"> 
          <form action="/login" method="POST">
            @csrf
            <div class="inputBox"> 
              <input name="loginemail" type="text" placeholder="email">
            </div>
            <div class="inputBox">
              <input name="loginpassword" type="password" placeholder="password">
            </div>
            <div class="links"> 
              <a href="#">Forgot Password</a> 
              <a href="#">Signup</a> 
            </div>
            <div class="inputBox"> 
              <input type="submit" value="Login"> 
            </div> 
          </form>
        </div>
      </div>
    </div>
 --}}
  
  
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  
</body>
</html>