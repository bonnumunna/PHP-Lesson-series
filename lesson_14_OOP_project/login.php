<?php  
    class Login{
        // Properties
        private $username;
        // private $email;
        private $password;
        
        // Constructor
        public function __construct($username, $password){
            $this->username = $username;
            $this->password = $password;
        }
        // login() method
        public function login($username, $password){
            // Start session
            session_start();
            // Login code goes in here
            // Include database connection script
            include_once('classconnection.php');
            $sql = "SELECT * FROM login_table WHERE `username`='$username' AND `password`='$password'";
            $query = mysqli_query($connection, $sql);
            $num_rows = mysqli_fetch_array($query);
            if($num_rows >0){
                $_SESSION['user'] = $username;
                $_SESSION['pass'] = $password;
                header('location: postform.php');
            }else{
                die("This user does not exist");
            }
        }
        // logout method
        public function logout(){
            // Logout code goes in here
            session_start();
            session_destroy();
            header('location: index.php');
        }
    }

    class Register extends Login{
        // Declare a class constructor
        function __construct($username, $password){
            // Call parent class constructor
            parent::__construct($username, $password);
        }
        // Declare function to register student
        public function register($username, $password){
            // Include connection parameters
            include_once('classconnection.php');
            // Let's first check if user exist
            $sql = "SELECT * FROM login_table WHERE `username`='$username'";
            /**
             * mysqli_query() sends command to the database
             */
            $query = mysqli_query($connection, $sql);
            /**
             * mysqli_num_rows() checks for number of rows
             * where sql query is a match
             */
            $num_rows = mysqli_num_rows($query);
            if($num_rows){
                return "<h6>User already exists</h6>";
                exit();
            }else{
                /**
                 * If user does not exist, then send
                 * sql query to insert user detail into
                 * database
                 */
                $sql = "INSERT INTO login_table(`username`, `password`)
                VALUES('$username', '$password')";
                $query = mysqli_query($connection, $sql);
                if($query){
                    return "<h6>Registration Successful</h6>";
                }
            }
        }
    }
    
?>