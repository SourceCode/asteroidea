<?php
/**
 * @package asteroidea
 * @author Ryan Rentfro, http://www.rentfro.net 
 * @version core.log.php, v0.0.1
 * @copyright Ryan Rentfro, http://www.rentfro.net
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License
 * @category core
 */
 
/**
 * @access public
 * @var object core log handler
 * @category objects
 */

 class asLog
 {
    use Singleton;
    
    public static function dbLog($note, $logGroupID = 1, $level = 1, $cUser = null)
    {
        global $mysqli;
        $mysqli->autocommit(FALSE);
        $logSQL = "INSERT INTO as_log SET level=" . $level . ", note='" . $note  . "', c_date=NOW()";
        if (is_numeric($cUser)) 
        {
            $logSQL .= ", c_user=". $cUser;
        }
        $logEntry = $mysqli->query($logSQL);
        $logID = $mysqli->insert_id;
        if (is_numeric($logGroupID) && is_numeric($logID))
        {
            $logGroupLogSQL = "INSERT INTO as_loggrouplog SET log_id=" . $logID . ", log_group_id=" . $logGroupID;
            $logGroupLog = $mysqli->query($logGroupLogSQL);
        }
        
        if ($logEntry && $logGroupLog)
        {
            $mysqli->commit();
            return true; 
        } else {
            $mysqli->rollback();
            return false;
        }
    }
    
    public static function sysLog($logData = array(), $logType = 'System')
    {
        $line = '--------------------------------------------------' . "\r\n";
        if (is_array($logData))
        {
            $log = implode("\r\n", $logData);
            $log = "log date: " . date("Y-m-d H:i:s") . "\r\n" . 'log type: ' . $logType . "\r\n" . $log . "\r\n" . $line;
            $logFile = $GLOBALS['filePath'] . '/system/logs/' . 'system-log-' . date("Ymd") . '.log';
            if (file_put_contents($logFile, $log, FILE_APPEND))
            {
                unset($log);
                return true;
            }
        }
        return false;
    }
    
    public static function fileLog($fileName, $logData = array(), $logType = 'System')
    {
        $line = '--------------------------------------------------' . "\r\n";
        if (is_array($logData))
        {
            $log = implode("\r\n", $logData);
            $log = "log date: " . date("Y-m-d H:i:s") . "\r\n" . 'log type: ' . $logType . "\r\n" . $log . "\r\n" . $line;
            $logFile = $GLOBALS['filePath'] . '/system/logs/' . $fileName;
            if (file_put_contents($logFile, $log, FILE_APPEND))
            {
                unset($log);
                return true;
            }
        }
        return false;
    }
    
    public static function getDBLog($itemCount = 10)
    {
        global $mysqli;
        if (is_numeric($itemCount))
        {
            $result = $mysqli->query("
                                SELECT a.id, a.level, a.note, a.c_date, 
                                c.group, c.type, d.username  
                                FROM as_log a 
                                INNER JOIN as_loggrouplog b ON a.id = b.log_id 
                                INNER JOIN as_log_group c ON b.log_group_id = c.id
                                LEFT JOIN as_user d ON a.c_user=d.id 
                                ORDER BY a.id DESC 
                                LIMIT " . $itemCount
                                );
                                
            if ($result)
            {
                while ($row = $result->fetch_assoc()) {
                    $log[] = $row;
                }
                return $log;
            }
        }
        return false;
    }
 }
 
?>