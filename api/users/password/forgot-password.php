<?php
require("../../variables.php");
$xmlparser = xml_parser_create();
session_start();

$queryValue = $_POST['query'];
$queryParam = "";

if (str_contains($queryValue, "@")) {
    $queryParam = "emailaddress";
} else {
    $queryParam = "username";
}

if (!defined('NAMECHEAP_DOMAIN') && !defined('NAMECHEAP_APIUSER') && !defined('NAMECHEAP_APIKEY') && !defined('NAMECHEAP_CLIENTIP')) {
    echo "Config variables are missing...";
}

try {

    $response = file_get_contents(
        NAMECHEAP_DOMAIN . "?ApiUser=" . NAMECHEAP_APIUSER . "&ApiKey=" . NAMECHEAP_APIKEY . "&UserName=$username&ClientIp=" . NAMECHEAP_CLIENTIP . "&Command=namecheap.users.resetpassword&findby=$queryParam&findbyvalue=$queryValue"
    );

    xml_parse_into_struct($xmlparser, $response, $values);
    xml_parser_free($xmlparser);

    if ($values[2]["tag"] == "ERROR") {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode("{'status': 401, 'message': " . $values[2]['value'] . "}");
    } else {
        $_SESSION["user-details"] = json_encode($values[8]["attributes"]);
        echo json_encode($values[8]["attributes"]);
    }
} catch (Exception $e) {
    echo $e;
}

?>