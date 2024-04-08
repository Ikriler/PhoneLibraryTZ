<?php

session_start();

function show_message() 
{
    $message = $_SESSION["flash"] ?? "";
    if (!empty($message)) {
        echo $message;
        unset($_SESSION["flash"]);
    }
}

function set_message($message) 
{
    $_SESSION['flash'] = $message;
}