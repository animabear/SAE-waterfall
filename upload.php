<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>瀑布流单页面站点</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.9.0.min.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>
</head>
<body>
	<header>
		<h1 class="sitename">图片流</h1>		
	</header>
	<div id="wrapper">
		<div class="upload-pic">
			<form id="upload" autocomplete="off" method="post" action="#" enctype="multipart/form-data">
				<div class="form-item">
					<label class="input-left" for="images" >图片</label>
					<div class="input-right">
						<input type="file" name="images" id="images" />
					</div>
				</div>
				<div class="form-item">
					<label class="input-left" for="title">标题</label>
					<div class="input-right">
						<input type="text" name="title" id="title" />
					</div>
				</div>
				<div class="form-item">
					<label class="input-left" for="describe">描述</label>
					<div class="input-right">
						<input type="textarea" name="describe" id="describe" />
					</div>
				</div>
			</form>
		</div>
	</div>
	<footer>
	</footer>
</body>
</html>