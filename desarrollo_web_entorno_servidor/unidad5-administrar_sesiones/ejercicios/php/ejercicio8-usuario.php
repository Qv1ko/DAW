<?php
    class Usuario {
        private $name;
        private $password;

        public function __construct(string $name, string $pass) {
            $this->name = $name;
            $this->password = $pass;
        }

        public function __get(string $item): mixed {
            return $this->$item;
        }
    }
?>