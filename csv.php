<?php

    $email = $_POST['email'];
    $username = $_POST['username'];
    $telephone = $_POST['telephone'];

    $headers=array_keys($_POST);


    $file = $_POST['username'].date('ymdhis).".csv"; //filename
    $file = fopen($file, 'a');
    fputcsv($file, $headers);
    fputcsv($file, $_POST);
    fclose($file);


?>