<?php
  // 声明一个类：泛指，抽象
 class Girls{
    // 成员属性：对象所具有特性.特点，一般是名词
    // 静态 定死了的
    // public 修饰词
 	public $sex="女";
 	public $age="21"; 
 	// 动态 活动的
 public function say(){
    echo "类名一定要大写，但不区分大小写<br>";
 }
 }
 // 实例化一个对象：具体的，特质某一个人
 $myGirls= new Girls();
 $myGirls->say();
?>
<?php
// 声明一个类
 class Arr{
 	// 属性
 	public $sex="女";
 	public $age="23";
  public function say(){
  	echo "学无止境{$this->age}继续学<br>";
  }
 }

// 实例化一个对象
 $myArr=new Arr();
 $myArr->say();
 echo $myArr->age."<br>";
 print_r ($myArr->sex."<br>");
 $myArr->say();
?>