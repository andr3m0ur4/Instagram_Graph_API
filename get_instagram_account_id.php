<?php 

include 'defines.php';

// get instagram account id endpoint
$endpointFormat = ENDPOINT_BASE . '{page-id}?fields=instagram_business_account&access_token={access-token}';
$instagramAccountEndpoint = ENDPOINT_BASE . $pageId;

// endpoint params
$instagramParams = array(
	'fields' => 'instagram_business_account',
	'access_token' => $accessToken
);

// add params to endpoint
$instagramAccountEndpoint .= '?' . http_build_query( $instagramParams );

// setup curl
$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, $instagramAccountEndpoint );
curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, false );
curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

// make call end get response
$response = curl_exec( $ch );
curl_close( $ch );
$responseArray = json_decode( $response, true );

include 'template-instagram.php';
