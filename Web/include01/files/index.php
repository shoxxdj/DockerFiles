<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Ethical Hacking - Challenges</title>

	<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div class="style3"></div><div class="style_2"><span class="style3"><a href="http://www.zonnebank-studio-vergelijk.nl" title="Zonnebank Zonnestudio"><strong>Zonnebank zonnestudio</strong></a></span></div>
	<div id="wrap">
		<div id="topbar">
			<h1 id="sitename"><a href="http://www.zonnebank-studio-vergelijk.nl" target="_blank">  Zonnebank en zonnestudio</a></h1>
			<div id="menus">
				<ul id="topmenu">
					<li  class="active"><a href="?page=home.php">Home</a>
					</li>
					<li><a href="?page=about.php">About Us</a>
					</li>
					<li><a href="?page=services.php">Services</a>
					</li>
					<li><a href="?page=products.php">products</a>
					</li>
				</ul>
			</div>
		</div>	

		<div id="header">
		</div>
		<div id="content">
			<div id="mainpage">
				<?php
					if(!isset($_GET['page'])){
						include("home.php");
					}else{
						include($_GET['page']);
					}
				?>
				</div>
				<div id="sidebar">

				</div>
				<div id="sidebarcontents"> 
					<ul id="menu">
						<li>
							<h2>Nos Services</h2>
						</li>
						<li>
							<ul>
								<li>En construction</li>
							</ul>
						</li>
					</ul>
				</div>

				<div id="sidebarbottom"></div>
			</div>
			<div class="clear"></div>
		</div>

	</div>
	<div id="footer">
		<p>Ethical Hacking utilise des templates libres de droits</p>
	</div>
</body>
</html>
