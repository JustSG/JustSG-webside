<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
      $a=6;
      $b=5;
      
      echo "a = ".$a."<br>";
      echo "b = ".$b."<br>";

      echo "<br>";

      echo 'operator "=" : '.($a = $b).'<br>';
      echo 'operator "+=" : '.($a += $b).'<br>';
      echo 'operator "-=" : '.($a -= $b).'<br>';
      echo 'operator "*=" : '.($a *= $b).'<br>';
      echo 'operator "/=" : '.($a /= $b).'<br>';
      echo 'operator "%=" : '.($a %= $b).'<br>';
      echo 'operator "!=" : '.($a != $b).'<br>';
      echo 'operator "|=" : '.($a |= $b).'<br>';
      echo 'operator "&=" : '.($a &= $b).'<br>';
      echo 'operator "^=" : '.($a ^= $b).'<br>';
      echo 'operator "<<=" : '.($a <<= $b).'<br>';
      echo 'operator ">>=" : '.($a >>= $b).'<br>';
    ?>
  <!-- $a=6;
      $b=5;
      
      echo $a = $b;
      echo $a += $b;
      echo $a -= $b;
      echo $a *= $b;
      echo $a /= $b;
      echo $a %= $b;
      echo $a != $b;
      echo $a |= $b;
      echo $a &= $b;
      echo $a ^= $b;
      echo $a <<= $b;
      echo $a >>= $b;-->
</body>
</html>