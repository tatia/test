<?php
function arr_max($arr)
{
	$max = $arr[0];
	for ($i=1; isset($arr[$i]); $i++)
		if ($arr[$i]>$max)
		$max = $arr[$i];
	return $max;
}
$arr1 = array(1, 2, 3, 45, '6');
$arr2 = 'hdghdgjh';
echo arr_max($arr1)."<br>\n";
echo $arr1[1]."<br>";
echo arr_max($arr2);
?>