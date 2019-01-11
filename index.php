<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>News all of them</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
       		<div id="logo">
				<a href="/" title="Перейти на главную">
					<h1><span>N</span>ews</h1>
				</a>
		    </div>
		    <div id="menuHead">
				<a href="about.php">
			<div style="margin-right: 5%">About</div>
				</a>
			
				<a href="/feedback.php">
			<div>Feedback</div>
				</a>
			</div>
			<div id="regAuth">
				<a href="reg.php"> 
				Registration 
				</a>
					|
				<a href="auth.php">
				Autorization
				</a>
			</div>

	</header>
			<div id="wrapper">
			<div id="leftCol">
			<div id="bigArticle">
				<img src="img/articles1.jpg" alt="State#1" title="state#11">
				<h2>State#1</h2>
				<p>What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
			<div class="more">Next</div>
			</div>
			<div class="clear"></div>
			<div class="article">
				
			</div>	
			</div>
			<div id="rightCol">
			<div class="banner">
					<img src="img/banner1.gif" alt="Banner 1" title="Banner 1">
			</div>
			<div class="banner">
					<img src="img/banner2.jpg" alt="Banner 2" title="Banner 2">
			</div>

			</div>
			</div>

	<footer>
			<div id="social">
				<a href="#" title="Group Vk" target="blank">
					<img src="img/vk.png" alt="VK" title="VK">
				</a>
				<a href="#" title="Group FB" target="blank">
					<img src="img/facebook.png" alt="Facebook" title="Facebook">
				</a>
				<a href="#" title="Twitter" target="blank">
					<img src="img/Twitter.png" alt="Twitter" title="Twitter">
				</a>
			</div>
			<div id="rights">
				Все права защищены &copy;  <?=date('Y') ?>
			</div>	
	</footer>

</body>
</html>