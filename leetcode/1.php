Given an array nums containing n distinct numbers in the range [0, n], return the only number in the range that is missing from the array.

var missingNumber = function(nums) {
           let data = 0;
           for(var i =1;i< nums.length+1;i++) {
               if(nums.includes(i) ==false)
                {
                 data = data+i
                 }

           }
           return data;
};


in php

function containsDuplicate($nums)
{
    $varData = [];
    foreach ($nums as $numsiteam) {
        if (array_key_exists($numsiteam, $varData)) {
            return true;
        } else {
            array_push($varData, $numsiteam);

        }
    }

    return false;
}



/////////////////////
find roman value and sum after convert roman to integer
$v = "LVIII";
$s = strtr("LCIII", ['M' => '1000,',
    'CM' => '900,',
    'D' => '500,',
    'CD' => '400,',
    'C' => '100,',
    'XC' => '90,',
    'L' => '50,',
    'XL' => '40,',
    'X' => '10,',
    'IX' => '9,',
    'V' => '5,',
    'IV' => '4',
    'I' => '1,',
]
);

echo (array_sum(explode(',', $s)));


Given a signed 32-bit integer x, return x with its digits reversed. If reversing x causes the value to go
outside the signed 32-bit integer range [-231, 231 - 1], then return 0.


$ans = 0;
while ($x != 0) {
    $digits = $x % 10;
    if (($ans > PHP_INT_MAX / 10) || ($ans < PHP_INT_MIN / 10)) {
        return 0;
    }
    $ans = ($ans * 10) + $digits;
    $x = (int) ($x / 10);
}
return $ans;
