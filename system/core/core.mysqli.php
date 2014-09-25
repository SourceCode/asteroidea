<?php
/**
 * @package asteroidea
 * @author Ryan Rentfro, http://www.rentfro.net 
 * @version core.mysqli.php, v0.0.1
 * @copyright Ryan Rentfro, http://www.rentfro.net
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License
 * @category core
 */
 
/**
 * @access public
 * @var object core mysqli handler
 * @category objects
 */

$mysqli = mysqli_init();
if (!$mysqli->options(MYSQLI_INIT_COMMAND, 'SET AUTOCOMMIT = 0')) die('Setting MYSQLI_INIT_COMMAND failed');
if (!$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 5)) die('Setting MYSQLI_OPT_CONNECT_TIMEOUT failed');
if (!$mysqli->real_connect(halConfig::$dbHost, halConfig::$dbUser, halConfig::$dbPass, halConfig::$dbDatabase)) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}
?>