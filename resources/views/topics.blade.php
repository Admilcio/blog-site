<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/edit-post.css') }}">
  <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BlogIt</title>
</head>
<body>

  @auth

  <div class="blog-site container-fluid">
    <header>
      <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
          <div class="container-fluid nav-container">
              <a class="navbar-brand" href="{{ url('/') }}"><i class="fa-regular fa-face-smile"></i>GoodNews</a>
              <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-between" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                      <a class="nav-link " {{-- aria-current="page" --}} href="#">Topics</a>
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
    <h1>Top <span>#10</span> topics of the week!</h1>
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
  </div>
  <div class="edit-bg container-fluid">
  <div class="edit-post container">
    <h1>Top <span>#10</span>topics of the week!</h1>
  </div>
  <div class="blog-show container">

  </div>
</div>
</div>
@else
@endauth
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="{{ asset('js/blog.js') }}"></script>
</body>
</html>
