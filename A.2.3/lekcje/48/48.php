<!doctype html>
<head>
  <meta charset="UTF-8">
  <title>Tabliczka mnożenia</title>
</head>
<body>

  <?php
    echo '<table style="width:300px; height:300px; border: 2px solid black; text-align: center; border-collapse: collapse;">';
    for ($i=1;$i<=10;$i++)
         {
           echo '<tr style="">';
           for ($j=1;$j<=10;$j++)
                {
                  echo '<td style="border: 2px solid black; border-collapse: collapse;">'.($i*$j)."</td>";
                }
           echo "</tr>";
          }
    echo "</table>";
  ?>
<!--
    echo '<table style="width:300px; height:300px;">';
    for ($i=1;$i<=10;$i++)
         {
           echo "<tr>";
           for ($j=1;$j<=10;$j++)
                {
                  echo "<td>".($i*$j)."</td>";
                }
           echo "</tr>";
          }
    echo "</table>";
-->
</body>
</html>
