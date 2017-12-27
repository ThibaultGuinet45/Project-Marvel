<?php
    class Controller {
        
        protected function validateEmail(string $email): bool {
			return (filter_var($email, FILTER_VALIDATE_EMAIL)) ? true : false;
        }
        
        
    }