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
  <link rel="stylesheet" href="./dist/css/minCss/header.min.css">
  <link rel="stylesheet" href="./dist/css/minCss/footer.min.css">
  <link rel="stylesheet" href="./dist/css/minCss/borrow.min.css">

  <!--[if lt IE 9]>
  <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
  <body>
      <!-- 头部 -->
      <?php
        require_once('./header.php');      
      ?>
     <!-- 模板的内容开始 -->
	<div class="container el-borrow">
		<div class="row">
			<div class="el-borrow-item col-sm-4">
				<div class="el-borrow-item-title" style="background-color: #40d47e;">
					信用贷</div>
				<div class="el-borrow-item-content">
					<p>
						可借金额 <i>¥ 2,000.00</i>
					</p>
					<a href="#" class="text-primary">申请条件</a>
					<p class="help-block">仅限成都地区</p>
					<ul>
						<li>填写基本资料</li>
						<li>身份认证</li>
						<li>视频认证</li>
					</ul>
					<a href="borrow_apply.php?id=t1" class="el-borrow-apply">
						立刻申请
					</a>
				</div>
			</div>
			<div class="el-borrow-item col-sm-4">
				<div class="el-borrow-item-title">车易贷</div>
				<div class="el-borrow-item-content">
					<p>
						可借金额 <i>¥ 2,000.00</i>
					</p>
					<a href="#" class="text-primary">申请条件</a>
					<p class="help-block">仅限成都地区</p>
					<ul>
						<li>填写基本资料</li>
						<li>身份认证</li>
						<li>视频认证</li>
					</ul>
					<a href="borrow_apply.php?id=t2" class="el-borrow-apply">
						立刻申请
					</a>
				</div>
			</div>
			<div class="el-borrow-item col-sm-4">
				<div class="el-borrow-item-title" style="background-color: #2ca2ee;">
					房易贷</div>
				<div class="el-borrow-item-content">
					<p>
						可借金额 <i>¥ 12,000.00</i>
					</p>
					<a href="#" class="text-primary">申请条件</a>
					<p class="help-block">仅限成都地区</p>
					<ul>
						<li>填写基本资料</li>
						<li>身份认证</li>
						<li>视频认证</li>
					</ul>
					<a href="borrow_apply.php?id=t3" class="el-borrow-apply">
						立刻申请
					</a>
				</div>
			</div>
		</div>
	</div>
    <!-- 模板的内容结尾 -->    

    <!-- 尾部 -->
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