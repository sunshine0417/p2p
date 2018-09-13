<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>P2P金融借贷平台首页</title>
  <!-- 引入bootstrap核心库 -->
  <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
  <!-- 引入编译和压缩后的css文件 -->
  <link rel="stylesheet" href="./dist/css/minCss/index.min.css">
  <!--[if lt IE 9]>
  <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body>
 <?php
   require_once('./header.php');      
 ?>
  <!-- 轮播图 -->
  <div id="carousel-example-generic" class="carousel slide elBanner" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="./images/banner01.jpg" alt="...">
        <div class="carousel-caption"></div>
      </div>
      <div class="item">
        <img src="./images/banner02.jpg" alt="...">
        <div class="carousel-caption"></div>
      </div>

    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- 三大特色 -->
  <section class="container" id="feature">
    <div class="row">
      <!-- 第一个标题 -->
      <div class="col-sm-4 col-xs-12">
        <h4>投资理财</h4>
        <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益</p>
      </div>
      <!-- 第二个标题 -->
      <div class="col-sm-4 col-xs-12">
        <h4>投资理财</h4>
        <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益</p>
      </div>
      <!-- 第四个标题 -->
      <div class="col-sm-4 col-xs-12">
        <h4>投资理财</h4>
        <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益</p>
      </div>
    </div>
  </section>

  <!-- 投资信息 -->
  <div class="panel panel-default container">
    <!-- Default panel contents -->
    <div class="panel-heading clearfix">
      <h3 class="pull-left">进行中借款</h3>
      <a class="pull-right" href="#">进入投资列表</a>
    </div>
    <!-- Table -->
    <table class="table">
      <thead>
        <tr>
          <th>借款人</th>
          <th class="hideTitle">借款标题</th>
          <th>年利率</th>
          <th>金额</th>
          <th class="hideTitle">还款方式</th>
          <th>进度</th>
          <th>操作</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>张三</td>
          <td class="hideTitle">给我2000 度过难关</td>
          <td>12.00%</td>
          <td class="text-info">2,000.00</td>
          <td class="hideTitle">按月分期还款</td>
          <td>78.00%</td>
          <td>
            <button class="btn btn-sm btn-danger">查看</button>
          </td>
        </tr>
        <tr>
          <td>李四</td>
          <td class="hideTitle">给我2000 度过难关</td>
          <td>12.00%</td>
          <td class="text-info">2,000.00</td>
          <td class="hideTitle">按月分期还款</td>
          <td>78.00%</td>
          <td>
            <button class="btn btn-sm btn-danger">查看</button>
          </td>
        </tr>
        <tr>
          <td>王五</td>
          <td class="hideTitle">给我2000 度过难关</td>
          <td>12.00%</td>
          <td class="text-info">2,000.00</td>
          <td class="hideTitle">按月分期还款</td>
          <td>78.00%</td>
          <td>
            <button class="btn btn-sm btn-success">查看</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- 新闻中心 -->
  <div class="container">
    <div class="row">
      <!-- 第一个项目 -->
      <div class="col-sm-6 col-xs-12">
        <div class="panel panel-default">
          <!-- Default panel contents -->
          <div class="panel-heading clearfix">
            <h3 class="pull-left">最新资讯</h3>
            <a class="pull-right" href="#">更多>></a>
          </div>
          <div class="panel-body">
            <ul>
              <li>
                <a href="#">央视力挺互联网金融
                  <span class="pull-right">发表日期：2015-03-23</span>
                </a>
              </li>
              <li>
                <a href="#">央视力挺互联网金融
                  <span class="pull-right">发表日期：2015-03-23</span>
                </a>
              </li>
              <li>
                <a href="#">央视力挺互联网金融
                  <span class="pull-right">发表日期：2015-03-23</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
       <!-- 第二个项目 -->
       <div class="col-sm-6 col-xs-12">
          <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading clearfix">
              <h3 class="pull-left">最新资讯</h3>
              <a class="pull-right" href="#">更多>></a>
            </div>
            <div class="panel-body">
              <ul>
                <li>
                  <a href="#">央视力挺互联网金融
                    <span class="pull-right">发表日期：2015-03-23</span>
                  </a>
                </li>
                <li>
                  <a href="#">央视力挺互联网金融
                    <span class="pull-right">发表日期：2015-03-23</span>
                  </a>
                </li>
                <li>
                  <a href="#">央视力挺互联网金融
                    <span class="pull-right">发表日期：2015-03-23</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
       </div>
         <!-- 第三个项目 -->
      <div class="col-sm-6 col-xs-12">
          <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading clearfix">
              <h3 class="pull-left">最新资讯</h3>
              <a class="pull-right" href="#">更多>></a>
            </div>
            <div class="panel-body">
              <ul>
                <li>
                  <a href="#">央视力挺互联网金融
                    <span class="pull-right">发表日期：2015-03-23</span>
                  </a>
                </li>
                <li>
                  <a href="#">央视力挺互联网金融
                    <span class="pull-right">发表日期：2015-03-23</span>
                  </a>
                </li>
                <li>
                  <a href="#">央视力挺互联网金融
                    <span class="pull-right">发表日期：2015-03-23</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
      </div>
         <!-- 第四个项目 -->
      <div class="col-sm-6 col-xs-12">
          <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading clearfix">
              <h3 class="pull-left">最新资讯</h3>
              <a class="pull-right" href="#">更多>></a>
            </div>
            <div class="panel-body">
              <ul>
                <li>
                  <a href="#">央视力挺互联网金融
                    <span class="pull-right">发表日期：2015-03-23</span>
                  </a>
                </li>
                <li>
                  <a href="#">央视力挺互联网金融
                    <span class="pull-right">发表日期：2015-03-23</span>
                  </a>
                </li>
                <li>
                  <a href="#">央视力挺互联网金融
                    <span class="pull-right">发表日期：2015-03-23</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
      </div>
    </div>
  </div> 
   <!--抽取页脚 -->
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