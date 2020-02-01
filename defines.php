<?php 

session_start();

define( 'FACEBOOK_APP_ID', '235220427471133' );
define( 'FACEBOOK_APP_SECRET', 'd508eae9d47150aa5f8cdf6e7b3ed362' );
define( 'FACEBOOK_APP_REDIRECT_URI', 'https://andremouradev.com.br/blog_code/instagram_graph_api/obtaining_access_token.php' );
define( 'ENDPOINT_BASE', 'https://graph.facebook.com/v3.2/' );
define( 'ENDPOINT_BASE_SIMPLE', 'https://graph.facebook.com/' );

// access token
$accessToken = 'EAADV7oYFZBR0BAEtwYadSi1B8dDwwzdBnvyl0mus5KN3ZBneeQzYZAvWpts6Qdt4AkhZBzHPxVv0UQ1tiLyYn4PAbvA8akltkvjAdCPus3ZCyRZCUKNL21A9gQ3SnmbMoWu0bwz1F3tAUGgZB1WwOdNoGgWF5GPPmZAEu3zEywNvEOxAIgV75jHg';

// page id
$pageId = '108901260670298';

// instagram business account id
$instagramAccountId = '17841404256221068';
