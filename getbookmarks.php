<?php

// Add redirects to prevent direct access

require_once("autoload.php");
require_once("functions.php");
require_once("WebServiceClient.php");

// Change to reflect where your user credit file is stored
require_once(__DIR__ . "/../usr_creds.php");

// Check if user is logged in
if (!isset($_SESSION["id"])) {
    die(header("Location: " . BOOKMARKS));
}

function getUserBookmarks() {
    // set API endpoint url
    $url = "https://cnmt310.classconvo.com/bookmarks/";

    // Create data array to send to the API
    $data = array(
        "user_id" => $_SESSION['id']
    );

    // Set API action and bookmark fields
    $action = "getbookmarks";
    $fields = array(
        "apikey" => APIKEY,
        "apihash" => APIHASH,
        "data" => $data,
        "action" => $action
    );

    // Create WebServiceClient instance
    $client = new WebServiceClient($url);

    // Set POST fields
    $client->setPostFields($fields);

    // Call API and get response
    $response = $client->send();

    // Decode JSON response into php object
    $obj = json_decode($response);

    // Check if the bookmarks were retrieved successfully
    if (property_exists($obj, "result") && $obj->result == "Success") {
        // Extract bookmark data from object
        $bookmarks = $obj->data;

        // Return array of bookmarks
        return $bookmarks;
    } else {
        // Handle error
        if (property_exists($obj, "data") && property_exists($obj->data, "message")) {
            die("Error: " . $obj->data->message);
        } else {
            die("Error: Unable to retrieve bookmarks.");
        }
    }
}
