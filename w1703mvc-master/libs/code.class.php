<?php   //属性特性    方法    行为
class code{
   public $width=160;
   public $height=50;
   public $zhongzi="abcdefghijklmnpqrstuvwxyz123456789";
   public $codelen=4;
   public $codesize=array("min"=>15,"max"=>30);
   public $codeangle=array("min"=>-15,"max"=>+15);
   public $pixnum=20;
   public $linenum=array("min"=>5,"max"=>15);
   public $type="png";
   public $code="";
   public $codeurl="";
    //设置画布
    private function setcanvas(){
        $img=imagecreatetruecolor($this->width,$this->height);
        imagefill($img,0,0,$this->color);
    }
    //设置颜色
    private function setcolor($type="back"){
        $r=$type=="back"?mt_rand(0,120):mt_rand(130,255);
        $g=$type=="back"?mt_rand(0,120):mt_rand(130,255);
        $b=$type=="back"?mt_rand(0,120):mt_rand(130,255);
        $color=imagecolorallocate ($this->img,$this->r,$this->g,$this->b);
    }
    //设置文字
    private function settext(){

    }
    //设置内容
    private function setcon(){

    }
    //设置线条
    private function setline(){
         for($i=0;$i<linenum;$i++){

         }
         imageline();
    }
    //设置点
    private function setpix(){
          for($i=0;$i<pixnum;$i++){

          }
          imagesetpixel();
    }
    //输出
    private function out(){

    }
}
$obj=new code();
$obj->setcanvas();