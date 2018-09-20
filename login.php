<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>P2P登录页面</title>
  <!-- 引入bootstrap核心库 -->
  <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
  <!-- 引入表单验证插件的css文件 -->
  <link rel="stylesheet" href="./lib/bootstrapValidator/css/bootstrapValidator.min.css">
  <!-- 引入编译和压缩后的css文件 -->
  <link rel="stylesheet" href="./dist/css/minCss/regLogin.min.css">
  <!--[if lt IE 9]>
  <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body>

      <!-- 蒙层的html结构 -->
      <div class="modal fade" id="msgShowModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="msgShowTitle">标题</h4>
            </div>
            <div class="modal-body" id="msgShowContent">
                内容
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭窗口</button>
                <button type="button" id="skip" class="btn btn-default" data-dismiss="modal">直接进入</button>

            </div>
            </div>
        </div>
    </div>
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
        <h3 class="text-primary">用户登录</h3>
    </div>
</nav>

   <!-- 模板的内容开始 -->
   <div class="container reglogin">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">用户登录</h3>
            </div>
            <div class="panel-body">
                <form id="loginForm" class="form-horizontal" method="post">
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">账&emsp;&emsp;号：</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="username" placeholder="请输入账号">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">密&emsp;&emsp;码：</label>
                        <div class="col-sm-9">
                        <input type="password" class="form-control" name="password" placeholder="请输入密码">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-success">立即登录</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
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
  <!-- 引入验证表单的js验证 -->
  <script src="./lib/bootstrapValidator/js/bootstrapValidator.min.js"></script>

  <!-- 引入自己的js -->
  <script src="./dist/js/p2p.min.js"></script>
  <script src="./dist/js/checkFrom.min.js"></script>
  <script>
    $("#skip").on('click',function(){
        location.href="./index.php";//跳转到登录页面
    });
  </script>

</body>

</html>