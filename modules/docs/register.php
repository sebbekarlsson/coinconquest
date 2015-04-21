<div class="text">
	<form method="post">
		<input class="form-intext" type="email" name="register_email" placeholder="Email">
		<input class="form-intext" type="text" name="register_username" placeholder="Username">
		<input class="form-intext" type="password" name="register_password" placeholder="Password">
		<input class="form-intext" type="password" name="register_passwordconfirm" placeholder="Confirm Password">
		<input type="submit" class="btn" name="register_register" value="Register">
	</form>
	<?php

		if(isset($_POST['register_register'])){
			$user = new User(0);
			$user->email = $_POST['register_email'];
			$user->name = $_POST['register_username'];
			$user->password = $_POST['register_password'];
			$user->coins = 500;

			if($user->password != $_POST['register_passwordconfirm']){
				echo "Passwords does not match!";
				return;
			}

			$ok = user_register($user);

			var_dump($ok);
		}

	?>
</div>