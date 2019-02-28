		<form method="post">
			
			<?php 
			if($errors)
			{
				foreach ($errors as $errors) 
				{
				 	if (is_array($errors)) 
				 	{
				 		foreach ($errors as $errors) 
				 		{
				 			echo '<div>' . $errors . '</div>';
				 		}
				 	}
				 	else
				 	{
				 		echo '<div>' . $errors . '</div>';
				 	}
				}
			}	 ?>
			<h1>Регистрация:</h1>
			<label>Имя:</label>
			<input name="username" type="text" value="<?php if($post) echo $post['username']; ?>">
			<label>email:</label>
			<input name="email" type="email" value="<?php if($post) echo $post['email']; ?>">
			<label>Пароля:</label>
			<input name="password" type="password" value="<?php if($post) echo $post['password']; ?>">
			<label>Подтверждение пароля:</label>
			<input name="password_confirm" type="password" value="<?php if($post) echo $post['password_confirm']; ?>">
			<input type="submit" type="text">
			<div class="center"><a href="<?php echo URL::site('login'); ?>">Вход</a></div>
		</form>
