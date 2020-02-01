<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Getting an Instagram Users Metadata</title>
	</head>
	<body>
		<h1>Getting an Instagram Users Metadata</h1>
		<hr>
		<br>
		<div style="display: inline-block;width: 100%;">
			<div style="float: left;">
				<img style="width: 50px;border-radius: 50%;" src="<?= $responseArray['profile_picture_url']; ?>">
			</div>
			<div style="float: left;margin-left: 20px;">
				<a target="_blank" href="https://www.instagram.com/<?= $responseArray['username']; ?>">
					<h3><?= $responseArray['username']; ?></h3>
				</a>
				<div style="display: inline-block;">
					<b><?= $responseArray['media_count']; ?></b> posts
				</div>
				<div style="display: inline-block;margin-left: 20px;">
					<b><?= $responseArray['followers_count']; ?></b> followers
				</div>
				<div style="display: inline-block;margin-left: 20px;">
					<b><?= $responseArray['follows_count']; ?></b> following
				</div>
			</div>
			
		</div>
		<div>
			<h4><?= $responseArray['name']; ?></h4>
			<div>
				<?= nl2br( $responseArray['biography'] ); ?>
			</div>
			<div>
				<a target="_blank" href="<?= $responseArray['website']; ?>">
					<h3><?= $responseArray['website']; ?></h3>
				</a>
			</div>
		</div>
		<br>
		<hr>
		<h3>Endpoint: <?= $endpointFormat; ?></h3>
		<hr>
		<h3>Raw Response</h3>
		<textarea style="width: 100%;height: 300px;"><?php print_r( $responseArray ); ?></textarea>
	</body>
</html>