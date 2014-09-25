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

/**
* Core Includes
* 
* @var core globals
*/
require_once($GLOBALS['system'] . 'traits/trait.singleton.php');
require_once($GLOBALS['system'] . 'config.system.php');
require_once(asConfig::$filePath . 'system/lib/htmlpurifier-4.6.0-lite/library/HTMLPurifier.auto.php');
require_once(asConfig::$filePath . 'system/core/core.mysqli.php');
require_once(asConfig::$filePath . 'system/core/core.log.php');
require_once(asConfig::$filePath . 'system/core/core.session.php');


if (asConfig::$debugMode == true || FORCE_DEBUG == true) 
{

}
?>