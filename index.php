<?php

require('controller/controller.php');

if(isset($_GET["page"])) {
    if ($_GET["page"] == "home") {
        home();
    }
    else if ($_GET["page"] == "gallery") {
        gallery();
    }
} else 
{
    home();
}