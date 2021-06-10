<?php
    /**
     * Just as normal variables can be declared as 
     * constants, such that their values will not 
     * change while the program is running, we can also
     * have static properties and methods for classes.
     * Accessing static properties and methods are done
     * in a special way called 'scope resolution'.
     * This is denoted by the :: sign as against -> sign
     */
    class Fruits{
        public static $name = "Grape";
        public static $shape = "round";
        public static $color = "Greenish Yellow";

        public static function describe(){
            return self::$color." in color";
        }
    }
    /**
     * To use a property or method that is not defined
     * as static we would have to instatiate the class
     * into an object of the class.
     * However, for static properties, WE DON'T HAVE TO
     * INSTANTIATE THEM
     * ===================
     * NOTE: Classes without constructors will 
     * be instantiated without the paranthesis.
     * Just as PHP has inbuilt functions, so also, it
     * has inbuilt classes.
     * And just as we can write user defined functions
     * We also can write our own user defined classes.
     */
    // Instantiating user defined class
    $fruits = new Fruits;
    // Instantiating inbuilt PHP class
    // $zip = new ZipArchive;
    // using the object of user defined class
    // echo $fruits->name;
    echo "<br>";
    // Accessing static property
    // echo Fruits::$color;
    echo "<br>";
    // echo Fruits::describe();

    class Berries extends Fruits{
        private static $taste="sour";

        public function getTaste(){
            return self::$taste." is for ".parent::$name;
        }
    }

    $berr = new Berries;
    echo $berr->getTaste();
?>