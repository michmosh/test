<?php

$str="Hi, mom! How are you? How do you feel today? i just want to say i love you!";

function strToArray($str){
    $chars=[',','!','?'];
    $str=str_replace($chars,'',$str);
    
    $arr= explode(' ', $str);
    $arr1=[];
    
    
    foreach ($arr as $val){
        if(!array_key_exists($val, $arr1)){
             $arr1[$val]=1;
        }
        else{
             $arr1[$val]=$arr1[$val]+1;
        }
 
    }
   return $arr1;
 
}
print_r(strToArray($str));