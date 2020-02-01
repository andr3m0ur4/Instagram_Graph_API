<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Get User's Pages</title>
	</head>
	<body>
		<h1>Get User's Pages</h1>
		<hr>
		<h3>Endpoint: <?= $endpointFormat; ?></h3>
		<hr>
		<h3>Display:</h3>
		<h4>Facebook Page: <?= $responseArray['data'][0]['name']; ?></h4>
		<h4>Facebook Page ID: <?= $responseArray['data'][0]['id']; ?></h4>
		<hr>
		<h3>Raw Response</h3>
		<textarea style="width: 100%;height: 600px;"><?php print_r( $responseArray ); ?></textarea>
	</body>
</html>