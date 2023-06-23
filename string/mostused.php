<?php
//Longest Substring Without Repeating Characters
$s = "aammit";
$letters_count = \strlen($s); //get count of string

        while ($letters_count) { //loop while all letters has read
            $result    = [];
            $max_count = 0;
            for ($i = 0; $i < $letters_count; $i++) {
                if (array_key_exists($s[$i], $result)) {
                    break;
                }
                $result[$s[$i]]  =1 ;
                $max_count++;
            }

            $max_value = max($max_value ?? 0, $max_count);
            $s         = substr($s, 1); // substring give string value
            $letters_count--; // decrease count of letters count
        }

        echo $max_value ?? 0;
// 6 strstr(); it will find
$url = 'amit.com';

if (strstr($url, 'amit.com') === false) {
    $url = 'amit' . $url;
}

echo $url;

exit();

if (strstr($url, 'https://www.') === false) {
    $url = 'https://www.' . $url;
}

echo $url;
exit();
if (is_string(7)) {
    echo "Yes";
} else {
    echo "No" . "<br/>";
}
// No

if (is_string("Lucky Number 7")) {
    echo "Yes";
} else {
    echo "No";
}

exit();
function wake_up($string)
{
    return strtoupper($string);
}

$person = 'these people need to get working!';

echo wake_up($person);

exit();
function calm_down($string)
{
    return strtolower($string);
}

$person = 'Angry people SHOUT!';

echo calm_down($person);

exit();
//5 strpos
$awesome = "Super Awesome!";

$result = strpos($awesome, "e");
if ($result === false) {
    echo 'Not found';
} else {
    echo 'Found at position ' . $result;
}

exit();

$strpo = "super Awesome!";

strpos($strpo, "!"); //13

echo strpos($strpo, "o"); // 10

exit();
//4 trim;

$trim = "php i  hello php";

echo trim($trim, 'php'); // i hello
exit();
//3 str_replace();

echo str_replace("don", "amit", "hello i am don"); // hello i am amit

exit();
$strings = array(
    'You like to have a fun time',
    'You are a really nice person',
    'Would you like to have a cup of coffee?',
);

$search = array(
    'fun',
    'time',
    'person',
    'coffee',
);
$replace = array(
    'excellent',
    'adventure',
    'individual',
    'joe',
);

$replaced = str_replace($search, $replace, $strings);
echo "<pre>";
echo implode(',', $replaced);

exit();

//2 strlen()
$strl = "coding is my passion where i can make relax";
echo strlen($strl);
exit();
// substr

$blog = "your blog is excellent";

echo substr($blog, 5, -10);

exit();
$str9 = "your blog is excellent";
echo substr($str9, -5); //llent
exit();

$str = "Hi buddy, I'm a Php string";

echo substr($str, 1); // i buddy, I'm a Php string
