<?php

    include_once 'biblioteca.php';
    
    echo "Hello new World <br><br>";
    // define($line, '<br><br>----------------------------<br><br>');

    $a = false;
    $b = "<br>";
    $line = '<br><br>----------------------------<br><br>';

    print($line);
    // ----------------------------------------------------------
    /*Exemplo de funcao recursiva, na qual podemos dizer simplificadamente
    que a função "SE AUTO CHAMA" conforme a necessidade*/

    print(fatorial(5));

    function fatorial($num)
    {
        if ($num == 1)
        {
            return $num;
        }
        else
        {
            return $num * fatorial($num - 1);
        }
    }



    print($line);
    // ----------------------------------------------------------
    /*Obtem a quantidade de parâmetros que foi passado para a funcao
    independente da quantidade e do que se foi passado*/


    function ola()
    {
        $args = func_get_args();
        $amount = func_num_args();

        print("Quantidade: $amount <br>");

        for ($i = 0; $i < $amount; $i++)
        {             
            print($args[$i] . "<br>");
        }
    }

    ola('Juca', 'Rosa', 'Maria', 'José', 'Pedro', 'vidalvina', '123.34');


    print($line);
    // ----------------------------------------------------------
    /*Funcao passada 'by reference' onde a variavel é atualizada mesmo
    quando estiver fora da função (como se fosse um ponteiro)*/

    function incrementa(&$var, $value) //para "by reference" basta colocar o & antes da variavel
    {
        $var += $value;
        return $var;
    }

    $i = 10;

    incrementa($i, 20); //agora o "$i" não vale mais 10

    print($i);

    print($line);
    // ----------------------------------------------------------

    print(km(100) . $b);    
    print(km(100) . $b);
    print(km(400) . $b);
    

    function km($km)
    {
        static $total;
        $total += $km;

        return $km;
    }

    // print($total);

    print($line);
    // ----------------------------------------------------------
    //imprimir diretamente o valor retornado

    print(soma(2, 4, 6));

    function soma($num1, $num2, $num3)
    {
        return $num1 + $num2 + $num3;
    }

    print($line);
    // ----------------------------------------------------------

    print(square(4));

    print($line);
    // ----------------------------------------------------------
    //montando array

    $vet = array('maça', 'laranja', 'banana', 'pera', 'abacaxi');

    foreach ($vet as $key => $value) //vetor, chave e o valor contido na chave
    {
        if ($value == 'pera')
        {
            print("$key - $value");
        }
        // print("$key . $value - ");
    }

    print($line);
    // ----------------------------------------------------------

    foreach ($vet as $value) //vetor e o valor contido naquela posicao do vetor
    {
        print("$value - ");
    }

    
    print($line);
    // ----------------------------------------------------------
    //FOR normal igual ao java

    for ($i=0; $i < 10; $i++)
    { 
        print($i.$b);
    }

?>