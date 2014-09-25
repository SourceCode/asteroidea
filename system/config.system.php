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
 * @access public
 * @var object core config
 * @category objects
 */

class asConfig
{
    use Singleton;
    
    public static $projectName = 'Asteroidea';
    
    public static $debugMode = true;
    
    public static $salt = '9825728342394582';
    
    public static $dbHost = 'localhost';
    public static $dbUser = 'root';
    public static $dbPass = '';
    public static $dbDatabase = 'irie';
    
    public static $smtpHost = '';
    public static $smtpPort = '';
    public static $smtpFrom = '';
    public static $smtpUser = '';
    public static $smtpPass = '';
    public static $smtpSSL = false;
    
    public static $fileStorage = '';
    public static $logStorage = '';
    public static $cliStorage = '';
    public static $themeStorage = '';
    
    public static $htmlpurifierConfig = '';
    
    public static $timezone = '';
    
    public static $webPath = 'http://localhost/asteroidea/';
    public static $filePath = 'c:/wamp/www/asteroidea/';
    public static $subPath = 'asteroidea';
    
    public static $logUserAuth = true;
    
    public static $mysqlDateFormat = '%b %d %Y %h:%i %p';
    public static $phpDateFormat = 'F j, Y, g:i a';
    
    protected function init()
    {
        
    }
}
 
?>