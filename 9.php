<?php 
echo "<h1>multi sort</h1>";
$arr=[1,2,3,4,5,6,7,[1,2,3,4,5,6],8,9,10,[7,8,9]];
echo "<pre>";
print_r($arr);
echo "</pre>";
echo "<hr>";
$arr2=[];
multiSort($arr2,$arr);

echo "<pre>";
print_r($arr2);
echo "</pre>";
echo "<hr>";

function multiSort(&$arr2,$arr){
	for($i=0;$i<count($arr);$i++){

		if(!is_array($arr[$i])){
			$arr2[$i]=$arr[count($arr)-$i-1];
		}	
		

	}
	
}

function swap($arr,$arr2){

	$tmp=$arr[$a];
	$arr[$a]=$arr[$a+1];
	$arr[$a+1]=$tmp;
	return $arr;

}
echo "<pre>";
print_r(array_reverse($arr));
echo "</pre>";
