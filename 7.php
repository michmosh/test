<?php

//echo mysqli_real_escape_string("'or' '1' = '1' #'");

$i=  mysql_real_escape_string("'or' '1' = '1' #");
echo $i;