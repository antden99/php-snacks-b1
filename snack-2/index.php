<?php 
//echo "ciao";

$name=$_GET["name"];
$mail=$_GET["mail"];
$age=$_GET["age"];

echo $name ." ". $mail ." " . $age . "<br>";

if(strlen($name) >= 3 && is_numeric($age) && str_contains($mail, ".") && str_contains($mail, "@")){
    echo "<div>accesso riuscito</div>";
} else {
    echo "<div>accesso non riuscito</div>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-2</title>
</head>
<body>
    <form action="" method="get">
    <input type="text" placeholder="name" name="name">
    <input type="text" placeholder="mail" name="mail">
    <input type="text" placeholder="age" name="age">
    <button type="submit">Invia form</button>
    </form>
</body>
</html>