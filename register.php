<?php include "inc/header.php"; ?>
<?php include 'db/connect.php'; ?>

<?php 
	
	$msj = '';
	
	if (isset($_POST['username']) && isset($_POST['password'])) {
		$user = htmlentities($_POST['username']);
		$pass = htmlentities($_POST['password']);
		$pass = md5($pass);
		$sql = "SELECT * FROM users WHERE username = '$user';";
		$res = $conn->query($sql);
		if ($res->num_rows) {
			$msj = "Username-ul exista deja";
		} else {
			$sql = "INSERT INTO users (username, password) VALUES ('$user', '$pass')";
			$conn->query($sql);
			if ($conn->affected_rows) {
				$_SESSION['username'] = $user;
				header("Location: index.php");
			}
			
		}
		
	} else {
		$msj = "Toate campurile trebuie completate";
	}

?>
<link rel="stylesheet" type="text/css" href="./static/login.css">
<div class="container">
	<h2 style="text-align: center">REGISTER</h2>
  <div id="mesaj" name="mesaj"><?php echo $msj; ?></div>
	<form action="register.php" method="POST">
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
    <button type="submit" class="btn btn-primary" id="login-btn">Register</button>
  <form>

</div>

<?php include 'inc/footer.php'; ?>