<?php
include ('includes.php');
$search = (isset($_GET['s'])) ? urlencode(htmlspecialchars_decode($_GET['s'])): '';
$url = 'http://0.0.0.0/Test_task/foobub/?s=' . $search;
// if($search) include('main.php');
// else include('search.php');
$accessKey = '5a5704683cdf471cbefdc1a04bc82b37';

// Verify the endpoint URI.  At this writing, only one endpoint is used for Bing
// search APIs.  In the future, regional endpoints may be available.  If you
// encounter unexpected authorization errors, double-check this value against
// the endpoint for your Bing Web search instance in your Azure dashboard.
$endpoint = 'https://api.cognitive.microsoft.com/bing/v7.0/search';

$optional = '';
list($headers, $json) = BingWebSearch($endpoint, $accessKey, $search, $optional);
//$result = json_decode($json);
if ($json) {
  include('main.php');
}
//echo "<pre>"; print_r($result);






?>
