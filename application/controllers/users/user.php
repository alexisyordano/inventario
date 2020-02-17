<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	 public function __construct() {
		parent::__construct();
        $this->load->model('user_model');
		
    }
    
	public function create()
	{
        if($this->session->userdata('user') == FALSE)
        {
            redirect('login');
        }

        $data = array(
            'titulo' => 'Bienvenidos',
            'contenido' => 'users/index',
         );

        
        $this->load->view(THEME . TEMPLATE, $data);
    }

    public function registers()
    {
        $out = array('error' => false);
        $post = json_decode(file_get_contents('php://input'), true);
        $name = $this->input->post('name');
        $user = $this->input->post('user');
        $password = $this->input->post('password');
        if($name == '')
		{
		   $out['error'] = true;
		   $out['message'] = "El nombre es requerido";
        }
        else if($user == '')
        {
            $out['error'] = true;
            $out['message'] = "El usuario es requerido";  
        }

        else if($password == '')
        {
            $out['error'] = true;
            $out['message'] = "La clave es requerido";
        }

        else if($validar = $this->user_model->validauser($user))
        {
            if($validar == TRUE)
            {
                $out['error'] = true;
                $out['message'] = "Este usuario ya existe";
            }
        }

        else 
        {
           $saveusers = $this->user_model->registers($name,$user,$password);
           if($saveusers == TRUE)
           {
             $out['message'] = " Se registro el Usuario con exito :)";
           }
        }
        
        header("Content-type: application/json");
        echo json_encode($out);
    }

    public function list()
    {
        if($this->session->userdata('user') == FALSE)
        {
            redirect('login');
        }

        
            $data = $this->user_model->listar();

         header("Content-type: application/json");
         echo json_encode($data);
    
    
    }

    public function veruser()
    {
        if($this->session->userdata('user') == FALSE)
        {
            redirect('login');
        }

        $data = array(
            'titulo' => 'Bienvenidos',
            'contenido' => 'users/list',
         );

        
        $this->load->view(THEME . TEMPLATE, $data);
    }
    
    
}
