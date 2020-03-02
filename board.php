<!DOCTYPE html>
<html>
<head>
	<title>简易剪贴板</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<script src="script.js"></script>
</head>
<body>
	<?php 
	if (isset($_GET["text"]))
		file_put_contents("text.tmp",$_GET["text"])
	?>
	<form>
		<textarea name="text" onfocus="inputting(this)" onblur="inputting(this)" required><?php if(!file_exists("text.tmp") || ($t=file_get_contents("text.tmp")) == ""):
				echo "输入你的内容";
			else:
				echo $t;
			endif;
			?></textarea>
		<?php if (!isset($_GET["text"])):  ?>
			<input class="item" type="submit" value="Biu ~">
		<?php else: ?>
			<div class="item">打中啦！</div>
		<?php endif; ?>
	</form>
</body>
</html>