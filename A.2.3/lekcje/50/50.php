<!DOCTYPE html>
<html>
<head>
    <title>Formularz PHP</title>
</head>
<body>

<?php
$imie = $wiek = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["imie"]) || empty($_POST["wiek"]) || empty($_POST["numer"])) {
        echo "Proszę wypełnić wszystkie pola.";
    } else {
        $imie = test_input($_POST["imie"]);
        $wiek = test_input($_POST["wiek"]);
        $numer = test_input($_POST["numer"]);

        echo "Twoje imię: $imie<br>";
        echo "Twój wiek: $wiek<br>";
        echo "Twój numer buta: $numer";
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>Formularz PHP</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Imię: <input type="text" name="imie">
    <br><br>
    Wiek: <input type="text" name="wiek">
    <br><br>
    Numer buta: <input type="text" name="numer">
    <br><br>
    <input type="submit" name="submit" value="Wyślij">
</form>

<!--
$imie = $wiek = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["imie"]) || empty($_POST["wiek"]) || empty($_POST["numer"])) {
        echo "Proszę wypełnić wszystkie pola.";
    } else {
        $imie = test_input($_POST["imie"]);
        $wiek = test_input($_POST["wiek"]);
        $numer = test_input($_POST["numer"]);

        echo "Twoje imię: $imie<br>";
        echo "Twój wiek: $wiek<br>";
        echo "Twój numer buta: $numer";
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
-->
</body>
</html>
