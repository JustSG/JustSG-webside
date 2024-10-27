<html>
<head>
<title>Notka</title>
<meta charset="UTF-8">
</head>
<body>
<div>
W każdym procesie tworzenia oprogramowania można wyróżnić etapy, takie jak:<br>
<ol type="1">
<li>Planowanie</li>
<li>Implementacja</li>
<li>Kompilacja</li>
<li>Konsolicacja</li>
<li>Testowanie</li>
<li>Wdrażanie i optymalizacja</li>
<li>Użdykowanie i ewaluacja</li>
</ol>
</div> 
  <style>
    *{
    font-weight: 800;
    color: #fff;
    width:500px;
    margin: 0 auto;
    margin-bottom: 20px;
    }
    #skr{
    text-align: center;
    margin-bottom: 20px;
    }
    html{
    background-color: skyblue;
    font-family: sans-serif;
    }
    div{
    margin: 0 auto;
    width:300px;
    height: 300px;
    margin-top: 40px;
    font-weight: 800;
    color: #fff;
    }
  </style>
<br>
<br>
<hr style="background-color: #fff;">
<div id="skr">
<?php
$fp = fopen("tekst.txt", "r");
echo fread($fp,10000)
?>
</div>
</body>
</html>
