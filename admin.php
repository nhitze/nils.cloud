<?php
$key = file_get_contents('~/.key');
if($_GET['key']!=$key) { die('fuck off'); }
$nilsDB = './nils.db';
if(is_file($nilsDB)) {
	$fileContent = file_get_contents($nilsDB);
}
$nilsPool = (isset($fileContent) && !is_null($fileContent) && !empty(trim($fileContent))) ? unserialize($fileContent):array();

if(isset($_POST) && !empty($_POST['name'])) {
	$name = trim($_POST['name']);
	$id = md5($name);
	$imagename = trim($_POST['imagename']);
	$description = trim($_POST['description']);

	$nilsPool['nils'][$id] = [
		'name' => $name,
		'description' => $description,
		'imagename' => $imagename,
	];

	file_put_contents($nilsDB, serialize($nilsPool));
}
?>
<!DOCTYPE HTML>
<!--
	Multiverse by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Die Nils Cloud Managment Tool</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.html"><strong>Wir sind NILS</strong></a></h1>
						<nav>
							<ul>
								<li><a href="#footer" class="icon fa-info-circle">Über die nils.cloud</a></li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id=" inner split">
						<div>

							<section>
								<h2>Insert a Nils</h2>
								<form method="post" action="#">
									<div class="field half first">
										<input type="text" name="name" id="name" placeholder="Name" />
									</div>
									<div class="field half">
										<input type="text" name="imagename" id="imagename" placeholder="Imagename" />
									</div>
									<div class="field">
										<textarea name="description" id="description" rows="4" placeholder="Description"></textarea>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send" class="special" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</form>
							</section>
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer" class="panel">
						<div class="inner split">
							<div>
								<section>
									<h2>N I L S</h2>
									<p>Die NILS Cloud ist ein Verbund von Menschen die Nils heissen. Ist dass völlig irre? Ja! Weil wir Nils sind!</p>
								</section>
								<section>
									<h2>Made by</h2>
									<ul class="icons">
										<li><a href="https://twitter.com/kojote" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
									</ul>
								</section>
								<p class="copyright">
									Design: <a href="http://html5up.net">HTML5 UP</a>.
								</p>
							</div>
							<div>
								<section>
														</section>
							</div>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>