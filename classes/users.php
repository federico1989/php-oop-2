<?php

/** Users class
 * @author Fede User user@gmail.com
 * @copyright 2021 Fede User
 */
    class User {
        public $name;
        public $surname;
        public $age;
        public $email;

        public function __construct(string $name, string $surname, int $age, string $email)
        {
            $this->name = $name;
            $this->surname = $surname;
            $this->age = $age;
            $this->email = $email;
        }
    }
?>