<?php 
include 'model.php';
class Controller {
	function HandleRequest() {
		// co nguoi vao trang chu
		$model = new Model();
		$view = $model->getHomePage();
		// hien thi du lieu trang chu
		include 'view.php';
	}
}
?>