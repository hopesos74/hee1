<?php
$ch = curl_init();
$url = 'http://openapi.airkorea.or.kr/openapi/services/rest/ArpltnInforInqireSvc/getMsrstnAcctoRltmMesureDnsty'; /*URL*/
$queryParams = '?' . urlencode('ServiceKey') . '=l%2FzPvuFgDbYOsgQY1kCLbjHytfR1nkkyR2KZVENTPtDNQR4AD0jG%2BvGf2fBA052nrh0HF4QJW%2FMFXxt2HKP5sg%3D%3D'; /*Service Key*/
$queryParams .= '&' . urlencode('numOfRows') . '=' . urlencode('10'); /**/
$queryParams .= '&' . urlencode('pageNo') . '=' . urlencode('1'); /**/
$queryParams .= '&' . urlencode('stationName') . '=' . urlencode('종로구'); /**/
$queryParams .= '&' . urlencode('dataTerm') . '=' . urlencode('DAILY'); /**/
$queryParams .= '&' . urlencode('ver') . '=' . urlencode('1.3'); /**/

curl_setopt($ch, CURLOPT_URL, $url . $queryParams);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$response = curl_exec($ch);
curl_close($ch);

var_dump($response);
?>
