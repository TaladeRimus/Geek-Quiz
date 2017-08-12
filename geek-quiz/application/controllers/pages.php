<?php

class Pages extends CI_Controller {

    
    public function view($page = 'home') {
        
        if ( !file_exists(APPPATH.'views/pages/'.$page.'.php') ) {
            //mostra 404
            show_404();
        } 
        //carrega helpers
        $this->load->helper('url');
        $this->load->helper('html');

        //title
        $data['title'] = ucfirst($page);

        // carrega models
        $this->load->model('questao');
        $data['questao'] = $this->questao->criarQuestao();

        $this->load->model('alternativa');
        $data['alternativa'] = $this->alternativa->criarAlternativa();

        //carrega views
        $this->load->view('templates/header', $data);
        $this->load->view('pages/home', $data );
        $this->load->view('templates/footer', $data);


    }

}
