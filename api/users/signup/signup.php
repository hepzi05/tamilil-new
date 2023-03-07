<?php
require("../../variables.php");
$xmlparser = xml_parser_create();

define("NAMECHEAP_COMMAND", "namecheap.users.create");

$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$acceptTerms = $_POST["acceptTerms"];
$acceptNews = $_POST["acceptNews"];
$jobtitle = $_POST["jobtitle"];
$organization = $_POST["organization"];
$address1 = $_POST["address1"];
$address2 = $_POST["address2"];
$city = $_POST["city"];
$state = $_POST["state"];
$zipcode = $_POST["zipcode"];
$country = $_POST["country"];
$phone = $_POST["phone"];
$fax = $_POST["fax"];

if (!defined("NAMECHEAP_DOMAIN") && !defined("NAMECHEAP_APIUSER") && !defined("NAMECHEAP_APIKEY") && !defined("NAMECHEAP_CLIENTIP")) {
    echo json_encode("{status: 404, message: 'Environment variables are missing!'}");
}

try {

    $response = file_get_contents(NAMECHEAP_DOMAIN . "?ApiUser=" . NAMECHEAP_APIUSER . "&ApiKey=" . NAMECHEAP_APIKEY . "&UserName=" . NAMECHEAP_APIUSER . "&Command=namecheap.users.create&ClientIp=" . NAMECHEAP_CLIENTIP . "&newusername=$username&newuserpassword=$password&EmailAddress=$email&FirstName=$firstname&LastName=$lastname&AcceptTerms=$acceptTerms&AcceptNews=$acceptNews&JobTitle=$jobtitle&Organization=$organization&Address1=$address1&Address2=$address2&City=$city&StateProvince=$state&Zip=$zipcode&Country=$country&Phone=$phone&Fax=$fax");

    // echo NAMECHEAP_DOMAIN . "?ApiUser=" . NAMECHEAP_APIUSER . "&ApiKey=" . NAMECHEAP_APIKEY . "&UserName=" . NAMECHEAP_APIUSER . "&Command=namecheap.users.create&ClientIp=" . NAMECHEAP_CLIENTIP . "&newusername=$username&newuserpassword=$password&EmailAddress=$email&FirstName=$firstname&LastName=$lastname&AcceptTerms=$acceptTerms&AcceptNews=$acceptNews&JobTitle=$jobtitle&Organization=$organization&Address1=$address1&Address2=$address2&City=$city&StateProvince=$state&Zip=$zipcode&Country=$country&Phone=$phone&Fax=$fax";

    xml_parse_into_struct($xmlparser, $response, $values);
    xml_parser_free($xmlparser);

    // print_r($values);

    if ($values[2]["tag"] == "ERROR") {
        header('Content-Type: application/json; charset=utf-8');
        $arr = array("status" => 401, "message" => $values[2]['value']);
        echo json_encode($arr);
    } else {
        echo json_encode($values);
    }
} catch (Exception $e) {
    // print_r($e);
    echo $e;
}

?>