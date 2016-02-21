<?php 

$arr=['banana', 'apple', 'grapes', 'pinaple'];
//sort($arr);
print_r($arr);
echo "<hr>";


function mySort($arr){
   
    for($i=0;$i<count($arr)-1;$i++){
        
      for($j=0;$j<count($arr)-1-$i;$j++){
          $var=$arr[$j];
          
          if($arr[$j]<$arr[$j+1]){
              
              $arr[$j]=$arr[$j+1];
              $arr[$j+1]=$var;

          }
      }
       
    }
    return $arr;
    
}

print_r(mySort($arr));