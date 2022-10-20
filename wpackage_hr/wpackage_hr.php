<?php
/**
 * Plugin Name:       WPackage HR
 * Description:       Gestione Candidature
 * Version:           1.0
 * Requires PHP:      7
 * Author:            Mez
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

if(!defined('ABSPATH'))exit;

/**
 * Non Cancellare questa sezione
 * Non Eliminare i require
 * Prego non modificare
 * Grazie!!!!!!
 */

/** Funzionalità */
// BACK
require(plugin_dir_path(__FILE__) . 'include/back/wp_function.php');
require(plugin_dir_path(__FILE__) . 'include/back/hr_function.php');

// FRONT
require(plugin_dir_path(__FILE__) . 'include/front/function.php');


/** CLASSI */
require(plugin_dir_path(__FILE__) . 'class/class_user.php');
require(plugin_dir_path(__FILE__) . 'class/class_module.php');
require(plugin_dir_path(__FILE__) . 'class/class_candidate.php');
require(plugin_dir_path(__FILE__) . 'class/class_table.php');


/** ShortCode */
require(plugin_dir_path(__FILE__) . 'include/back/shortcode.php');

/** Search */
require(plugin_dir_path(__FILE__) . 'admin/_search.php');

?>

<!-- Send Form JS Ajax -->
<!-- Chiamata AJAX per la compilazione del processo  -->
<script src="<?php echo plugins_url('library/js/send.js', __FILE__); ?>"></script>
<!-- End Send Form JS Ajax -->