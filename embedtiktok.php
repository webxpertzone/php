<?php


/*
$apiurl = 'https://www.tiktok.com/oembed?url=https://www.tiktok.com/@scout2015/video/6718335390845095173';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiurl);
curl_setopt($ch, CURLOPT_HEADER, TRUE); 
curl_setopt($ch, CURLOPT_NOBODY, TRUE); // remove body 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
curl_setopt ($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 5.1; rv:31.0) Gecko/20100101 Firefox/31.0');
$apiurl = curl_exec($ch);
curl_close($ch);


print_r($apiurl);
*/



/*
$apiurl = 'https://www.tiktok.com/oembed?url=https://www.tiktok.com/@scout2015/video/6718335390845095173';

$json = json_decode(file_get_contents($apiurl), true);

print_r($json); // it will return details of video
*/





$url = 'https://www.tiktok.com/oembed?url=https://www.tiktok.com/@scout2015/video/6718335390845095173';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt ($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 5.1; rv:31.0) Gecko/20100101 Firefox/31.0');
curl_setopt($ch, CURLOPT_URL, $url);
$c = curl_exec($ch);
$json = json_decode($c);

//print_r($json);


if ( curl_errno($ch) ) {

 echo 'error:' . curl_error($ch);
 curl_close($ch);

} else {

 $html = $json->{'html'};
 print_r($html) ;

}

curl_close($ch);

?>