<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Municipalities_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    public function getMunicipalities($federal_entity_id = NULL){

    	$query = $this->db
    	->select('id,nombre as name')
        ->where('estado_id',$federal_entity_id)
        ->order_by("name", "asc")
    	->get('municipios');

    	return $query->result();

    }

}