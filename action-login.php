<?php

// to do:
// add error message/replace current error redirect

require_once("autoload.php");
require_once("WebServiceClient.php");

// change name to reflect your user credit file/location
require_once(__DIR__ . "/../usr_creds.php");

// set API endpoint url
$url = "https://cnmt310.classconvo.com/bookmarks/";

$client = new WebServiceClient($url);

// check if the login form is submitted
if (isset($_POST["submit"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    // create data array to send to the API
    $data = array("username" => $username, "password" => $password);
    
    // set API action and auth fields
    $action = "authenticate";
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
    
    // check if login was successful
    if ($obj->result == "Success") {
        $_SESSION['loggedIn'] = true;
        // save the user id to the session 
        $_SESSION["id"] = $obj->data->id;
        die(header("Location: " . BOOKMARKS));
    } else {
        // output result message
        print $obj->result;
    }
}