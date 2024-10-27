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
        <input type="number" name="liczba1"> <input type="number" name="liczba2"><input type="submit" value="MIN I MAX"><br>
        <input type="number" name="ocena"><input type="submit" value="ZDAŁEŚ?">
    </form>

    <?php
    $liczba = $_POST['liczba'];
    if(empty($_POST["liczba"])){
        echo "niepodano liczby";
    }else if($liczba > 50 && $liczba < 100){
        echo "liczba od 50 do 100";
    }else if($liczba > 100){
        echo "liczba od 100 do nieskonczoności";
    }else if($liczba >= 0 && $liczba < 50){
        echo "liczba od 0 do 50";
    }


    $liczba1 = $_POST['liczba1'];
    $liczba2 = $_POST['liczba2'];
    
    
    if($liczba2 > $liczba1){
        $min = 0;
        $maks = 0;
        $min = $liczba1;
        $maks = $liczba2;
        echo '<br>'."Max: ".$maks." || Min: ".$min;
    }if($liczba2 < $liczba1){
        $min = 0;
        $maks = 0;
        $min = $liczba2;
        $maks = $liczba1;
        echo '<br>'."Max: ".$maks." || Min: ".$min;
    }else if($liczba1 == $liczba2){
        echo '<br>'."Obie liczby są sobie równe";
    }

    $ocena = $_POST['ocena'];
    switch ($ocena){
     case "1":
       echo '<br>'."Nie zdałeś";
       break;
     case "2":
     case "3":
     case "4":
     case "5":
       echo '<br>'."zdałeś";
      break;
     case "6":
       echo '<br>'."no mega zdałeś";
       break;
      default:
     echo '<br>'."wpisz";
}
    ?>
</body>
</html>