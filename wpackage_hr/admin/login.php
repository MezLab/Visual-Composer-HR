<?php
/**
 * Plugin Name:       WPackage HR
 * Description:       Gestione Candidature
 * Version:           1.1
 * Requires PHP:      7
 * Author:            Mez
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

// ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

/**
 * @session START
 */
session_start();
global $HR_LOGIN;

if(isset($_SESSION['ID_User'])){
  $HR_LOGIN->setUser($_SESSION['ID_User']);
}


if(!$_SESSION["access"] == true){

  if(isset($_POST['btn_'])){

  /** Varibili GET Form Login */
    
  $nm = $_POST['user_hr']; // Nome o Mail
  $psw = $_POST['psw_hr']; // Password
  $btn = $_POST['btn_']; // Bottone

  /** Controllore LOGIN */
  $HR_LOGIN->login($nm, $psw, $btn);


  }

  /**
  * Gestione dell'errore|successo
  * con opportuno messaggio
  */
}else{
  /*** Front End della pagina LOGIN */
  require(plugin_dir_path(__FILE__) . 'header.php');
}


if(isset($_GET['admin'])){
  $HR_LOGIN->getError($_REQUEST['admin']);
}


/**
 * @param $array
 * path: 'include/front/function.php'
 */
echo section_top_myPlugIn( array("h1" => "Area Login", "p" => "Accedi alla gestione HR") );

?>

<!-- Front End Form di LOGIN -->
<form class="formHR" action="?page=wpackage_hr" method="POST">
  <label for="">Email</label>
  <input type="text" name="user_hr" id="user_hr">
  <label for="">Password</label>
  <input type="password" name="psw_hr" id="psw_hr">
  <button type="submit" name="btn_">Accedi</button>
</form>