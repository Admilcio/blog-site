<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Inter:wght@500&family=Roboto+Slab:wght@200&display=swap" rel="stylesheet">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BlogIt</title>
</head>
<body>

  @auth

  <div class="blog-site container-fluid">
    <header>
      <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
          <div class="container-fluid nav-container">
              <a class="navbar-brand" href="#"><i class="fa-regular fa-face-smile"></i>GoodNews</a>
              <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-between" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                    <a class="nav-link" href="{{ url('topics') }}">Topics</a>
                      <a class="nav-link" href="#">About</a>
                      <a class="nav-link" href="#">Contact</a>
                  </div>
                  <form action="{{ route('logout') }}" method="POST" class="form-inline my-2 my-lg-0">
                      @csrf
                      <a class=" my-2 my-sm-0" href="logout.php"><button class="logout">Log out</button></a>
                  </form>
              </div>
          </div>
      </nav>
  </header>
  <div class="content">
    <h1>Welcome <span>{{ Auth::user()->name }}!</span></h1>
    <p class="popping">What's on your mind today?</p>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="{{ asset('images/blog-4.webp') }}" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('images/blog-2.webp') }}" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('images/blog-3.jpg') }}" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
        </div>
      <p>The <span>#1</span> source for Good News.</p>
 
      <div class="welcome-section">
        <h2>Hello, Creators!</h2>
        <p>We're thrilled to welcome you to <span>BlogIt</span>, a vibrant online community where stories come
            to life and ideas flourish. Whether you're a seasoned reader or just stumbled upon us, we're delighted to
            have you on board.</p>

    </div>
  
  <div class="post container">
    <div class="post-form">
    <h2>Create your Story</h2>
    <form action="{{ url('/create-post') }}" method="post">
      @csrf
      <label for="title">Title:</label>
      <input type="text" name="title" id="title" required placeholder="Start writing your blog...">
  
      <label for="content">Content:</label>
      <textarea name="content" id="content" rows="4" required placeholder="Your Story starts here..."></textarea>
      <div class="btn"> <button type="submit">Create Post</button></div>
  </form>
  </div>
</div>

<div class="blog">
  <div class="blog-header">
      <h2>Latest Posts</h2>
  </div>

  <div class="blog-item blog-post container-fluid " id="blogContainer" style="display: none;">
      @foreach ($posts as $post)
          <div class="blog-show container">
              <h3>{{ $post->title }} by {{ $post->user->name }} </h3>
              <p>{{ $post->content }}</p>
              <p><a href="/edit-post/{{ $post->id }}" class="edit-btn">Edit</a></p>

              <div class="edit-delete-section">
                  <form action="/delete-post/{{$post->id}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <input type="hidden" name="post_id" value="{{ $post->id }}">
                      <button class="delete-btn" type="submit">Delete Post</button>
                  </form>
              </div>
          </div>
      @endforeach
  </div>
</div>

</div>
<div class="logout-botton">
  <form action="{{ route('logout') }}" method="POST" class="form-inline my-2 my-lg-0">
    @csrf
    <a class=" my-2 my-sm-0" href="logout.php"><button class="logout">Log out</button></a>
  </form>
</div>
</div>
 @else
  <section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> 

    
    <div style="border: 3px solid black;" class="signin">
      <h1>
        Welcome to <p>BlogIt</p>
      </h1>
      <div class="signin-bg-home">
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
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="{{ asset('js/blog.js') }}"></script>
</body>
</html>