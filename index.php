<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <? 

        $name = "mohsen";
        $five = 5 ;
        $one = 1 ;
        echo "salam be to ". $name ." yare ghadimi <br>";
        echo $one + $five . " salam be ashraf makhlooghat " . 5+8;
        function textfunc(){
            echo "<hr>".$GLOBALS['five'];
        }
        textfunc();
    ?>
</body>
</html>