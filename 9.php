<?php 
echo "<h1>multi sort</h1>";

$arr=[1,2,3,4,5,6,7,[1,2,3,4,5,6],8,9,10,[7,8,9]];

echo "<pre>";
print_r($arr);
echo "</pre>";
echo "<hr>";

$arr2=[];



//***  todo...  *** 
//********
//*****  change for loop to foreach loop so that multiSort() will work on assoc arraysd
//***

multiSort($arr2,$arr);

by_refrence($arr2);

echo "<pre>";
print_r($arr2);
echo "</pre>";
echo "<hr>";

echo "<pre>";
print_r(swap($arr));
echo "</pre>";


function by_refrence(&$arr){

	$mos=new stdClass();
	$mos->name='mos';
	$mos->age='35';
	$mos->email='michmosh1@gmail.com';
	array_unshift($arr, $mos);
}


function multiSort(&$arr2,$arr){

	for($i=0;$i<count($arr);$i++){

		$arr2[$i]=$arr[count($arr)-$i-1];

		if(is_array($arr2[$i])){

			for($j=0;$j<count($arr2[$i])-1;$j++){

				$tmp=$arr2[$i][$j];
				$arr2[$i][$j]=$arr2[$i][count($arr2[$i])-$j-1];
				$arr2[$i][count($arr2[$i])-$j-1]=$tmp;
			}
		}
		
	}
	
}

//$arr=[1,2,3,4,5,6,7,[1,2,3,4,5,6],8,9,10,[7,8,9]];

function swap($arr){

	for($i=0;$i<count($arr)-1;$i++){

		for($j=0;$j<count($arr)-1-$i;$j++){

			$tmp=$arr[$j];
			$arr[$j]=$arr[$j+1];
			$arr[$j+1]=$tmp;
			
}
		}
		return $arr;
		
	}
	
		
