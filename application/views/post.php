<div class="wrapper">
	<h1><?php echo $post->name; ?></h1>
	<p class="description"><?php echo $post->description ?></p>
	<ul>
		<?php if ($comments[0]):
			echo '<h2>Коментарии:</h2>';
			foreach ($comments as $key => $comment):
			?>
		<li class="comments">
			<div class="nickname">
				<div><?php echo $comment->users->username; ?></div>
				<div class="date"><?php echo $comment->date; ?></div>
			</div>
			<div class="textcomment"><?php echo $comment->text; ?></div>
			<div onclick="answer('comment', '<?php echo $comment->users->username; ?>')" class="answer">Ответить</div>
		</li>
	<?php endforeach; endif; ?>
	</ul>
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
			<textarea id="comment" name="comment" cols="30" rows="10"></textarea>
			<input name="submit" type="submit">
		</div>
	</form>		
</div>
