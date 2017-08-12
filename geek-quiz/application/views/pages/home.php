<div class="questionario .col-md-6">

    <ul>
        <?php

        foreach( $questao as $index => $row ){

                echo  '<label>' . $row->pergunta .'</label></br></br>';
                //var_dump($alternativa[$index]->opc);
                echo '<ul>';
                foreach ( $alternativa[$index] as $key => $value) {

                    shuffle($value);
                    for ($i=0; $i < sizeof($value); $i++) {
                        

                        $inputValue = array_search($value[$i], $alternativa[$index]->opc);
                        echo '<li class="alternativa"><input type="radio" name="'.$row->peso.'" value="'.$inputValue.'">
                              <label for="'.$row->peso.'">' .$value[$i] .'</label>
                              <div class="check"></div></li></br></br>';

                        
                    }

                echo '</ul>';


                }
            }
            ?>

            <button id='test' class="btn btn-success">Ver resultado</button>
            <div id="resultado"></div>
        
    </ul>
</div>

<script>
$('#resultado').hide();
$('#test').click(function () {
    $('#resultado').empty();
    var selected = [];
    $('input:radio').each(function(index, element){
        if (this.checked) { selected.push($(this).val()); }
    });

    var cont = 1;
    var s1 = 0;
    var s2 = 0;
    var s3 = 0;
    var s4 = 0;
    var s5 = 0;
    if ( selected.length < 5 ) { 
        $('#resultado').append('Preencha todos os campos');
        $('#resultado').show();
    } else {
        for ( var i = 0; i < selected.length; i++ ) {

            if ( selected[i] == "1" ) s1 = s1 + cont;
            if ( selected[i] == "2" ) s2 = s2 + cont;
            if ( selected[i] == "3" ) s3 = s3 + cont;
            if ( selected[i] == "4" ) s4 = s4 + cont;
            if ( selected[i] == "5" ) s5 = s5 + cont;
            cont++;
        }
    
        if ( s1 > s2 && s1 > s3 && s1 > s4 && s1 > s5  ) { $('#resultado').append('Você é House of Cards: ataca o problema com método e faz de tudo para resolver a situação.'); $('#resultado').show();}
        else if ( s2 > s1 && s2 > s3 && s2 > s4 && s2 > s5  ) { $('#resultado').append('Você é Game of Thrones: não tem muita delicadeza nas ações, mas resolve o problema de forma prática.'); $('#resultado').show();}
        else if ( s3 > s1 && s3 > s2 && s3 > s4 && s3 > s5  ) { $('#resultado').append('Você é Lost: faz as coisas sem ter total certeza se é o caminho certo ou se faz sentido, mas no final dá tudo certo.'); $('#resultado').show();}
        else if ( s4 > s1 && s4 > s2 && s4 > s3 && s4 > s5  ) { $('#resultado').append('Você é Breaking Bad: pra fazer acontecer você toma a liderança, mas sempre contando com seus parceiros.'); $('#resultado').show();}
        else if ( s5 > s1 && s5 > s2 && s5 > s3 && s5 > s4  ) { $('#resultado').append('Você é Silicon Valley: vive a tecnologia o tempo todo e faz disso um mantra para cada situação no dia.'); $('#resultado').show();}
    
    }

});

</script>