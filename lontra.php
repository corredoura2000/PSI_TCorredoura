<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tabuadat</title>
</head>

<body>
    <?php
    $tab = 0;
    if(isset($_POST["edTABUADA"])){
        $tab = $_POST["edTABUADA"];
        if(!is_numeric($tab)){
            echo "<br>O valor introduzido não é um numero.<br>";
        }else{
        $num=0;
        while($num<=10){
            echo $num . " x " . $tab . " = " . ($num * $tab) . "<br>";
            $num++;
        }
    }
}

?>

<form method="post">
    <input type="text" name="edTABUADA" >
    <input type="submit">
</form>

</body>


</html>
