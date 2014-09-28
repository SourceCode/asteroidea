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
 * Primary class for events in the system.  Can take an event name, the target that created the event
 * and an optional set of data to be passed during the event callback
 * 
 *
 * @package Cake.Event
 */
class asEvent
{
  
/**
 * Name of the event
 *
 * @var string
 */
    private $name;
    
/**
 * The object this event is attached to
 *
 * @var object
 */
    private $target;
    
/**
 * The data passed with to the registered callback for the event
 *
 * @var mixed
 */
    public $data;
    
/**
 * Contains the result of the event after its been called
 *
 * @var mixed
 */
    public $result;
    
/**
 * Controls locking of the event
 *
 * @var boolean
 */
    protected $_locked = false;
    
/**
 * Constructor
 *
 * @param string $name Event Name
 * @param object $target the object that this event targets (genearlly the spawning object)
 * @param mixed $data value that is transported to the event callback
 *
 * ## Example Usage:
 *
 * {{{
 *    $event = new asEvent('Data.postProcess', $this, array('location' => $locData));
 * }}}
 *
 */
    public function __construct($name, $target = null, $data = null)
    {
        $this->name = $name;
        $this->target = $target;
        $this->data = $data;
    }
    
/**
 * Dynamically returns the name and property if accessed directly
 *
 * @param string $property Property name.
 * @return mixed
 */
    public function __get($property)
    {
        if ($property == 'name' || $property == 'action')
        {
            return $this->{$property}();
        }
    }
/**
 * Returns the name of this event.  Generally this is the event identifier
 *
 * @return string
 */
    public function name()
    {
         return $this->name;
    }

/**
 * Returns the targer of this event.  Generally this is the event identifier
 *
 * @return mixed
 */
    public function target()
    {
         return $this->target;
    }

/**
 * Locks the event and prevents it from being triggered
 *
 * @return void
 */
    public function lock()
    {
        return $this->_locked = true;
    }

/**
 * Checks if the event is locked
 *
 * @return bool True if the event is locked
 */
    public function isLocked()
    {
        return $this->_locked;
    }
}

class asEventHandler
{
    
 
}

?>