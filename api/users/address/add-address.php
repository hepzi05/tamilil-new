<?php
require("../../variables.php");
$xmlparser = xml_parser_create();
session_start();

$username = $_POST['username'];

$addressName = $_POST['addressName'];
$email = $_POST['email'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

$address1 = $_POST['address1'];
$city = $_POST['city'];
$zip = $_POST['zip'];
$country = $_POST['country'];
$phone = $_POST['phone'];
$state = $_POST['state'];


if (!defined('NAMECHEAP_DOMAIN') && !defined('NAMECHEAP_APIUSER') && !defined('NAMECHEAP_APIKEY') && !defined('NAMECHEAP_CLIENTIP')) {
    echo "Config variables are missing...";
}

try {

    $response = file_get_contents(
        NAMECHEAP_DOMAIN . "?ApiUser=" . NAMECHEAP_APIUSER . "&ApiKey=" . NAMECHEAP_APIKEY . "&UserName=$username&ClientIp=" . NAMECHEAP_CLIENTIP . "&Command=namecheap.users.address.create&AddressName=$addressName&EmailAddress=$email&FirstName=$firstname&LastName=$lastname&Address1=$address1&City=$city&Zip=$zip&Country=$country&Phone=$phone&StateProvince=$state&StateProvinceChoice=P"
    );

    xml_parse_into_struct($xmlparser, $response, $values);
    xml_parser_free($xmlparser);

    if ($values[2]["tag"] == "ERROR") {
        header('Content-Type: application/json; charset=utf-8');
        $arr = array("status" => 401, "message" => $values[2]['value']);

        echo json_encode($arr);
    } else {
        echo json_encode($values[8]);
    }
} catch (Exception $e) {
    echo $e;
}

?>