<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>P2P注册页面</title>
  <!-- 引入bootstrap核心库 -->
  <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
  <!-- 引入编译和压缩后的css文件 -->
  <link rel="stylesheet" href="./dist/css/minCss/regLogin.min.css">
  <!--[if lt IE 9]>
  <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body>
  <?php
    require_once('./topNav.php');
  ?>
 <!-- 内容导航 -->
 <nav class="el-navbar navbar navbar-default">
    <div class="container">
        <!-- logo -->
        <div class="navbar-header">

            <a class="navbar-brand" href="#">
                <img src="./images/logo.png" alt="">
            </a>
        </div>
        <h3 class="text-primary">用户注册</h3>
    </div>
</nav>

   <!-- 模板的内容开始 -->
     <div class="container">
         <h1>公共模板</h1>
     </div>
    <!-- 模板的内容结尾 -->
  <!-- 页尾 -->
  <?php
   require_once('./footer.php');
  ?>
  <!--  先 引入jquery -->
  <script src="./lib/jquery/jquery.min.js"></script>
  <!-- 引入bootstrap -->
  <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
  <!-- 引入自己的js -->
  <script src="./dist/js/p2p.min.js"></script>

</body>

</html>