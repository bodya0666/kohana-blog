		<form class="add" method="post">
			<?php 
			if($error)
			{ 
				foreach ($error as $key => $error) 
				{
					echo $error . '<br>';
				} 
			}?>
			<h1>Добавьте пост:</h1>
			<label>Название:</label>
			<input name="name" type="text" value="<?php if($post)echo $post['name'] ?>">
			<label>Описание:</label>
			<textarea name="description" id="" cols="30" rows="10"><?php if($post)echo $post['description'] ?></textarea>
			<input type="submit">
		</form>