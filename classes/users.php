<?php

include_once __DIR__ . '/classes/person.php';
/** Users class
 * @author Fede User user@gmail.com
 * @copyright 2021 Fede User
 */
    class User extends Person {
        public $user_name;
        public $email;
        public $password;

        public function __construct(string $name, string $surname, int $age, string $user_name, string $email, string $password)
        {
            parent::__construct($name, $surname, $age);
            $this->user_name = $user_name;
            $this->email = $email;
            $this->password = $password;
        }
    }
?>