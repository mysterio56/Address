<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Federal_entities_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    public function getFederalEntities(){

    	$query = $this->db
    	->select('id,nombre as name')
        ->order_by("name", "asc") 
    	->get('estados');

    	return $query->result();

    }

}
