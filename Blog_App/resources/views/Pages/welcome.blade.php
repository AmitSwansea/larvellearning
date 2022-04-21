<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Amit Blog!</title>

    <!-- Bootstrap CSS -->
    
  </head>
  <body>

    <!--default bootstrap nav bar -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
 
    <a class="navbar-brand" href="#">My Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <li><a class="nav-link active" aria-current="page" href="\">Home</a></li>
          <li><a class="nav-link" href="\about">About</a></li>
          <li><a class="nav-link" href="\contact">Contact</a></li>
        </li>
     
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            My Account
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="\login">Login</a></li>
            <li><a class="dropdown-item" href="\register">Register</a></li>
            <li><hr class="dropdown-divider"></li>
            </ul> 
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <!--default bootstrap nav bar -->
  @section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">

      <div class="jumbotron">
      <h1 class="display-4">Welcome to my blog!!!</h1>
      <p class="lead">Popular Blog</p>
      <hr class="my-4">
      <p class="lead">
      <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
      </p>
      </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-12">
        <div class="post">
        <h3>Post1</h3>
        <p>This is post 1</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>
        <hr>
        <div class="post">
        <h3>Post2</h3>
        <p>This is post 2</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>
  </div>
</div>

  
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html> 
