<?php
    $string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
    $dico = explode("/n", $string);
    // echo "$dico";

    // exercice dictionnaire

    // echo str_word_count($string);
    if ($string <= 15) {
        echo strlen($string);
    }



 ?>
