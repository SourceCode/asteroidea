<?php
/**
 * @package asteroidea
 * @author Ryan Rentfro, http://www.rentfro.net 
 * @version index.php, v0.0.1
 * @copyright Ryan Rentfro, http://www.rentfro.net
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License
 * @category bootstrap
 */

/**
 * Root Directory Global
 *
 * @var string
 */
define('ROOT', dirname(__FILE__));

/**
 * Directory Seperator Global
 *
 * @var string
 */
define('DS', DIRECTORY_SEPARATOR);

/**
 * System Directory Path
 *
 * @var string
 */
define('SYS', 'system');


/**
 * Require and Start Core
 *
 */
require_once(ROOT . DS . SYS . 'core' . DS . 'core.php');
?>
