<?php

/* 
strstr & stristr  both are same
strchr
strrchr
strpbrk
*/

$a = "Hello world, The world is nice";

//echo strstr($a,'world'); // world, The world is nice
//echo stristr($a,'world'); 
//echo strchr($a,'world'); // world, The world is nice
//echo strchr($a,'world',true); // Hello
//echo strrchr($a,'world'); // world is nice
echo strpbrk($a,'e'); // ello world, The world is nice
// strchr

