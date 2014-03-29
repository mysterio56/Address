<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('keyPass'))
{
    function keyPass(){

    	if(isset($_POST)){

	        if ($_POST['key'] != '1owvUtwudHylyenow15OkerirfudhocOve'){

	            echo json_encode(array('error'=>'Acceso denegado!!!'));

	            exit();

	        }

    	} else {

    		echo json_encode(array('error'=>'Acceso denegado!!!'));

	        exit();

    	}

    }

}   