<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Get Page's Instagram Business Account</title>
	</head>
	<body>
		<h1>Get Page's Instagram Business Account</h1>
		<hr>
		<h3>Endpoint: <?= $endpointFormat; ?></h3>
		<hr>
		<h3>Display:</h3>
		<h4>Instagram Business Account ID: <?= $responseArray['instagram_business_account']['id']; ?></h4>
		<h4>Facebook Page ID: <?= $responseArray['id']; ?></h4>
		<hr>
		<h3>Raw Response</h3>
		<textarea style="width: 100%;height: 300px;"><?php print_r( $responseArray ); ?></textarea>
	</body>
</html>