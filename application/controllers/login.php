<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	 public function __construct() {
		parent::__construct();
        $this->load->model('user_model');
		
	}
	public function index()
	{
		$this->load->view('index');
    }
    
    
    //Funcion que verifica los datos del usuario ingresado por el formulario y se envio a vue por medio de json//
	public function comprobar()
	{

        $out = array('error' => false);
		$usuario = $this->input->post('usuario');
		$clave = $this->input->post('clave');
		if($usuario == '')
		{
		   $out['error'] = true;
		   $out['message'] = "El usuario es requerido";
		}

		else if($clave == '')
		{
		   $out['error'] = true;
		   $out['message'] = "El Password es requerido";
		}

		else
		{
			$valida = $this->user_model->login($usuario,$clave);
			if($valida == TRUE)
			{
				$out['message'] = "Inicio de Session con exito breve sera redirigido... :)";
				$data = array(
					    'is_logued_in' 	=> 		TRUE,
					    'id' 		    => 		$valida->id,
					    'name' 		    => 		$valida->name,
					    'user' 		    => 		$valida->user,
					    'password' 	    => 		$valida->password,
					    'nivel'			=>		$valida->nivel,
			
			
					);
					$this->session->set_userdata($data);
			}
			else
			{
				$out['error'] = true;
		        $out['message'] = "Fallido datos incorrectos o el usuario no existe  :(";
			}
		}

		header("Content-type: application/json");
        echo json_encode($out);

	}

		public function logout()

		{
			$this->session->sess_destroy();
		    redirect('login');
		}
}
