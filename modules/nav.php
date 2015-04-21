<nav id="navbar">
	<ul class="left">
		<li><a id="brand" href="index.php">CoinConquest</a></li>
	</ul>
	<ul class="right">
		<?php if(!is_loggedin()){ ?>
		<li><a class="navbtn" href="index.php?doc=login.php">Login</a></li>
		<li><a class="navbtn" href="index.php?doc=register.php">Register</a></li>
		<?php }else{?>
		<li><a class="navbtn" href="index.php?doc=logout.php">Logout</a></li>
		<?php }?>
	</ul>
</nav>