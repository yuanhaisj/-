<?php
 // 声明一个类
 class Girls{
 	// 成员属性（成员变量）：对象所具有特性.特点，一般是名词
 	// public 修饰词 共有的
 	public $sex="女";
 	public $age="18";
 	// 成员方法：对象所具有的行为，功能，一般是动词
 	public function say(){
 		echo "我的女朋友是一个{$this->sex}的<br>";
 	}
 	// 内部调用
 	public function run(){
 		$this->say(); 
 	}
 }
 // 实例化一个对象
 $myGirls=new Girls();
 // var_dump($myGirls);exit();
 // 访问对象的属性
 //   echo $myGirls->age;
 // 访问对象的方法
 // 外部调用
 $myGirls->say();
 // 在类里面访问成员：$this访问
 // 在类外面访问成员：实例化对象访问
 // 类名一定要大写，但不区分大小写
 // $this指向是当前实例化对象（谁调用就指向谁）
?>
<?php
 // 声明一个类
 class Color{
 	public $red="红色";
 	public $blue="蓝色";
 	public $gray="灰色";
 	public $fff="白色";
 public function arr(){
 	echo "把{$this->red}染料搬到仓库<br>";
 	echo "把{$this->blue}涂到墙上<br>";
 	echo "把{$this->gray}染料倒在地上<br>";
    echo "把{$this->fff}抹在脸上<br>";
 }
 public function say(){
 	$this->arr();
 }
 }
// 实例化对象
 $myColor=new Color();
 // var_dump($myColor);exit();
 echo $myColor->red;
 $myColor->arr();
?>
<?php
 class Dies{
 	public $file="阻止文件上传";
 	public $color="颜色不能乱涂";
  public function app(){
  	echo "你去{$this->file}到网站<br>";
  	echo "你不要把{$this->color}到墙上";
  }
 }
 $myDies=new Dies();
 $myDies->app();
?>