<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function send_mail()
	{
		$email = $this->input->post('email');

		$message =  'Email: ' . $email . "\n" ;

		$this->email->from('info@nidoo.la', 'Nidoo');
		$this->email->to($email);
		$this->email->cc('info@nidoo.la');
		$this->email->subject('Nidoo Club');
		$this->email->message($message);

		if ( ! $this->email->send()){
			$data['alert']['danger'] = 
				array( 
					'Error a registrarse',				
				);
		}else{
			$data['alert']['success'] = 
				array( 
					'Bienvenido al Club NIDOO',				
				);
		}

		return $data;
	}

}

/* End of file anet_model.php */
/* Location: ./application/models/home_model.php */