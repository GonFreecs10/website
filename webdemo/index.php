<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="index.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza">
        Pizza<br>
        <input type="checkbox" name="hamburger" value="Hamburger">
        hamburger<br>
        <input type="checkbox" name="hotdog" value="Hotdog">
        hotdog<br>
        <input type="checkbox" name="taco" value="Taco">
        taco<br>
        <input type="submit" name="submit">
    </form> -->
    <form action="index.php" method="post">
        <input type="checkbox" name="foods[]" value="Pizza">
        Pizza<br>
        <input type="checkbox" name="foods[]" value="Hamburger">
        hamburger<br>
        <input type="checkbox" name="foods[]" value="Hotdog">
        hotdog<br>
        <input type="checkbox" name="foods[]" value="Taco">
        taco<br>
        <input type="submit" name="submit">
    </form>
    
</body>
</html>

<?php
/*if(isset($_POST["submit"])){
    if(isset($_POST["pizza"])){
        echo"you like pizza <br>";
    }
    if(isset($_POST["hamburger"])){
        echo"you like hamburger <br>";
    }
    if(isset($_POST["hotdog"])){
        echo"you like hotdog <br>" ;
    }
    if(isset($_POST["taco"])){
        echo"you like taco <br>";
    }
    if(empty($_POST["pizza"])){
        echo"you  dont like pizza <br>";
    }
    if(empty($_POST["hamburger"])){
        echo"you dont like hamburger <br>";
    }
    if(empty($_POST["hotdog"])){
        echo"you dont like hotdog <br>" ;
    }
    if(empty($_POST["taco"])){
        echo"you dont like taco <br>";
    }
}*/
if(isset($_POST["submit"])){
    $foods = $_POST["foods"];
    foreach($foods as $food){
        echo $food . "<br>"; 
    }
}
?>