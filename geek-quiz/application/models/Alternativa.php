<?php

class Alternativa extends CI_Model {

    public $opc;

    public function __construct(){}

    
    public function criarAlternativa(){
        /**
        ** PERGUNTA 1
            ** a. Acorda cedo e come frutas cortadas metodicamente.
            ** b. Sai da cama com o despertador e se prepara para a batalha da semana.
            ** c. Só consegue lembrar do seu nome depois do café.
            ** d. Levanta e faz café pra todos da casa.
            ** e. Passa o café e conserta um erro no HTML.
        **/

        $opcQuestaoA = new Alternativa();
        $opcQuestaoA->opc = [   
                                '1' => 'Acorda cedo e come frutas cortadas metodicamente.', 
                                '2' => 'Sai da cama com o despertador e se prepara para a batalha da semana.',
                                '3' => 'Só consegue lembrar do seu nome depois do café.',
                                '4' => 'Levanta e faz café pra todos da casa.',
                                '5' => 'Passa o café e conserta um erro no HTML.'
                            ];

        /** PERGUNTA 2
            **a. Ela vai atrapalhar seu horário. Oculte o corpo.
            **b. Levanta a senhora e jura protegê-la com sua vida.
            **c. Ajuda-a, mas questiona sua real identidade.
            **d. Oferece para caminharem juntos até um destino em comum.
            **e. Testa se ela roda bem no Firefox. Não roda.

        **/

        $opcQuestaoB = new Alternativa();
        $opcQuestaoB->opc =  [ '1' => 'Ela vai atrapalhar seu horário. Oculte o corpo.',
                               '2' => 'Levanta a senhora e jura protegê-la com sua vida.',
                               '3' => 'Ajuda-a, mas questiona sua real identidade.',
                               '4' => 'Oferece para caminharem juntos até um destino em comum.',
                               '5' => 'Testa se ela roda bem no Firefox. Não roda.'
                              ];

        /** PERGUNTA 3
            **a. Convence parte das pessoas a esperarem o próximo.
            **b. Ignora as pessoas no elevador e entra de qualquer forma.
            **c. Você questiona a realidade, as coisas e tudo mais. Sobe de escada.
            **d. Com uma leve intimidação passivo-agressiva, encontra um lugar no elevador.
            **e. Cria um app que mostra a lotação do elevador. Vende o app e fica milionário.
        **/
        $opcQuestaoC = new Alternativa();
        $opcQuestaoC->opc =  [ '1' => 'Convence parte das pessoas a esperarem o próximo.',
                               '2' => 'Ignora as pessoas no elevador e entra de qualquer forma.',
                               '3' => 'Você questiona a realidade, as coisas e tudo mais. Sobe de escada.',
                               '4' => 'Com uma leve intimidação passivo-agressiva, encontra um lugar no elevador.',
                               '5' => 'Cria um app que mostra a lotação do elevador. Vende o app e fica milionário.'
                              ];

        /** PERGUNTA 4
            **a. Fala sobre a política, eleições, como tudo é um absurdo.
            **b. Larga uma frase polêmica e vê uma pequena guerra se formar.
            **c. Puxa um assunto e te lembram que já foi discutido semana passada.
            **d. Sugere que os colegas trabalhem na ideia de um novo projeto.
            **e. Desabafa sobre como odeia PHP. Todo mundo na sala adora PHP.
        **/

        $opcQuestaoD = new Alternativa();
        $opcQuestaoD->opc =  [ '1' => 'Fala sobre a política, eleições, como tudo é um absurdo.',
                               '2' => 'Larga uma frase polêmica e vê uma pequena guerra se formar.',
                               '3' => 'Puxa um assunto e te lembram que já foi discutido semana passada.',
                               '4' => 'Sugere que os colegas trabalhem na ideia de um novo projeto.',
                               '5' => 'Desabafa sobre como odeia PHP. Todo mundo na sala adora PHP.'
                              ];


        /** PERGUNTA 5
            **a. Vou chamar aqui o meu Uber.
            **b. Pegarei o bus junto com o resto do povo.
            **c. No ponto de ônibus mais uma vez, espero não errar a linha de novo.
            **d. Vou de carro, mas ofereço uma carona para os colegas.
            **e. Acho que descobri uma forma de fazer aquela senhora rodar no Firefox.
        **/

        $opcQuestaoE = new Alternativa();
        $opcQuestaoE->opc =  [ '1' => 'Vou chamar aqui o meu Uber.',
                               '2' => 'Pegarei o bus junto com o resto do povo.',
                               '3' => 'No ponto de ônibus mais uma vez, espero não errar a linha de novo.',
                               '4' => 'Vou de carro, mas ofereço uma carona para os colegas.',
                               '5' => 'Acho que descobri uma forma de fazer aquela senhora rodar no Firefox.'
                              ];


        $alternativas = array( $opcQuestaoA, $opcQuestaoB, $opcQuestaoC, $opcQuestaoD, $opcQuestaoE );

        return $alternativas;

    }



}