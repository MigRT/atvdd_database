<?php

$connect = new mysqli('localhost', 'root', '');

$mostrar = $connect -> query("SHOW DATABASES");

while($row = mysqli_fetch_array($mostrar)){
    print_r($row[0]);
    echo "</br>";
}
?>