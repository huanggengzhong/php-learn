<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>常量的应用</title>
</head>

<body>
<!-- define定义常量 -->
  <?php
  // define(常量名,值,是否忽略大小写)
  define("MESSAGE", "值:能看到一次");
  echo MESSAGE;
  echo Message;//报错,这里没有忽略大小写
  define("COUNT","值:能看到多次",true);//下面都能正常输出
  echo "<br>";
  echo COUNT;
  echo "<br>";
  echo Count;
  echo "<br>";
  echo constant("Count");//另一种取值方法
  echo "<br>";
  echo defined("MESSAGE");//defined是否已经定义:打印1,代表常量已经定义
  ?>
</body>

</html>
