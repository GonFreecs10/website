<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Enter your age below</label><br>
        <input type="text" name="age"><br>
        <input type="submit" value="confirm">
    </form>
    
</body>
</html>

<?php
$age = $_POST["age"];
if($age >=18){
    echo "you may enter this site";
}
elseif($age==0){
    echo"you were just born";
}
elseif($age<=100){
    echo"you r too old ";
}
else{
    echo"you must be 18+ to enter";

}
// $adult = true;
// if($adult == true){
//     echo"you may enter this site";
// }
//     else{
//         echo"you must be an adult to enter this site";
//     }
// $adult = false;
// if($adult){
//     echo"you may enter this site";
// }
//     else{
//         echo"you must be an adult to enter this site";
//     }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><form action="index.php" method="get">
    <label>enter the amount of time you work daily</label><br>
    <input type="text" name="hours"><br>
    <input type="submit" value="confirm">
</form>
    
</body>
</html>
<?php
$hours = $_GET["hours"];
$rate = 15;
$weekly_pay = null;
if($hours <=0){
    $weekly_pay = $hours * $rate;
}
elseif($hours <= 40){
    $weekly_pay = $hours * $rate;

}
else{
    $weekly_pay = ($rate*40) + (($hours -40) *($rate * 1.5));
}
echo"u made {$weekly_pay}$ this week";
?>