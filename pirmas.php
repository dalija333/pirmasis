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
        $y=$_GET['y'];
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

        <a href="pirmas.php?"></a>
   <form>
       <label class="p-2" for="formGroupExampleInput">x= </label><input type="text" name="x"><br>
       <label class="p-2" for="formGroupExampleInput">y= </label><input type="text" name="y"><br>
       <input class="m-2 btn btn-success" type="submit" value="Skaičiuoti">
   </form>
</body>
</html>