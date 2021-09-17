<?php 
	class A{
		function MessageA(){
			echo "Info dari kelas A";
		}
	}
	class B extends A{
		function MessageB(){
			echo "Info dari Kelas B";
		}
	}
	class C extends B{
		function MessageC(){
			echo "Info dari kelas C";
		}
	}
	$a = new A();
	$b = new B();
	$c = new C();

	$a->MessageA();
	echo "<br>";
	$b->MessageB();
	echo "<br>";
	$b->MessageA();
	echo "<br>";
	$c->MessageC();
	echo "<br>";
	$c->MessageB();
	echo "<br>";
	$c->MessageA();
?>