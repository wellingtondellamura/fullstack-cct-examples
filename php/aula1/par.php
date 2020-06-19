<?php

$numero = $_POST['num'];

if ($numero % 2 == 0) {
    echo "O número $numero é par";
} else {
    echo "O número $numero é impar";
}

