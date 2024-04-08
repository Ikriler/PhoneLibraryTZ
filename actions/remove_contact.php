<?php

require_once("../scripts/contacts_service.php");

$name = $_POST["name"];
$phone = $_POST["phone"];

remove_contact(["name" => $name, "phone" => $phone]);

header("Location: /index.php");
