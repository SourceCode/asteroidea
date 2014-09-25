<?php
session_start();
/**
 * @package asteroidea
 * @author Ryan Rentfro, http://www.rentfro.net 
 * @version core.php, v0.0.1
 * @copyright Ryan Rentfro, http://www.rentfro.net
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License
 * @category core
 */
 
/**
 * @access public
 * @var object core
 * @category objects
 */

/**
* Application Globals
* 
* @var core globals
*/
$GLOBALS['package'] = 'asteroidea';
$GLOBALS['version'] = '0.0.1';
$GLOBALS['app'] = '';
$GLOBALS['filePath'] = str_replace('\system\core', '', dirname(__FILE__));
$GLOBALS['webPath'] = $_SERVER['REQUEST_URI'];
$GLOBALS['system'] = $GLOBALS['filePath'] . '/system/';

require_once($GLOBALS['system'] . 'traits/trait.singleton.php');
require_once($GLOBALS['system'] . 'config.system.php');


?>