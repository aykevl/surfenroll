<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />

	<title><?= PROVIDER_NAME ?> attributen</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3">
				<h2>Laad attributen via <?= PROVIDER_NAME ?></h2>

<?php if (PROVIDER == 'surfnet') { ?>
				<p>
					De attributen van uw hoger onderwijsinstelling kunnen nu in uw
					IRMA app geladen worden via Surfnet.
				</p>

				<p>
					Om uw attributen te laden moet u eerst inloggen bij uw onderwijsinstelling.
					Wij ontvangen dan uw attributen. Daarna kunt u ze laden in uw IRMA app.
				</p>

<?php } else if (PROVIDER == 'facebook') { ?>
				<p>
					Attributen van Facebook kunnen eenvoudig in de IRMA app geladen
					worden. Om deze te laden is het nodig IRMA toegang te geven tot basis
					profielgegevens. Deze gebruiken wij alleen tijdens het uitgeven van
					attributen.
				</p>

				<p>
					Nadat u Facebook toestemming heeft gegeven kunt u de attributen direct
					in de IRMA app laden.
				</p>
<?php } ?>

				<a href="?action=login" class="btn btn-primary">Login om attributen te laden</a>
			</div>
		</div>
	</div>
</body>
</html>