<?php
    include 'hello.class.php';

    

    class meteo extends hello {
        
        /**
         * Meteo extends hello.class.php
         * 
         * $meteo = "il fait beau aujourd'hui";
         * 
         * return $meteo
         */
        
         public function soleil(){
            
            $meteo = "il fait beau aujourd'hui";

            return $meteo;
        }

    }
?>