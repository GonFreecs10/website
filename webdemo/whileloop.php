<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post">
    <input type="submit" value="stop">
</form>
</body>
</html>
<?php
// $counter = 0;
// while($counter < 10){
//     $counter++;
//     echo $counter. "<br>";

// }
$seconds=0;
$running=true;
while($running){
    if(isset($_POST["stop"])){
        $running = false;
    }
    else{
        $seconds++;
        echo $seconds . "<br>";
    }

}
?>