<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <!-- Own CSS file -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Reference Project</title>
  </head>
  <body>
    <?php
      require "header.php";
    ?>
    <div class="container" style="margin-top: 100px; max-width: 600px;">
<hr>





<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Create Account</h4>



  <?php
				if (isset($_GET['regerror'])) {
					if ($_GET['regerror'] == "emptyfields") {
						echo '<p class="text-center">Fill in all fields!</p>';
					}
					else if ($_GET['regerror'] == "invalidmailuid") {
						echo '<p class="text-center">Invalid username and email!</p>';
					}
					else if ($_GET['regerror'] == "invalidmail") {
						echo '<p class="text-center">Give a valid email!</p>';
					}
					else if ($_GET['regerror'] == "invaliduid") {
						echo '<p class="text-center">The username can contains characters: a-z, A-Z, 0-9</p>';
					}
					else if ($_GET['regerror'] == "pwdcheck") {
						echo '<p class="text-center">The passwords have to be the same!</p>';
					}
					else if ($_GET['regerror'] == "sqlerror") {
						echo '<p class="text-center">Mysql error!</p>';
					}
					else if ($_GET['regerror'] == "uidtaken") {
						echo '<p class="text-center">This username is already used!</p>';
					}
				}
			?>
	<form method="post" action="../includes/signup.inc.php">
  	<div class="form-group input-group">
  		<div class="input-group-prepend">
  		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
  		</div>
          <input name="reg-Uid" class="form-control" placeholder="Username" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
      <div class="input-group-prepend">
  		   <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
  		</div>
      <input name="reg-Email" class="form-control" placeholder="Email address" type="email">
    </div> <!-- form-group// -->

    <div class="form-group input-group">
      <div class="input-group-prepend">
  		  <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
  	  </div>
        <input name="reg-Pwd" class="form-control" placeholder="Create password" type="password">
      </div> <!-- form-group// -->
    <div class="form-group input-group">
      <div class="input-group-prepend">
  		  <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
  	  </div>
        <input name="reg-Pwd2" class="form-control" placeholder="Repeat password" type="password">
    </div> <!-- form-group// -->
    <div class="form-group">
      <button name="signup-submit" type="submit" class="btn btn-primary btn-block"> Create Account  </button>
    </div> <!-- form-group// -->
  </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
