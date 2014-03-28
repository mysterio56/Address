<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Municipalities extends CI_Controller {

	 function __construct()
    {
        parent::__construct();

        keyPass();
        
        $this->load->model('municipalities_model');
    }


	public function getMunicipalities($federal_entity_id = NULL)
	{
	
		echo json_encode($this->municipalities_model->getMunicipalities($federal_entity_id));

	}
}
