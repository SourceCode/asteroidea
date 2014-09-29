<?php
/**
 * @package asteroidea
 * @author Ryan Rentfro, http://www.rentfro.net 
 * @version config.system.php, v0.0.1
 * @copyright Ryan Rentfro, http://www.rentfro.net
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License
 * @category core
 */

/**
 * Primary class for system configurations
 * 
 */
class asConfig
{
    use Singleton;
    
/**
 * Name of the project
 *
 * @var string
 */
    public static $projectName = 'Asteroidea';
    
/**
 * Toggles the system debuggers
 *
 * @var boolean
 */
    public static $debugMode = true;
    
/**
 * Controls the salt that is added to md5 hashes
 *
 * @var string
 */
    public static $salt = '9825728342394582';
    
/**
 * Database hostname or IP
 *
 * @var string
 */
    public static $dbHost = 'localhost';
    
/**
 * Database user username
 *
 * @var string
 */
    public static $dbUser = 'root';
    
/**
 * Database user password
 *
 * @var string
 */
    public static $dbPass = '';
    
/**
 * Database name
 *
 * @var string
 */
    public static $dbDatabase = 'asteroidea';
    
/**
 * SMTP Host or IP
 *
 * @var string
 */
    public static $smtpHost = '';
    
/**
 * SMTP Port
 *
 * @var integer
 */
    public static $smtpPort = '';
    
/**
 * SMTP From Address
 *
 * @var string
 */
    public static $smtpFrom = '';
    
/**
 * SMTP Username
 *
 * @var string
 */
    public static $smtpUser = '';
    
/**
 * SMTP Password
 *
 * @var string
 */
    public static $smtpPass = '';
    
/**
 * Enable or Disable SSL
 *
 * @var string
 */
    public static $smtpSSL = false;
    
/**
 * Optional File Storage Path
 *
 * @var string
 */
    public static $fileStorage = '';
    
/**
 * Optional Log Storage Path
 *
 * @var string
 */
    public static $logStorage = '';
    
/**
 * Optional CLI Path
 *
 * @var string
 */
    public static $cliStorage = '';
    
/**
 * Optional Theme Storage Path
 *
 * @var string
 */
    public static $themeStorage = '';
    
/**
 * Optional HTML Purifier Configuration
 *
 * @var array
 */
    public static $htmlpurifierConfig = '';
    
/**
 * Optional Timezone Definition
 *
 * @var string
 */
    public static $timezone = '';
    
/**
 * The webpath to be used
 *
 * @var string
 */
    public static $webPath = 'http://localhost/asteroidea/';
    
/**
 * The subpath for astroidea
 *
 * @var string
 */
    public static $subPath = 'asteroidea';
    
/**
 * Controls if user authentication should be logged
 *
 * @var boolean
 */
    public static $logUserAuth = true;

/**
 * Controls the date format outputted for user views for the system from SQL
 *
 * @var string
 */
    public static $mysqlDateFormat = '%b %d %Y %h:%i %p';
    
/**
 * Controls the date format outputted for user views for the system from PHP
 *
 * @var string
 */
    public static $phpDateFormat = 'F j, Y, g:i a';
    
}
 
?>