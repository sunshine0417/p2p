<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no ">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>php个人资料</title>
  <!-- 引入bootstrap核心库 -->
  <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
  <!-- 引入编译和压缩后的css文件 -->
  <link rel="stylesheet" href="./dist/css/minCss/Personal.min.css">

  <!--[if lt IE 9]>
  <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
    <!--  先 引入jquery -->
   <script src="./lib/jquery/jquery.min.js"></script>
   <script src="./dist/js/userStateCheck.min.js"></script>

</head>
  <body>
      <!-- 头部 -->
      <?php
        require_once('./header.php');      
      ?>
 <!-- 模板的内容开始 -->
 <div class="container" id="personal">
        <div class="row">
            <!-- 左侧的菜单 -->
            <?php
              require_once('./leftTreeMenu.php');
            ?>

            <!-- 右侧的内容 -->
            <div class="col-sm-9 col-xs-12" id="mainContent">
                <button type="button" class="btn btn-primary btn-xs" id="btnOnOff">菜单隐藏</button>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <!-- 1 -->
                        <div class="row" id="userHeader">
                            <div class="col-sm-2 col-xs-12" id="userHeaderLeft">
                                <img src="./images/head_icon.jpg" class="img-thumbnail">
                            </div>
                            <div class="col-sm-10 col-xs-12">
                                <p>昵 称：源代码教育</p>
                                <p>用户名：小强</p>
                                <p>最后登录时间：2016-10-25 15:30:10</p>
                            </div>
                        </div>
                        <!-- 2 -->
                        <div class="row" id="money">
                           <div class="col-md-4 col-sm-12">总金额：<span>10000元</span></div>
                           <div class="col-md-4 col-sm-12">可用金额：<span>8000元</span></div>
                           <div class="col-md-4 col-sm-12">冻结金额：<span>2000元</span></div>
                        </div>
                        <!-- 3 -->
                        <div id="myButton">
                            <button type="button" class="btn btn-primary btn-lg">账户充值</button>
                            <button type="button" class="btn btn-danger btn-lg">账户提现</button>
                        </div>
                        <!-- 4 -->
                        <div class="row" id="validation">
                              <!-- 第一个 -->
                              <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="clearfix">
                                    <!-- 图片 -->
                                    <img class="pull-left" src="./images/shiming.png" alt="">
                                    <!-- 文本 -->
                                    <dl class="pull-left">
                                        <dt>实名认证</dt>
                                        <dd>未认证
                                            <a href="">马上认证</a>
                                        </dd>
                                    </dl>
                                </div>
                                  <p>实名认证之后才能在平台投资</p>
                              </div>
                              <!-- 第二个 -->
                              <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="clearfix">
                                    <!-- 图片 -->
                                    <img class="pull-left" src="./images/shouji.jpg" alt="">
                                    <!-- 文本 -->
                                    <dl class="pull-left">
                                        <dt>实名认证</dt>
                                        <dd>未认证
                                            <a href="">马上认证</a>
                                        </dd>
                                    </dl>
                                </div>
                                  <p>实名认证之后才能在平台投资</p>
                              </div>
                               <!-- 第三个 -->
                               <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="clearfix">
                                    <!-- 图片 -->
                                    <img class="pull-left" src="./images/youxiang.jpg" alt="">
                                    <!-- 文本 -->
                                    <dl class="pull-left">
                                        <dt>实名认证</dt>
                                        <dd>未认证
                                            <a href="">马上认证</a>
                                        </dd>
                                    </dl>
                                </div>
                                  <p>实名认证之后才能在平台投资</p>
                              </div>
                               <!-- 第四个 -->
                               <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="clearfix">
                                    <!-- 图片 -->
                                    <img class="pull-left" src="./images/baozhan.jpg" alt="">
                                    <!-- 文本 -->
                                    <dl class="pull-left">
                                        <dt>实名认证</dt>
                                        <dd>未认证
                                            <a href="">马上认证</a>
                                        </dd>
                                    </dl>
                                </div>
                                  <p>实名认证之后才能在平台投资</p>
                              </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
         </div>
            
      
    <!-- 尾部 -->
    <?php
      require_once("./footer.php");     
    ?>
    
      <!-- 引入bootstrap -->
      <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
      <!-- 引入自己的js -->
      <script src="./dist/js/p2p.min.js"></script>
      <script src="./dist/js/personal.min.js"></script>    

  </body>
</html>