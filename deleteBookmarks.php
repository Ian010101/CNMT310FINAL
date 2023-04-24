<?php

require_once("autoload.php");
require_once("WebServiceClient.php");

// change name to reflect your user credit file/location
require_once(__DIR__ . "/usr_creds.php");

//function deleteBookmark() {
// set API endpoint url
//function deleteBookmark($bookmarkID) {
$url = "https://cnmt310.classconvo.com/bookmarks/";

$client = new WebServiceClient($url);

	$userID = $_SESSION["id"];
    $bookmarkID = $_SESSION["bookmarkID"];
    // create data array to send to the API
    $data = array("bookmark_id" => $bookmarkID, "user_id" => $userID);
    
    // set API action and auth fields
    $action = "deletebookmark";
    $fields = array(
        "apikey" => APIKEY,
        "apihash" => APIHASH,
        "data" => $data,
        "action" => $action,
    );

    $client->setPostFields($fields);

    // call API and get response
    $returnValue = $client->send();

    // decode JSON response into php object
    $obj = json_decode($returnValue);
    if (!property_exists($obj,"result")) {
        die(print("Error, no result property"));
    }

     // Check if the bookmarks were retrieved successfully
     if (property_exists($obj, "result") && $obj->result == "Success") {
        // Extract bookmark data from object
        $bookmarks = $obj->data;
        //echo $bookmarkID;
        // Return array of bookmarks
       //return $bookmarks;
       die(header("Location: " . BOOKMARKS));
    } else {
        // Handle error
        if (property_exists($obj, "data") && property_exists($obj->data, "message")) {
            die("Error: " . $obj->data->message);
        } else {
            die("Error: Unable to retrieve bookmarks.");
        }
    }

//}