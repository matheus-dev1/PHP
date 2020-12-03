<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta lang="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array e Funcoes de Array</title>
</head>
<body>
    <?php
    /*
    $nomes = array(
    'nome1' => 'Matheus',
    'nome2' => 'Joao',
    'nome3' => 'carlos', // Primeira dimensao
        'nomeduplo1' => array(
            'nome' => 'Marta',
            'social' => 'Carlao', // Segunda dimensao 
            'say' => array(
                'asdsad' => 'sadasd', // Terceira Dimensao
                '23424234' => '32423423',
                    'aaaaaaaaa' => array(
                        'h546h5' => 'f2wf' // Quarta Dimensao
                    )
            )
        )
    ) 
    */
    //Array assosiativo multidimencional, ou seja varias dimensoes, 

    $nomes = array(
        'nome1' => 'Matheus',
        'nome2' => 'Joao',
        'nome3' => 'Carlos'
    );
    //Array 1

    $endereco = array(
        'end1' => 'Rua Tiradentes, 1837',
        'end2' => 'Av, Santo Avelino, 222',
        'end3' => 'Rua santo antonio de almeida, 444'
    );
    //Array 2

    $numbers = array(1, 4, 3, 2, 5);
    //Array numbers

    echo "<pre>";
    echo "<h1> Array 1 </h1>";
    print_r($nomes);
    echo "</pre>";

    echo "<br>";

    echo "<pre>";
    echo "<h1> Array 2 </h1>";
    print_r($endereco);
    echo "</pre>";

    echo "<br>";

    echo "<pre>";
    echo "<h1> Array Numbers </h1>";
    print_r($numbers);
    echo "</pre>";

    echo "<br>";
    
    $result = array_merge($nomes, $endereco);
    //Juncao de dois arrays

    echo "<pre>";
    echo "<h1> Array Nomes + Endereco (Array Merge) </h1>";
    print_r($result);
    echo "</pre>";

    echo "<br>";

    array_push($result, 'batata', 'macas');
    //Com array associativo nao vira

    echo "<pre>";
    echo "<h1> Array Result (Array Push) </h1>";
    print_r($result);
    echo "</pre>";

    echo "<br>";

    $result += [ "two" => 2 ];
    //fazendo uma atribuicao(push) de um array associativo
    
    echo "<pre>";
    echo "<h1> Array Result (Array Incremento Final) </h1>";
    print_r($result);
    echo "</pre>";

    echo "<br>";
   
    sort($numbers);
    //Nao deve fazer uma atribuicao em uma outra variavel.

    echo "<pre>";
    echo "<h1> Array Result (Array Sort) </h1>";
    print_r($result);
    echo "</pre>";

    echo "<br>";
    
    $input_array = array('a', 'b', 'c', 'd', 'e');

    echo "<pre>";
    echo "<h1> Array Result (Array Chunk False) </h1>";
    print_r(array_chunk($input_array, 2));
    echo "</pre>";
    
    echo "<br>";

    echo "<pre>";
    echo "<h1> Array Result (Array Chunk True) </h1>";
    print_r(array_chunk($input_array, 2, true));
    echo "</pre>";
    ?>
</body>
</html>