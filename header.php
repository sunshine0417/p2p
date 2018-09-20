 <!-- 顶部导航 -->
 <?php
   require_once('./topNav.php');
 ?>
  <!-- 主导航  -->
  <nav class="navbar navbar-default">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <a class="navbar-brand" href="#">
          <img src="./images/logo.png" alt="网站logo" />
        </a>
      </div>

      <!-- Collect th e nav links, forms, and other content for toggling -->
      <ul class="nav navbar-nav" id="mainMenu">
        <li class="active">
          <a href="./index.php?menuid=1">首页</a>
        </li>
        <li>
          <a href="./invest.php?menuid=2"> 我要投资</a>
        </li>
        <li>
          <a href="./borrow.php?menuid=3">我要借款</a>
        </li>
        <li>
          <a href="./personal.php?menuid=4">个人中心</a>
        </li>
        <li>
          <a href="#">新手指引 </a>
        </li>
        <li>
          <a href="#">关于我们</a>
        </li>
      </ul>
    </div>
  </nav>
  <script>
     //先获取网址,点击那个li 就添加高亮效果
     var reqUrl=location.href;

     //获取id 截取索引
     var menuid=reqUrl.split("=")[1]-1;

     //把菜单id对应所有的li添加active,兄弟元素移除样式
     $("#mainMenu li").eq(menuid).addClass("active").siblings("li").removeClass("active");
</script>
