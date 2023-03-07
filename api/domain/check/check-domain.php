<?php
require("../../variables.php");
$xmlparser = xml_parser_create();

$domain = $_POST["domain"];

$splitedDomain = explode('.', $domain);

if (sizeof($splitedDomain) !== 2) {
    $response = array("status" => 404, "message" => "domain name not found");
    echo json_encode($response);
    exit;
}

$domain .= "," . $splitedDomain[0] . ".com,";
$domain .= $splitedDomain[0] . ".net,";
$domain .= $splitedDomain[0] . ".org,";
$domain .= $splitedDomain[0] . ".us,";
$domain .= $splitedDomain[0] . ".eu,";
$domain .= $splitedDomain[0] . ".co.uk";

if (!defined('NAMECHEAP_DOMAIN') && !defined('NAMECHEAP_APIUSER') && !defined('NAMECHEAP_APIKEY') && !defined('NAMECHEAP_CLIENTIP')) {
    echo "Config variables are missing...";
    exit;
}

try {

    $response = file_get_contents(
        NAMECHEAP_DOMAIN . "?ApiUser=" . NAMECHEAP_APIUSER . "&ApiKey=" . NAMECHEAP_APIKEY . "&UserName=" . NAMECHEAP_APIUSER . "&ClientIp=" . NAMECHEAP_CLIENTIP . "&Command=namecheap.domains.check&DomainList=$domain"
    );

    xml_parse_into_struct($xmlparser, $response, $values);
    xml_parser_free($xmlparser);

    if ($values[2]["tag"] == "ERROR") {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode("{status: 401, message: " . $values[2]['value'] . "}");
    } else {
        $data = array("in" => $values[8]["attributes"], "com" => $values[10]["attributes"], "net" => $values[12]["attributes"], "org" => $values[14]["attributes"], "us" => $values[16]["attributes"], "eu" => $values[18]["attributes"], "co.uk" => $values[20]["attributes"]);

        echo json_encode($data, true);
    }
} catch (Exception $e) {
    echo $e;
}

?>