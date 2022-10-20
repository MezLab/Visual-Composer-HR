<?php
/**
 * Plugin Name:       WPackage HR
 * Description:       Functions
 * Version:           1.1
 * Requires PHP:      7
 * Author:            Mez
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

// ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

/**
 * Aggiunge il 
 * menu principale 
 * nella barra di sinistra
 */
function hr_admin_menu(){

   add_menu_page(
     'HR | Infomobility', // Page Title
     'HR | Infomobility', // Menu Title
     'manage_options', // Capability
     'wpackage_hr', // Menu Slug
     'login_page', // Callback => login_page()
     plugin_dir_url(__FILE__) . '../../admin/media/img/cube_min.png', // Icon URL
     5 // Position
   );
  
 }

 add_action('admin_menu', 'hr_admin_menu'); 

/**
 * Richiama il file PHP "admin/login.php"
 * Callback => login_page()
 */
 function login_page(){
   require plugin_dir_path(__FILE__) . '../../admin/login.php';
 }


// <>-<>-<>-<>-<>-<>-<>-<>-<>-<>-<>-<>- //


 /**
  * Aggiunge la voce
  * di sottomenu per
  * la creazione dei Moduli
  */

function hr_module(){

   add_submenu_page(
     'wpackage_hr',  // Parent Menu Slug
     'Moduli', // Page Title
     'Moduli', // Menu Title
     'manage_options', // Capability
     'admin_module_page', // Menu Slug
     'module_page', // Callback => module_page()
     1 // Position
   );
  
 }

 add_action('admin_menu', 'hr_module');

/**
 * Richiama il file PHP "admin/module.php"
 * Callback => module_page()
 */
 function module_page(){
   require_once plugin_dir_path(__FILE__) . '../../admin/module.php';
 }


// <>-<>-<>-<>-<>-<>-<>-<>-<>-<>-<>-<>-<> //



/**
 * Aggiunge la voce
 * di sottomenu per 
 * la gestione dei candidati
 */

function hr_candidate(){

   add_submenu_page(
     'wpackage_hr', // Parent Menu Slug
     'Candidati', // Page Title
     'Candidati', // Menu Title
     'manage_options', // Capability
     'admin_candidate_page', // Menu Slug
     'candidate_page', // Callback => candidate_page()
     2 // Position
   );
  
 }

 add_action('admin_menu', 'hr_candidate');

/**
 * Richiama il file PHP "admin/module.php"
 * Callback => candidate_page()
 */
 function candidate_page(){
   require_once plugin_dir_path(__FILE__) . '../../admin/candidate.php';
 }


// <>-<>-<>-<>-<>-<>-<>-<>-<>-<>-<>-<>-<> //



/**
 * Aggiunge la voce
 * per la gestione di
 * registrazione candidati
 */

function hr_register(){

   add_submenu_page(
     'admin_candidate_page', // Parent Menu Slug
     'Registrazione Candidati', // Page Title
     'Registrazione Candidati', // Menu Title
     'manage_options', // Capability
     'admin_mailSend', // Menu Slug
     'register_page', // Callback => register_page()
     2 // Position
   );
  
 }

 add_action('admin_menu', 'hr_register');

/**
 * Richiama il file PHP "admin/module.php"
 * Callback => register_page()
 */
 function register_page(){
   require_once plugin_dir_path(__FILE__) . '../../admin/mail.php';
 }


// <>-<>-<>-<>-<>-<>-<>-<>-<>-<>-<>-<>- //


/**
 * Visione 
 * singolo candidato
 */

function view_candidate(){

   add_submenu_page(
     'admin_candidate_page', // Parent Menu Slug
     'Visione Candidato', // Page Title
     'Visione Candidato', // Menu Title
     'manage_options', // Capability
     'view_candidate', // Menu Slug
     'view_candidate_page', // Callback => view_candidate_page()
     2 // Position
   );
  
 }

 add_action('admin_menu', 'view_candidate');

/**
 * Richiama il file PHP "admin/module.php"
 * Callback => view_candidate_page()
 */
 function view_candidate_page(){
   require_once plugin_dir_path(__FILE__) . '../../admin/viewCandidate.php';
 }


// <>-<>-<>-<>-<>-<>-<>-<>-<>-<>-<>-<>- //


 /**
  * Aggiunge la voce
  * di sottomenu per
  * la creazione dei Utenti
  */

function hr_user(){

   add_submenu_page(
     'wpackage_hr',  // Parent Menu Slug
     'Utenti', // Page Title
     'Utenti', // Menu Title
     'manage_options', // Capability
     'admin_user_page', // Menu Slug
     'user_page', // Callback => user_page()
     1 // Position
   );
  
 }

 add_action('admin_menu', 'hr_user');

/**
 * Richiama il file PHP "admin/module.php"
 * Callback => user_page()
 */
 function user_page(){
   require_once plugin_dir_path(__FILE__) . '../../admin/user.php';
 }



 // <>-<>-<>-<>-<>-<>-<>-<>-<>-<>-<>-<>- //


 /**
  * Aggiunge la voce
  * di sottomenu ad Utenti
  */

function hr_newUser(){

   add_submenu_page(
     'admin_user_page',  // Parent Menu Slug
     'Nuovo Utente', // Page Title
     'Nuovo Utente', // Menu Title
     'manage_options', // Capability
     'admin_newUser', // Menu Slug
     'newUser_page', // Callback => newUser_page()
     1 // Position
   );
  
 }

 add_action('admin_menu', 'hr_newUser');

/**
 * Richiama il file PHP "admin/newUser.php"
 * Callback => newUser_page()
 */
 function newUser_page(){
   require_once plugin_dir_path(__FILE__) . '../../admin/newUser.php';
 }



  // <>-<>-<>-<>-<>-<>-<>-<>-<>-<>-<>-<>- //


 /**
  * Aggiunge la voce
  * di sottomenu a Moduli
  */

function hr_newModule(){

   add_submenu_page(
     'admin_module_page',  // Parent Menu Slug
     'Nuovo Modulo', // Page Title
     'Nuovo Modulo', // Menu Title
     'manage_options', // Capability
     'admin_newModule', // Menu Slug
     'newModule_page', // Callback => newModule_page()
     1 // Position
   );
  
 }

 add_action('admin_menu', 'hr_newModule');

/**
 * Richiama il file PHP "admin/module.php"
 * Callback => newModule_page()
 */
 function newModule_page(){
   require_once plugin_dir_path(__FILE__) . '../../admin/newModule.php';
 }


  // <>-<>-<>-<>-<>-<>-<>-<>-<>-<>-<>-<>- //


 /**
  * Aggiunge la voce
  * di sottomenu a Moduli
  * per la mail di risposta
  */

function hr_reply(){

   add_submenu_page(
     'admin_module_page',  // Parent Menu Slug
     'Mail di Risposta', // Page Title
     'Mail di Risposta', // Menu Title
     'manage_options', // Capability
     'admin_reply', // Menu Slug
     'reply_page', // Callback => reply_page()
     1 // Position
   );
  
 }

 add_action('admin_menu', 'hr_reply');

/**
 * Richiama il file PHP "admin/module.php"
 * Callback => reply_page()
 */
 function reply_page(){
   require_once plugin_dir_path(__FILE__) . '../../admin/reply.php';
 }
 

 // <>-<>-<>-<>-<>-<>-<>-<>-<>-<>-<>-<>-<> //


/**
 * Aggiunge i file
 * CSS & JS
 * Style Plugin
 */
    
function wpackage_hr_all_styles(){

  wp_enqueue_style(
    'wpackage_hr_css',
    plugins_url('../../library/css/style.css', __FILE__)
  );

  wp_enqueue_script(
    'wpackage_hr_js',
    plugins_url('../../library/js/script.js', __FILE__),
    array(),
    '1.0.0',
    true
  );

  wp_enqueue_script(
    'wpackage_hr_script',
    plugins_url('../../library/js/hr_form.js', __FILE__),
    array(),
    '1.0.0',
    true
  );

  wp_enqueue_script(
    'wpackage_hr_class_input',
    plugins_url('../../library/js/class_form.js', __FILE__),
    array(),
    '1.0.0',
    true
  );

}

add_action( 'admin_enqueue_scripts', 'wpackage_hr_all_styles');
