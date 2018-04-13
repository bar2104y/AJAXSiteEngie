<html>
	<head>
		<title>РСФ - ВОСТОК | Оборудование для музеев и выставочных залов</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<link rel="stylesheet" href="Style/main.css">
		<link rel="shortcut icon" href="/Files/Images/favicon.ico" type="image/ico">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="Scripts/JS/switch_page.js"></script>
	</head>
	
	<body>
	<noscript>
		<p>В Вашем браузере выключен JavaScript. Без него сайт может отображаться некорректно</p>
	</noscript>

		<div id="main_container">
			<header id="header">
				<div id=header_logo>
					<a href="/">
						<img src="Files/Images/logo.svg" alt="" title="">
					</a>
				</div>
				<div id="header_text">
					<h1 id="header_name">
						NameSite
					</h1>
					<p id="header_subname">
						it's my project
					</p>
				</div>
			</header>
			
			<div id="content_container">
				<nav id="nav_container">
					<a href="#!main" class="linkToPage">
						<div id="nav_item">
							main
						</div>
					</a>
					<a href="#!faq" class="linkToPage">
						<div id="nav_item">
							FAQ
						</div>
					</a>
					<a href="#!contacts" class="linkToPage">
						<div id="nav_item">
							Contacts
						</div>
					</a>
				</nav>
				<div id="page_content">
					<?php
					if($_GET['_escaped_fragment_'] == '')
					{
						$_GET['_escaped_fragment_'] = 'main';
					}
					if(isset($_GET['_escaped_fragment_']))
					{
						$path = "/Pages/Main/".$_GET['_escaped_fragment_'].".php";
						
						include $_SERVER["DOCUMENT_ROOT"].$path;
					}
					?>
				</div>
			</div>
		</div>
	</body>
</html>


