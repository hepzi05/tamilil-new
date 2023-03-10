<?php
require("../../variables.php");
$xmlparser = xml_parser_create();
session_start();

$username = $_POST['username'];
$addressid = $_POST['addressid'];

if (!defined('NAMECHEAP_DOMAIN') && !defined('NAMECHEAP_APIUSER') && !defined('NAMECHEAP_APIKEY') && !defined('NAMECHEAP_CLIENTIP')) {
    echo "Config variables are missing...";
}

try {

    $response = file_get_contents(
        NAMECHEAP_DOMAIN . "?ApiUser=" . NAMECHEAP_APIUSER . "&ApiKey=" . NAMECHEAP_APIKEY . "&UserName=$username&ClientIp=" . NAMECHEAP_CLIENTIP . "&Command=namecheap.users.address.getinfo&AddressId=$addressid"
    );

    xml_parse_into_struct($xmlparser, $response, $values);
    xml_parser_free($xmlparser);

    if ($values[2]["tag"] == "ERROR") {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode("{'status': 401, 'message': " . $values[2]['value'] . "}");
    } else {

        $filteredArr = [];

        foreach ($values as $item) {
            if ( !(in_array($item["tag"], ["DEFAULT_YN","STATEPROVINCECHOICE","APIRESPONSE", "ERRORS", "WARNINGS", "REQUESTEDCOMMAND", "COMMANDRESPONSE", "GETADDRESSINFORESULT", "SERVER", "GMTTIMEDIFFERENCE", "EXECUTIONTIME"]))) {
                array_push($filteredArr, array("name" => $item["tag"], "value" => $item["value"]));
            }
        }

        echo json_encode($filteredArr);
    }
} catch (Exception $e) {
    echo $e;
}

?>