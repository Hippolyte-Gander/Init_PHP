<?php

class Voiture {
    protected string $marque;
    protected string $modele;
    
    public function __construct(string $marque, string $modele) {
            $this->marque = $marque;
            $this->modele = $modele;
        }
        
        public function __toString() {
            return "marque : $this->marque, modèle : $this->modele";
        }
        
        public function getInfos() {
            return "Caractéristiques : $this";
        }
        
        #début get set ------------------------
        public function getMarque(): string
        {
            return $this->marque;
        }
        
        public function setMarque(string $marque): self
        {
            $this->marque = $marque;
            
            return $this;
        }
        
        public function getModele(): string
        {
            return $this->modele;
        }
        
        public function setModele(string $modele): self
        {
            $this->modele = $modele;
            
            return $this;
        }
        #fin get set ------------------------
        
    }
    
?>