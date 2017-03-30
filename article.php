<!DOCTYPE html>
<html>
<head>
	<?php
		require_once "for_mysql/function.php";
		$news = getNews(1, $_GET["id"]);
		$title = $news["$title"];
		 require_once "blocks/head.php";
		 require_once "media/media.php";
	 ?>

</head>
<body>
<div class="wrapper">
	<?php require_once "blocks/header.php" ?>	
	<div class="article-center">
		<div class="in-article-center">
			<?php
			echo '<img src="img/news/'.$news["id"].'.jpg">
			<h1>'.$news["title"].'№'.$news["id"].'</h1>
			<p>'.$news["full_text"].'</p>';
			?>
		</div>
	</div>
	
	<?php require_once "blocks/footer.php" ?>
</div>
</body>
</html>