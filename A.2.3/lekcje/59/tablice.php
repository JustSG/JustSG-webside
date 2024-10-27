<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tablice w php</title>
  <style>
    body{
      background-color: skyblue;
      color: #fff;
      font-family: arial;
      font-size: 36px;
      font-weight: bold;
    }
  </style>
</head>
<body> 
  <h2>Zadanie 1</h2>
  <?php
       for($i=0;$i<8;$i++){
       $tab[$i] = rand(1,100);
       }
    
    $mata = 0;
    
       for($i=0;$i<8;$i++){
       $mata = $mata + $tab[$i];
       }
       $artm = $mata / 8;
       echo "Suma wylosowanych liczb: ".$mata."<br>";
       echo "Średnia artmetyczna wylosowanych liczb: ".$artm."<br>";
    
       if($artm == 5){
        echo "JAK???????";
       }else if($artm > 5){
        echo "Średnia większa od 5";
       }else if($artm < 5){
         echo "Średnia mniejsza od 5";
       }
  ?>
  <br>
  <h2>Zadanie 2:</h2><br>
  <?php
    for($i=0;$i<10;$i++){
       $tab[$i] = rand(1,500);
    }
    echo "Liczby Parzyste oraz podzielne przez 3: <br>";
    for($i=0;$i<10;$i++){
    if($tab[$i] % 2 == 0 && $tab[$i] % 3 == 0){
      echo $tab[$i]."<br>";
    }
    }
  ?>
  
   <br>
   <h2>Zadanie 3:</h2><br>
   <?php
    for($i=0;$i<50;$i++){
       $tab[$i] = rand(1,50);
    }
    
    $ilosc = 0;
    
    echo "Liczby parzyste: ";
    echo "<h5>";
    for($i=0;$i<50;$i++){
       if($tab[$i] % 2 == 0){
         echo $tab[$i].", ";
         $ilosc += 1;
       }
    }
    echo "</h5>";
    echo "<br>";
    echo "Ilość liczb parzystych: ".$ilosc;
   ?>
  <!--
  <h2>Zadanie 1</h2>
  <php
       for($i=0;$i<8;$i++){
       $tab[$i] = rand(1,100);
       }
   
    $mata = 0;
    
       for($i=0;$i<8;$i++){
       $mata = $mata + $tab[$i];
       }
       $artm = $mata / 8;
       echo "Suma wylosowanych liczb: ".$mata."<br>";
       echo "Średnia artmetyczna wylosowanych liczb: ".$artm."<br>";
    
       if($artm == 5){
        echo "JAK???????";
       }else if($artm > 5){
        echo "Średnia większa od 5";
       }else if($artm < 5){
         echo "Średnia mniejsza od 5";
       }
  >
  <br>
  <h2>Zadanie 2:</h2><br>
  <php
    for($i=0;$i<10;$i++){
       $tab[$i] = rand(1,500);
    }
    echo "Liczby Parzyste oraz podzielne przez 3: <br>";
    for($i=0;$i<10;$i++){
    if($tab[$i] % 2 == 0 && $tab[$i] % 3 == 0){
      echo $tab[$i]."<br>";
    }
    }
  >
  
   <br>
   <h2>Zadanie 3:</h2><br>
   <php
    for($i=0;$i<50;$i++){
       $tab[$i] = rand(1,50);
    }
    
    $ilosc = 0;
    
    echo "Liczby parzyste: ";
    echo "<h5>";
    for($i=0;$i<50;$i++){
       if($tab[$i] % 2 == 0){
         echo $tab[$i].", ";
         $ilosc += 1;
       }
    }
    echo "</h5>";
    echo "<br>";
    echo "Ilość liczb parzystych: ".$ilosc;
   >
  -->
</body>
</html>