<?php  
  
  session_start();
  $mes = '';
  if (isset($_SESSION['username'])) {
    $mes = "Welcome " . $_SESSION['username'];
  } else {
    $mes = "You are not log in";
  }

?>


<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">PHP Blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="<?php
          if (!isset($_SESSION['username'])) {
            echo 'register.php';
          } else {
            echo '#';
          }
         ?>">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Log In</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="logout.php">Log Out</a>
      </li>
    </ul>
    <strong class="nav-link"><?php echo $mes; ?></strong>
  </div>
</nav>