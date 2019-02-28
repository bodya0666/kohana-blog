<header>
	<div class="nav">
		<a href="<?php echo URL::site('feed'); ?>"><i class="fas fa-home"></i></a>
        <a href="<?php echo URL::site('mypost'); ?>"><i class="fas fa-archive"></i></a>
	</div>
	<div class="profile">
		<a href=""><?php echo $name->username; ?></a>
		<a href="logout"><i class="fas fa-sign-out-alt"></i></a>
	</div>
</header>
