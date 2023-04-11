<?php

require_once("autoload.php");
require_once("WebServiceClient.php");
//require_once("usr_creds.php");
require_once(__DIR__ . "/../creds.php");

// set API endpoint url
$url = "https://cnmt310.classconvo.com/bookmarks/";

// create new WebServiceClient object
$client = new WebServiceClient($url);

// Default is to POST. If you need to change to a GET, here's how:
//$client->setMethod("GET");

// check if the login form is submitted
if (isset($_POST["submit"])) {

    // get user/pass from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // create data array to send to the API
    $data = array("username" => $username, "password" => $password);
    
    // set API action and auth fields
    $action = "authenticate";
    $fields = array("apikey" => APIKEY,
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
    
    // output response object
    var_dump($obj);

    // check if login was successful
    if ($obj->result == "Success") {
        // redirect user to welcome page
        header("Location: welcome_test.php"); //Change to BOOKMARKS 
        exit();
    } else {
        // output result message
        print $obj->result;
    }
}

print '<html>';
print '<head>';
print '<title>Login Form</title>';
print '</head>';
print '<body>';
print '<h1>Login Form</h1>';
print '<form method="post" action="">';
print '<label for="username">Username:</label>';
print '<input type="text" id="username" name="username" /><br><br>';
print '<label for="password">Password:</label>';
print '<input type="password" id="password" name="password" /><br><br>';
print '<input type="submit" name="submit" value="Submit" />';
print '</form>';
print '</body>';
print '</html>';
