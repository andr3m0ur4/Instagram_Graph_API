<?php 

include 'defines.php';

// get instagram media id endpoint
$endpointFormat = ENDPOINT_BASE_SIMPLE . '{ig-user-id}/media?access_token={access-token}';
$endpoint = ENDPOINT_BASE_SIMPLE . $instagramAccountId . '/media';

// endpoint params
$instagramParams = array(
	'fields' => 'id,caption,media_type,media_url,username,timestamp,permalink',
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
$mediaArray = json_decode( $response, true );

//echo '<pre>';
//print_r($mediaArray);
//die();


// get instagram paging endpoint
$endpoint = $mediaArray['paging']['next'];

// setup curl
$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, $endpoint );
curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, false );
curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

// make call end get response
$response = curl_exec( $ch );
curl_close( $ch );
$pagingArray = json_decode( $response, true );

include 'template-media-instagram.php';
