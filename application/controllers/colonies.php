<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Colonies extends CI_Controller {

	 function __construct()
    {
        parent::__construct();
        
        keyPass();

        $this->load->model('colonies_model');
    }


	public function getColonies($postal_code_id = NULL)
	{
	
		echo json_encode($this->colonies_model->getColonies($postal_code_id));

	}
}
