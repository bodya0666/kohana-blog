<ul class="wrapper">
 	<a class="add_btn" href="add"><div class="add"><i class="fas fa-plus"></i> Добавить</div></a>
<?php 
$i = 0;
while ($post[$i]):
 	if ($i > 0) 
 	{
		if ($post[$i - 1]->date->date != $post[$i]->date->date) 
		{
			echo '<h1>' . $post[$i]->date->date . '</h1>';
		}
 	}
	else
	{
		echo '<h1>' . $post[0]->date->date . '</h1>';
	}
	?>
	<li class="content">
		<div class="name">			
			<div class="text"><?php echo $post[$i]->name; ?></div>
		</div>
		<a href="<?php echo URL::site("post/$post[$i]"); ?>"><div class="read_more">Читать больше > ></div></a>
	</li>
	<?php
	$i++;
	endwhile;
?> 

</ul>
