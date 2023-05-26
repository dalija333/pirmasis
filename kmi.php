<?php
$x=$_POST['x'];
$y=$_POST['y'];
$kmi = round($y/(($x/100)*($x/100)), 1);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<h1>Kūno masės indeksas</h1>


<h4>Jūsų KMI: <?=$kmi ?> </h4>
<hr>
<caption>KMI svorio indekso reikšmė</caption>
<table border="1" cellpadding="5">

    <tr>
        <td>Mažiau nei 18.5</td>
        <td>Nepakankamas svoris</td>
    </tr>
    <tr>
        <td>Nuo 18.5 iki 25</td>
        <td>Normalus svoris</td>
    </tr><tr>
        <td>Nuo 25 iki 30</td>
        <td>Viršsvoris</td>
    </tr><tr>
        <td>Daugiau nei 30</td>
        <td>Nesakysiu</td>
    </tr>

</table>
<hr>
<a href="forma.php">Įvesti naujus duomenis</a>
</body>
</html>