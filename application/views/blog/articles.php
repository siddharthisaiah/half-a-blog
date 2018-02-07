
<hr>
<h1>All articles</h1>
<?php foreach ($blog as $article): ?>
	<hr>
	<h4>
		<a href="<?php echo $article['id']; ?>"><?php echo $article['title'];?></a>
	</h4>
	<small><?php echo $article['date']; ?></small>
	<p><?php echo $article['text']; ?></p>
	<br>

<?php endforeach?>