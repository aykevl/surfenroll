<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="irma-web-server" value="https://privacybydesign.foundation/tomcat/irma_api_server/server/" />
	<meta name="irma-api-server" value="https://privacybydesign.foundation/tomcat/irma_api_server/api/v2/" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="https://privacybydesign.foundation/tomcat/irma_api_server/client/irma.js"></script>
	<script type="text/javascript" src="../js/enroll.js"></script>

	<script type="text/javascript">
	var jwt = "<?= $jwt ?>";
	</script>

	<title><?= PROVIDER_NAME ?> attributes</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3">
				<h2>Available <?= PROVIDER_NAME ?> attributes</h2>

				<div id="alert_box"></div>

				<p>The attributes below can be added to your IRMA app:</p>
				<table class="table">
<?php foreach ($irma_attributes as $key => $value) { ?>
					<tr>
						<th scope="row"><?= $ATTRIBUTE_HUMAN_NAMES[$key] ?></th>
<?php   if ($key == 'profileurl') { ?>
						<td><a href="<?= $value ?>"><?= $value ?></a></td>
<?php   } else { ?>
						<td><?= htmlspecialchars($value, ENT_QUOTES|ENT_HTML5) ?></td>
<?php   } ?>
					</tr>
<?php } ?>
				</table>

				<p>Click here to add this attributes to your IRMA app.</p>
				<button id="enroll" class="btn btn-primary">Load attributes in IRMA app</button>

				<hr />
				<small>You are logged in as <?= $irma_attributes['fullname'] ?> (<a href="?action=logout">Log out</a>)</small>
			</div>
		</div>
	</div>
</body>
</html>
