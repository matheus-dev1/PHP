<?php
    class Pessoa {
        public $nome;
        public $idade;
        //Atributo da Classe
        //Posso fazer atribuicao nas propriedades, porem a ideia do POO e ser Generico.
        //Sempre Generica!
        //Atributos sempre sao declarados no escopo da classe, enquanto variavel eu posso declarar 
        //em qualquer parte do nosso documento.
        //O que define o que e um atributo e uma variavel e o modificador de acesso, exemplo
        // public $nome isto e um atributo, enquanto $nome; e uma varivel.

        public function getNome() {
            return $this->nome;
            //Embora tenha o mesmo nome do atribudo $nome, isto e uma VARIAVEL.
            //Entao para indicar que isto aqui e referente ao meu atributo, eu uso a plavra reservada
            // $this->. Assim eu estou acessando o atributo public $nome.
            //Sempre que a gente estiver no contexto/dentro da classe, para refenciar Atributos nos
            //usamos o metodo $this->

            //Obs: Esta setinha (->) e igual ao ponto no JavaScript.
        }
        public function getIdade() {
            return $this->idade;
            //Referenciar atributo da nossa classe.
        }
    }

    $pessoa = new Pessoa;
    //$nome da variavel = new(palavra reservada obrigatoria na hora de instanciar uma classe/objeto) + Nome da classe;
    //Instacia da Classe
    $pessoa->nome = "Matheus";
    //Objeto

    $pessoa2 = new Pessoa;
    $pessoa2->nome = "Ramon";

    echo $pessoa->nome;
    echo "<br />";
    echo $pessoa2->nome;
?>