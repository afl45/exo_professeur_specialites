<?php

    class Professeur {
        //attributs, arguments
        private int $code;
        private string $nom;
        private string $prenom;
        private string $mail;
        private $specialites = array();

        public function __construct($code, $nom, $prenom, $mail) {
            $this->code = $code;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->mail = $mail;
        }

        public function addSpecialite(Specialite $spe) {
            $this->specialites[] = $spe;
        }

        public function afficheSpecialites() {
            echo "Mes spécialités sont:";
            echo "<ul>";
                foreach($this->specialites as $specialite) {
                echo "<li>".$specialite->afficheSpecialite()."</li>";
                }
            echo "</ul>";
        }

        public function afficheProf() {
            echo "<p>Hola amigo, Je suis ".$this->nom." ".$this->prenom.". Mon matricule est le ".$this->code.". Tu veux me contacter pour prendre des cours, envoie moi un message sur mon adresse mail qui est la suivante: ".$this->mail.".<br>";
        }
    }
?>