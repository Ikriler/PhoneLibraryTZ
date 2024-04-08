<?php

$json_path = $_SERVER["DOCUMENT_ROOT"] . "/data/contacts.json";

function get_contacts()
{
    global $json_path;
    $json_file = file_get_contents($json_path);
    $contacts = json_decode($json_file, true);
    return $contacts;
}

function save_contacts($json_data)
{
    global $json_path;
    file_put_contents($json_path, json_encode($json_data));
}

function add_contact($contact)
{
    $contacts = get_contacts();
    $contacts[] = $contact;
    save_contacts($contacts);
}

function remove_contact($contact)
{
    $contacts = get_contacts();
    $key = array_search($contact, $contacts);
    unset($contacts[$key]);
    save_contacts($contacts);
}

function check_contact_exist($contact)
{
    $contacts = get_contacts();
    if(array_search($contact, $contacts)) {
        return true;
    }
    return false;
}