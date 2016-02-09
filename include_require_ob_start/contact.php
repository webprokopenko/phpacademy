<?php
	if ( $_POST ){
		saveContactForm($_POST);
	}
?>

<form method="post">
	<input type="text" name="email" /><br>
	<textarea name="comment" name="comment"></textarea>
</form>