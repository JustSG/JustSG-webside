<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="number" name="liczba"><input type="submit" value="CZEK"><br>
    </form>

    <?php

    $liczba = $_POST['liczba'];
    if($liczba < 0){
        echo "Liczba jest mniejsza od zera";
    }else if($liczba == 0){
        echo "Liczba jest równa zeru";
    }else if($liczba > 0){
        echo "Liczba jest większa niż zero"."<br>";
    }
    echo "<br>";

    for($i=2; $i <= 10; $i++){
        if($i % 2){
            
        }else{
            echo $i.", ";
        }
    }
    echo "<br>";
    echo "<br>";

    $suma = 0;
    $tab = [19];
    $los = rand(1, 20);
    for($i=0; $i < 20; $i++){
        $tab[$i] = rand(1, 20);
        $suma += $tab[$i];
    }
    print_r($tab);
    echo "<br>";
    echo "Suma: ".$suma;

    echo "<br>";
    echo "<br>";

    $sumka = 0;
    $tab1 = [19];
    for($i=0; $i < 20; $i++){
        $tab1[$i] = rand(1, 3);
        if($tab1[$i] == 3){
            $sumka = $sumka + 1;
        }
    }
    print_r($tab1);
    echo "<br>";
    echo "Tablica posiada: ".$sumka;

    ?>
</body>
</html>
