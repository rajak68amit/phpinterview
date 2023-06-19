<?php
// find odd number 

function test_odd($var)
{
    return ($var&1);
}
$a1 = array(1, 3, 2, 3, 4);
print_r(array_filter($a1, "test_odd"));




// find dublicate value from array
$var = "hjkgoinnddddll";
$allstringArry = str_split($var);
$result = array_diff_assoc( $allstringArry, array_unique( $allstringArry )) ;
echo implode("",$result);


// find diffrent key value 
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","b"=>"green","c"=>"blue");

$result=array_diff_assoc($a1,$a2);
//$result=array_diff_assoc($a1,$a2);
print_r($result);




$str = 'PHP is my language.';
if (strpos($str, 'PHP')) {
    echo "true";
} else {
echo  "false";
}
exit(0);

/*echo leap year and not leap year */
$year =2005;

if($year%4==0 && $year%100 !=0 || $year%400==0){
    echo "leap year";
}else{
    echo "not leap year";
}

//Write a sample of code showing the nested ternary conditional operator in PHP.
$number=-1;
$number_class = $number == 0 ? 'blue' : ($number > 0 ? 'green' : 'red');
echo $number_class;
exit();
$x = NULL;

if ('0xFF' == 255) {
    $x = (int)'0xFF';
}


exit();
// without condition check even or odd
$arr=array("0"=>"Even","1"=>"Odd");

$check=12;

echo "Your number is: ".$arr[$check%2];
exit();
$text = 'John ';
$text[10] = 'Doe';

echo $text;


exit();

/// display status
var_dump(0123 == 123); // false
var_dump('0123' == 123); // true
var_dump('0123' === 123); // false

exit();
$data = [
	'0' => 'z1',
	'1' => 'Z10',
	'2' => 'z12',
	'3' => 'Z2',
	'4' => 'z3',
];

/*
out put
Array
(
    [0] => Z10
    [1] => Z2
    [2] => z1
    [3] => z12
    [4] => z3
)
*/

sort($data);
print_r($data);

exit();
$a = "PHP";
$a = $a + 1; // throw error (type error :unsupported )
echo $a;


