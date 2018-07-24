<!DOCTYPE HTML>
<!--
	Identity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<?php
try

{

    $bdd = new PDO('mysql:host=localhost;dbname=bet;charset=utf8', 'root', '');

}

catch(Exception $e)

{

        die('Erreur : '.$e->getMessage());

}

?>


<?php include("head.php"); ?>

	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">


				<!-- Main -->
					<section id="main">
						<?php include("header.php"); ?>

						<h2>Tu as envoyé une demande de défi à ton pote</h2>
						<hr />
						<p></p>

						<p> Attends sa réponse pour continuer de jouer et savoir qui a gagné ;-) <p>
						
						
						<?php include("footer.php"); ?>
						
					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="copyright">
							<li>&copy; Jane Doe</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script>
				if ('addEventListener' in window) {
					window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-preload\b/, ''); });
					document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
				}
			</script>

	</body>
</html>