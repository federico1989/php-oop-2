<?php

/** Users class
 * @author Fede User user@gmail.com
 * @copyright 2021 Fede User
 */
    class User {
        public $user_name;
        public $email;
        public $password;

        public function __construct(string $user_name, string $email, string $password)
        {
            $this->user_name = $user_name;
            $this->email = $email;
            $this->password = $password;
        }
    }
?>