<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Own CSS file -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Reference Project</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="index.php">Reference</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
    </ul>
    <?php
      if (isset($_SESSION['uID'])) {
        echo '
          <form class="form-inline my-2 my-lg-0" method="post" action="includes/logout.inc.php">
            <button class="btn btn-secondary my-2 my-sm-0 btn-logout" name="logout-submit" type="submit">Logout</button>
          </form>
        ';
      } else {
        echo '
          <form class="form-inline my-2 my-lg-0" method="post" action="includes/login.inc.php">
            <input class="form-control mr-sm-2" name="login-Uid" type="text" placeholder="Username" aria-label="Username">
            <input class="form-control mr-sm-2" name="login-Pwd" type="password" placeholder="Password" aria-label="Password">
            <button class="btn btn-secondary my-2 my-sm-0 btn-login" name="login-submit" type="submit">Sign in</button>
          </form>
          <form class="form-inline my-2 my-lg-0" action="../signup.php">
            <button class="btn btn-secondary my-2 my-sm-0 btn-register" name="register-submit" type="submit">Sign up</button>
          </form>
        ';
      }
    ?>
    </div>
    </nav>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>