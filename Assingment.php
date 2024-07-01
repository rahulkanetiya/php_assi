<?php
// 1--> calculate percentage of five subject
// $Physics = readline("Enter the marks of physics : ");
// $Chemistry = readline("Enter the marks of chemistry : ");
// $Maths = readline("Enter the marks of maths : ");
// $Biology = readline("Enter the marks of biology : ");
// $Computer = readline("Enter the marks of computer : ");
// $Total = $Physics + $Chemistry + $Maths + $Biology + $Computer;
// $percentage = ($Total/5);
// echo $percentage;

// 2--> using switch case find week days and ckeck leap year


// $a = readline("Please enter leap year: ");
// if($a%4==0 || $a%400==0){
//     echo "leap year";
// }
// elseif($a%100==0){
//     echo "not leap year";
// }
// else{
//     echo "not leap year";
// }


// $day = red;
// switch ($day) {
//     case "Monday":
//         echo"Monday";
//         break;
//     case "Tuesday":
//         echo"Tuesday";
//         break;
//     case "Thursday": 
//         echo"Thursday"; 
//         break;
//     case "Wednesday":
//         echo"Wednesday";    
//         break;      
// }

//3--> find the largest value in three numbers using ternary operator

// $a = readline("Add: ");
// $b = readline("Add: ");
// $c = readline("Add: ");
// $max=($a>$b)?($a>$c?$a:$c):($b>$c?$b:$c);
// echo $max;

//4--> print fibonacci series

// $n1 = 0;
// $n2 = 1;
// echo $n1." ".$n2." ";
// for( $i = 0; $i < 8; $i++ ) {
//     $temp = $n1 + $n2;
//     $n1 = $n2;
//     $n2 = $temp;
//     echo$n2." ";
// }


//5--> check the number is armstrong or not
// $Value = 370;
// $number = $Value;
// $n1 = (int)($number % 10);
// $number = $number/10;
// $n2 = (int)($number %10);
// $number = $number/10;
// $n3 = (int)($number %10);

// $cube = ($n1*$n1*$n1)+ ($n2*$n2*$n2)+ ($n3*$n3*$n3);
// if ($Value == $cube){
//     echo "The number is armstrong number";
// }
// else{
//     echo "Not armstrong number";
// }

//6--> print star pattern

// $rows = 5;
// for( $i = 0; $i <$rows; $i++ ) {    
//     if($i == 0 || $i == $rows-1) {
//         echo "*****".PHP_EOL;
//     }
//     else{
//         echo "*".PHP_EOL;
//     }
// }

//-->7 out of code
// $a = '1';
// $b = &$a;// this line show that when we change the values of b it will affect on a 
// $b = "2$b"; 
// echo $a.PHP_EOL;
// echo $b;
// output of this 21 21;


//-->8 print number pattern
// for($i=2;$i<=3;$i++)
// {
// 	for($j=1;$j<=3;$j++)
// 	{
// 	echo $i;
//     $i=$i+4;
   
// 	}	 
//     echo "".PHP_EOL;
	
// }
// for($i=3;$i<=3;$i++)
// {
// 	for($j=1;$j<=3;$j++)
// 	{
// 	echo $i;
//     $i=$i+4;
   
// 	}	 
//     echo "".PHP_EOL;
	
// }
// for($i=4;$i<=4;$i++)
// {
// 	for($j=1;$j<=3;$j++)
// 	{
// 	echo $i;
//     $i=$i+4;
   
// 	}	 
//     echo "".PHP_EOL;
	
// }


//-->9 find unique number from array
// $Numbers = array(45,85,56,45,52,56,85,45,52,47,52,54,56,45);
// print_r (array_unique($Numbers));

// --10> print random number of array
// $Numbers = array(45,85,56,45,52,56,85,45,52,47,52,54,56,45);
// print_r (array_rand($Numbers,2));


// --11> check even odd number without using loop or condition
// $arr = ["Even", "Odd"]; 
// $input = 4;
// echo ($arr[$input % 2]);



//--12> store number five numbers in array and display sum of them
// $numbers = array();
// $sum = 0;

// for ($i = 1; $i <=5; $i++){
//     $number = readline("Please enter number : ");
//     $sum = $sum + $number;
//     array_push($numbers, $number);
// }  
// print_r($numbers);
// echo $sum;

// for($i =1 ; $i <= 3; $i++){
//     for($j = 2; $j >= $i; $j--){
//         echo " ";
//     }
//     for($k = 1; $k <= $i; $k++){
//         echo "* ";
//     }
//     echo "".PHP_EOL;
// }


?> 