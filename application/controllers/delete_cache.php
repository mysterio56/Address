<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Delete_cache extends CI_Controller {

	 function __construct()
    {
        parent::__construct();
    }


	public function index()
	{
	
		$this->db->cache_delete_all();

	}
}