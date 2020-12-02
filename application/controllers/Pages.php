<?php

class Pages extends CI_Controller {

    public function view($page = 'home') {
        $this->load->library('parser');
        
        if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
            show_404();
        } else {
            $data['title'] = ucfirst($page);
            
            /*
             * Conditionally load data and scripts here.
             * See the instructions for an example.
             */

            $this->load->view('templates/header', $data);
            $this->load->view('pages/' . $page);
            $this->load->view('templates/footer');
        }
    }
}
            