<?php
/**
 * @package asteroidea
 * @author Ryan Rentfro, http://www.rentfro.net 
 * @version trait.singleton.php, v0.0.1
 * @copyright Ryan Rentfro, http://www.rentfro.net
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License
 * @category core
 */
 
/**
 * @access public
 * @var object trait
 * @category traits
 */
 
trait Singleton
{
    protected static $instance;
    final public static function getInstance()
    {
        return isset(static::$instance)
            ? static::$instance
            : static::$instance = new static;
    }
    final private function __construct() 
    {
        $this->init();
    }
    protected function init() {}
    final private function __wakeup() {}
    final private function __clone() {}    
}
?>