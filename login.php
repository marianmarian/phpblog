<?php include 'inc/header.php'; ?>
<?php include 'db/connect.php'; ?>

<?php 
	//session_start();
  $mesaj = '';
	if (isset($_POST['username']) && isset($_POST['password'])) { 
		$username = htmlentities($_POST['username']);
		$pass = htmlentities($_POST['password']);
    $pass = md5($pass);
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$pass';";
    $res = $conn->query($sql);
    if ($res->num_rows) {
      $_SESSION['username'] = $username;
      $mesaj = '';
      header("Location: index.php");
    } else {
      $mesaj = 'Username sau parola incorecte.';
    }
		
	}

?>

<link rel="stylesheet" type="text/css" href="./static/login.css">
<div class="container">
	<h2 style="text-align: center">Log In</h2>
  <div id="mesaj" name="mesaj"><?php echo $mesaj ?></div>
	<form action="login.php" method="POST">
  <fieldset>
    
    <div class="form-group row">
      <label for="username" class="col-sm-2 col-form-label">Username</label>
      <div class="col-sm-10">
        <input type="text"  class="form-control-plaintext" id="username" name="username">
      </div>
    </div>
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control-plaintext" id="password" name="password">
      </div>
    </div>
    <button type="submit" class="btn btn-primary" id="login-btn">Login</button>
  <form>

</div>



 <?php include 'inc/footer.php'; ?>