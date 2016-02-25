<?php 
echo "<h1>multi sort</h1>";
$arr=[1,2,3,4,5,6,7,[1,2,3,4,5,6],8,9,10,[7,8,9]];
echo "<pre>";
print_r($arr);
echo "</pre>";

$arr2=[];


echo "<pre>";
print_r(multiSort($arr,$arr2));
echo "</pre>";

function multiSort($arr,$arr2){
	for($i=0;$i<count($arr);$i++){

		if(is_array($i)){

			for($j=0;$j<count($i);$j++){
				$arr2[$i][$j]=$arr[$i][count($i)-$j];
			}

		}else{
			$arr2[$i]=$arr[count($arr)-$i-1];
		}
	}
	return $arr2;
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