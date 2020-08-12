<!DOCTYPE html>
<html lang="pt-br">
    <head> 
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <?php
        /*
            tipos de dados
            INTEIROS (INT) - qualquer número sem decimais ou negativo
            PONTO FLUTUANTE (FLOAT, DOUBLE OU REAL) - número com decimais
            STRING - texto
            BOOLEANOS - verdadeiro (true) ou falso (false)
            ARRAYS - variáveis multidimencionais, vetores 
            OBJETOS - instância de uma classe 
            RECURSOS - variáveis especiais do php que referenciam recursos externos
            NULO(null) - variavel sem valor, mas diferente de um ""(texto vazio)
            */
            $idade ='30';
            $idade ='30';
            $altura =1.81;
            $nome = "andersa";
            $casado = false;
            print($nome); /*retorna e dá trabalho issai*/
            echo $idade;
            echo gettype($idade);
            echo $idade + $idade2;
            echo "olá meu nome é $nome e eu tenho $idade."; /*aspas duplas fazem com que o valor se expanda e seja substituido pelo valor */
            echo 'olá meu nome é $nome e eu tenho $idade.'; /*aspa faz com que o valor não se expanda, nãoo substitui */
            echo "olá meu nome é \"$nome\" e eu tenho $idade."; /*com aspas dupla colocar outro nome com aspas dupla tem que colocar o \ antes das aspas pra n dar erro*/

            /*variavél multidimencional */
            $cadastro = array('cliente 1','cliente2', 'cliente 3' ); /*n pode tacar echo sem mostrar indice do array*/
            var_dump($cadastro); /*mostra o indice do que vai ser mostrado*/
            echo $cadastro[0];
            $cadastros = array('cliente1' => 'jão', 'cliente2' =>'Lula', 'cliente3' =>'Andersa'); /*isso para definir indices*/
            var_dump($cadastro); 
            echo $cadastro['cliente1']
            /*um array dentro de outro array*/
            $inscrição = array(
                'personagem1' => array(
                    'nome' => 'nana',
                    'categoria' => 'mago/suporte',
                    'idade' => 10,
                ),/*a vírgula divide esses array/matriz e diferencia do array principal*/
                'personagem2' => array(
                    'nome' => 'alucard',
                    'categoria' => 'soldado/assasino',
                    'idade' => 25,
                ) 
            );
            var_dump($inscrição);
            echo $inscrição['personagem1']['nome'];
            /*espoco(??) d variavel (global ou local) */

        ?>
    </body>    



</html>
