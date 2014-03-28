<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Postal_codes extends CI_Controller {

	 function __construct()
    {
        parent::__construct();
        
        keyPass();

        $this->load->model('postal_codes_model');
    }


	public function getPostalCodes($municipality_id = NULL)
	{
	
		echo json_encode($this->postal_codes_model->getPostalCodes($municipality_id));

	}
}