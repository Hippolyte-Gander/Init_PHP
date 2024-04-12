<?php

    class Voiture {
        private string $marque;
        private string $modele;
        private int $nbPortes;
        private string $vitesseActuelle;
        private bool $etat;


        public function __construct(string $marque, string $modele, int $nbPortes) {
            $this->marque = $marque;
            $this->modele = $modele;
            $this->nbPortes = $nbPortes;
            $this->vitesseActuelle = 0;
            $this->etat = false;
        }

        public function etatvoiture() {
            if ($this->etat) {
                $result = "démarré";
            } elseif ($this->etat == false) {
                $result = "à l'arrêt";
            } else {
                $result = "Problème";
            }
            return $result;
        }

        public function demarrer() {
            if ($this->etat) {
                $result = "Le véhicule $this est déjà démarré";
            } elseif ($this->etat == false) {
                $this->etat = true;
                $result = "Le véhicule $this démarre";
            } else {
                $result = "Erreur1";
            }
            return $result;
        }
        
        public function accelerer(int $changementvitesse) {
            if ($this->etat == true) {
                $this->vitesseActuelle = $changementvitesse;
                $result = "Le véhicule $this accélère de $changementvitesse km/h";
            } elseif ($this->etat == false) {
                $result = "Le véhicule $this veut accélerer de $changementvitesse<br>Pour accélérer, il faut démarrer le véhicule $this";
            } else {
                $result = "Erreur2";
            }
            return $result;
        }
        
        public function stopper() {
            if ($this->etat == false) {
                $result = "Le véhicule $this est déjà stoppé";
            } elseif ($this->etat == true) {
                $this->etat = false;
                $result = "Le véhicule $this est stoppé";
            } else {
                $result = "Erreur3";
            }
            return $result;
        }
        
        public function ralentir($changementvitesse) {
            if(gettype($changementvitesse) == "int") {
                if ($changementvitesse > $this->vitesseActuelle) {
                    $this->vitesseActuelle = 0;
                    $result = "Le véhicule $this s'arrête";
                } elseif ($changementvitesse < $this->vitesseActuelle) {
                    $this->vitesseActuelle = $this->vitesseActuelle - $changementvitesse;
                    $result = "Le véhicule $this ralentit de $changementvitesse km/h";
                } else {
                    $result = "Erreur4";
                }
                return $result;
            } else {
                return "veuillez saisir un entier !";
            }
            
        }


# début des get /set-----------------------------------------------------------
        public function getMarque(): string
        {
                return $this->marque;
        }

        public function setMarque($marque)
        {
                $this->marque = $marque;

                return $this;
        }

        public function getModele(): string
        {
                return $this->modele;
        }

        public function setModele($modele)
        {
                $this->modele = $modele;

                return $this;
        }

        public function getNbPortes(): int
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
                return "La vitesse du véhicule $this est de $this->vitesseActuelle km/h";
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
    
        public function setEtat(bool $etat)
        {
                $this->etat = $etat;
    
                return $this;
        }

# fin des get /set-----------------------------------------------------------

        public function getInfos() {            
            return "Nom et modèle du véhicule : $this<br>".
            "Nombre de portes : " . $this->nbPortes . "<br>" .
            "Le véhicule ". $this->marque . " est ". $this->etatvoiture() ."<br>" .
            "Sa vitesse actuelle est de : " . $this->vitesseActuelle . " km/h<br>";
        }

        public function __toString()
        {
            return "$this->marque $this->modele";
        }
    }
   
?>