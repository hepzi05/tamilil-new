<?php
require("../../variables.php");
$xmlparser = xml_parser_create();

$username = $_POST['username'];
$jobtitle = $_POST['jobtitle'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$organization = $_POST['organization'];
$address1 = $_POST['address1'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipcode = $_POST['zipcode'];
$country = $_POST['country'];
$email = $_POST['email'];
$phone = $_POST['phone'];

if (!defined('NAMECHEAP_DOMAIN') && !defined('NAMECHEAP_APIUSER') && !defined('NAMECHEAP_APIKEY') && !defined('NAMECHEAP_CLIENTIP')) {
    echo "Config variables are missing...";
}

try {

    $response = file_get_contents(
        NAMECHEAP_DOMAIN . "?ApiUser=" . NAMECHEAP_APIUSER . "&ApiKey=" . NAMECHEAP_APIKEY . "&UserName=$username&ClientIp=" . NAMECHEAP_CLIENTIP . "&Command=namecheap.users.update&JobTitle=$jobtitle&FirstName=$firstname&LastName=$lastname&Organization=$organization&Address1=$address1&City=$city&StateProvince=$state&Zip=$zipcode&Country=$country&EmailAddress=$email&Phone=$phone"
    );

    xml_parse_into_struct($xmlparser, $response, $values);
    xml_parser_free($xmlparser);

    if ($values[2]["tag"] == "ERROR") {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode("{status: 401, message: " . $values[2]['value'] . "}");
    } else {
        echo json_encode($values[8]["attributes"]);
    }
} catch (Exception $e) {
    echo $e;
}

?>