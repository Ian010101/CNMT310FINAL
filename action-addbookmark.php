<?php

// create function for bookmarks page (should add a new bookmark card for bookmarks)
// 

require_once("autoload.php");
require_once("WebServiceClient.php");

// Change to reflect where your user credit file is stored
require_once(__DIR__ . "/../usr_creds.php");

// set API endpoint url
$url = "https://cnmt310.classconvo.com/bookmarks/";

$client = new WebServiceClient($url);

// Create data array to send to the API
$data = array(
	"url" => $_POST["url"],
	"displayname" => $_POST["title"],	
	"user_id" => $_SESSION['id'], // Replace with a valid user ID for testing
);

// Set API action and bookmark fields
$action = "addbookmark";
$fields = array(
	"apikey" => APIKEY,
	"apihash" => APIHASH,
	"data" => $data,
	"action" => $action,
);

$client->setPostFields($fields);

// Call API and get response
$returnValue = $client->send();

// Decode JSON response into php object
$obj = json_decode($returnValue);
if(!property_exists($obj, "result")) {
	die(print("Error, no result property"));
}

// Check if the bookmark was successfully added
if ($obj->result == "Success") {
	$bookmark_id = $obj->data->bookmark_id;
	echo "Bookmark was added successfully. Bookmark ID: $bookmark_id<br>";

	// Print all of the data
	echo "Data:<br>";
	foreach($obj->data as $key => $value) {
		echo "$key: $value<br>";
	}
} else {
	die("Error: " . $obj->data->message);
}
