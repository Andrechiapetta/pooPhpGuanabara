<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Aula 03 - POO</title>
</head>
<body>
    <pre>
    <?php
        require_once 'Caneta.php';
        $c1 = new Caneta;
        $c1->cor = "Azul";
        $c1->modelo ="BIC cristal";
        print_r($c1);
        $c1->rabiscar();      
    ?>
    </pre>
    
</body>
</html>