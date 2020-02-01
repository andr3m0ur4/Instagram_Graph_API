<?php 

include 'defines.php';

// get instagram account id endpoint
$endpointFormat = ENDPOINT_BASE . '{ig-user-id}?fields={fields}&access_token={access-token}';
$endpoint = ENDPOINT_BASE . $instagramAccountId;


// endpoint params
$instagramParams = array(
	'fields' => 'username,website,name,ig_id,id,profile_picture_url,biography,follows_count,followers_count,media_count',
	'access_token' => $accessToken
);

// add params to endpoint
$endpoint .= '?' . http_build_query( $instagramParams );

// setup curl
$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, $endpoint );
curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, false );
curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

// make call end get response
$response = curl_exec( $ch );
curl_close( $ch );
$responseArray = json_decode( $response, true );

include 'template-user-instagram.php';
