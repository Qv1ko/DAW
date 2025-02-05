<?php
    class Resolucion {
        private $title;
        private $desc;
        private $link;

        public function __construct($title, $desc, $link) {
            $this->title = $title;
            $this->desc = $desc;
            $this->link = $link;
        }

        public function __get($item) {
            return $this->$item;
        }
    }
?>