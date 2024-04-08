<?php

require_once("../scripts/flash_message.php");
require_once("../scripts/contacts_service.php");

$name = $_POST["name"];
$phone = $_POST["phone"];
$contact = ["name" => $name, "phone" => $phone];

if(empty($name) || empty($phone)) {
    set_message("Заполните все поля");
    header("Location: /add_contact_form.php");
} else if(!check_contact_exist($contact)){
    add_contact($contact);
    header("Location: /index.php");
} else {
    set_message("Такой контакт уже существует");
    header("Location: /add_contact_form.php");
}