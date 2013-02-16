<?php 
	$stor = new SaeStorage();
	$aFileList = $stor->getListByPath("picstore", "test"); 
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>瀑布流单页面站点</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<header>
		<h1 class="sitename">图片流</h1>		
	</header>
	<div id="wrapper">
		<article>
			<div class="upload-pic">
				<a class="upload-btn" href="upload.php" target="_blank">上传图片</a>
			</div>
		</article>
		<ul id="container">
		<?php foreach ($aFileList["files"] as $file ): ?>
		<?php if ($file["Name"] != "test"): ?>
			<li class="item">
				<img src="<?php echo $stor->getUrl('picstore', $file['fullName']); ?>" alt="<?php echo $file['Name']; ?>" />
			</li>
		<?php endif; ?>
		<?php endforeach; ?>
		</ul>
	</div>
	<footer>
	</footer>
	<script src="js/jquery-1.9.0.min.js" type="text/javascript"></script>
	<script src="js/jquery.masonry.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>
</body>
</html>