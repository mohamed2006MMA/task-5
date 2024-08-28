<?php

class Logger {
    private static $logCount = 0;

   
    public static function logMessage($message) {
        // Increment the log count each time a message is logged
        self::$logCount++;
        echo "Log #" . self::$logCount . ": " . $message . "\n";
    }

    public static function getLogCount() {
        return self::$logCount;
    }
}

// Example usage
Logger::logMessage("This is the first log message.");
Logger::logMessage("This is the second log message.");
Logger::logMessage("Another log message.");

// Output the total number of log messages
echo "Total log count: " . Logger::getLogCount() . "\n";

?>
