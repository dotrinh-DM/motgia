<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "home/chome";
$route['404_override'] = '';

$route['trang-chu'] = "home/chome"; 
$route['san-pham/(:any)'] = "home/cproducts/showDetailProducts/$1";
$route['update-san-pham'] = "home/cproducts/updateProducts"; 
$route['profile'] = "home/cusers/profile";
$route['dang-ky'] = "home/cusers/signup";
$route['active'] = "home/cusers/active"; 
$route['cart'] = "home/cproducts/view_cart";
$route['up-product'] = "home/cproducts/upProducts";
$route['thanh-toan-tai-nha'] = "home/cproducts/payhome";
$route['thanh-toan-truc-tuyen'] = "home/cproducts/payonline";

///////////////////////////////////////
//For pages those have a static name
$route['{default_controller}/{default_method}/about.html'] = "{original_controller}/{original_method}";
 
//rule to rout request with number values
$route['{default_controller}/{default_method}/(:num)'] = "{original_controller}/{original_method}/$1";
 
//rule to rout request with regular expression values
$route['{default_controller}/{default_method}/([a-z]+)-{delimiter}'] = "{original_controller}/{original_method}/$1";

/* End of file routes.php */
/* Location: ./application/config/routes.php */