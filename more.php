<?php include 'inc/header.php'; ?>
	<div class="container">
	
	<?php 

		include 'db/connect.php';

		if (isset($_GET['id'])):

			$id = htmlentities($_GET['id']);
			$sql = "SELECT posts.title, posts.content, posts.created, posts.user_id, users.username FROM posts JOIN users ON posts.user_id = users.id WHERE posts.user_id = '$id'";
			$res = $conn->query($sql);

			if ($res):
				$post = $res->fetch_assoc();

	?>
					<div class="alert alert-dismissible alert-info" style="background: rgba(255, 255, 255, 0.6) !important; margin-top: 150px;">
						<h2 style="text-align: center;"><?php echo $post['title']; ?></h2>
						<h3>by <strong><?php echo $post['username'] ?></strong> written on <?php echo $post['created']; ?></h3>
						<p style="text-align: justify; text-indent: 50px;"><?php echo $post['content']; ?></p>
						<a href="index.php" class="btn btn-primary">Back</a>
					</div>
				
			<?php endif; ?>

		<?php  endif; ?>
	</div>

<?php include 'inc/footer.php'; ?>