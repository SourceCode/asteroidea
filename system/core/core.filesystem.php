<?php
/**
 * @package asteroidea
 * @author Ryan Rentfro, http://www.rentfro.net 
 * @version core.filesystem.php, v0.0.1
 * @copyright Ryan Rentfro, http://www.rentfro.net
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License
 * @category core
 */
 
/**
 * @access public
 * @var object core filesystem handler
 * @category objects
 */
class asFilesystem
{
/**
 * Root Deployment Directory
 *
 * @var string
 */
    private $root;
    
/**
 * System Cache
 *
 * @var string
 */
    private $cache;
    
/**
 * System Core
 *
 * @var string
 */
    private $core;
    
/**
 * System Interfaces
 *
 * @var string
 */
    private $interfaces;
    
/**
 * System l18n
 *
 * @var string
 */
    private $l18n;
    
/**
 * System Lib
 *
 * @var string
 */
    private $lib;
    
/**
 * System Logs
 *
 * @var string
 */
    private $logs;
    
/**
 * System Modules
 *
 * @var string
 */
    private $modules;
    
/**
 * System Network
 *
 * @var string
 */
    private $network;
    
/**
 * System Plugins
 *
 * @var string
 */
    private $plugins;
    
/**
 * System Themes
 *
 * @var string
 */
    private $themes;
    
/**
 * System Traits
 *
 * @var string
 */
    private $traits;
    
/**
 * Constructor
 *
 * ## Example Usage:
 *
 * {{{
 *    $fileSystem::root();
 * }}}
 *
 */
    public function __construct()
    {
        $this->root = ROOT;
        $this->cache = $this->root . DS . SYS . DS . 'cache';       
        $this->core = $this->root . DS . SYS . DS . 'core';       
        $this->interfaces = $this->root . DS . SYS . DS . 'interfaces';       
        $this->l18n = $this->root . DS . SYS . DS . 'l18n';       
        $this->lib = $this->root . DS . SYS . DS . 'lib';       
        $this->logs = $this->root . DS . SYS . DS . 'logs';       
        $this->modules = $this->root . DS . SYS . DS . 'modules';       
        $this->network = $this->root . DS . SYS . DS . 'network';       
        $this->plugins = $this->root . DS . SYS . DS . 'plugins';       
        $this->themes = $this->root . DS . SYS . DS . 'themes';       
        $this->traits = $this->root . DS . SYS . DS . 'traits';       
    }

/**
 * Dynamically returns the name and property if accessed directly
 *
 * @param string $property Property name.
 * @return string
 */
    public function __get($property)
    {
        $methods = array('root', 'cache', 'core', 'interfaces', 'l18n', 'lib', 'logs', 'modules', 'network', 'plugins', 'thenes', 'traits');
        if (in_array($propery, $methods))
        {
            return $this->{$property}();    
        }    
    }
    
/**
 * Returns the root directory filepath
 *
 * @return string
 */
    public static function root()
    {
        return $this->root;    
    }
    
/**
 * Returns the system cache
 *
 * @return string
 */
    public static function cache()
    {
        return $this->cache;    
    }

/**
 * Returns the system core
 *
 * @return string
 */
    public static function core()
    {
        return $this->core;    
    }
    
/**
 * Returns the system interfaces
 *
 * @return string
 */
    public static function interfaces()
    {
        return $this->interfaces;    
    }

/**
 * Returns the system l18n
 *
 * @return string
 */
    public static function l18n()
    {
        return $this->l18n;    
    }

/**
 * Returns the system lib
 *
 * @return string
 */
    public static function lib()
    {
        return $this->lib;    
    }

/**
 * Returns the system logs
 *
 * @return string
 */
    public static function logs()
    {
        return $this->logs;    
    }
    
/**
 * Returns the system modules
 *
 * @return string
 */
    public static function modules()
    {
        return $this->modules;    
    }
    
/**
 * Returns the system network
 *
 * @return string
 */
    public static function network()
    {
        return $this->network;    
    }
    
/**
 * Returns the system plugins
 *
 * @return string
 */
    public static function plugins()
    {
        return $this->plugins;        
    }
    
/**
 * Returns the system themes
 *
 * @return string
 */
    public static function themes()
    {
        return $this->themes;    
    }
    
/**
 * Returns the system traits
 *
 * @return string
 */
    public static function traits()
    {
        return $this->traits;    
    }
}
?>