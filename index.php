<?php

    include_once "biblioteca.php";
    
    echo "Hello new World <br><br>";
    // define($line, '<br><br>----------------------------<br><br>');

    $a = false;
    $b = "<br>";
    $line = '<br><br>----------------------------<br><br>';

    //TRABALHANDO COM ARRYS


        print($line);
    // ----------------------------------------------------------

    print(strtoupper("Hello world! <br>")); //MAIÚSCULA
    print(strtolower("Hello world! <br>")); //minuscula


    print($line);
    // ----------------------------------------------------------

    //Verificar a existencia de um arquivo e excluí-lo

    $file = $file = "/opt/lampp/htdocs/cursophp/teste2.txt";
    
    //Se o arquivo existe && foi deletado
    if (file_exists($file)&& unlink($file))
    {
        print("the file exist! <br> But!! was deleted!");
    }
    else
    {
        print("The file not exist");
    }

    print($line);
    // ----------------------------------------------------------
    //Faz uma cópia de arquivo

    $origin = "/opt/lampp/htdocs/cursophp/teste.txt";
    $destination = "/opt/lampp/htdocs/cursophp/teste2.txt";

    /*Descomentar abaixo para testar*/
    if (copy($origin, $destination))
    {
        print("Sucess by copiyng the file!");
    }
    else
    {
        print("Error!");
    }




    print($line);
    // ----------------------------------------------------------

    //Fazer leitura de um arquivo texto
    print(file_get_contents("/opt/lampp/htdocs/cursophp/teste.txt") . $b);

    //Escrever um texto em arquivo externo
    file_put_contents("/opt/lampp/htdocs/cursophp/teste.txt", "hello world!");
    
    //ler o arquio novamente
    print(file_get_contents("/opt/lampp/htdocs/cursophp/teste.txt") . $b);    

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
    //TRABALHANDO COM ARRAYS!

    //Uma maneira de montar um array simples
    $vet = array('maça', 'laranja', 'banana', 'pera', 'abacaxi');

    //Segunda maneira de montar array ASSOCIATIVO, onde informo a chave e o seu valor
    $vet2 = array("maça" => "vermelha", "laranja" => "Adivinha", "banana" => 3, "pera" => 4, "abacaxi" => 5, "abacate" => "verde com caroço");

    //Terceira maneira de montar um array simples
    $vet3[] = "Maria";
    $vet3[] = "José";
    $vet3[] = "Ricardo";
    $vet3[] = "Jucelina";
    $vet3[] = "Astrogildo";

    //Quarta maneira de montar um vetor em formato ASSOCIATIVO
    $vet4["nome"] = "Maria da Silva";
    $vet4["endereco"] = "Rua das Macieiras";
    $vet4["cidade"] = "Lajeado";
    $vet4["estado"] = "RS";
    $vet4["cep"] = "95900-000";


    //Obter os dados do array "vet"
    foreach ($vet as $key => $value) //vetor, chave e o valor contido na chave
    {
        if ($value == 'pera')
        {
            print("$key - $value" . $b);
        }
    }

    print("-----<br>");

    //Obter os dados do array "vet2"
    foreach ($vet2 as $key => $value) 
    {
        print("array[$key] => $value <br>");
    }

    print("-----<br>");

    //Obter os dados do array "vet3"
    foreach ($vet3 as $key => $value) 
    {
        print("array[$key] => $value <br>");
    }

    print("-----<br>");

    //Obter os dados do array "vet4"
    foreach ($vet4 as $key => $value) 
    {
        print("array[$key] => $value <br>");
    }

    print("-----<br>");

    //Procurar um item em um array
    $res = in_array("Juca", $vet3); //caso econtre retornará 1
    print($res);

    print("-----<br>");

    print($line);
    // ----------------------------------------------------------

    foreach ($vet as $value) //vetor e o valor contido naquela posicao do vetor
    {
        print("$value - ");
    }

    print("<br><br>bla bla <br><br>");

    $exe = array_values($vet4);

    print_r(array_values($vet4)); //imprime o conteúdo do array

    print($b . $b . count($vet2)); //informa o tamanho do array

    
    print($line);
    // ----------------------------------------------------------
    //FOR normal igual ao java

    for ($i=0; $i < 10; $i++)
    { 
        print("$i - ");
    }

?>