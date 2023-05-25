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
    <?php
        $x=$_GET['x'];
        $y=10;
    ?>

    <form>
        <div class="form-group">
            <label for="formGroupExampleInput">Example label</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Another label</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
        </div>
    </form>
    Rezultatas: daugyba <?php echo $x*$y; ?>
    sudėtis <?=$x+$y; ?>
<a href="pirmas.php?x=8"
   <form>
       <input type="text" name="x">
       <input type="submit" name="Skaičiuoti">

   </form>
</body>
</html>