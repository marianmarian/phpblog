<?php include 'inc/header.php'; ?>
<?php 
	include 'db/connect.php';

	$id_edit = $_GET['id']; 
	$sql = "SELECT content FROM posts WHERE id = '$id_edit'";
	$res = $conn->query($sql);

	$cont = $res->fetch_all();

	$text = $cont[0][0];
?>
	
	<div class="container">
		<br>
		<h1 style="text-align: center">EDIT POST</h1>
		<hr>
		<form>
			<div class="form-group">
		      	<textarea class="form-control" id="exampleTextarea" rows="12"><?php echo $text; ?></textarea>
    		</div>
    		<button type="submit" class="btn btn-primary">Edit Post</button>
		</form>
	</div>

<?php include 'inc/footer.php'; ?>