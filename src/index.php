<?php
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");
require('functions.inc.php');

$output = array(
	"error" => false,
	"string" => "",
	"answer" => 0,
	"statusCode" => ""
);


$t = $_REQUEST['text'];

if($t ==null)
{
	header('HTTP/1.1 404 Not Found');
	http_response_code(404);
	$answer="N/A";
	$error = true;
	$output['string']="Please enter text";
	$output['answer']=$answer;	
	$output['error'] = $error;
	$output['statusCode'] = 404;
	echo json_encode($output);
}
else {
	http_response_code(200);
	$answer=wordcount($t);
	$error = false;
	$output['string']="Contains ".$answer." words";
	$output['answer']=$answer;
	$output['error'] = $error;
	$output['statusCode'] = 200;
	echo json_encode($output);

}



exit();
