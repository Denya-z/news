<!DOCTYPE html>
<html>
<head>
	<?php 
		require_once "functions/functions.php";
		$title = "Page";
		require_once "blocks/head.php"; 
		$news = getNews(5, '');
	?>
</head>
<body>
	<?php require_once "blocks/header.php"?>
	<div id="wrapper"> 
		<div id="leftCol">
		
		<?php
			for ($i = 0; $i < count($news); $i++) {
				if($i ==   0)
					echo "<div id=\"bigArticle\">";
				else
					echo "<div class=\"article\">";
				echo '<img src="/img/articles/'.$news[$i]["id"].'.jpg" alt="Статья '.$news[$i]["id"].'">
				<h2>'.$news[$i]["title"].'</h2>
				<p>'.$news[$i]["intro_text"	].'</p>
				<a href="/article.php?id='.$news[$i]["id"].'">
					<div class="next">Далее</div> 
				</a>				
			</div>';
			
				if($i == 0)
					echo "<div class=\"clear\"><br></div>";
			}
		?>

<!--
			<div class="bigArticle">
				<img src="/img/articles/1.jpg" alt="Статья 1">
				<h2>Статья 1</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
				Curabitur accumsan ipsum at consequat viverra. 
				Aliquam porttitor quam ut eros faucibus mattis. Vestibulum a leo dui. 
				Donec sit amet eros scelerisque enim efficitur bibendum. 
				Donec justo mauris, pretium vitae nisl eget, ornare mattis erat. 
				Nunc faucibus dignissim sapien, vel ultrices nisl placerat ut. 
				Vestibulum porttitor massa et tincidunt ornare. Sed sed velit nunc. 
				Nulla magna libero, maximus ac nibh sed, sagittis porttitor nunc. </p>
				<a href="/article.php">
					<div class="next">Далее</div> 
				</a>				
			</div>
			
			
			<div class="clear"><br></div>
			
			
			<div class="article">
				<img src="/img/articles/2.jpg" alt="Статья 2">
				<h2>Статья 2</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
				Curabitur accumsan ipsum at consequat viverra. 
				Aliquam porttitor quam ut eros faucibus mattis. Vestibulum a leo dui. 
				Donec sit amet eros scelerisque enim efficitur bibendum. 
				Donec justo mauris, pretium vitae nisl eget, ornare mattis erat. 
				Nunc faucibus dignissim sapien, vel ultrices nisl placerat ut. 
				Vestibulum porttitor massa et tincidunt ornare. Sed sed velit nunc. 
				Nulla magna libero, maximus ac nibh sed, sagittis porttitor nunc.</p>
				<a href="/article.php">
					<div class="next">Далее</div>
				</a>
-->						
		</div>
		
		<?php require_once "blocks/rightCol.php" ?>
		
	</div>

	<?php require_once "blocks/footer.php" ?>
	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</body>
</html>