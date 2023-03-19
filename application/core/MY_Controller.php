<?php 
class MY_Controller extends CI_Controller 
{    
   function __construct() {
    parent::__construct();
    require_once APPPATH .'config/tablenames_constant.php';
    }
}

class Admin_Controller extends MY_Controller
{
    function __construct(){ 
        parent::__construct();
    }

}

?>