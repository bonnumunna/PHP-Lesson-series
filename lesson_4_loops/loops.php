<?php
/* 
    =============================LOOPS IN PHP ========================
        While perrforming task(s), there usually are cases wgere certain process have to be repeated over and over until certain coditions are met
        such scenarios are handled by looping cinsructs in programmin. PHP offers the following types of loops:
        1. for...loop
        2. foreach... loop
        3. while ...loop
        4. do ...while loop
    */

    //FOR LOOP

    # COUNT FORM 0 - 10   upwards
    // for($i=0; $i <=10){
    //     echo $i."<br>";
    //     //INCREMENT THE COUNTER
    //     $i = $i = 1; #ADDITION BY 1
    //      $i += 1;  #COMPLEX ASSIGNMENT
    //      $i++; #INCREMENT OPERATOR
    // }
    // for($i=50; $i >=25;){
    //     echo $i."<br>";
    //     $i = $i - 1; 
    // }

  //WHILE LOOP
    //   $num = 30;
    //     while ($num>=0){
    //         echo $num . "<br>";
    //         //INCREMENT COUNTER
    //         $num--; #INCREMENT BY 1
    //     }  
        

//         $num = 40;
//         while ($num<=30){
//             echo $num."<br>";
//             //INCREMENT COUNTER
//             $num++; #INCREMENT BY 1}
//         }
//             echo "whie loop jumped<br>";
//             do{
//                 echo $num ."<br>";
//                 $num++; #INCREMENT BY 1
//             }while($num <=30);

// $phplesson4=array('Parish', 'Ovie', 'Christian','Lucas', 'Fegor', 'Favour');
// for($i=0; $i<6; $i++){
//     echo $phplesson4[$i]. "<br>";
// }
// //FOREACH LOOP
// $profile=[
//     'name'=> 'John Doe',
//     'age' =>42,
//     'gender' =>'male',
//     'country' => 'USA',
//     'marital_status' => true
// ];
// // echo $profile ['age']

// foreach($profile as $key =>$value){
// echo $key . " ".$value. "<br>";
// }

//BREAK AND CONTINUE STATEMENTS
/* 
There is a possibility of skipping a certain iteration count or outrightly discontinuing counting operation in aloop. This is achieved using the continue and reak keyword respectively.
// */
// for($i =1; $i <=10; $i++){
//     //Check if is a certain value
//    if($i ==5){
//     continue;
//    }
//    echo $i . "<br>";
// }
// echo "=================================<br>";
// for($i =1; $i <=10; $i++){
//     //Check if is a certain value
//    if($i ==5){
//     break;
//    }
//     echo $i . "<br>";
// }
for($i = 1; $i <=10; $i++){
    //Check if is a certain value
    if($i/2){
        echo $i . "<br>";
    }
   
}


// $principal=500000;
// $rate=0.11;
// $time=3;
// $interest = $principal * $rate * $time;

// $principal1=500000;
// $rate1=0.11;
// $time1=5;
// $interest1 = $principal1 * $rate1 * $time1;

// $principal2=500000;
// $rate2=0.11;
// $time2=7;
// $interest2 = $principal2 * $rate2 * $time2;

// // echo $interest
// $david=180;
// if($david>174&&$david<=200){
//     $result="David passed";
//     echo $result;
// }else{
//     echo "David failed";
// }
?>