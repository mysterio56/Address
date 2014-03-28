<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FederalEntities extends CI_Controller {

	 function __construct()
    {
        parent::__construct();

        keyPass();

        $this->load->model('federal_entities_model');
    }


	public function getFederalEntities()
	{
	
		echo json_encode($this->federal_entities_model->getFederalEntities());

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */