<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Homecontroller');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Homecontroller::index');//

$routes->group('admin',function ($routes) {
    //admin-------
    // $routes->add('install','AdminController::install');
    $routes->add('login','Admincontroller::login'); 
    $routes->add('logout','Admincontroller::logout');
    $routes->add('dashboard','Admincontroller::dashboard');
    //$routes->add('profile','AdminController::profile');
    // $routes->add('password_change','AdminController::password_change');
    //subscriber  
    $routes->group('subscriber',function ($routes) {//allmail
        $routes->add('list','Subscribercontroller::subscriberList');
        //$routes->add('insert','SubscriberController::insert');
        $routes->add('delete/(:num)','Subscribercontroller::delete/$1');
        $routes->add('mail/(:any)','Subscribercontroller::mail/$1');
        $routes->add('allmail','Subscribercontroller::allMail');
    });
    
    $routes->group('setting',function ($routes) {
        $routes->add('index','Settingcontroller::index');
        $routes->add('email_setup','Settingcontroller::emailSetup');
        //$routes->add('delete/(:num)','SubscriberController::delete/$1');
    }); 

    $routes->group('counter',function ($routes) {
        $routes->add('index','Countercontroller::index');
        //$routes->add('insert','SubscriberController::insert');
        //$routes->add('delete/(:num)','SubscriberController::delete/$1');
    }); 

    $routes->group('visitor',function ($routes) {
        $routes->add('','Visitorcontroller::index');
        $routes->add('report','Visitorcontroller::report');
    });

    $routes->group('mailchimp',function ($routes) {
        $routes->add('','Settingcontroller::mailchimpIndex');
        $routes->add('submit','Settingcontroller::mailchimpSubmit');
    });
    $routes->group('constant_contact',function ($routes) {
        $routes->add('','Settingcontroller::constantContactIndex');
        $routes->add('submit','Settingcontroller::constantContactSubmit');
    });
    $routes->group('get_response',function ($routes) {
        $routes->add('','Settingcontroller::getResponseIndex');
        $routes->add('submit','Settingcontroller::getResponseSubmit');
    });

    $routes->group('moosend',function ($routes) {
        $routes->add('','Settingcontroller::moosendIndex');
        $routes->add('submit','Settingcontroller::moosendSubmit');
    });

    $routes->group('pages',function ($routes) {
        $routes->add('about_us','Pagescontroller::aboutUs');
        $routes->add('contact_us','Pagescontroller::contactUs');
        $routes->add('create','Pagescontroller::create');
        $routes->add('gallery','Gallerycontroller::galleryIndex');
        $routes->add('gallery_image_uplaod','Gallerycontroller::galleryImageUplaod');
        $routes->add('delete_gallery_image','Gallerycontroller::deleteGalleryImage');//
        $routes->add('get_all_gallery_image','Gallerycontroller::getAllGalleryImage');//
    });

  });  
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
