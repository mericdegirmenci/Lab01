<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winner-Loser</title>
</head>
<body>


<?php

foreach($_POST as $contestant => $winlose){
    $winlose = rand(0,1);
    echo $_POST[$contestant]. "is a "; if($winlose){ echo "winner";}else{echo "loser";} echo "</br>";
}

?>
    
</body>
</html>