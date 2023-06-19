<?php

/* 
strcmp
strncmp
strcasecmp
strnatcmp
strnatcasecmp
substr_compare
similar_text

*/

/////// substr_compare(string1,string2)(case-sensitive) ////////////// for compare with integerin string

echo substr_compare("12hello","12HELLO",3);
exit();
/////// strnatcasecmp (string1,string2)(incase-sensitive) ////////////// for compare with integerin string

echo strnatcasecmp("12hello","12HELLO");
exit();
/////// strnatcmp (string1,string2)(case-sensitive) ////////////// for compare with integerin string

echo strnatcmp("12hello","23hello");
exit();
/////// strncasecmp (string1,string2,length)(case-insensitive) //////////////

echo strncasecmp("HELLO world!","hello world! Hello",5); // compare counted characters

exit();




/////// strcasecmp (string1,string2)(case-insensitive) //////////////

echo strcasecmp("HELLO World","hello world"); // it will return 0 means matched

exit();
/////// strncmp(string1,string2,length) (case-sensitive) //////////////

echo strncmp("Hello world" ,"Hello world! Hello",12);

exit();


/////// strcmp(string1,string2) case-sensitive) //////////////


$s = "amit";
$a = "amit";
 
echo strcmp($s,$a); // check charector greatorthan < and > small than
 






/////// substr_compare(string1,string2,start,length,case)(true/false) //////////////

/////// similar_text(string1,string2,percent) //////////////
