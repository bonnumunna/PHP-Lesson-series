<?php
    // ==== PHP ARRAYS ==== //
    /*
      Arrays in PHP are of 3 types
      1. Numeric or Simple Arrays
      2. Associative Arrays
      3. Multidimentional Arrays
     */
    // Arrays in PHP Can Be written in two ways
    // WITH ARRAY FUNCTION 
    $cars1 = array('Audi', 'Ford', 'Volvo', 'Benz');
    // WITH SQUARE BRACKETS 
    $cars2 = ['Honda', 'Mitsubishi', 'Acura', 'Hyundai'];

    // Accessing Arrays with thier index
    // echo $cars1[3];
    // echo $cars2[1];
    // echo count($cars1);

    // SIMPLE ARRAY
    $OCR2 = array('Aaron', 'Benson', 'Camil', 'Damian', 'Effiong');
    $OCR1 = ['Amos', 'Beckett', 'Charles', 'David', 'Edwin'];

    // echo $OCR2[0];

    // echo count($OCR2);

    // ASSOCIATIVE ARRAYS
    /*
      They are written as Key => Value pairs
      The key points to the value when accessing the array
      The key is passed as the index parameter
     */

     $student_id = ['ID1'=>'Obruche', 'ID2'=>'Edet', 'ID3'=>'Johnson'];
     $stundent_email = array('John'=>'john.doe@gmail.com', 'adam'=>'adam_smith@yahoo.co.uk');
     $student = [1=>'Obruche', 2=>'Edet', 3=>'Okon'];

    //  echo $student_id['ID3'];

    // MULTIDIMENTIONAL ARRAYS
    /*
      Multidimentional arrays are arrays inside arrays
     */

     $OCR2 = array(
         ['Reginald', 'Obruche', 'Iroro'],
         ['Seyi', 'Wisdom', 'John'],
         ['Efe', 'Omas', 'Edet']
     );

    //  echo $OCR2[1][2];
    $car_model = [
        ['name'=>'Lexus', 'model'=>'IS350', 'price'=>'4M'],
        ['name'=>'Toyota', 'model'=>'Highlander', 'price'=>'8M'],
        ['name'=>'RollsRoyce', 'model'=>'2020', 'price'=>'$500,000']
    ];

    // echo $car_model[2]['name'];

    $carString = "My favourite car is ".$car_model[0]['name']
    .", the model is ".$car_model[0]['model'].". It costs ".$car_model[0]['price'];
    
    // echo $carString;
    $car_model2 = [
        'Toyota' => array('model'=>'Highlander', 'price'=>'3M'),
        'Benz' => array('model'=>'4matic', 'price'=>'12M'),
        'Lexus' => array('model'=>'L350', 'price'=>'5M'),
    ];

    // print_r($cars2);
    // var_dump($cars2);
     print_r($car_model2['Toyota']['model']);

?>