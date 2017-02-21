<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta cAula02 POOharset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        require_once 'caneta.php';
        $c1 = new Caneta();
        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        $c1->tampada = false;
        $c1->destampar();
        print_r($c1);
        echo '</br>';
        
        $c2 = new Caneta;
        $c2->cor = "vermelha";
        $c2->carga = 50;
        $c2->tampar();
        print_r($c2);
        
       
        
        //print_r($c1);
        ?>
    </body>
</html>
