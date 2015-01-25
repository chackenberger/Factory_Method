<?php

include_once("Element.php");
include_once("ElementFactory.php");
include_once("XMLAdapter.php");
include_once("XMLDsn.php");
include_once("XMLFactory.php");
include_once("XMLPassword.php");
include_once("XMLUser.php");
include_once("YamlAdapter.php");
include_once("YamlDsn.php");
include_once("YamlFactory.php");
include_once("YamlPassword.php");
include_once("YamlUser.php");

$factoryArg = $argv[1];
$dbhost = $argv[2];
$dbuser = $argv[3];
$dbpass = $argv[4];
$dbname = $argv[5];

switch($factoryArg) {
    case "xml": $factory = new XMLFactory(); break;
    case "yaml": $factory = new YamlFactory(); break;
}

$db = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
$sql = "SELECT * FROM factory";
$res = $db->query($sql);
while($row = $res->fetch_assoc()) {
    echo $factory->getElement($row["type"],$row["val"])->toString();
}