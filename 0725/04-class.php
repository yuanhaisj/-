<?php
 // class Student{
 // 	public $id="12";
 // 	public $name="马帅兵";
 // 	public $sex="女";
 // public function __construct(){
 // 	$this->say();
 // }
 // public function say(){
 // 	echo "我是{$this->name};性别{$this->sex};编号{$this->id}";
 // }
 // }
 // $myStudent=new Student();
?>
<?php
 // class Student{
 // 	public $name;
 // 	public $sex;
 // 	public function __construct($n,$s){
 // 		$this->name=$n;
 // 		$this->sex=$s;
 // 	}
 // public function say(){
 // 	echo "你的名字是：".{$this->name};
 //  }
 // }
 // $myStudent=new Student();
?>
<?php
 // class GoodsManage{
 // 	public function 
 // }
 // $myGoodsManage=new GoodsManage();
 // class Goods{
 // 	public $name="青果";
 // 	public $zl="12";
 // 	public $jg="12";

 // }
 // $myGoods=new Goods();
?>
<?php
 // class Ju{
 //    public $width="2";
 //    public $height="3";
 //  public function __construct(){
 //  	$this->zhouchang();
 //  	$this->mj();
 //  }
 //  public function zhouchang(){
 //   echo "周长是：".($this->width+$this->height)*2;
 //  }
 //  public function mj(){
 //  	echo "面积是：".($this->width*$this->height);
 //  }

 // }
 // $myJu=new Ju();

?>
<?php
  // class Goods{
  // 	public $id="1";
  // 	public $name="青果";
  // 	public $number="12";
  // 	public $price="10";
  // public function __construct(){
  // 	$this->getTotal();
  // }
  // public function getTotal(){
  //   echo "总金额是：".($this->number*$this->price);
  // }

  // }
  // $myGoods=new Goods();
?>
<?php
 // class Student{
 // 	public $id="1";
 // 	public $name="账号";
 // 	public $score="60";
 //  public function __construct(){
 //  	$this->getStatus();
 //  }
 //  public function getStatus(){
 //  	 if($this->score>=80){
 //  	 	echo "成绩及格";
 //  	 }else{
 //  	 	echo "成绩不合格";
 //  	 }
 //  }
 // }
 // $myStudent=new Student();
?>
<?php
//   class Gir{
//   	public $qian=666;
//   	public function qian(){
//   		echo "花费：".$this->qian."<br>";
//   	}
//   }

//   class boy{
//   	public $money=5000;
//   	public $qiang=0; 
//   	  	public function zong(){
//   		echo "总共有：".$this->money."<br>";
//   	}
//   	public function sheng(){
//   		echo "剩余：";
//   		echo $this->money-$this->qiang;
//   	}
  	
//   }

// $Gir=new Gir();
// $boy=new boy();
// $boy->qiang=&$Gir->qian;
// $boy->zong();
// $Gir->qian();
// $boy->sheng();

?>
<?php
class Ren{
    public $qian=100;
  } 
  $RenQian->qian=&$qianBaoQian->qiang;
  class qianBao{
    public $mong=5000;
    public $qiang=0;
        public function zong(){
      echo "总共有：".$this->mong."<br>";
      }
    public function s(){
      echo $this->mong-$this->qiang;
    }


  }
  $RenQian=new Ren();
  $qianBaoQian=new qianBao();
$qianBaoQian->zong();
  $qianBaoQian->s();
?>