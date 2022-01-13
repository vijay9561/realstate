<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes with
| underscores in the controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Users_Controller';
$route['about']='Users_Controller/about';
$route['post-property']='Users_Controller/post_property';
$route['contact']='Users_Controller/contact';
$route['gallery']='Users_Controller/gallery';
$route['logoutusers']='Users_Controller/logoutusers';
$route['faq']='Users_Controller/faq';
//$route['view-posted-property/(:any)']='Users_Controller/view_posted_property/$1';
$route['view-posted-property'] = 'Users_Controller/view_posted_property';
$route['view_single_property_details/(:any)']='Users_Controller/view_single_property_details/$1';
$route['login']='Users_Controller/login';
$route['register']='Users_Controller/registers';
$route['terms']='Users_Controller/terms';
$route['privacy']='Users_Controller/policy';
$route['view-property-categories-wise']='Users_Controller/view_property_categories_wise';
$route['view-search-property']='Users_Controller/view_search_property';
$route['profile']='Users_Controller/users_profile';
$route['login-property']='Users_Controller/login_property';
$route['residential-property']='Users_Controller/residential_property';
$route['users-posted-prorperty']='Users_Controller/users_posted_prorperty';
$route['update_your_property/(:any)']='Users_Controller/update_your_property/$i';
$route['update_property_images/(:any)']='Users_Controller/update_property_images/$i';
$route['change_password']='Users_Controller/change_password';
$route['property-post-requirement']='Users_Controller/property_post_requirement';
$route['search_user_view_requirement']='Users_Controller/search_user_view_requirement';
$route['otherpostform']='Users_Controller/otherpostform';
$route['view-all-type-categories']='Users_Controller/view_all_type_categories';
$route['view_other_details/(:any)']='Users_Controller/view_other_details/$1';
$route['other_update_property/(:any)']='Users_Controller/other_update_property/$1';
$route['view_category']='Users_Controller/view_category';
/*admin section start*/

$route['admin']='Admin_Controller/admin';
$route['login-admin']='Admin_Controller/login';
$route['logout-admin']='Admin_Controller/logoutadmin';
$route['property-category']='Admin_Controller/property_category';
$route['view-property-category']='Admin_Controller/view_property_category';
$route['admin-property']='Admin_Controller/property';
$route['search_users_post_requirment']='Admin_Controller/search_users_post_requirment';
$route['view-admin-property']='Admin_Controller/view_property';
$route['add-main-category-property']='Admin_Controller/add_main_category_property';
$route['view-main-property-category']='Admin_Controller/view_main_property_category';
$route['view-admin-property-details/(:any)']='Admin_Controller/view_property_details/$1';
$route['view-admin-packages']='Admin_Controller/view_admin_packages';
$route['view-team']='Admin_Controller/view_team';
$route['view-team-details/(:any)']='Admin_Controller/view_team_details/$1';
$route['view-team-details/(:any)']='Admin_Controller/view_team_details/$1';
$route['view_users_post_requirment/(:any)']='Admin_Controller/view_users_post_requirment/$1';
$route['add_admin_sub_category']='Admin_Controller/add_admin_sub_category';
$route['view_sub_category']='Admin_Controller/view_sub_category';
$route['registered-users']='Admin_Controller/registered_users';
$route['update_admin_property/(:any)']='Admin_Controller/update_admin_property/$1';
$route['update_admin_property_images/(:any)']='Admin_Controller/update_admin_property_images/$1';
$route['admin_password_change']='Admin_Controller/admin_password_change';
$route['inactive_admin_property']='Admin_Controller/inactive_admin_property';
$route['active_admin_property']='Admin_Controller/active_admin_property';
$route['view_property_other']='Admin_Controller/view_property_other';
$route['view_property_details_other/(:any)']='Admin_Controller/view_property_details_other/$1';
$route['other_property_update/(:any)']='Admin_Controller/other_property_update/$1';
$route['update_admin_property_images_other/(:any)']='Admin_Controller/update_admin_property_images_other/$1';
$route['advertisment']='Admin_Controller/advertisment';
$route['view_advertisement']='Admin_Controller/view_advertisement';
/*admin section ends*/
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
