/* Задание 1 */
$x = Array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h');

foreach($x as $k => $v){
	$arr[][$v] = $arr[$k-1];
	if($k == count($x)-1){
		$array1 = $arr[$k];
	}
}



/* Задание 2, часть 1 */
$data1 = Array(
    'parent.child.field' => 1,
    'parent.child.field2' => 2,
    'parent2.child.name' => 'test',
    'parent2.child2.name' => 'test',
    'parent2.child2.position' => 10,
    'parent3.child3.position' => 10,
);

foreach($data1 as $key => $val){
	$arKey = explode(".",$key);
	$array2[$arKey[0]][$arKey[1]][$arKey[2]] = $val;
}






/* Задание 2, часть 2 (обратно) */


foreach($array2 as $key1 => $ar1){
	foreach($ar1 as $key2 => $ar2){
		foreach($ar2 as $key3 => $val){
			$array3[$key1.".".$key2.".".$key3] = $val;
		}
	}
}
