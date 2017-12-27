<?php

	class LoginController {
		public function login(array $user): ?string { // Typage donnée en sortie (Null ou string);
			if(!isset($user["email"]) || !isset($user["password"])) // Verification de l'existance
				return "view/no-connect/login.php";
			if(empty(trim($user["email"])) || !empty(trim($user["password"]))) // Verification - remplie

			$email = htmlspecialchars(trim($user["email"])); // Modification balise html
			$password = strip_tags(trim($user["password"])); // Suppression des balises html php

			if(!$this->validateEmail($email)) { // verif de l'email
				return "view/no-connect/login.php";
			}

			if($email == "toto@toto.toto" && $password == "toto") { // connexion
				$_SESSION["user"] = $user;
				return "view/no-connect/index.php";
			}
			else
				return "view/no-connect/login.php";
		}

		public function validateEmail(string $email): bool {
			return (filter_var($email, FILTER_VALIDATE_EMAIL)) ? true : false;
		}

	}

?>