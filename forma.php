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
<p></p>
<h5>Įveskite savo duomenis</h5>
<form action="kmi.php" method="post">
    <label class="p-2" for="formGroupExampleInput">Ūgis: </label><input type="text" name="x" placeholder="cm"><br>
    <label class="p-2" for="formGroupExampleInput">Svoris </label><input type="text" name="y" placeholder="kg"><br>
    <input class="m-2 btn btn-success" type="submit" value="Skaičiuoti">
</form>

</body>