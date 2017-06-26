<?php
    $string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
    $dico = explode("/n", $string);
    // echo "$dico";

    // exercice dictionnaire

    echo " le dictionnaire contient ". count($string). " mots";

    echo "<br> il y a ". substr_compare($string, $string, 15). " mots qui contient 15 caractères";

    echo "<br> il y a " . substr_count($string, 'w'). " mots qui contient la lettre w";



 ?>
