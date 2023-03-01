<?php
require("../variables.php");
$xmlparser = xml_parser_create();

$domain = $_POST["domain"];
$year = $_POST["year"];
$promotionCode = $_POST["promotionCode"];
$billingFirstname = $_POST["billingFirstname"];
$billingLastname = $_POST["billingLastname"];
$AuxBillingAddress1 = $_POST["AuxBillingAddress1"];
$billingStateCode = $_POST["billingStateCode"];
$billingPostalCode = $_POST["billingPostalCode"];
$billingCountry = $_POST["billingCountry"];
$AuxBillingPhone = $_POST["AuxBillingPhone"];
$AuxBillingEmailAddress = $_POST["AuxBillingEmailAddress"];
$AuxBillingCity = $_POST["AuxBillingCity"];
$TechFirstName = $_POST["TechFirstName"];
$TechLastName = $_POST["TechLastName"];
$TechAddress1 = $_POST["TechAddress1"];
$TechStateProvince = $_POST["TechStateProvince"];
$AdminPostalCode = $_POST["AdminPostalCode"];
$AdminCountry = $_POST["AdminCountry"];
$AdminPhone = $_POST["AdminPhone"];
$AdminEmailAddress = $_POST["AdminEmailAddress"];
$AdminOrganizationName = $_POST["AdminOrganizationName"];
$AdminCity = $_POST["AdminCity"];
$RegistrantFirstName = $_POST["RegistrantFirstName"];
$RegistrantLastName = $_POST["RegistrantLastName"];
$RegistrantAddress1 = $_POST["RegistrantAddress1"];
$RegistrantStateProvince = $_POST["RegistrantStateProvince"];
$RegistrantPostalCode = $_POST["RegistrantPostalCode"];
$RegistrantCountry = $_POST["RegistrantCountry"];
$RegistrantPhone = $_POST["RegistrantPhone"];
$RegistrantEmailAddress = $_POST["RegistrantEmailAddress"];
$RegistrantOrganizationName = $_POST["RegistrantOrganizationName"];
$RegistrantCity = $_POST["RegistrantCity"];
$AddFreeWhoisguard = $_POST["AddFreeWhoisguard"];
$WGEnabled = $_POST["WGEnabled"];
$GenerateAdminOrderRefId = $_POST["GenerateAdminOrderRefId"];
$IsPremiumDomain = $_POST["IsPremiumDomain"];
$PremiumPrice = $_POST["PremiumPrice"];


if (!defined('NAMECHEAP_DOMAIN') && !defined('NAMECHEAP_APIUSER') && !defined('NAMECHEAP_APIKEY') && !defined('NAMECHEAP_CLIENTIP')) {
    echo "Config variables are missing...";
}

try {

    $response = file_get_contents(
        NAMECHEAP_DOMAIN . "?ApiUser=" . NAMECHEAP_APIUSER . "&ApiKey=" . NAMECHEAP_APIKEY . "&UserName=" . NAMECHEAP_APIUSER . "&ClientIp=" . NAMECHEAP_CLIENTIP . `&Command=namecheap.domains.create&
        DomainName=$domain&
        Years=1&
        PromotionCode=$promotionCode&
        AuxBillingFirstName=$billingFirstname&
        AuxBillingLastName=$billingLastname&
        AuxBillingAddress1=$billingAddress&
        AuxBillingStateProvince=$billingStateCode&
        AuxBillingPostalCode=$billingPostalCode&
        AuxBillingCountry=$billingCountry&
        AuxBillingPhone=$billingPhone&
        AuxBillingEmailAddress=$billingEmailAddress&
        AuxBillingOrganizationName=$billingOrganizationName&
        AuxBillingCity=$billingCityCode&
        TechFirstName=$techUserFirstname&
        TechLastName=$techUserLastname&
        TechAddress1=$techUserAddress&
        TechStateProvince=$techUserStateCode&
        TechPostalCode=$techUserPostalCode&
        TechCountry=$techUserCountry&
        TechPhone=$techUserPhone&
        TechEmailAddress=$techUserEmail&
        TechOrganizationName=$techUserOrganization&
        TechCity=$techUserCity&
        AdminFirstName=$billingFirstname&
        AdminLastName=$billingLastname&
        AdminAddress1=$billingAddress&
        AdminStateProvince=$billingStateCode&
        AdminPostalCode=$billingPostalCode&
        AdminCountry=$billingCountry&
        AdminPhone=$billingPhone&
        AdminEmailAddress=$billingEmailAddress&
        AdminOrganizationName=$billingOrganizationName&
        AdminCity=$billingCityCode&
        RegistrantFirstName=$registrantFirstname&
        RegistrantLastName=$registrantLastname&
        RegistrantAddress1=$registrantAddress1&
        RegistrantStateProvince=$registrantStateCode&
        RegistrantPostalCode=$registrantPostalCode&
        RegistrantCountry=$registrantCountry&
        RegistrantPhone=$registrantPhone&
        RegistrantEmailAddress=$registrantEmailAddress&
        RegistrantOrganizationName=$registrantOrganization&
        RegistrantCity=$registrantCity&
        AddFreeWhoisguard=$isWhoIsGuard&
        WGEnabled=no&
        GenerateAdminOrderRefId=False&
        IsPremiumDomain=$isPremiumDomain&
        PremiumPrice=$premiumDomainPrice&`
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
