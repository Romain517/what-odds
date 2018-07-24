<!DOCTYPE HTML>

<?php
				try
				{
    				$bdd = new mysqli("localhost","root","","bet");

				}

				catch(Exception $e)
				{
        			die('Erreur : '.$e->getMessage());
				}
?>
<!--
	Identity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<?php include("head.php"); ?>

	<body class="is-preload">

		


		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main">
						

						<?php include("header.php"); ?>



						


						<h2>Ton profil</h2>
						<form method="post" action="index.php">
							<div class="fields">
								<div class="field">
									<input type="text" name="name" id="name_player" placeholder="Pseudo" />
								</div>
								<div class="field">
									<input type="email" name="email_player" id="email_player" placeholder="Email" />
								</div>
							</div>

							<!--js-->
    						<script src='https://www.google.com/recaptcha/api.js'></script>

						<h2>Ta cible</h2>

							<div class="fields">
								<div class="field">
									<input type="email" name="email_target" id="email_target" placeholder="Email" />
								</div>
								<div class="field">
									<input type="text" name="bet" id="bet" placeholder="Ta question" />
								</div>
							</div>

							<!--js-->
    						<script src='https://www.google.com/recaptcha/api.js'></script>

							<ul class="actions special">
								<input type="submit" value="Culpoke" name="go" />
							</ul>
						</form>


						<?php include("footer.php"); ?>
						
					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="copyright">
							<li>&copy; Jane Doe</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</footer>

			</div>

			

			<?php

						if(isset($_POST['go']))
						{
							$sql = "INSERT INTO pari_email(mail_player, mail_target, 	question, 	max, 	score_player, 	score_target )
   							VALUES ('".$_POST["email_player"]."','".$_POST["email_target"]."','".$_POST["bet"]."',0,0,0)";
   							$result = mysqli_query($bdd,$sql);


   							/*$to      = $_POST['email_target'];
							$subject = 'Défi !';
							$message = 'Tu es défié';
							$headers = 'From: webmaster@example.com' . "\r\n" .' Reply-To: webmaster@example.com' . "\r\n" .
    									'X-Mailer: PHP/' . phpversion();*/

							//mail($to, $subject, $message, $headers);
							//mail("", "aaa", "messssss");




   							header('Location: sender.php'); 

   						}



			?>
			





		<!-- Scripts -->
			<script>
				if ('addEventListener' in window) {
					window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-preload\b/, ''); });
					document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
				}
			</script>

	</body>
</html>