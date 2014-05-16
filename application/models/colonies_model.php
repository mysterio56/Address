<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Colonies_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    public function getColonies($postal_code_id = NULL){

    	$query = $this->db
    	->select('id,nombre as name')
        ->where('codigo_postal_id',$postal_code_id)
        ->order_by("name", "asc")
    	->get('colonias');

    	return $query->result();

    }

}