<?php

    class Voiture {
        private string $marque;
        private string $modele;
        private int $nbPortes;
        private string $vitesseActuelle;
        private string $etat;


        public function __construct(string $marque, string $modele, int $nbPortes) {
            $this->marque = $marque;
            $this->modele = $modele;
            $this->nbPortes = $nbPortes;
            $this->vitesseActuelle = 0;
            $this->etat = false;
        }

        public function etatvoiture() {
            if ($this->etat == true) {
                $result = "démarré";
            } elseif ($this->etat == false) {
                $result = "à l'arrêt";
            } else {
                $result = "Problème";
            }
            return $result;
        }

        public function demarrer() {
            if ($this->etat == true) {
                $result = "Le véhicule $this->marque $this->modele est déjà démarré";
            } elseif ($this->etat == false) {
                $this->etat = true;
                $result = "Le véhicule $this->marque $this->modele démarre";
            } else {
                $result = "Erreur1";
            }
            return $result;
        }
        
        public function accelerer($acceleration) {
            if ($this->etat == true) {
                $this->vitesseActuelle = $acceleration;
                $result = "Le véhicule $this->marque $this->modele accélère de $acceleration km/h";
            } elseif ($this->etat == false) {
                $result = "Le véhicule $this->marque $this->modele veut accélerer de $acceleration<br>Pour accélérer, il faut démarrer le véhicule $this->marque $this->modele";
            } else {
                $result = "Erreur2";
            }
            return $result;
        }
        
        public function stopper() {
            if ($this->etat == false) {
                $result = "Le véhicule $this->marque $this->modele est déjà stoppé";
            } elseif ($this->etat == true) {
                $this->etat = false;
                $result = "Le véhicule $this->marque $this->modele est stoppé";
            } else {
                $result = "Erreur3";
            }
            return $result;
            }
# début des get /set-----------------------------------------------------------
        public function getMarque()
        {
                return $this->marque;
        }

        public function setMarque($marque)
        {
                $this->marque = $marque;

                return $this;
        }

        public function getModele()
        {
                return $this->modele;
        }

        public function setModele($modele)
        {
                $this->modele = $modele;

                return $this;
        }

        public function getNbPortes()
        {
                return $this->nbPortes;
        }

        public function setNbPortes($nbPortes)
        {
                $this->nbPortes = $nbPortes;

                return $this;
        }

        public function getVitesseActuelle()
        {
                return $this->vitesseActuelle;
        }
// Pour simplifier le phrasage :
        public function getphraseVitesseActuelle()
        {
                return "La vitesse du véhicule $this->marque $this->modele est de $this->vitesseActuelle km/h";
        }

        public function setVitesseActuelle($vitesseActuelle)
        {
                $this->vitesseActuelle = $vitesseActuelle;

                return $this;
        }

        public function getEtat()
        {
                return $this->etat;
        }
    
        public function setEtat($etat)
        {
                $this->etat = $etat;
    
                return $this;
        }

# fin des get /set-----------------------------------------------------------

        public function __toString() {
            return "Nom et modèle du véhicule : ". $this->marque ." ". $this->modele. "<br>".
            "Nombre de portes : " . $this->nbPortes . "<br>" .
            "Le véhicule ". $this->marque . " est ". $this->etatvoiture() ."<br>" .
            "Sa vitesse actuelle est de : " . $this->vitesseActuelle . " km/h<br>";
    }




    
    }








?>