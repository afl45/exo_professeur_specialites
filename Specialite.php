<?php

    class Specialite {
        private $code;
        private string $libelle;

        public function __construct($code, $libelle) {
            $this->code = $code;
            $this->libelle = $libelle;
        }

        public function afficheSpecialite() {
            return $this->code." ".$this->libelle;
        }
    }

?>