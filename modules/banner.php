<nav>
	<?php if(!is_loggedin()){ ?>
	<marquee>Join now, recieve 500$</marquee>
	<?php }else{ ?>
		<ul class="left">
			<li><a class="navbtn" href="index.php?doc=account.php">Account</a></li>
			<li><a class="navbtn" href="index.php?doc=inventory.php">Inventory</a></li>
		</ul>
		<ul class="right">
			<li><a class="navbtn" href="index.php?doc=add_coins.php">Add coins</a></li>
		</ul>
	<?php } ?>
</nav>