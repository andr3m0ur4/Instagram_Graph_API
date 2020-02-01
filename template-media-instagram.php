<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Getting an Instagram Media Metadata</title>
	</head>
	<body>
		<h1>Getting an Instagram Media Metadata</h1>
		<hr>
		<h2>Instagram Info</h2>
		<hr>
		<!--
		<pre>
			<?php print_r ( $mediaArray ); ?>
		</pre>

		<h1>Username: <?= $mediaArray['username'][0]; ?></h1>
		<h2>Instagram ID: <?= $instagramAccountId; ?></h2>
		h3>Media Count: <?= $user['media_count']; ?></h3>
		<h4>Account Type: <?= $user['account_type']; ?></h4>
		<hr>
		-->
		<h3>Users Media Page 1 (<?= count( $mediaArray['data'] ); ?>)</h3>
		<h4>Raw Data</h4>
		<textarea style="width: 100%; height: 400px;"><?php print_r( $mediaArray ); ?></textarea>
		<h4>Posts</h4>

		<ul style="list-style: none;margin: 0px;padding: 0px;">
			<?php foreach ( $mediaArray['data'] as $post ) : ?>
				<li style="margin-bottom: 20px;border: 3px solid #333;">
					<div>
						<?php if ( 'IMAGE' == $post['media_type'] || 'CAROUSEL_ALBUM' == $post['media_type'] ) : ?>
							<img style="height: 320px;" src="<?= $post['media_url']; ?>">
						<?php else : ?>
							<video height="240" width="320" controls>
								<source src="<?= $post['media_url']; ?>">
							</video>
						<?php endif; ?>
					</div>
					<div>
						<b>Caption: <?= nl2br( htmlentities( $post['caption'] ) ); ?></b>
					</div>
					<div>
						ID: <?= $post['id']; ?>
					</div>
					<div>
						Posted by: <?= $post['username']; ?> at <?= $post['timestamp']; ?>
					</div>
					<div>
						Media Type: <?= $post['media_type']; ?>
					</div>
					<div>
						Link: <a href="<?= $post['permalink']; ?>" target="_blank"><?= $post['permalink']; ?></a>
					</div>
					<div>
						Media URL: <?= $post['media_url']; ?>
					</div>
				</li>
			<?php endforeach; ?>
		</ul>

		<h3>Users Media Page 2 (<?= count( $pagingArray['data'] ); ?>)</h3>
		<h4>Raw Data</h4>
		<textarea style="width: 100%; height: 400px;"><?php print_r( $pagingArray ); ?></textarea>
		<h4>Posts</h4>

		<ul style="list-style: none;margin: 0px;padding: 0px;">
			<?php foreach ( $pagingArray['data'] as $post ) : ?>
				<li style="margin-bottom: 20px;border: 3px solid #333;">
					<div>
						<?php if ( 'IMAGE' == $post['media_type'] || 'CAROUSEL_ALBUM' == $post['media_type'] ) : ?>
							<img style="height: 320px;" src="<?= $post['media_url']; ?>">
						<?php else : ?>
							<video height="240" width="320" controls>
								<source src="<?= $post['media_url']; ?>">
							</video>
						<?php endif; ?>
					</div>
					<div>
						<b>Caption: <?= nl2br( htmlentities( $post['caption'] ) ); ?></b>
					</div>
					<div>
						ID: <?= $post['id']; ?>
					</div>
					<div>
						Posted by: <?= $post['username']; ?> at <?= $post['timestamp']; ?>
					</div>
					<div>
						Media Type: <?= $post['media_type']; ?>
					</div>
					<div>
						Link: <a href="<?= $post['permalink']; ?>" target="_blank"><?= $post['permalink']; ?></a>
					</div>
					<div>
						Media URL: <?= $post['media_url']; ?>
					</div>
				</li>
			<?php endforeach; ?>
		</ul>

	</body>
</html>