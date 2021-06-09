<?php
    include 'meteo.class.php';


    class salut extends meteo{

        /**
         * salut extends meteo
         * 
         * 
         * return json_encode($phrase);
         */

        public function salutation($reponse){
            
            $prenom = $reponse;
            $bonjour = $this->bonjour();            
            $soleil = $this->soleil();

            $phrase = $bonjour.' '.$prenom.' '.$soleil;

            return json_encode($phrase);
        }
    }

?>