<?php

    $paragraph = $_POST['paragraph'];
    $censored = $_POST['censored'];
    // var_dump($_POST);

    // mostro a schermo il paragrafo e la lunghezza

    echo $paragraph;
    echo strlen($paragraph); 
    echo "<br>";

    // mostro a schermo il paragrafo con la censura e la lunghezza
    
    $new_content = str_replace($censored, '***', $paragraph);
    echo ($new_content);
    echo strlen($new_content); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <h2><?php echo $paragraph." ".$censored; ?></h2>
</body>
</html>