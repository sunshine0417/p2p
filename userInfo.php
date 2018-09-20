<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>php个人资料</title>
  <!-- 引入bootstrap核心库 -->
  <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
  <!-- 引入编译和压缩后的css文件 -->
  <link rel="stylesheet" href="./dist/css/minCss/template.min.css">


  <!--[if lt IE 9]>
  <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
    <!-- 引入jquery -->
    <script src="./lib/jquery/jquery.min.js"></script>
    <!-- 验证用户身份是否合法 -->
    <script src="./dist/js/userStateCheck.min.js"></script>
</head>
  <body>
      <!-- 头部抽取 -->
      <?php
        require_once('./header.php');      
      ?>

      <div class="container">
        <div class="row">
           <!-- 左边 -->
           <?php
             require_once('./pesonLeft.php');
           ?>
           <!-- 右边 -->
           <div class="col-sm-9">
               <!-- 模板的内容开始 -->

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">个人资料</h3>
                        </div>
                        <div class="panel-body">
                            <form id="myData" class="form-horizontal">
                                <!-- 用户名 -->
                                <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">用户名</label>
                                    <div class="col-sm-4">
                                      <span>xiaoqiang</span>
                                    </div>
                                </div>
                                 <!-- 真实姓名 -->
                                 <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">真实姓名</label>
                                    <div class="col-sm-4">
                                    <span>小强</span>
                                    </div>
                                </div>
                                 <!-- 证件号码 -->
                                 <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">证件号码</label>
                                    <div class="col-sm-4">
                                     
                                      <span>512************4646</span>
                                    </div>
                                </div>
                                <!-- 手机号码 -->
                                <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">手机号码</label>
                                    <div class="col-sm-4">
                                      <input type="text" class="form-control" name="" placeholder="">
                                    </div>
                                </div>
                                <!-- 联系电话 -->
                                <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">联系电话</label>
                                    <div class="col-sm-4">
                                    <input type="text" class="form-control" name="" placeholder="">
                                    </div>
                                </div>
                                  <!-- 个人学历 -->
                                  <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">个人收入</label>
                                    <div class="col-sm-4">
                                      <select class="form-control" name="edu">
                                          <option value="1">初中</option>
                                          <option value="2">中专/高中</option>
                                          <option value="3">专科</option>
                                          <option value="4">本科</option>
                                          <option value="5">硕士研究生</option>
                                          <option value="6">博士研究生</option>
                                      </select>
                                    </div>
                                </div>
                                <!-- 个人收入 -->
                                <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">个人收入</label>
                                    <div class="col-sm-4">
                                        <select class="form-control" name="salaryLevel">
                                            <option value="1">1000元以下</option>
                                            <option value="2">1000元-1999元</option>
                                            <option value="3">2000元-2999元</option>
                                            <option value="4">3000-4999</option>
                                            <option value="5">5000-8999</option>
                                            <option value="6">10000以上</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- 联系地址 -->
                                <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">联系地址</label>
                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" name="" placeholder="">
                                    </div>
                                </div>
                                <!-- 保存数据 -->
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" class="btn btn-primary" data-loading-text="数据保存中。。。">保存数据</button>
                                    </div>
                                </div>
                              </form>
                        </div>
                    </div>
                <!-- 模板的内容结尾 -->
           </div>
        </div>     
       </div>
    

 
    <?php
      require_once("./footer.php");     
    ?>

  
      <!--  先 引入jquery -->
      <script src="./lib/jquery/jquery.min.js"></script>
      <!-- 引入bootstrap -->
      <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
      <!-- 引入自己的js -->
      <script src="./dist/js/p2p.min.js"></script>

  </body>
</html>