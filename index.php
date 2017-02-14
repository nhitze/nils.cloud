<?php
$nilsDB = 'nils.db';
if(!is_file($nilsDB)) {
	$fileContent = file_get_contents($nilsDB);
}
$nilsE = (!empty(trim($fileContent))) ? [] : json_decode($file);
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
					<div id="main">

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