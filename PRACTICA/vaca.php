<?php
class  Vaca extends Animal{

    public  $nombre ;
    public function __construct($_nombre){

        $this ->nombre = $_nombre;

    }
     
    public function roar (){
        echo $this->nombre . "  mujido, muuuu";
    }

}
?>