<!DOCTYPE HTML>
<!--
	Identity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<?php include("head.php"); ?>

	<body class="is-preload">


		<?php
			$logged = false;
						?>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main">
						<?php include("header.php"); ?>

						<h2>Les règles</h2>
						<hr />

						<ul class="regles">
							<li>Pose la question pour le pari à faire en renseignant ton pseudonyme, ton email et l'email de ta cible </li>
							<li>Ton pote te répond sur quelle échelle il veut parier ( elle va de 2 à 25 )</li>
							<li>Chacun envoie son numéro de pari</li>
							<li>Un mail est envoyé à chacun pour savoir qui a gagné</li>
						</ul>


						
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