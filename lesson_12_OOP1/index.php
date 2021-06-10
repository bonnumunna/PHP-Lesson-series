<?php
    /**
     * INTRODUCTION TO OBJECT ORIENTED PROGRAMMING (OOP)
     * As against procedural style of coding, we can use the OOP features in
     * PHP to segment related parts of our codes into classes.
     * Such class can be called where their properties and methods (in-built functions)
     * are needed.
     * NB: This style of programming should only be used when it is absolute
     * necessary to do so, like in some big projects or where the logic of our application warrants the use of objects
     * 
     * We create a class using the keyword class and then the class name 
     * starting with a capital letter.
     */

     class Person{
        //  public $name;   // Accessible anywhere outside the class where it's called
        //  private $email; // Accessible only within the class
        //  protected $age; // Accessible within the class and inside child class
        protected $name;
        protected $email;
        protected $age;
        
        /**
         * Construct is the block of code that will automatically 
         * run once a class is instantiated. The syntax for creating a
         * a construct is as shown below:
         * NB. Construct can take in parameters for the class variables
         */
        public function __construct($name, $email, $age){
            echo "Adam has been created: <br><br>";
            $this->name = $name;
            $this->email = $email;
            $this->age = $age;
        }
        // Setter Method Used to internally set class properties
        // public function setName($name){
        //     $this->name = $name;
        // }
        //Getter Method Used to internally get class properties
        public function getName(){
            return "<br>".$this->name;
        }
     }
    // Instantiation of the Person Object
    //  $person = new Person('Boris Johnson', 'bjohnson@uk.gov', 54);

     $person->name = "John Doe";
    //  $person->age = 34;
    //  $person->email = "jdoe@gmail.com";

    //  echo $person->name;
    // $person->setName('Muhammadu Buhari');
    // echo $person->getName();
    // echo $person->getName();

     /**
      * Create a Class, call it Wife.
      * Assign properties: name, email, age, complexion, location to it.
      * Using any of the prefered methods dicussed, create a way of accessing
      * the variables already declared as private
      */

      class Wife extends Person{
          private $complexion;
          private $cook;

        public function __construct($name, $email, $age, $complexion, $cook){
              parent::__construct($name, $email, $age);
              echo "Eve has been made. <br>";
              $this->complexion = $complexion;
              $this->cook = $cook;
        }

            public function getName(){
                return $this->name . "<br>";
            }
            public function getEmail(){
                return $this->email . "<br>";
            }
            public function getAge(){
                return $this->age . "<br>";
            }
            public function getComplexion(){
                return "Her complexion is ". $this->complexion . "<br>";
            }
            public function getCook(){
                if($this->cook == 'yes'){
                    return "She can cook <br>";
                }else{
                    return  "Cannot cook<br>";
                }
            }
      }
      $woman = new Wife("Jane Johnson", "jj@uk.gov", "50", "White", 'yes');
    //   $woman = new Wirfe($name, $email, $age, $complexion, $cook);

      echo $woman->getComplexion();
      echo $woman->getCook();
?>
