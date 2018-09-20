<?php 
include 'model/model.php';
class Controller {
	function HandleRequest() {
		$action = isset($_GET['action'])?$_GET['action']:'home';
		if ($action == 'home'){
			// co nguoi vao trang chu
			$model = new Model();
			$view = $model->getHomePage();
			// hien thi du lieu trang chu
			include 'views/viewHome.php';
		} elseif ($action == 'news') {
			// co nguoi vao trang News
			$model = new Model();
			$view = $model->getNews();
			// hien thi du lieu trang News
			include 'views/viewNews.php';
		}elseif ($action == 'contact') {
			// co nguoi vao trang Contact
			$model = new Model();
			$view = $model->getContact();
			// hien thi du lieu trang Contact
			include 'views/viewContact.php';
		}
		
	}
}
?>