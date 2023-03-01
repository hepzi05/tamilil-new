<?php
require("../variables.php");
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

    $response = file_get_contents("https://api.namecheap.com/xml.response?ApiUser=siddhamedicine&ApiKey=5ba6c202d1ce4322ba049499f3851ccf&UserName=siddhamedicine&Command=namecheap.users.create&ClientIp=59.91.155.200&newusername=bharathi573&newuserpassword=Bhar@#02&EmailAddress=bharathikannanr1999@gmail.com&FirstName=bharathi&LastName=R&AcceptTerms=1&AcceptNews=0&JobTitle=software%20developer&Organization=NC&Address1=8939%20S.%20cross%20Blvd&Address2=high%20street&City=California&StateProvince=CA&Zip=90045&Country=US&Phone=+1.6613102107&Fax=+1.6613102107");

    xml_parse_into_struct($xmlparser, $response, $values);
    xml_parser_free($xmlparser);

    if ($values[2]["tag"] == "ERROR") {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode("{status: 401, message: " . $values[2]['value'] . "}");
    } else {
        print_r($values);
    }
} catch (Exception $e) {
    echo $e;
}
