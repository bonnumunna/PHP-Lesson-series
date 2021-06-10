<?php
    // ABSTRACT CLASSESS & ABSTRACT METHODS
    /**
     * Abstract classes are declared but never meant to be
     * instantiated. They are instead used in their inherited
     * states.
     * Abstrct class can NEVER have constructor
     * ==================================================
     * Abstract methods are instantiated in the abstract class but never implemented
     * in the the class where it was created. Instead, their body are implemented in the inherited class.
     */

    abstract class Family{
        public $father;
        protected $mother;
        
        abstract public function paternalUncle();
        abstract public function maternalUncle();
    }


    // Instantiate Family class
    //$family = new Family() # This will throw 
    class ExtendFamily extends Family{
        public function paternalUncle(){
            return "John Doe";
        }
        public function maternalUncle(){
            return "Harry Joe";
        }
    }    

    $extended = new ExtendFamily;

    echo $extended->maternalUncle();
?>