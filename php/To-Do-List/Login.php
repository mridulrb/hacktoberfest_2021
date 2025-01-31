<!doctype html>
<!--Login Script -->
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>SignUp To P_Notes</title>
    <link rel="shortcut icon" href="Site.png" type="image/x-icon">
  </head>
  <body>
    <ul class="nav justify-content-center bg-dark text-light">
        <li class="nav-item">
            <a href="Login.php">
                <button class="btn btn-outline-danger mx-2 my-2">Login</button>
            </a>
        </li>
        <li class="nav-item">
            <a href="Signup.php">
            <button class="btn btn-outline-danger mx-2 my-2">Signup</button>
            </a>
        </li>
        
      </ul>
    <br>
    <h1 id="header">P_Notes - Your Personal To-Do List Taker</h1>
    <br>
    <br>
    <h2 id="Login" >Login To Get Started</h2>
    <br>
    <div class="container">
    <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>
<?php
    
?>