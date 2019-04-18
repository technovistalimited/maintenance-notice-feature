<?php
/**
 * Main Application Header.
 *
 * @author  Mayeenul Islam
 * @package Maintenance Notice Feature
 */

// Get the Configurations first.
require_once 'src/config.php';
?>

<!DOCTYPE html>
<html lang="en" class="h-100">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Maintenance Notice Feature &bull; TechnoVista Limited</title>

	<!-- DEMO STYLES -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- STYLES FOR MAINTENANCE -->
	<link rel="stylesheet" href="src/assets/css/maintenance.css" media="screen">

</head>
<body class="h-100">

	<?php
	/**
	 * Require the Maintenance Notice.
	 */
	require_once 'src/maintenance.php';
	?>

	<main class="d-flex h-100">
		<div class="my-auto" style="width: 100%;">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 offset-sm-3">
						<div class="card">
							<div class="card-body">
								<header>
									<h1>Hello World!</h1>
								</header>

								<section>
									<p>Welcome to the demo application where your actual application will be available for public use. <strong>But a notice will be available when you scheduled the site for maintenance. And user can dismiss the notice with acknowledgment.</strong></p>
								</section>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<!-- JAVASCRIPTS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<!-- MAINTENANCE SCRIPTS -->
	<script src="src/assets/js/maintenance.js"></script>

</body>
</html>
