<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.css"/>
	<link rel="stylesheet" href="css.css"/>
	<link href='https://fonts.googleapis.com/css?family=Permanent+Marker' rel='stylesheet' type='text/css'>
	
	<title>Je rentre en 6ème !</title>
</head>

<body>

	<a href="#front">
		<header class="ban">
			<h1>Je rentre en 6ème !</h1>
		</header>
	</a> 	

	<div id="front" class="wrap">

		<div class="row">
  			<div class="col-md-8">
				<section class="introduction">
					<h2>Bienvenue au collège !</h2>

					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>

					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
				</section>
			</div>
 
			<div class="cote_droit">
				<div class="col-md-4">
					<a href="astuces.php">
						<section class="astuces">
							<h2>Astuces</h2>
						</section>
					</a> 
				</div>
				<div class="col-md-4">
					<a href="temoignages.php">
						<section class="temoignages">
							<h2>Témoignages</h2>
						</section>
					</a> 
				</div>
			</div>

			<div class="col-md-12">		
				<a href="faq.php">
					<section class="faq">
						<h2>FAQ</h2>
						<p>Les réponses à toutes les questions que tu te poses.</p>
					</section>
				</a>
			</div>
		</div>
		
		<?php
			include("call_footer.php")
		?> 
	</div>
</body>

</html>