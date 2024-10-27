<!DOCTYPE html>
<html>
<head>
    <title>Formularz logowania</title>
</head>
<body>
  
    <h2>Formularz logowania</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="login">Login:</label>
        <input type="text" name="login" required><br><br>
      
        <label for="mail">E-mail:</label>
        <input type="text" name="mail" required><br><br>

        <label for="password">Hasło:</label>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Zaloguj">
    </form>
    <?php
    $servername = "mysql.ct8.pl";
    $username = "m33870_JustSG";
    $password = "Komp16";
    $dbname = "m33870_bazia";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Nieudane połączenie z bazą danych: " . mysqli_connect_error());
    }
    else
     {
       echo "Udało się połączyć z bazą danych!!! :D<br>";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $login = $_POST["login"];
          $mail = $_POST["mail"];
          $password = $_POST["password"];
          
          $sql = "SELECT * FROM users_dane WHERE login='$login' AND mail='$mail' AND password='$password'";
          $result = mysqli_query($conn, $sql);

          if (mysqli_num_rows($result) == 1)
          {
               echo "Zalogowano pomyślnie! :D";
               // tutaj można przekierować użytkownika do innej strony
          } 
             else 
             {
              echo "Niepoprawny login lub hasło >:(";
             }
       }
    }
    mysqli_close($conn);
    ?>
  <br>
  <br>
  <br>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <b>Login:</b> <input type="text" name="login"><br><br>
    <b>Email:</b> <input type="text" name="mail"><br>
    <b>Hasło:</b> <input type="password" name="pasword"><br>
    <input type="submit" value="Utwórz konto" name="rejestruj">
</form>
  <?php
    function filtruj($zmienna)
    {
        if(get_magic_quotes_gpc())
            $zmienna = stripslashes($zmienna);
        
        return mysql_real_escape_string(htmlspecialchars(trim($zmienna)));
    }
    
    if (isset($_POST['rejestruj']))
    {
        $login = filtruj($_POST['login']);
        $email = filtruj($_POST['email']);
        $password = filtruj($_POST['haslo1']);
        
        if (mysql_num_rows(mysql_query("SELECT login FROM users_dane WHERE login = '".$login."';")) == 0)
        {
            if ($haslo1 == $haslo2)
            {
                mysql_query("INSERT INTO `users_dane` (`login`, `mail`, `password')
                    VALUES ('".$login."', '".md5($pasword)."', '".$email."');");
                
                echo "Konto zostało utworzone!";
            }
            else echo "Hasła nie są takie same";
        }
        else echo "Podany login jest już zajęty.";
    }
?>
</body>
</html>
