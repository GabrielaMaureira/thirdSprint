<?php

class Tigger { 

    // Attributes
    private static $roarCounter = 0;
    private static $instances = []; // The only instance created is going to be saved at this array which one allows to save another uniques instances from other subclasses.

    // Constructor method
    protected function __construct() { // Hiding constructor with protected
            echo "Building character..." . PHP_EOL; 
            
    }

    // Class methods

    protected function __clone(){} // Hiding these two methods to prevent cloning and serialization
    protected function __wakeup(){}

    public static function getInstance(): Tigger { // Only way to have access to constructor. Only if it doesn't exists an instance, it must be created. If its created we return that one instance from the array
        $cls  = static::class;
        if (!isset(self::$instances[$cls])){
            self::$instances[$cls] = new static();
        }
        return self::$instances[$cls];
    }

    public static function roar() { 
        self::$roarCounter ++; // Everytime roar() function is called, we add +1 to attribute $roarCounter
        echo "Grrr!" . PHP_EOL;
    } 

    public static function getCounter(){
        echo self::$roarCounter. " roars";

    }

}
?>