<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $nilai=85;
        
        if($nilai >= 90) {
            $grade ="sangat baik";
        }else if($nilai >=80){
            $grade ="baik";
        }else if($nilai >= 70){
            $grade ="cukup";
        }else if($nilai >= 50){
            $grade ="kurang";
        }else if($nilai >= 0){
            $grade ="sangat kurang";
        }
    
    echo ("nilai produktif rpl ". $nilai." adalah $grade");
    
    ?>
</body>
</html>