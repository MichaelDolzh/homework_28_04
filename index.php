<?php
    $name ='Michael';
    $age = 22;
    const PI= 3.1415926535;
    $time = getdate();
    $img="";
    if($time[hours]>=8 and $time[hours]<=20){
        $img="day.jpg";
    }
    else{
        $img="night.jpg";
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homework 28/04/2021</title>
</head>
<body>
    <p><?php echo "Мое имя $name мне $age года"?></p>
    <p>Число PI = <?php echo PI ?></p>
    <img src="<?php echo $img?>">
</body>
</html>
