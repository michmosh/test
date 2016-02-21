<?php

function rec($num){
   if($num>0){
       return $num*rec($num-1);
   }else{
       return 1;
   }
   
}

echo rec(6);