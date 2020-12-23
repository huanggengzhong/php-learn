<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>函数的使用</title>
</head>

<body>
  <?php
// 定义函数 
  // 1.定义要求:同一块作用域中名字不能相同;函数名称不区分大小写,而常量和变量区分大小写;

  // 2.自定义函数
   function example($num){
     return $num *$num;
   }

   echo example(10);//打印:100
   echo "<br>";

  //  作用域

  $zy="你好";
  $zyy="PHP语言";//全局变量
  function lxt(){
    $zy="我喜欢";
    echo $zy;//打印局部变量
    global $zyy;//使用全局变量要加global关键字
    echo $zyy;
  }
  lxt();//打印我喜欢PHP语言


  // 静态变量和普通变量的区别:静态变量会有缓存上一次数据
  function zdy(){
   static $message=0;//第二次不会重新赋值,会缓存上一次值
   $message+=1;
   echo $message." ";//点是拼接符
 }

 function changFn(){
   $message=0;
   $message+=1;
   echo $message." ";
 }
 echo "<br>";

 for($i=0;$i<10;$i++) zdy();//循环执行10次,打印:1 2 3 4 5 6 7 8 9 10
 echo "<br>";
 for($i=0;$i<10;$i++) changFn();//循环执行10次,打印:1 1 1 1 1 1 1 1 1 1

 echo "<br>";
//  变量函数:实际就是把函数赋值给变量,让变量进行调用

function a($a,$b){
  return $a+$b;
}
function b($a,$b){
  return $a *$a + $b*$b;
}
function c($a,$b){
  return $a*$a*$a+$b*$b*$b;
}

// $result="a";//这里用引号包裹函数
// echo "结果:".$result(2,3);//打印5
// $result="b";
// echo "结果:".$result(2,3);//打印13,4+9
$result="c";
echo "结果:".$result(2,3);//打印35,8+27
  ?>
</body>

</html>
