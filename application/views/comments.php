<ul style="margin: 0 0 0 45px">

	<?php foreach ($arr as $key => $comment): ?>
		<li class="comments">
			<div class="nickname">
				<div><?php echo $comment['user']; ?></div>
				<div class="date"><?php echo $comment['date']; ?></div>
			</div>
			<div class="textcomment"><?php echo $comment['text']; ?></div>
			<div id="<?php echo $comment['id']; ?>" onclick="answer(<?php echo $comment['id']; ?>)" class="answer">Ответить</div>
		</li>
		<?php if (count($comment['children']) > 0) echo View::factory('comments')->bind('arr', $comment['children']); ?>
	<?php endforeach ?>
	
</ul>