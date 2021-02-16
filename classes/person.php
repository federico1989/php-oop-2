<?php


/** Users class
 * @author Fede User user@gmail.com
 * @copyright 2021 Fede User
 */
    class Person {
        public $name;
        public $surname;
        public $age;

        public function __construct(string $name, string $surname, int $age)
             {
                 $this->name = $name;
                 $this->surname = $surname;
                 $this->age = $age;
             }
    }
?>