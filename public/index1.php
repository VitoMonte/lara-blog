<?php
require_once '/var/www/site.loc/vendor/autoload.php';


$client = new \Google_Client();
$client->setApplicationName('My PHP App');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');

$jsonAuth = getenv('JSON_AUTH');
$client->setAuthConfig(json_decode($jsonAuth, true));

$sheets = new \Google_Service_Sheets($client);

$data = [];

// The first row contains the column titles, so lets start pulling data from row 2
$currentRow = 2;

$spreadsheetId = getenv('SPREADSHEET_ID');
$range = 'A2:H';


echo '<pre>';
print_r($sheets->spreadsheets_values);
echo '</pre>';
