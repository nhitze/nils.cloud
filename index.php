<?php
$nilsDB = 'nils.db';
if(is_file($nilsDB)) {
	$fileContent = file_get_contents($nilsDB);
}
$nilsPool = (isset($fileContent) && !is_null($fileContent) && !empty(trim($fileContent))) ? unserialize($fileContent):[];
?>
<!DOCTYPE HTML>
<!--
	Multiverse by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Die Nils Cloud</title>
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
						<?php
							if(count($nilsPool['nils'])>0):
								foreach($nilsPool['nils'] as $id => $nils): ?>
									<article class="thumb">
										<a href="images/fulls/<?=$nils['imagename'] ?>.jpg" class="image"><img src="images/thumbs/<?=$nils['imagename'] ?>.jpg" alt="<?=$nils['name'] ?>" /></a>
										<h2><?=$nils['name'] ?></h2>
										<p><?=$nils['description']; ?></p>
									</article>
							<?php
								endforeach;
							else:
							?>
							<article class="thumb">
								<h2>No Nils available</h2>
								<p>Something happend to the NilsDB</p>
							</article>
						<?php endif; ?>
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

					<!-- 	<article class="thumb">
							<a href="images/fulls/langner.jpg" class="image"><img src="images/thumbs/langner.jpg" alt="The Web Hates me" /></a>
							<h2>Nils Langner</h2>
							<p><a href="https://www.thewebhatesme.com/" title="The Web Hates Me">Blog</a></p>
						</article>
						<article class="thumb">
							<a href="images/fulls/kattau.jpg" class="image"><img src="images/thumbs/kattau.jpg" alt="" /></a>
							<h2>Nils Kattau</h2>
							<p><a href="https://nilskattau.de/" title="Nils Kattau">Blog</a></p>
						</article>
						<article class="thumb">
							<a href="images/fulls/belde.jpg" class="image"><img src="images/thumbs/belde.jpg" alt="" /></a>
							<h2>Nils Belde</h2>
							<p><a href="http://www.belde.de/" title="Belde">Blog</a></p>
						</article>
						<article class="thumb">
							<a href="images/fulls/bokelberg.jpg" class="image"><img src="images/thumbs/bokelberg.jpg" alt="" /></a>
							<h2>Nilz Bokelberg</h2>
							<p><a href="http://www.qlod.org/weltfrieden/" title="Nilz Bokelberg">Blog</a></p>
						</article>
						<article class="thumb">
							<a href="images/fulls/doerje.jpg" class="image"><img src="images/thumbs/doerje.jpg" alt="" /></a>
							<h2>Niels Doerje</h2>
							<p><a href="https://plus.google.com/108373010835191221453" title="Niels Doerje">G+</a></p>
						</article>
						<article class="thumb">
							<a href="images/fulls/juenemann.jpg" class="image"><img src="images/thumbs/juenemann.jpg" alt="" /></a>
							<h2>Niels Doerje</h2>
							<p><a href="https://twitter.com/totally_unknown" title="Nils Juenemann">G+</a></p>
						</article>
						<article class="thumb">
							<a href="images/fulls/fallenbeck.jpg" class="image"><img src="images/thumbs/fallenbeck.jpg" alt="" /></a>
							<h2>Niels Fallenbeck</h2>
							<p><a href="http://www.fallenbeck.com/" title="Niels Fallenbeck">WWW</a></p>
						</article>
						<article class="thumb">
							<a href="images/fulls/kuehn.jpg" class="image"><img src="images/thumbs/kuehn.jpg" alt="" /></a>
							<h2>Nils Kühn</h2>
							<p><a href="https://www.facebook.com/nils.kuhn.96" title="Nils Kühn">WWW</a></p>
						</article> -->

	</body>
</html>