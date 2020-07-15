<!-- Passare come parametri GET name, mail e age e verificare
(cercando i metodi che non conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
  $name = $_GET['name'];
  $mail = $_GET['mail'];
  $age = $_GET['age'];

  if(empty($name) || empty($mail) || empty($age)){
    echo "Errore, accesso negato";
  } elseif(strlen($name) <= 3){
    echo "Errore, accesso negato";
  } elseif(strpos($mail, @ ) === false || (strpos($mail, '.' ) === false){
    echo "Errore, accesso negato";
  } elseif(!is_numeric($age)){
    echo "Errore, accesso negato";
  }else{
    echo "Accesso Riuscito";
  }
  ?>
