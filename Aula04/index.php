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
        $c1 = new Caneta("BIC", "Azul", 0.5);
        $c1->setModelo("BIC");
        $c1->setPonta(0.5);
        print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}\n";
        echo "<br/>";

        $c2 = new Caneta("NIC", "Preta", 0.5);
        $c2->destampar();
        print_r($c2);
        $c2->rabiscar();

    ?>
    </pre>
    
</body>
</html>