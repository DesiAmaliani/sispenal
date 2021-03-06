<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Login</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
</head>

<body style="background: url('img/bg/Autumn-Books1-540x360.jpg')center center fixed; -webkit-background-size: cover;-moz-background-size: cover; -o-background-size: cover; background-size: cover">

  <div class="container">

    <form method="POST" class="login-form" action="aksi_login.php">
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt" style="color: blue;"></i></p>
        <p style="color: blue;">Login Admin Al Hidayah</p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile" style="color: black;"></i></span>
          <input type="text" class="form-control" name="username" placeholder="Username" autofocus required>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt" style="color: black;"></i></span>
          <input type="password" class="form-control" name="password" placeholder="Password" required>
        </div><br>
        <button class="btn btn-primary btn-lg btn-block" value="Login" type="submit"/>Login</button>
      </div>
    </form>
    <div class="text-right">
      <div class="credits">
          
        </div>
    </div>
  </div>


</body>

</html>
