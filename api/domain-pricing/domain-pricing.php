<?php
require("../variables.php");
$xmlparser = xml_parser_create();

$domain = $_POST["domain"];

$splitedDomain = explode('.', $domain);

if (!defined('NAMECHEAP_DOMAIN') && !defined('NAMECHEAP_APIUSER') && !defined('NAMECHEAP_APIKEY') && !defined('NAMECHEAP_CLIENTIP')) {
    echo "Config variables are missing...";
}

if (sizeof($splitedDomain) !== 2) {
    $response = array("status" => 404, "message" => "domain name not found");
    echo json_encode($response);
    exit;
}

$domain = $splitedDomain[1];

try {

    $response = file_get_contents(
        NAMECHEAP_DOMAIN . "?ApiUser=" . NAMECHEAP_APIUSER . "&ApiKey=" . NAMECHEAP_APIKEY . "&UserName=" . NAMECHEAP_APIUSER . "&ClientIp=" . NAMECHEAP_CLIENTIP . "&Command=namecheap.users.getPricing&ProductName=$domain&ProductType=DOMAIN&ProductCategory=DOMAINS&ActionName=REGISTER"
    );

    xml_parse_into_struct($xmlparser, $response, $values);
    xml_parser_free($xmlparser);

    if ($values[2]["tag"] == "ERROR") {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode("{status: 401, message: " . $values[2]['value'] . "}");
    } else {
        $data = array("year1" => $values[12]["attributes"], "year2" => $values[14]["attributes"], "year3" => $values[16]["attributes"], "year4" => $values[18]["attributes"], "year5" => $values[20]["attributes"]);
        echo json_encode($data);
    }
} catch (Exception $e) {
    echo "error\n";
    print_r($e);
}
