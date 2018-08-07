<?php

defined('BASEPATH') OR exit('No direct script access allowed');



$route['default_controller'] = 'Counselling';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['controller'] = 'Corporate';
$route['controller'] = 'Front';
$route['profile'] = 'patient/profile';
$route['edit'] = 'patient/patient_edit';
$route['registration'] = 'Corporate/registration';

$route['logout'] = 'counselling/logout';
$route['appointment'] = 'counselling/appointment';
$route['laboratory'] = 'front/laboratory';
$route['blog'] = 'front/blog';
$route['blog-view'] = 'front/blog_view';

$route['apply-doctor']="ajax/apply_doctor";
$route['withdrow-doctor'] = "ajax/withdrow_doctor";
$route['payment']="front/payment";
$route['search'] = "counselling/search";
$route['details'] = "counselling/details";



$arr = array(
    "doctors" => "doctor_management",

    "category" => "category_management"
);
foreach ($arr as $key => $value) {
    $route["corporate/" . $key] = $value;
    $route["corporate/" . $key . "new"] = $value . "/create";

    $route["corporate/" . $key . "-doctor_edit/(:num)"] = $value . "/edit/$1";
    $route["corporate/" . $key . "-update"] = $value . "/update";
    $route["corporate/" . $key . "-doctor_delete/(:num)"] = $value . "/delete/$1";
    $route["corporate/" . $key . "-doctor_appointment/(:num)"] = $value . "/appointment/$1";
}

require_once( APPPATH . 'helpers/mazharul_helper.php');
define('EXT', '.php');
require_once( BASEPATH . 'database/DB' . EXT );
$db = & DB();



$db->select("*");
$db->from("designetion");
$results = $db->get()->result();

foreach ($results as $result) {
    //  $route[Replace($result->name)] = 'counselling/category';
    $route[Replace($result->name) . "/{$result->id}"] = 'counselling/category/$1';
}