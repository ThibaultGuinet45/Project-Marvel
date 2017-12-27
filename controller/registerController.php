<?php

    require_once "controller.php";

    class RegisterController extends Controller {

        public function register(array $user): ?string { // Typage donnée en sortie (Null ou string);
			if(!isset($user["email"]) || !isset($user["password"]) || !isset($user["username"])) // Verification de l'existance
				return "view/no-connect/register.php";
			if(empty(trim($user["email"])) || !empty(trim($user["password"])) !empty(trim($user["username"]))) // Verification - remplie

			$email = htmlspecialchars(trim($user["email"])); // Modification balise html
            $password = strip_tags(trim($user["password"])); // Suppression des balises html php
            $password = strip_tags(trim($user["username"]));

			if(!$this->validateEmail($email)) { // verif de l'email
				return "view/no-connect/register.php";
			}

			if($email == "toto@toto.toto" && $password == "toto") { // connexion
				$_SESSION["user"] = $user;
				return "view/no-connect/index.php";
			}
			else
				return "view/no-connect/register.php";
		}

    }