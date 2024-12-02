<?php

class jour {
    private  $jour,$oldjour;

    function __construct( $jour = "") {
        $this-> jour =  $jour;
       
    }


    public function getjour(){
        return $this->jour;
    }


    public function setjour($jour){
        $this->jour = $jour;
    }


    public function getoldjour(){
        return $this->oldjour;
    }


    public function setoldjour($oldjour){
        $this->oldjour = $oldjour;
    }

}
?>
