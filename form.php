<?php

$name = htmlspecialchars($_POST['name']);

if (!empty($name)) {
    $toStr = explode(" ", $name);
    foreach ($toStr as $key => $velue) {
            if (is_numeric($velue)) {
                echo "В графе ввода выявлен числовой тип $velue";
            } else {
                echo $velue . "<br>";
            }
        }
    }




?>  