

<?php include 'inc/header.php'; ?>
	
	<div class="container">
		<h1 style="text-align: center; margin-top: 40px;">PHP BLOG</h1><hr><br>

		<?php 

			include 'db/connect.php';

			$sql = "SELECT posts.title, posts.content, posts.created, posts.user_id, users.username FROM posts JOIN users ON posts.user_id = users.id ORDER BY posts.created DESC;";

			$res = $conn->query($sql);

			if ($res->num_rows): 
				while ($row = $res->fetch_object()):
		?>	

					<div class="alert alert-dismissible alert-info" style="background: rgba(255, 255, 255, 0.6) !important">
						<h2 style="text-align: center;"><?php echo $row->title; ?></h2>
						<h3>by <strong><?php echo $row->username ?></strong> written on <?php echo $row->created; ?></h3>
						<p style="text-align: justify; text-indent: 50px;"><?php echo $row->content; ?></p>
						<a class="btn btn-primary" href="more.php?id=<?php echo $row->user_id; ?>">Read More</a>
					</div>
				<?php  endwhile; ?>

			<?php endif; ?>
	</div>

	

<?php include 'inc/footer.php'; ?>