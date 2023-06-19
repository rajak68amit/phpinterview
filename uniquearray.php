<?php

/// 
$arr = [2,3,7,4,1];
$target  = 5;
$countArray = sizeof($arr);
$result = [];


for($i=0;$i<$countArray;$i++){
    $diff = ($target-$arr[$i]);
     if(in_array($result,[$arr[$i]]){
    
    
    }
   


}


exit();
/// get dublicate element from array
$arr = [2, 2, 4, 7, 8, 7, 4, 3];

$getsize = sizeof($arr);

$getResult =[]; 

for($i=0;$i<$getsize;$i++){
    for($j=$i+1;$j<$getsize;$j++){
    
        if($arr[$j] ==$arr[$i]) {
       array_push($getResult,$arr[$j]);
    }
    }

}
print_r($getResult);

exit();






// using of the predefind function filter unique elements.
$arr = [2, 2, 4, 7, 8, 7, 4, 3];
$result = array_unique($arr);
print_r($result);
exit();

/* 
find  unique array element form array without using predefined function
*/
$arr = [2,2,4,7,8,7,4,3];
$size = count($arr);
$result = [];
for($i=0;$i<$size;$i++){

    if(in_array($arr[$i],$result) == false)
    {
    array_push($result,$arr[$i]);
    }
}
print_r($result);



