<?php 

include 'defines.php';

// get pages endpoint
$endpointFormat = ENDPOINT_BASE . 'me/accounts?access_token={access-token}';
$pagesEndpoint = ENDPOINT_BASE . 'me/accounts';

// endpoint params
$pagesParams = array(
	'access_token' => $accessToken
);

// add params to endpoint
$pagesEndpoint .= '?' . http_build_query( $pagesParams );

// setup curl
$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, $pagesEndpoint );
curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, false );
curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

// make call end get response
$response = curl_exec( $ch );
curl_close( $ch );
$responseArray = json_decode( $response, true );
unset( $responseArray['data'][0]['access_token'] );

include 'template.php';
