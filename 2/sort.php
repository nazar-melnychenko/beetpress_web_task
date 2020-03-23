<?php

$arr = [3, 7, 5, 12, 15, 67, 90, 99, 54, 123, 43, 56, 234, 546, 12, 0, 23, 53, 73, 21, 121];

function sort_arr($arr)
{
	for ($i = 0; $i < count($arr); $i++) {
		for ($j = 0; $j < count($arr); $j++) {
			if ($arr[$i] > $arr[$j]) {
				$temp = $arr[$i];
				$arr[$i] = $arr[$j];
				$arr[$j] = $temp;
			}
		}
	}
	return $arr;
}

$new_arr = sort_arr($arr);

foreach ($new_arr as $value) {
	echo $value . '<br />';
}