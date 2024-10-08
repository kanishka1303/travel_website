<?php
$str="popcorn box";
echo $str;
$lenn=strlen($str);
echo"<br> the length of this string is <br>";
echo $lenn;
echo"<br>the number of words in this string is <br>". str_word_count($str) ;
echo"<br>the reverse of this string is <br>". strrev($str);

?>
