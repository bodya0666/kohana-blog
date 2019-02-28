<div class="wrapper">
	<h1><?php echo $post->name; ?></h1>
	<p class="description"><?php echo $post->description ?></p>

	<?php
	if($comments->arr)
	{
		echo '<h2>Коментарии:</h2>'; 
		echo $comments;
	} ?>
	<form method="post" class="comment">
		<?php 
		if($error)
		{
		foreach ($error as $key => $errors) 
			{
				echo $errors; 	
			}
		} ?>
		<div class="comment-wrap">
			Добавить коментарий:
			<input type="hidden" name="parent_id" value="0">
			<textarea id="comment" name="comment" cols="30" rows="10"></textarea>
			<input name="submit" type="submit">
		</div>
	</form>		
</div>
