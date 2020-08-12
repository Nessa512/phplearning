<?php
/******** Escalares ********/
//string
$nome = "Olá mundão 123 #$%";
var_dump($nome);
if(is_string($nome)):
    print "É string";
else: 
    print "Não é String";
endif;
    print "<hr>";

//int
$idade = 10;
var_dumb($idade);
if(is_int($idade)):
    print "É int";
else:
    print "Não é int";
endif;
    print "<hr>";

//float

$altura = 1.64;
var_dumb($altura);
if(is_float($altura)):
    print "É float";
else:
    print "É não";
endif;
    print "<hr>";
/****** composto ******/
// array
$carros = array("Gol","Uno","Camaro",12,20.6,true);
var_dump($carros);
if(is_array($carros)):
    print "É array";
else:
    print "Não é array";
endif;
    echo "<hr>";

//object
class cliente{
        public $nome;
        public function atribuirnome($nome) {
        $this->$nome = $nome;
    }
}
$cliente=new cliente ();
$cliente->atribuirnome("Andressa");
var_dump($cliente);
if(is_object($cliente)):
    print "É object";
else:
    print "Não é object";
endif;
    print "<hr>";