<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function registar_contrato()
	{
		# variables
		$data['numero'] 			= time();
		$data['name'] 				= $this->input->post('name');
		$data['nif'] 				= $this->input->post('nif');
		$data['date'] 				= $this->input->post('date');
		$data['profesion'] 			= $this->input->post('profesion');
		$data['domicilio'] 			= $this->input->post('domicilio');
		$data['localidad'] 			= $this->input->post('localidad');
		$data['codigo_postal'] 		= $this->input->post('codigo_postal');
		$data['pais'] 				= $this->input->post('pais');
		$data['provincia'] 			= $this->input->post('provincia');
		$data['telefono'] 			= $this->input->post('telefono');
		$data['otro_telefono'] 		= $this->input->post('otro_telefono');
		$data['email'] 				= $this->input->post('email');
		$data['edo_civil'] 			= $this->input->post('edo_civil');
		$data['sexo'] 				= $this->input->post('sexo');
		$data['beneficiarios'] 		= $this->input->post('beneficiarios');
		if ($data['beneficiarios'] != 'conyugue'){
			$data['name_bene_1'] 		= $this->input->post('name_bene_1');
			$data['name_bene_2'] 		= $this->input->post('name_bene_2');
			$data['name_bene_3'] 		= $this->input->post('name_bene_3');
			$data['nif_bene_1'] 		= $this->input->post('nif_bene_1');
			$data['nif_bene_2'] 		= $this->input->post('nif_bene_2');
			$data['nif_bene_3'] 		= $this->input->post('nif_bene_3');
			$data['date_bene_1'] 		= $this->input->post('date_bene_1');
			$data['date_bene_2'] 		= $this->input->post('date_bene_2');
			$data['date_bene_3'] 		= $this->input->post('date_bene_3');
		}else{
			$data['name_bene_1'] 		= '';
			$data['name_bene_2'] 		= '';
			$data['name_bene_3'] 		= '';
			$data['nif_bene_1'] 		= '';
			$data['nif_bene_2'] 		= '';
			$data['nif_bene_3'] 		= '';
			$data['date_bene_1'] 		= '';
			$data['date_bene_2'] 		= '';
			$data['date_bene_3'] 		= '';
		}
		$data['fp_cash'] = $this->input->post('fp_cash');
		$data['terminos_1'] = $this->input->post('terminos_1');
		$data['terminos_2'] = $this->input->post('terminos_2');
		$data['registro'] = date('Y-m-d');
		
		$data_insert = array(
		   'numero' 		=> $data['numero'],
		   'name' 			=> $data['name'],
		   'nif' 			=> $data['nif'],
		   'date' 			=> $data['date'],
		   'profesion' 		=> $data['profesion'],
		   'domicilio' 		=> $data['domicilio'],
		   'localidad' 		=> $data['localidad'],
		   'codigo_postal' 	=> $data['codigo_postal'],
		   'pais' 			=> $data['pais'],
		   'provincia' 		=> $data['provincia'],
		   'telefono' 		=> $data['telefono'],
		   'otro_telefono' 	=> $data['otro_telefono'],
		   'email' 			=> $data['email'],
		   'edo_civil' 		=> $data['edo_civil'],
		   'sexo' 			=> $data['sexo'],
		   'beneficiarios' 	=> $data['beneficiarios'],
		   'name_bene_1' 	=> $data['name_bene_1'],
		   'name_bene_2' 	=> $data['name_bene_2'],
		   'name_bene_3' 	=> $data['name_bene_3'],
		   'nif_bene_1' 	=> $data['nif_bene_1'],
		   'nif_bene_2' 	=> $data['nif_bene_2'],
		   'nif_bene_3' 	=> $data['nif_bene_3'],
		   'date_bene_1' 	=> $data['date_bene_1'],
		   'date_bene_2' 	=> $data['date_bene_2'],
		   'date_bene_3' 	=> $data['date_bene_3'],
		   'fp_cash' 		=> $data['fp_cash'],
		   'terminos_1' 	=> $data['terminos_1'],
		   'terminos_2' 	=> $data['terminos_2'],
		   'registro' 		=> $data['registro'],
		);

		$this->db->insert('contratos', $data_insert);
		return $data;
	}

	public function enviar_contrato($numero)
	{
		$data = $this->contrato($numero);

		$message =  'Nombre y Apellidos: ' . $data['name'] . "\n" ;
		$message .= 'NIF: ' .  $data['nif'] . "\n" ;
		$message .= 'Fecha nacimiento: ' .  $data['date'] . "\n" ;
		$message .= 'Profesión: ' .  $data['profesion'] . "\n" ;
		$message .= 'Domicilio: ' .  $data['domicilio'] . "\n" ;
		$message .= 'Localidad: ' .  $data['localidad'] . "\n" ;
		$message .= 'Código Postal: ' .  $data['codigo_postal'] . "\n" ;
		$message .= 'País: ' .  $data['pais'] . "\n" ;
		$message .= 'Provincia: ' .  $data['provincia'] . "\n" ;
		$message .= 'Teléfono: ' .  $data['telefono'] . "\n" ;
		$message .= 'Otro teléfono: ' .  $data['otro_telefono'] . "\n" ;
		$message .= 'E-mail: ' .  $data['email'] . "\n" ;
		$message .= 'Estado civil: ' .  $data['edo_civil'] . "\n" ;
		$message .= 'Sexo: ' .  $data['sexo'] . "\n" ;

		if ($data['beneficiarios'] == 'otros'){
			$message .= 'Beneficiarios: Otros (rellenar nombre y apellidos, NIF y fecha de nacimiento)' . "\n" ;
			
			$message .= '=================================================================================' . "\n" ;
			$message .= "\t\t\t\t\t\t\t\t".'Beneficiarios' . "\n" ;
			$message .= '=================================================================================' . "\n" ;

			$message .= 'Nombre: '.$data['name_bene_1']."\t\t\t"."Nif: ".$data['nif_bene_1']."\t\t\t".'Fecha Nacimiento: '.$data['date_bene_1']."\n" ;
			$message .= 'Nombre: '.$data['name_bene_2']."\t\t\t"."Nif: ".$data['nif_bene_2']."\t\t\t".'Fecha Nacimiento: '.$data['date_bene_2']."\n" ;
			$message .= 'Nombre: '.$data['name_bene_3']."\t\t\t"."Nif: ".$data['nif_bene_3']."\t\t\t".'Fecha Nacimiento: '.$data['date_bene_3']."\n" ;
			$message .= '=================================================================================' . "\n" ;
			$message .= "\t\t\t\t\t\t\t\t".'Tipo de Pago' . "\n" ;
			$message .= '=================================================================================' . "\n" ;
		}else{
			$message .= 'Beneficiarios: Cónyugue, en su defecto los hijos, en su defecto los padres, y en su defecto, los herederos legales (esta designación será la que aparezca en caso de ausencia de designación expresa)' . "\n" ;
		}

		$message .= 'El pago del Seguro se puede efectuar mendiante:' . "\n" ;

		switch ($data['fp_cash']) {
			case 'transfe':
				$message .= '- Transferencia Bancaria a favor de Jose Ignacio Cómpes: ES38 2085 8366 8003 3040 1759 - Entidad IBERCAJA '. "\n" ;
				break;
			case 'card':
				$message .= 'Forma de Pago: Tarjeta '. "\n" ;
				$message .= '- Ingreso Directo en misma cuenta '. "\n" ;
				break;
		}
		$message .= 'Acepto los terminos Ley de protección de datos: '. $data['terminos_1'] . "\n" ;
		$message .= 'Acepto los terminos Autoricen para usar los datos con fines comerciales: '. $data['terminos_2'] . "\n" ;

		$message .= 'Una vez recibida la solicitud debídamente cumplimentada y copia del pago efectuado, se expedirá certificado en un máximo de 48 horas.'. "\n" ;
		$message .= 'Por favor enviar datos a mjroble@mapfre.com . Teléfono: 636 787 815 para cualquier duda.'. "\n" ;
		$message .= 'Descargar PDF: ' . site_url('home/pdf/'.$data['numero']) . "\n" ;

		$this->email->from('info@nachoruizmediacion.es', 'Nacho Ruiz Compés');
		$this->email->to($data['email']);
		$this->email->cc('info@nachoruizmediacion.es, mjroble@mapfre.com');
		$this->email->subject('Contratar Seguro N'.$data['numero']);
		$this->email->message($message);
		$this->email->send();

	}

	public function enviar_contrato_certificado($numero)
	{
		$data = $this->contrato($numero);

		$message =  'Nombre y Apellidos: ' . $data['name'] . "\n" ;
		$message .= 'NIF: ' .  $data['nif'] . "\n" ;
		$message .= 'Fecha nacimiento: ' .  $data['date'] . "\n" ;
		$message .= 'Profesión: ' .  $data['profesion'] . "\n" ;
		$message .= 'Domicilio: ' .  $data['domicilio'] . "\n" ;
		$message .= 'Localidad: ' .  $data['localidad'] . "\n" ;
		$message .= 'Código Postal: ' .  $data['codigo_postal'] . "\n" ;
		$message .= 'País: ' .  $data['pais'] . "\n" ;
		$message .= 'Provincia: ' .  $data['provincia'] . "\n" ;
		$message .= 'Teléfono: ' .  $data['telefono'] . "\n" ;
		$message .= 'Otro teléfono: ' .  $data['otro_telefono'] . "\n" ;
		$message .= 'E-mail: ' .  $data['email'] . "\n" ;
		$message .= 'Estado civil: ' .  $data['edo_civil'] . "\n" ;
		$message .= 'Sexo: ' .  $data['sexo'] . "\n" ;

		if ($data['beneficiarios'] == 'otros'){
			$message .= 'Beneficiarios: Otros (rellenar nombre y apellidos, NIF y fecha de nacimiento)' . "\n" ;
			
			$message .= '=================================================================================' . "\n" ;
			$message .= "\t\t\t\t\t\t\t\t".'Beneficiarios' . "\n" ;
			$message .= '=================================================================================' . "\n" ;

			$message .= 'Nombre: '.$data['name_bene_1']."\t\t\t"."Nif: ".$data['nif_bene_1']."\t\t\t".'Fecha Nacimiento: '.$data['date_bene_1']."\n" ;
			$message .= 'Nombre: '.$data['name_bene_2']."\t\t\t"."Nif: ".$data['nif_bene_2']."\t\t\t".'Fecha Nacimiento: '.$data['date_bene_2']."\n" ;
			$message .= 'Nombre: '.$data['name_bene_3']."\t\t\t"."Nif: ".$data['nif_bene_3']."\t\t\t".'Fecha Nacimiento: '.$data['date_bene_3']."\n" ;
			$message .= '=================================================================================' . "\n" ;
			$message .= "\t\t\t\t\t\t\t\t".'Tipo de Pago' . "\n" ;
			$message .= '=================================================================================' . "\n" ;
		}else{
			$message .= 'Beneficiarios: Cónyugue, en su defecto los hijos, en su defecto los padres, y en su defecto, los herederos legales (esta designación será la que aparezca en caso de ausencia de designación expresa)' . "\n" ;
		}

		$message .= 'El pago del Seguro se puede efectuar mendiante:' . "\n" ;

		switch ($data['fp_cash']) {
			case 'transfe':
				$message .= '- Transferencia Bancaria a favor de Jose Ignacio Cómpes: ES38 2085 8366 8003 3040 1759 - Entidad IBERCAJA '. "\n" ;
				break;
			case 'card':
				$message .= 'Forma de Pago: Tarjeta '. "\n" ;
				$message .= '- Ingreso Directo en misma cuenta '. "\n" ;
				break;
		}
		$message .= 'Acepto los terminos Ley de protección de datos: '. $data['terminos_1'] . "\n" ;
		$message .= 'Acepto los terminos Autoricen para usar los datos con fines comerciales: '. $data['terminos_2'] . "\n" ;

		$message .= 'Una vez recibida la solicitud debídamente cumplimentada y copia del pago efectuado, se expedirá certificado en un máximo de 48 horas.'. "\n" ;
		$message .= 'Por favor enviar datos a mjroble@mapfre.com . Teléfono: 636 787 815 para cualquier duda.'. "\n" ;
		$message .= 'Descargar CONTRATO PDF: ' . site_url('home/pdf/'.$data['numero']) . "\n" ;
		$message .= 'Descargar CERTIFICADO PDF: ' . site_url('home/pdf_certificado/'.$data['numero']) . "\n" ;

		$this->email->from('info@nachoruizmediacion.es', 'Nacho Ruiz Compés');
		$this->email->to($data['email']);
		$this->email->cc('info@nachoruizmediacion.es, mjroble@mapfre.com');
		$this->email->subject('Contratar Seguro N'.$data['numero']);
		$this->email->message($message);
		$this->email->send();

	}

	function contrato($numero)
	{			    
	    $query = $this->db->get_where('contratos', array('numero' => $numero));	    
	    if($query->num_rows() > 0){	      
	      return $query->row_array();
	    }else{
	      return false;
	    }
	}

	function contrato_estatus($numero)
	{			       	
	   	$data = array(
		   'estatus' 	=> '1',
		);
	    $this->db->where('numero', $numero);
		$this->db->update('contratos', $data); 
	}

	function mes($mes)
	{			       	
	   	switch ($mes) {
	   		case '01':
	   			$mes = "ENERO";
	   			break;
	   		case '02':
	   			$mes = "FEBRERO";
	   			break;
	   		case '03':
	   			$mes = "MARZO";
	   			break;
	   		case '04':
	   			$mes = "ABRIL";
	   			break;
	   		case '05':
	   			$mes = "MAYO";
	   			break;
	   		case '06':
	   			$mes = "JUNIO";
	   			break;
	   		case '07':
	   			$mes = "JULIO";
	   			break;
	   		case '08':
	   			$mes = "AGOSTO";
	   			break;
	   		case '09':
	   			$mes = "SEPTIEMBRE";
	   			break;
	   		case '10':
	   			$mes = "OCTUBRE";
	   			break;
	   		case '11':
	   			$mes = "NOVIEMBRE";
	   			break;
	   		case '12':
	   			$mes = "DICIEMBRE";
	   			break;
	   		default:
	   			$mes = "MES";
	   			break;
	   	}
	   	return $mes;
	}

}

/* End of file anet_model.php */
/* Location: ./application/models/home_model.php */