<?php if (!defined('THINK_PATH')) exit();?><!Doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>test1页面测试</title>
</head>

<body>
  <form action="" method="post">
    <!-- 赋值两种语法 -->
    <div>今天日期:<?php echo ($data); ?></div>
    <div>今天日期:<?php echo $data ?></div>

    <div>
      <input type="text" name="username" /> 用户名
    </div>
    <div>
      <input type="password" name="password" /> 密码
    </div>
    <div>
      <input type="submit" value="提交" />
    </div>
  </form>
</body>

</html>