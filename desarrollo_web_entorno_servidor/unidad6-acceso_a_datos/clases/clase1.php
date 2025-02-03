<?php
    $path = "./data/modulos.txt";
    $file = fopen($path, "a+");

    $data = "dwes;9\n";

    fwrite($file, $data);

    $data = "dwec;8\n";

    fputs($file, $data);

    $data = "di;6" . PHP_EOL; // PHP_EOL es igual a \n

    fwrite($file, $data);
    fclose($file);
?>