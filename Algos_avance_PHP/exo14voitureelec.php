<?php

    class VoitureElec extends Voiture {
        private int $autonomie;

        public function __construct(string $marque, string $modele, int $autonomie) {
            parent::__construct($marque, $modele);
            $this->autonomie = $autonomie;
        }

        public function __toString() {
            return parent::__toString().", autonomie : ".$this->autonomie . " km";
        }

    }







?>