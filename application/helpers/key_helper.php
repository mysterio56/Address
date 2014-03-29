<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('keyPass'))
 {
     function keyPass(){
 
         $aHeaders = getallheaders();
 
         if (@$aHeaders['key'] != '1owvUtwudHylyenow15OkerirfudhocOve'){
 
             echo json_encode(array('error'=>'Acceso denegado!!!'));
 
             exit();
 
         }
 
     }
 
 }  