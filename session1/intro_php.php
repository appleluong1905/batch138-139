<?php 
// Chuoi trong php
echo "Xin chao";
// Khai bao bien trong PHP
$a = 5;
// Gom chu cai hoa hoac thuong
// So
// Dau gach duoi _
// Bat dau bang dau $
// Khong bat dau bang so
// Theo nguyen tac Camel
// Co y nghia
// Bang tieng Anh
$UserName = "php";
//$TenDangNhap = "php";
$x = 5;
$y = 10;
echo "<br>";
echo $x + $y;

// Ham trong PHP
function functionName() {

}
// Goi ham
functionName();

//Ham tinh hieu 2 so
function Multi() {
	return 6 - 3;
}
echo "<br>";
echo Multi();
//

/* Description: Ham tinh hieu 2 so
*  Created by CanhLH
*  Created 06/09/2018
*/ 
function Multi1($a = 5, $b = 3) {
	return $a - $b;
}
echo "<br>";
echo Multi1(8, 4);
echo "<br>";
echo Multi1(100, 30);
echo "<br>";
echo Multi1();

// Condition
$condition = true;
if($condition) {
	// neu dieu kien dung thi thuc hien lenh o day
} else {
	// neu dieu kien sai thi thuc hien lenh o day
}
// Condition
$condition1 = true;
$condition2 = true;
if($condition) {
	// neu dieu kien 1 dung thi thuc hien lenh o day
} elseif ($condition2) {
	// neu dieu kien 2 dung thi thuc hien lenh o day
} else {
	// neu dieu kien 1 va 2 sai thi thuc hien lenh o day
}
$var = 2;
switch ($var) {
	case '1':
		// Neu var = 1 thi thuc hien lenh nay
		break;
	case '2':
		// Neu var = 2 thi thuc hien lenh nay
		break;
	case '3':
		// Neu var = 3 thi thuc hien lenh nay
		break;
	default:
		// Neu var khac 1, 2, 3 thi thuc hien lenh nay
	   // Day goi la lenh mac dinh cua switch case
		break;
}
echo "<br>";
// Vong lap for
for ($i = 1; $i < 10; $i++){
	echo $i;
	echo "<br>";
}	
?>