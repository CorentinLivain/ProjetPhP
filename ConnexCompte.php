<?php

include_once("UserSite.php");

$use = new UserSite;

if ($use->getAuth($_POST["login"], $_POST["password"])) {
    echo("test ok <br />\n ");
} else {
    echo("test ko <br />\n ");
}

