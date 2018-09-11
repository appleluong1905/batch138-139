<?php 
 $arr = array();
 // debug du lieu
 //var_dump($arr);
 $arr = array('Trung', 'Huyen', 'Khanh');
 $arr1 = array(0 => 'Trung', 1 => 'Huyen', 2 => 'Khanh');
 $arr2 = array('trung' => 'Trung', 'huyen' => 'Huyen', 'khanh' => 'Khanh');
 // var_dump($arr);
 // var_dump($arr1);
 // var_dump($arr2);
 echo $arr[1];
 echo "<br>";
 echo $arr2['khanh'];
 // sua gia tri cua mot phan tu
 $arr2['khanh'] = 'Mai Khanh';
 //var_dump($arr2);
 echo "<br>--------------<br>";
 foreach ($arr2 as $key => $value) {
 	echo $value;
 	echo "<br>";
 }
 // them mot phan tu vao mang
 $arr2['khoi'] = 'Khoi';

 echo "<br>--------------<br>";
 foreach ($arr2 as $key => $value) {
 	echo $value;
 	echo "<br>";
 }

 //them mot phan tu vao mang bang array_push
 array_push($arr2, 'Hung');
 echo "<br>--------------<br>";
 foreach ($arr2 as $key => $value) {
 	echo $value;
 	echo "<br>";
 }

 // xoa mot phan tu khoi mang
 unset($arr2['huyen']);

 echo "<br>--------------<br>";
 foreach ($arr2 as $key => $value) {
 	echo $value;
 	echo "<br>";
 }
 echo "<br>------BAI TAP--------<br>";
 $arrEx = array('Banh keo', 'Trai cay', 'Do choi');
 function showProduct($arrEx) {
 	echo "<br>--------------<br>";
 	foreach ($arrEx as $key => $value) {
	 	echo $key.' - '.$value.'<br>';
	 }
 }
 showProduct($arrEx);
 // them Ao quan vao
 array_push($arrEx, 'Ao Quan');
 showProduct($arrEx);
 // sua Banh keo
 $arrEx[0] = 'Thuc pham';
 showProduct($arrEx);
 //xoa trai cay
 unset($arrEx[1]);
 showProduct($arrEx);
 //
 echo "<br>--------------<br>";
 $arr3 = array(
 			array(
 				'name' => 'Khoi',
 				'birthday' => 1997,
 				'gender' => 'male'
 			),
 			array(
 				'name' => 'Trung',
 				'birthday' => 1985,
 				'gender' => 'male'
 			),
 			array(
 				'name' => 'Huyen',
 				'birthday' => 1987,
 				'gender' => 'female'
 			),

 	);
 var_dump($arr3[2]['birthday']);
?>
