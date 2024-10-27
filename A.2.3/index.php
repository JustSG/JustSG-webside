<html>
<head>
<title>Witaj Świecie!</title>
<meta charset="UTF-8">
<meta name="author" content="JustSG">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style/ogolny-styl.css">
<link rel="stylesheet" href="style/gstyl.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mali:wght@600&display=swap" rel="stylesheet">
</head>
<body>

<?php
  require_once "skrypty/nav.php";
  WstawNav();
?>

<main>
  <h1>Dzień Dobry Polsko!</h1>
  <p id="info">Jest to strona głównie poświęcona zadaniom z lekcji, skryptom oraz różnym projektom.</p>
  <hr style="font-weight: 800;">
  <h2>Co zostalo zmienione?</h2>
  <p>
  <ul>
    <li>Aktualizacja w kategorii "Obywatele"</li>
    <li>Drobna aktualizacja informacji w kategorii "O Mnie"</li>
    <li>Lekkie zmiany wizualne i poprawki błędów na całej stronie</li>
    <li>Menu wyboru kategorii oraz stopka dodawane przez skrypt</li>
    <li>Uporządkowanie folderów strony</li>
  </ul>
</p>
</main>
  
<?php
  require_once "skrypty/footer.php";
  WstawFooter();
?>

</body>
</html>