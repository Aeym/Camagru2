<?php

require('controller/controller.php');

if(isset($_GET["page"])) {
    if ($_GET["page"] == "home") {
        home();
    }
    else if ($_GET["page"] == "gallery") {
        gallery();
    }
    else if ($_GET["page"] == "photo") {
        photo();
    }
    else if ($_GET["page"] == "signin") {
        signin();
    }
    else if ($_GET["page"] == "signup") {
        signup();
    }
    else if ($_GET["page"] == "account") {
        account();
    }
} else 
{
    home();
}