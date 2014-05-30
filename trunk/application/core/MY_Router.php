<?php
(defined('BASEPATH')) OR exit('No direct script access allowed');

/* load the HMVC_Router class */
require APPPATH . 'third_party/HMVC/Router.php';

class MY_Router extends HMVC_Router {
//    function _set_request ($seg = array())
//    {
//        // The str_replace() below goes through all our segments
//        // and replaces the hyphens with underscores making it
//        // possible to use hyphens in controllers, folder names and
//        // function names
//        parent::_set_request(str_replace('-', '_', $seg));
//    }
}