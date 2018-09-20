<?php 
	class User {
		var $name;
		var $email;
		//public, protected, private
		function __construct(){
			$this->showName();
			echo "<br>Hello";
		}
		public function showName() {
			echo "Hello User class";
		}
		public function showAge() {
			echo "30 age";
		}

	}
	$user = new User();
	// $user->showName();

	class Student extends User {
		//
		public function demoProtected() {
			$this->showName();
		}
		public function demoPrivate() {
			$this->showAge();
		}
		public function showName() {
			echo "<br>Hello Student class";
		}
	}
	// echo "<br>";
	$student = new Student();
	$student->showName();
	// $student->demoPrivate();
?>