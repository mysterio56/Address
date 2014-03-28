<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Postal_codes_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    public function getPostalCodes($municipality_id = NULL){

    	$query = $this->db
    	->select('id,nombre as name')
        ->where('municipio_id',$municipality_id)
    	->get('codigos_postales');

    	return $query->result();

    }

}