<?php
    // include_once('./inc/connection.php');
    class Student{
        private $name;
        private $id;
        private $course;
        private $registrationYear;
        // private $connection;

        public function __construct($name, $id, $course, $registrationYear){
            // echo "Constructor Created<br>";
            $this->name = $name;
            $this->id = $id;
            $this->course = $course;
            $this->registrationYear;
            // connecet to database
            
        }

        // Setter Method
        public function payFees($name, $id){
            // Block of code to show that fees has been paid
        }
        public function updateCourse($name, $id, $course){
            // Block of code to show that fees has been paid
        }
        public function graduateStudent(){
            // Block of code to show that fees has been paid

        }

        // Getter Method
        public function checkStudent($name, $id){
            $this->name = $name;
            $this->id = $id;
            $connection = mysqli_connect('localhost', 'root', '', 'students');

            if(mysqli_connect_errno($connection)){
                echo "Error!".mysqli_connect_error();
                exit();
            }
            // Block of code to show that fees has been paid
            $sql = "SELECT * FROM `student_table` WHERE `regNumber`='$this->id'";
            $query = mysqli_query($connection, $sql);
            $array = mysqli_fetch_array($query);
            $num = mysqli_num_rows($query);
            if($num > 0){
                return "Student Exist<br>
                        Name: {$array['name']}<br>
                        Course: {$array['course']}<br>
                        Course: {$array['course']}<br>

                ";
            }else{
                return "Sorry student does not exist";
            }
        }
        public function getRegistrationDate($name, $id){
            // Block of code to show that fees has been paid
        }
        public function getName(){
            return "NAME: ".$this->name;
        }
        
        // public function __destruct(){
        //     echo "<br>Class call has ended<br>";
        // }

    }

    $stu = new Student('Abraham', 'ab0001', 'Web Development', '2001');

    // echo $stu->getName();
    echo $stu->checkStudent('Abraham', 'ab0001');
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <label>Paid Fees? <br>
        <input type="radio" name="payFees" value="yes">Yes
        <input type="radio" name="payFees" value="no">No
    </label>
    </form>
</body>
</html>