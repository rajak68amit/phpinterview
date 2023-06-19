<?php

function sortingArray($arr)
{
    $c = count($arr);

    for ($i = 0; $i < $c; $i++) {

        for ($k = 0; $k < $i; $k++) {
            if($arr[$i] < $arr[$k]){
            $x = $arr[$i];

            $arr[$i] =$arr[$k];

            $arr[$k] = $x;
            }
        }
    }
    return $arr;

}

$arr = [2, 4, 6, 7, 8, 94, 5];

$nerad = sortingArray($arr);

$size = count($nerad);
$uparr = [];

for($o=$size; $o > 0 ; $o++) {

    array_push($uparr,$nerad[$o]);

}



print_r($arr);

<?php
function dublicateArray($arr)
{

    $dub = [];

    foreach (array_count_values($arr) as $k => $v) {

        if ($v > 1) {
            $dub[] = $k;
        }

    }

    return sortingArray($dub);
}

// find unique and sorting
function uniqueArray($arr)
{

    $c = count($arr);

    $result = [];

    foreach ($arr as $arriteam) {
        if (!in_array($arriteam, $result)) {
            array_push($result, $arriteam);
        }

    }

    // return $result;
    return sortingArray($result);

}

function sortingArray($arr)
{
    $c = count($arr);

    for ($i = 0; $i < $c; $i++) {

        for ($k = 0; $k < $i; $k++) {

            if ($arr[$i] < $arr[$k]) {

                $x = $arr[$i];
                $arr[$i] = $arr[$k];
                $arr[$k] = $x;
            }
        }

    }
    return $arr;

}

$arr = [2, 8, 8, 4, 6, 4, 6, 7, 8, 94, 5];
$dun = dublicateArray($arr);
print_r($dun);

// $nerad = uniqueArray($arr);
// print_r($nerad);

// $nerad = sortingArray($arr);
// print_r($nerad);
