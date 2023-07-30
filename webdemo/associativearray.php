<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Enter a country</label>
        <input type="text" name="country">
        <input type="submit">
    </form>
    
</body>
</html>
<?php
$capitals = array("USA"=>"Washington D.C"
,"Japan"=>"Kyoto"
,"India"=>"New Delhi",
"South Korea"=> "seoul",
);
// $capital=$capitals[$_POST["country"]];
// echo$capital;
// $capitals["USA"] = "las vegas";
// $capitals["china"] = "Beijing";
// $capitals =$_POST["country"];
// $capital = $capitals[$_POST["country"]];
// echo $capital;
// $capital = $_POST["country"];
// echo $capital;
$capital=$capitals[$_POST["country"]];
echo $capital;



// echo $capitals["USA"];
// foreach($capitals as $key=> $value){
//     echo"{$key}= {$value}<br>";
// }
// $keys = array_keys($capitals);
// foreach($keys as $key){
//     echo"{$key}<br>";
// }
// foreach($capitals as $capital=>$cap)
// {
//     echo "{$capital}=>{$cap} <br>";
// }
// $values = array_values($capitals);
// $capitals = array_flip($capitals);
// foreach($values as $value){
//     echo"{$value}<br>";
// }
// foreach($capitals as $key =>$value){
//     echo" {$key} = {$value}<br>";
// }
?>
