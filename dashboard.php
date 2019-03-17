<?php include "inc/header.php"; ?>
	<h1 style="text-align: center; margin-top: 40px">DASHBOARD</h1>
	<hr><br><br>
	<?php if (isset($_SESSION['username'])): 
		include "db/connect.php";

		$username = $_SESSION['username'];
		$sql = "SELECT posts.title, posts.content, posts.id FROM posts INNER JOIN users ON users.id = posts.user_id WHERE users.username = '$username'";
		$res = $conn->query($sql);
		// $continut = $res->fetch_all();
		while ($continut = $res->fetch_assoc()):
	?>
		<div class="container">
			<?php echo $continut['id']; ?>
			<div class="alert alert-dismissible alert-info" style="background: rgba(255, 255, 255, 0.6) !important">
				<h2 style="text-align: center;"><?php echo $continut['title']; ?></h2>
				
				<p style="text-align: justify; text-indent: 50px;"><?php echo $continut['content']; ?></p>
				<button class="btn btn-primary" href="#">Edit Post</button>
				<button class="btn btn-danger" href="#">Delete Post</button>
			</div>
		</div>
		
	<?php endwhile; ?>
	<?php else: ?>
		<?php echo "Pentru a vedea dashboard trebuie sa fiti logati"; ?>
	<?php endif; ?>

<?php include "inc/footer.php"; ?>