<?php

$arr=['banana','apple','pinaple','grapes'];
$arr2=[];

function shortSort($array,$array2){

    for($i=0;$i<count($array);$i++){
        $array2[$i]=$array[count($array)-$i-1];
    }
    return $array2;

}
echo "<pre>";
print_r(shortSort($arr,$arr2));
echo "</pre>";


function newSort($array){

    for($i=0;$i<count($array)-1;$i++){
      
      for($j=0;$j<count($array)-1-$i;$j++){
        $var=$array[$j];
        $array[$j]=$array[$j+1];
        $array[$j+1]=$var;
    }
    
}

return $array;

}

echo "<pre>";
print_r(newSort($arr));
echo "</pre>";



$array1 = [ 
'One' => 1, 
'Two' => 2, 
'Three' => 3, 
'Four' => 4, 
'Five' => 5 
]; 

//REVERSE $array1 INTO $array2 
$array2 =[]; 
foreach ($array1 as $key => $value) { 
 $array2 =[$key => $value] + $array2; 
} 


echo "<pre>";
print_r($array1);
echo "</pre>"; 
echo "<pre>";
print_r($array2);
echo "</pre>";

echo 'moshiko';
echo "<hr>";
echo 'moshiko';



