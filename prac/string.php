<?php

class DB {

    protected $localhost;
    protected $user;
    protected $password;
    protected $database;

    public function __construct(){
    
       $this->connectDB();
    }

private function connectDB(){
 $this->link = new mysqli($this->localhost, $this->user, $this->pass,
  $this->dbname);
 if(!$this->link){
   $this->error ="Connection fail".$this->link->connect_error;
  return false;
   }
 }
}


exit();
/// find longest substring without repeat character.

$string = "aeak";

$letterCount = strlen($string);

while ($letterCount) {

    $result = [];
    $maxcount = 0;
    for ($i = 0; $i < $letterCount; $i++) {
        if(array_key_exists($string[$i], $result))
        {
             break;
        }
        $result[$string[$i]] =1;
        $maxcount++;
    }
    $maxval = max($maxval??0,$maxcount);

    $string = substr($string,1);

    $letterCount--;

}
echo $maxval;
exit();
// reverse string
$name = "amitamit";

$namearr = str_split($name);
// $nameunie = array_unique($namearr);
// echo implode('',$nameunie);
$h = '';

for ($i = 0; $i < count($namearr); $i++) {
    for ($k = $i + 1; $k < count($namearr); $k++) {
        if ($namearr[$i] == $namearr[$k]) {
            $h .= $namearr[$i];
        }
    }
}

echo $h;

exit();
// reverse string
$data = "amit rajako";
//echo strrev($data);
$vowel = "aeiou";

$vowelwisecount = [];
$array_Data = str_split($data);
$array_vowel = str_split($vowel);
$c = 0;
foreach ($array_Data as $key => $val) {

    foreach ($array_vowel as $key => $value) {
        if ($val == $value) {
            $vowelwisecount[$val] = $c++;

        }

    }

}

print_r($vowelwisecount);

exit();
$rev = '';
foreach (array_reverse($array_Data) as $valu) {

    $rev .= $valu;
}

echo implode('', array_reverse($array_Data));

exit();
// write a program count all vowels;

$vowel = "aeiou";
$string = "mynameisamit rajaka";

$vowelarr = str_split($vowel);
$stringarr = str_split($string);
$vowelCount = 0;

foreach ($stringarr as $key => $value) {

    foreach ($vowelarr as $val) {

        if ($value == $val) {

            $vowelCount++;
        }

    }

}

echo $vowelCount;
