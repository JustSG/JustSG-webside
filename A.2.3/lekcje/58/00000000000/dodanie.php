<?php
$dzialaj = mysqli_connect('ct8.pl', 'm33870_EgzaminP', 'Komp16', 'm33870_ee09');
$nrKar = $_POST['nrKar'];
$imie1 = $_POST['imie1'];
$imie2 = $_POST['imie2'];
$imie3 = $_POST['imie3'];
$kwerenda = "INSERT INTO ratownicy (nrKaretki, ratownik1, ratownik2, ratownik3) VALUES ('$nrKar', '$imie1', '$imie2', '$imie3');";
$wykonaj = mysqli_query($dzialaj, $kwerenda);
echo "Do bazy zostało wysłane zapytanie: $kwerenda";
mysqli_close($dzialaj);
?>