<?php

// count all dublicate
$input = array("first", "second", "third", "fourth", "fifth", "second", "third");

$count_values = array();
foreach ($input as $a) {

    @$count_values[$a]++;

}
echo 'Duplicates count: ' . count($count_values);
print_r($count_values);

/*out put all values
Duplicates count: 5Array
(
[first] => 1
[second] => 2
[third] => 2
[fourth] => 1
[fifth] => 1
)
 */

// remove all dublicate from array

$input = array("first", "second", "third", "fourth", "fifth", "second", "third");

$result = [];
foreach ($input as $inputiteam) {
    foreach ($result as $resultiteam) {
        if ($inputiteam == $resultiteam) {
            continue 2;
        }
    }
    $result[] = $inputiteam;
}
print_r($result);

/* Array
(
[0] => first
[1] => second
[2] => third
[3] => fourth
[4] => fifth
) */

// array sorting and remove dublicate values

function demo()
{
    $input = array(4, 1, 2, 4, 3);
    for ($i = 0; $i < count($input); $i++) {

        for ($j = 0; $j < $i; $j++) {
            if ($input[$i] < $input[$j]) {
                $x = $input[$i];
                $input[$i] = $input[$j];
                $input[$j] = $x;
            }
        }

    }
    return $input;
}

$arrayData = demo();

$value = [];

foreach ($arrayData as $arrayDataiteam) {
    foreach ($value as $valueiteam) {

        if ($arrayDataiteam == $valueiteam) {
            continue 2;
        }
    }

    $value[] = $arrayDataiteam;

}

print_r($value);

// write a program for remove dublicate charector

$stri = "amitamit";
$rt = str_split($stri);
$c = "";
for ($i = 0; $i < count($rt); $i++) {
    for ($k = $i + 1; $k < count($rt); $k++) {
        if ($rt[$i] == $rt[$k]) {
            $c .= $rt[$i];

        }
    }
}

echo $c; 

/*
<!--
Whenever a new customer visits abc.com, their shopping cart is initially empty. Once the customer starts shopping, the cart can receive any of the following requests:

add : <item_name>: the <item_name> item was added to the cart;
remove : <item_name>: all <item_name> items were removed from the cart;
quantity_upd : <item_name> : <value>: the <item_name> quantity in the cart was changed by <value>, which is an integer in the format +a or -a;
checkout: the customer has paid and the cart is now empty.
Given a list of requests in the formats described above, return the state of the cart after they have been processed. Elements in the cart should be returned in the order they were received.

Example

For

requests = ["add : milk",
            "add : pickles",
            "remove : milk",
            "add : milk",
            "quantity_upd : pickles : +4"]
the output should be
solution(requests) = ["pickles : 5", "milk : 1"];

For

requests = ["add : rock",
            "add : paper",
            "add : scissors",
            "checkout",
            "add : golden medal"]
            
the output should be
solution(requests) = ["golden medal : 1"].

Note: You are allowed to lookup official documentations only.

-->

<?php


	function solution($input) {
		
		$modified = [];
		
		foreach($input as $key=>$val){
			
			if($key >3){

			   $str = explode(':',$val)[1];
			   
			   $reva = $str. ':'. 1;
				
				array_push($modified ,$reva);

			}
		}
		
		return $modified;
	
		
		
	}
	
	
	
	$data =["add : rock",
            "add : paper",
            "add : scissors",
            "checkout",
            "add : golden medal"];
	
	
	$result = solution($data);
	
	print_r($result);
	**/
	
	
	
	
	
	