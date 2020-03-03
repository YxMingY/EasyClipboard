<!DOCTYPE html>
<html>
<head>
	<title>小铭留言板</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<script src="script.js"></script>
</head>
<body>
	<?php 
	if (isset($_POST["text"]))
		file_put_contents("text.tmp",$_POST["text"])
	?>

	<form method="post">
		<button id="clear" type="button" class="item slide-right" onclick="
	cleararea(this);">>_<没有吃的</button>
		<textarea id="text" name="text" onfocus="focusinput(this)" onblur="focusinput(this)"><?php if(!file_exists("text.tmp") || ($t=file_get_contents("text.tmp")) == ""):
				echo "输入你的内容";
			else:
				echo $t;
			endif;
			?></textarea>

		<?php if (!isset($_POST["text"])):  ?>
			<input class="item slide-left" type="submit" value="Biu ~">
		<?php else: ?>
			<div class="item slide-left" type="button" >打中啦！</div>
		<?php endif; ?>
		<script type="text/javascript">
			if(document.getElementById("text").value != "输入你的内容")
				document.getElementById("clear").innerHTML = "↓吃掉↓";
		</script>
	</form>
</body>
</html>
