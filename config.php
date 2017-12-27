<?php
    // Définition des constantes
    define("HOSTURL", "http://localhost/POO/MVC/");
    const HOSTURLASSET = HOSTURL."asset/";
    define("BDDHOST", "localhost");
    define("BDDUSER", "root");
    define("BDDPASS", "");
    define("BDDDATABASE", "Marvel");

    const PAGE_SITE = array(
        "login" => "view/no-connect/login.php",
        "register" => "view/no-connect/register.php",
        "index" => "view/connect/index.php"
    );