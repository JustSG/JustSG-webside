<!doctype html>
<head>
  <meta charset="UTF-8">
  <title>cooke</title>
  </head>
<body>
<?php
      setcookie('last_time', time(), time() + 30 * 24 * 60 * 60); // time() - bieżąca data + 30 [dni] * 24 [godziny] * 60 [minuty] * 60 [sekundy] = czas wygaśnięcia ciasteczka w sekundach
      if(isset($_COOKIE['last_time'])){
        echo("<p>Już tu byłeś, już tę stronę nawiedziłeś!</p>");
        echo("<p>Ostatnio byłeś tutaj: " . date('d.m.Y, H:i:s', $_COOKIE['last_time']) . "</p>");
      }else{
        echo("<p>Witaj w moich skromnych progach</p>");
      }
  
  
  

// Ustawienie wartości cookie
setcookie("moje_cookie", "Witaj, to jest zawartość mojego cookie!", time() + 3600); // ważne przez 1 godzinę

// Odczytanie wartości cookie, jeśli jest dostępne
if (isset($_COOKIE["moje_cookie"])) {
    $cookieValue = $_COOKIE["moje_cookie"];
    echo "Zawartość cookie: " . $cookieValue;
} else {
    echo "Cookie nie jest ustawione.";
}


?>
  
  
<!--
      setcookie('last_time', time(), time() + 30 * 24 * 60 * 60); // time() - bieżąca data + 30 [dni] * 24 [godziny] * 60 [minuty] * 60 [sekundy] = czas wygaśnięcia ciasteczka w sekundach
      if(isset($_COOKIE['last_time'])){
        echo("<p>Już tu byłeś, już tę stronę nawiedziłeś!</p>");
        echo("<p>Ostatnio byłeś tutaj: " . date('d.m.Y, H:i:s', $_COOKIE['last_time']) . "</p>");
      }else{
        echo("<p>Witaj w moich skromnych progach</p>");
      }
  
  
  


setcookie("moje_cookie", "Witaj, to jest zawartość mojego cookie!", time() + 3600); // ważne przez 1 godzinę

if (isset($_COOKIE["moje_cookie"])) {
    $cookieValue = $_COOKIE["moje_cookie"];
    echo "Zawartość cookie: " . $cookieValue;
} else {
    echo "Cookie nie jest ustawione.";
}
-->
<body>
</html>
