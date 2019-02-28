		<form method="post">
		<?php 
		if($errors)
		{
			foreach ($errors as $errors) 
			{
				echo '<div>' . $errors . '</div>';
			}
		}
		?>
			<h1>Авторизация:</h1>
			<label>Имя или email:</label>
			<input name="login" type="text" value="<?php if($post) echo $post['login']; ?>">
			<label>Пароля:</label>
			<input name="password" type="password" value="<?php if($post) echo $post['password']; ?>">
			<span>Запомнить меня<input name="remember" type="checkbox"></span>
			<input type="submit" type="text">
			<div class="center"><a href="<?php echo URL::site('registration'); ?>">Регистрация</a></div>
		</form>
