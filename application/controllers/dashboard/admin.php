<?php


class Admin extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
         //$this->load->model('solicitud_model');
    }
    
    public function index()
    {
        if($this->session->userdata('user') == FALSE)
        {
            redirect('login');
        }
        
        // $this->load->library('user_agent');

        // $ip_addr = $this->input->ip_address();

        // $url = $_SERVER["REQUEST_URI"];
       
        // if ($this->agent->is_browser())
        // {
        //     $agent = $this->agent->browser().' '.$this->agent->version();
        // }
        //     elseif ($this->agent->is_robot())
        // {
        //     $agent = $this->agent->robot();
        // }
        //     elseif ($this->agent->is_mobile())
        // {
        //     $agent = $this->agent->mobile();
        // }
        //     else
        // {
        //     $agent = 'Unidentified User Agent';
        // }

        //  $user = $this->session->userdata('nombre');
        //  $platform = $this->agent->platform();
        //  $data = $this->admin_model->log($ip_addr,$user,$agent,$platform,$url);
        

        $data = array(
            'titulo' => 'Bienvenidos',
            'contenido' => 'dashboard/admin',
         );

        
        $this->load->view(THEME . TEMPLATE, $data);
    }  
}
 