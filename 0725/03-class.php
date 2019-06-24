<?php
 class Person{
 	// 构造方法__construct()
 	// 调用时间：在实例化对象(new的时候)，自动调用
 	public function __construct(){
 		$this->eat();
 	}
 	public function eat(){
 		echo "天生我才必有用，老鼠儿子会打洞";
 	}
 }
 $p1=new Person();
 // $p1->eat();
?>
<?php
 class App{
 	public function __construct(){
 		$this->at();
 	}
 	public function at(){
 		echo "随便做做";
 	}
 }
 $myApp=new App();
 echo $myApp->at();
?>