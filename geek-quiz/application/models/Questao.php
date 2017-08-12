<?php

class Questao extends CI_Model {

    public $pergunta;
    public $peso;

    public function __construct(){}

    public function criarQuestao(){

        /**
        **  1. De manhã, você:
        **  2. Indo para o trabalho você encontra uma senhora idosa caída na rua.
        **  3. Chega no prédio e o elevador está cheio.
        **  4. Você chega no trabalho e as convenções sociais te obrigam a puxar assunto.
        **  5. A pauta pegou o dia todo, mas você está indo para casa.
        */
        $questaoA = new Questao();
        $questaoA->pergunta = 'De manhã você:';
        $questaoA->peso = 1;

        $questaoB = new Questao();
        $questaoB->pergunta = 'Indo para o trabalho você encontra uma senhora idosa caída na rua.';
        $questaoB->peso = 2;

        $questaoC = new Questao();
        $questaoC->pergunta = 'Chega no prédio e o elevador está cheio.';
        $questaoC->peso = 3;

        $questaoD = new Questao();
        $questaoD->pergunta = 'Você chega no trabalho e as convenções sociais te obrigam a puxar assunto.';
        $questaoD->peso = 4;

        $questaoE = new Questao();
        $questaoE->pergunta = 'A pauta pegou o dia todo, mas você está indo para casa.';
        $questaoE->peso = 5;

        $questoes = array($questaoA, $questaoB, $questaoC, $questaoD, $questaoE);

        return $questoes;


    }


    
}