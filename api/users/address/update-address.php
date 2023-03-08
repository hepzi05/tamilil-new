<?php
require("../../variables.php");
$xmlparser = xml_parser_create();
session_start();

$username = $_POST['username'];
$addressid = $_POST['addressid'];

$addressName = $_POST['addressName'];
$email = $_POST['email'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$jobtitle = $_POST['jobtitle'];
$organization = $_POST['organization'];
$address1 = $_POST['address1'];
$city = $_POST['city'];
$zip = $_POST['zip'];
$country = $_POST['country'];
$phone = $_POST['phone'];
$state = $_POST['state'];
$stateProvinceChoice = $_POST['stateProvinceChoice'];

if (!defined('NAMECHEAP_DOMAIN') && !defined('NAMECHEAP_APIUSER') && !defined('NAMECHEAP_APIKEY') && !defined('NAMECHEAP_CLIENTIP')) {
    echo "Config variables are missing...";
}

try {

    $response = file_get_contents(
        NAMECHEAP_DOMAIN . "?ApiUser=" . NAMECHEAP_APIUSER . "&ApiKey=" . NAMECHEAP_APIKEY . "&UserName=$username&ClientIp=" . NAMECHEAP_CLIENTIP . "&Command=namecheap.users.address.update&AddressId=$addressid&AddressName=$addressName&EmailAddress=$email&FirstName=$firstname&LastName=$lastname&JobTitle=$jobtitle&Organization=$organization&Address1=$address1&City=$city&Zip=$zip&Country=$country&Phone=$phone&StateProvince=$state&StateProvinceChoice=$stateProvinceChoice"
    );

    xml_parse_into_struct($xmlparser, $response, $values);
    xml_parser_free($xmlparser);

    if ($values[2]["tag"] == "ERROR") {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode("{'status': 401, 'message': " . $values[2]['value'] . "}");
    } else {

        $filteredArr = [];

        foreach ($values as $item) {
            if (!(in_array($item["tag"], ["APIRESPONSE", "ERRORS", "WARNINGS", "REQUESTEDCOMMAND", "COMMANDRESPONSE", "GETADDRESSINFORESULT", "SERVER", "GMTTIMEDIFFERENCE", "EXECUTIONTIME"]))) {
                array_push($filteredArr, $item);
            }
        }

        echo json_encode($values);
    }
} catch (Exception $e) {
    echo $e;
}
