<?php
 include ("gato.php");
 include("perro.php");
 include("vaca.php");


class Animal {

    public function roar(){

        echo "El";
    }
}

function RoarAnimal(Animal $_animal){

    $_animal -> roar();
}

$gato = new Gato ("Pelusa");
$perro= new perro ("Kaizer");
$Vaca= new Vaca ("Lola");

if (isset($_POST['gato'])) {
    ?>
    <script>
    var msg  = new SpeechSynthesisUtterance("<?php RoarAnimal($gato) ?>");
  window.speechSynthesis.speak(msg);
    
</script>
<?php

}

else if (isset($_POST['vaca'])){
    ?>
  <script>
    var msg  = new SpeechSynthesisUtterance("<?php RoarAnimal($Vaca) ?>");
  window.speechSynthesis.speak(msg);
    
</script>
<?php

}

else if (isset($_POST['perro'])){
    ?>
  <script>
    var msg  = new SpeechSynthesisUtterance("<?php RoarAnimal($perro) ?>");
  window.speechSynthesis.speak(msg);
    
</script>
<?php

}
for($i=65; $i<=90; $i++) {  
    $letra = chr($i);  
    echo '<a href="index.php?letra='.$letra.'">'.$letra.'</a> | ';  
}  

