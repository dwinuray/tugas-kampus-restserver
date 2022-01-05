<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Client extends CI_Controller {
        
        function __construct() {

            parent::__construct();
        }

        public function index(){
            
            $this->load->view('V_client');
        }
    
    }
    
    /* End of file Client.php */
    