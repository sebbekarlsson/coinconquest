<div class="text">
	<form method="post">
		<input class="form-intext" type="email" name="login_email" placeholder="Email">
		<input class="form-intext" type="password" name="login_password" placeholder="Password">
		<input type="submit" class="btn" name="login_login" value="Login">
	</form>
	<?php

		if(isset($_POST['login_login'])){
			if(auth_user($_POST['login_email'], $_POST['login_password'])){
				$id = get_user_id($_POST['login_email']);
				$_SESSION['userID'] = $id;
				?>
					<script type="text/javascript"> window.location.href="index.php"; </script>
				<?
			}else{
				echo "Wrong password!";
				unset($_SESSION['userID']);
			}
		}

	?>
</div>