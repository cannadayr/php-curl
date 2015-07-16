<?php

function curl($OBJ) {
/*
$OBJ = ARRAY(
	'URL' 				=> 'https://www.wikipedia.org',
	'REFERER' 			=> 'https://www.wikipedia.org',
	'USERAGENT'			=> "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:32.0) Gecko/20100101 Firefox/32.0",
	'HTTPHEADER'			=> FALSE,
	'COOKIEFILE'			=> $COOKIE,
	'COOKIEJAR'			=> $COOKIE,
	'RETURNTRANSFER'		=> 1,
	'FOLLOWLOCATION'		=> 1,
	'POST'				=> 0,
	'POSTFIELDS'			=> FALSE,
	'SLEEP'				=> 2000000 //uSeconds
);				
$output = curl($OBJ);
*/
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $OBJ['URL']);
    if (isset($OBJ['REFERER']) && $OBJ['REFERER'] !== FALSE) {
        curl_setopt($ch, CURLOPT_REFERER, $OBJ['REFERER']);
    }
    if (isset($OBJ['USERAGENT']) && $OBJ['USERAGENT'] !== FALSE) {
        curl_setopt($ch, CURLOPT_USERAGENT, $OBJ['USERAGENT']);
    }
    if (isset($OBJ['HEADER']) && $OBJ['HEADER'] !== FALSE) {
        curl_setopt($ch, CURLOPT_HEADER, $OBJ['HEADER']);
    }    
    if (isset($OBJ['HTTPHEADER']) && $OBJ['HTTPHEADER'] !== FALSE) {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $OBJ['HTTPHEADER']);
    }
    if (isset($OBJ['COOKIEFILE']) && $OBJ['COOKIEFILE'] !== FALSE) {
        curl_setopt($ch, CURLOPT_COOKIEFILE, $OBJ['COOKIEFILE']);
    }
    if (isset($OBJ['COOKIEJAR']) && $OBJ['COOKIEJAR'] !== FALSE) {
        curl_setopt($ch, CURLOPT_COOKIEJAR, $OBJ['COOKIEJAR']);
    }
    if (isset($OBJ['RETURNTRANSFER']) && $OBJ['RETURNTRANSFER'] !== FALSE) {
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, $OBJ['RETURNTRANSFER']);
    }
    if (isset($OBJ['FOLLOWLOCATION']) && $OBJ['FOLLOWLOCATION'] !== FALSE) {
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, $OBJ['FOLLOWLOCATION']);
    }
    if (isset($OBJ['FOLLOWLOCATION']) && $OBJ['FOLLOWLOCATION'] !== FALSE) {
        curl_setopt($ch, CURLOPT_POST, $OBJ['POST']);
    }
    if (isset($OBJ['POSTFIELDS']) && $OBJ['POSTFIELDS'] !== FALSE) {
        curl_setopt($ch, CURLOPT_POSTFIELDS, $OBJ['POSTFIELDS']);
    }
    if (isset($OBJ['MAXREDIRS']) && $OBJ['MAXREDIRS'] !== FALSE) {
        curl_setopt($ch, CURLOPT_MAXREDIRS, $OBJ['MAXREDIRS']);
    }
    $buffer = curl_exec($ch);
    if (isset($OBJ['EFFECTIVE_URL']) && $OBJ['EFFECTIVE_URL'] !== FALSE) {
        $buffer = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
    }
    curl_close($ch);

    usleep($OBJ['SLEEP']);
    return $buffer;
}
