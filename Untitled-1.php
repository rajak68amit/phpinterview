   
for($u=1;$u<count($arr);$u++){
    
     $right = 0;
     // sum of all left element of $i
    for($r=$u-1; $r>= 0;$r--){
        
        $right += $arr[$r];
    }
    
    $left = 0;
     // sum of all right element of $i
    for($l=$u+1;$l<count($arr);$l++){
        
        $left = $left+$arr[$l];
    }
   
    //check all right sum element === to left sum element if true return middle value of $i 
    if($right === $left)
    {
        echo $arr[$u];
    }
    
}

exit();

for($i=1;$i<count($arr);$i++)
{
    $left=0;
    
    for($k=$i-1; $k >=0;$k--){
        
       $left+=$arr[$k];
    }
    $right=0;
    
    for($j=$i+1; $j<count($arr);$j++){
        
        $right+=$arr[$j];
    }
    
    if($left === $right){
        echo $arr[$i];
    }
}
