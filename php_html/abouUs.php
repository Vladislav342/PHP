<?php
	$title = "About Us";
	require "blocks/header.php";
?>

<div class="container mt-2">
	<h1>About Us</h1><br>

	<form action="check_post.php" method="post">
		<input type="text" name="name" placeholder="Enter your name" class="form-control"><br>
		<input type="email" name="emailAddres" placeholder="Enter your email" class="form-control"><br>
		<input type="password" name="password" placeholder="Enter your password" class="form-control"><br>
		<textarea name="message" class="form-control" placeholder="Enter your message"></textarea><br>
		<input type="submit" value="Send your data" class="btn btn-success">
	</form>
</div><br>


<?php
	require "blocks/footer.php";
?>