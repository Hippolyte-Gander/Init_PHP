<?php

    class Personne {
        private string $nom;
        private string $prenom;
        private DateTime $datenaissance;
    
        public function __construct(string $nom, string $prenom, string $datenaissance) {
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->datenaissance = new DateTime($datenaissance);
        }
    
        
        public function getAge() : string 
        {
            $date_actuelle = new DateTime();
            $age = $this->getDatenaissance()->diff($date_actuelle);
            
            return $age->format("%Y ans");
        }

        
        public function getNom() : string
        {
                return $this->nom;
        }

       public function setNom(string $nom)
        {
                $this->nom = $nom;

                return $this;
        }

       public function getPrenom() : string
        {
                return $this->prenom;
        }

        public function setPrenom(string $prenom)
        {
                $this->prenom = $prenom;

                return $this;
        }

        public function getDatenaissance() : DateTime
        {
                return $this->datenaissance;
        }

        public function setDatenaissance($datenaissance)
        {
                $this->datenaissance = $datenaissance;

                return $this;
        }

        public function __toString() {
                return $this->prenom . " ". $this->nom. " a ". $this->getAge();
        }

        
    }


?>