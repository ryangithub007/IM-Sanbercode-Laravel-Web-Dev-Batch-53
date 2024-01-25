<?php
    class Animal {
        public $legs = 4;
        public $cold_blooded = "no";
        public $binatang;

        public function __construct($nama) {
            $this->binatang = $nama;
        }
    }

?>